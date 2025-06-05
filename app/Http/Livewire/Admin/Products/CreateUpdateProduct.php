<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Livewire\WithFileUploads;
use App\Models\MediaCustom;
use App\Models\ProductType;

class CreateUpdateProduct extends Component
{
	use WithFileUploads;

	public $product;
	public $selected_id;
	public $category_id;
	public $categories;
	public $subcatagory_id;
	public $subcategories;
	//public $product_types;
	public $attribute_name, $attribute_value;

	protected $rules = [
		'product.name' => 'required|max:255',
		'product.slug' => 'required|max:255',
		'product.category_id' => 'required',
		'product.subcatagory_id' => 'required',
		// 'product.product_type_id'    => 'required',
		'product.short_description' => 'required|max:255',
		// 'product.price'   => 'required',
		//  'product.qty'     => 'required',
		'product.detail' => 'required',
		'product.tags' => 'required',
		'product.meta_title' => 'nullable|max:255',
		'product.meta_description' => 'nullable|max:1000',
		'product.meta_keywords' => 'nullable|max:255',
		'product.other' => 'nullable|string',
	];

	// protected $listeners = [
	//    'productTypeIdToParent'
	// ];

	public function productTypeIdToParent($product_type_id)
	{
		$this->product['product_type_id'] = $product_type_id;
	}

	public function mount()
	{
		$this->product = ['product_specifications' => []];

		if ($this->selected_id) {
			$this->product = $this->mapFields();
		}

		$this->categories = Category::where('parent_id', null)->get()->toArray();
		// $this->categories = Category::notParentCategegories()
		// 							->whereDoesntHave('categories')
		// 							->with('parent')
		// 							->orderBy('name', 'ASC')
		// 							->get()
		// 							->groupBy(function($category) {
		// 								return $category->parent->name ?? 'default'; 
		// 							})->toArray();
		//dd($this->categories);



		$this->subcategories = [];

		if ($this->selected_id) {


			$this->subcategories = Category::where('parent_id', $this->product['category_id'])->get();
		}
		//$this->product_types  = ProductType::orderBy('name', 'asc')->get();

	}

	public function updatedProductCategoryid($category_id)
	{
		//dd($category_id);

		$this->subcategories = Category::where('parent_id', $category_id)->get();
	}

	public function updated($property, $value)
	{
		$this->validateOnly($property);
	}

	public function updatedProductBrochure()
	{
		$this->validate([
			'product.brochure' => 'nullable|mimes:pdf|max:6000', // 6MB Max
		]);
	}

	public function updatedProductName($value)
	{
		$this->product['slug'] = Str::slug($value, '-');
	}

	protected $validationAttributes = [
		'product.name' => 'product name',
		'product.slug' => 'product slug',
		'product.category_id' => 'product category',
		'product.subcatagory_id' => 'product sub category',
		//'product.product_type_id'   => 'product type',
		'product.short_description' => 'product short description',
		//'product.price'   => 'product price',
		//  'product.qty'     => 'product qty',
		'product.detail' => 'product detail',
		'product.tags' => 'product tags',
		'product.image' => 'product image'
	];


	public function mapFields()
	{
		$product = Product::find($this->selected_id);

		return [
			'name' => $product->name ?? '',
			'slug' => $product->slug ?? '',
			'category_id' => $product->category_id ?? '',
			'subcatagory_id' => $product->subcatagory_id ?? '',
			//'product_type_id' => $product->product_type_id ?? '',
			'short_description' => $product->short_description ?? '',
			'price' => $product->price ?? '',
			'qty' => $product->qty ?? '',
			'featured' => $product->featured,
			'new_arrivals' => $product->new_arrivals,
			'link' => $product->link,
			'detail' => $product->detail ?? '',
			'tags' => $product->tags ?? '',
			'meta_title' => $product->meta_title ?? '',
			'meta_description' => $product->meta_description ?? '',
			'meta_keywords' => $product->meta_keywords ?? '',
			'other' => $product->other ?? '',
			'product_image_url' => $product->product_image_url ?? '',
			'product_images' => $product->images->toArray(),
			'product_brochure' => $product->media_brochure,
			'product_specifications' => $product->product_specifications ?? [],
		];
	}

	public function render()
	{
		return view('livewire.admin.products.create');
	}

	public function create()
	{
		$this->validate();
		$this->validate([
			'product.image' => 'required|image|mimes:jpeg,png,jpg|dimensions:width=800,height=800|max:200',
			'product.brochure' => 'nullable|mimes:pdf|max:8000',
		]);



		$product = new Product;

		$product->fill(Arr::only($this->product, [
			'name',
			'category_id',
			'subcatagory_id',
			'product_type_id',
			'slug',
			'short_description',
			'price',
			'qty',
			'featured',
			'new_arrivals',
			'link',
			'detail',
			'tags',
			'product_specifications',
			'meta_title',
			'meta_description',
			'meta_keywords',
			'other',
		]));

		//dd($this->product);

		if ($product->save()) {

			//Upload Image
			$image_name = $this->product['image']->getClientOriginalName();
			$filename = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $image_name);
			$folder = 'products';
			$path = $folder . '/' . $filename;

			//dd($path);

			try {

				$media = $product->addMedia($this->product['image']->getRealPath())
					->usingFileName($filename)
					->toMediaCollection($folder, env('FILESYSTEM_DRIVER', 'local'));

				$media->name = $image_name;
				$media->save();

			} catch (\Exception $e) {
				$this->addError('product.image', 'Unable to upload image. Please try again.');
				return true;
			}

			//Upload brochure 
			if (!empty($this->product['brochure'])) {

				$brochure_name = $this->product['brochure']->getClientOriginalName();
				$filename = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $brochure_name);
				$folder = 'product-brochures';
				$path = $folder . '/' . $filename;

				try {
					$media = $product->addMedia($this->product['brochure']->getRealPath())
						->usingFileName($filename)
						->toMediaCollection($folder, env('FILESYSTEM_DRIVER', 'local'));


					$media->name = $brochure_name;
					$media->save();

				} catch (\Exception $e) {
					//$this->addError('product.brochure', $e->getMessage().' Unable to upload image. Please try again.');
					//return true;
				}
			}

			//Upload Gallery Images 
			if (!empty($this->product['images'])) {
				foreach ($this->product['images'] as $k => $thumb_image) {
					$thumb_image_name = $thumb_image->getClientOriginalName();
					$filename = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $thumb_image_name);
					$folder = 'product-images';

					try {
						$media = $product->addMedia($thumb_image->getRealPath())
							->usingFileName($filename)
							->toMediaCollection($folder, env('FILESYSTEM_DRIVER', 'local'));


						$media->name = $thumb_image_name;
						$media->save();

					} catch (\Exception $e) {
						//$this->addError('product.images.'.$key, $e->getMessage().' Unable to upload image. Please try again.');
						//return true;
					}
				}
			}

			return redirect(route('admin.products.index'));
		}

		return true;

	}

	public function save()
	{
		$this->validate();

		$product = Product::find($this->selected_id);
		$product->fill(Arr::only($this->product, [
			'name',
			'category_id',
			'subcatagory_id',
			'product_type_id',
			'slug',
			'short_description',
			'price',
			'qty',
			'featured',
			'new_arrivals',
			'link',
			'detail',
			'tags',
			'product_specifications',
			'meta_title',
			'meta_description',
			'meta_keywords',
			'other',
		]));


		// 	   		echo "sdf";
// die;

		if ($product->save()) {

			if (!empty($this->product['image'])) {
				$this->validate([
					'product.image' => 'required|image|mimes:jpeg,png,jpg|dimensions:width=800,height=800|max:200',
				]);

				//Upload Image 
				$image_name = $this->product['image']->getClientOriginalName();
				$filename = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $this->product['image']->getClientOriginalName());
				$folder = 'products';

				try {

					$media = MediaCustom::find(optional($product->getMedia('products')->first())->id);
					if ($media) {

						$folder .= '/' . $media->id;

						$this->product['image']->storePubliclyAs($folder, $filename, 'local');

						$media->file_name = $filename;
						$media->name = $image_name;
						$media->save();

					} else {

						$media = $product->addMedia($this->product['image']->getRealPath())
							->usingFileName($filename)
							->toMediaCollection($folder, env('FILESYSTEM_DRIVER', 'local'));

						$media->name = $image_name;
						$media->save();
					}

				} catch (\Exception $e) {
					//$this->addError('product.image', $e->getMessage().'. Unable to upload image. Please try again.');
					//return true;
				}
			}

			if (!empty($this->product['brochure'])) {

				$brochure_name = $this->product['brochure']->getClientOriginalName();
				$filename = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $brochure_name);
				$folder = 'product-brochures';
				$path = $folder . '/' . $filename;

				try {

					$media = MediaCustom::find(optional($product->getMedia('product-brochures')->first())->id);
					if ($media) {

						$folder .= '/' . $media->id;
						$this->product['brochure']->storePubliclyAs($folder, $filename, 'local');

						$media->file_name = $filename;
						$media->name = $brochure_name;
						$media->save();

					} else {

						$media = $product->addMedia($this->product['brochure']->getRealPath())
							->usingFileName($filename)
							->toMediaCollection($folder, env('FILESYSTEM_DRIVER', 'local'));

						$media->name = $brochure_name;
						$media->save();
					}

				} catch (\Exception $e) {
					//$this->addError('product.brochure', $e->getMessage().' Unable to upload image. Please try again.');
					//return true;
				}
			}

			//Upload Gallery Images 
			if (!empty($this->product['images'])) {

				$uploaded_images = $product->images->toArray();
				foreach ($this->product['images'] as $k => $thumb_image) {
					$thumb_image_name = $thumb_image->getClientOriginalName();
					$filename = preg_replace("/[^a-z0-9\_\-\.]/i", '', time() . $thumb_image_name);
					$folder = 'product-images';

					$media = null;
					if (isset($uploaded_images[$k])) {
						$media = MediaCustom::find($uploaded_images[$k]['id']);
					}

					if ($media) {

						$folder .= '/' . $media->id;
						$thumb_image->storePubliclyAs($folder, $filename, 'local');

						$media->file_name = $filename;
						$media->name = $thumb_image_name;
						$media->save();

					} else {

						$media = $product->addMedia($thumb_image->getRealPath())
							->usingFileName($filename)
							->toMediaCollection($folder, env('FILESYSTEM_DRIVER', 'local'));

						$media->name = $thumb_image_name;
						$media->save();
					}
				}

			}

			return redirect(route('admin.products.index'));
		}

		return true;
	}

	public function addSpecification()
	{
		if (!empty($this->attribute_name) && !empty($this->attribute_value)) {
			array_push($this->product['product_specifications'], ['attribute_name' => $this->attribute_name, 'attribute_value' => $this->attribute_value]);

			$this->attribute_name = '';
			$this->attribute_value = '';
		}
	}

	public function removeSpecification($idx)
	{

		$product_specifications = $this->product['product_specifications'];
		unset($product_specifications[$idx]);

		$this->product['product_specifications'] = array_values($product_specifications);

	}
}