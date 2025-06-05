<div>
	<section class="main-title-section-wrapper default" style="background:transparent;">
		<div class="container">
			<div class="main-title-section custom-title">
				<h1>Products</h1>
			</div>
			<nav aria-label="breadcrumb" class="theme-breadcrumb product-breadcrub">
				<ol class="breadcrumb">
				    <li class="breadcrumb-item" aria-current="page">
						<a href="/" class="">Home</a>
					</li>
					<li class="breadcrumb-item" aria-current="page">
						<a href="{{ route('products') }}" class="">Products</a>
					</li>
					{!! $product->category->getBreadcrub() !!}
					<li class="breadcrumb-item current" aria-current="page">
						<span href="javascript:void(0)" class="current">{{ $product->name }}</span>
					</li>
				</ol>
			</nav>
			<p class="type-script text-lg-left position-relative mt-3">FIRST CHOICE FOR <span id="typed" class="text-primary"></span></p>
		</div>
	</section>
    <section id="primary" class="content-full-width p-0 mt-5">
        <div class="container-fluid">
            <!-- <p class="woocommerce-result-count"> Showing 1–12 of 16 results</p> -->
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <div class="row p-0 offset-lg-1">
                        <div class="col-lg-1 p-0 d-lg-flex flex-lg-column text-center" data-aos="fade-left" wire:ignore.self  data-aos-delay="200">
							<img src="{{ $product->product_image_url }}" class="border main-p-thumb mb-2 mx-1" alt="{{ $product->name }}">
                            @foreach($product->images as $thubnail)
							<img src="{{ $thubnail->getUrl() }}" class="border main-p-thumb mb-2 mx-1" alt="{{ $product->name }}">
                            @endforeach
                        </div>
                        <div class="col-lg-5" data-aos="fade-right"  wire:ignore.self  data-aos-delay="200">
                            <div class="easyzoom easyzoom--overlay w-100 border">
                                <a href="{{ $product->product_image_url }}">
                                    <img src="{{ $product->product_image_url }}" class="main-p-img w-100 h-100" alt="{{ $product->name }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 p-0">
                            <div class="summary entry-summary">
                                <h4><span class="text-primary text-dark font-weight-bolder">{{ $product->name }}</span> {{ $product->product_type->name  ?? '' }}</h4>
                                <p>{{ $product->short_description }}</p>
                                <span class="stock in-stock">{{ $product->qty }} In Stock</span>
								<span class="price">
									<!--del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹ </span>100.00</span></del--> 
									<ins class="d-none"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹ </span>{{ number_format($product->price, 2, '.', ',' ) }}</span></ins>
								</span>
                                <div class="privacy-policy pt-4 pl-3">
                                    {!! $product->detail !!}
                                </div>
                                <a href=" {!! @$product->link !!}" target="_self" title="" class="my-3 dt-sc-button medium filled m-0"> Click Here To Buy </a>
								<div class="d-flex align-items-center">
                                    @if($product->brochure_url)
                                    <a href="{{ $product->brochure_url }}" target="_blank" title="" class="dt-sc-button medium bordered d-inline-flex align-items-center py-1 mr-2 w-50"><i class="fa fa-download fa-2x mr-2"></i> <span><small>Download</small><br> Datasheet</a>
                                    @endif
                                    <a href="/downloads/beware-essentials-software.zip" download target="_blank" title="" class="dt-sc-button w-50 medium bordered d-inline-flex align-items-center py-1"><i class="fa fa-windows fa-2x mr-2"></i> <span><small>Download for</small><br> Windows</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-0 pt-5 offset-lg-1">
                        <div class="col-lg-12"  wire:ignore.self>
                            <ul class="nav nav-tabs wc-tabs" id="myTab" role="tablist">
                                {{-- <li class="nav-item p-0">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Key Features</a>
                                </li> --}}
                                <li class="nav-item p-0">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Specifications</a>
                                </li>
                            </ul>
                            <div class="tab-content bg-white" id="myTabContent">
                                {{-- <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   
									
                                </div> --}}
                                <div class="tab-pane pt-4 fade show active woocommerce-Tabs-panel woocommerce-Tabs-panel--description" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h4>Product Specifications</h4>
                                    <table>
									    @foreach($product->product_specifications ?? [] as $product_specification)
                                        <tr>
                                            <th class="bg-transparent text-dark text-left">{{ $product_specification['attribute_name'] ?? '' }}</th>
											<th class="bg-transparent text-dark text-left">:</th>
											<td class="text-left">{{ $product_specification['attribute_value'] ?? '' }}</td>
                                        </tr>
										@endforeach
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12" wire:ignore.self data-aos="fade-up">
                    <div class="mb-4 form-section">
                        <h4 class="mb-4 down-line">Request a Quote</h4>
                        <span class="d-table mb-4">Please provide the following information and we will get back to you soon as possible with a quote.</span>
						<form wire:submit.prevent="storeLead"  autocomplete="off" action="" method="post" novalidate="novalidate">
                            <div class="row p-0">
                                <div class="mb-3 col-md-6 col-sm-6">
                                    <input class="form-control" wire:model.lazy="lead.name" placeholder="Name" type="text">
                                    @error('lead.name')<span class="text-danger">{{ $message }}</span>@enderror
								</div>
                                <div class="mb-3 col-md-6 col-sm-6">
                                    <input class="form-control" wire:model.lazy="lead.contact_no" placeholder="Mobile No." type="number" maxlength="16">
									@error('lead.contact_no')<span class="text-danger">{{ $message }}</span>@enderror
								</div>
                                <div class="mb-3 col-md-12 col-sm-12">
                                    <input class="form-control" wire:model.lazy="lead.email" placeholder="Email Address" type="text">
									@error('lead.email')<span class="text-danger">{{ $message }}</span>@enderror
								</div>
                                <div class="mb-3 col-md-12 col-sm-12">
                                    <textarea class="form-control" wire:model.lazy="lead.message"  rows="5" placeholder="Message"></textarea>
									@error('lead.message')<span class="text-danger">{{ $message }}</span>@enderror
								</div>
                                <div class="col-md-12 col-sm-12 d-flex justify-content-center">
								    <button type="submit" class="dt-sc-button medium bordered" wire:target='storeLead'
										wire:loading.class="btn-disable-processing" wire:loading.attr="disabled">
										<i class="mdi mdi-content-save"></i>
										Send Message &nbsp;
										<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:target='storeLead' wire:loading></span>
									</button>
                                </div>
								<div class="col-md-12 col-sm-12 text-center">
									@if (session()->has('message'))
									<div class="mt-3">
										<div class="alert alert-success alert-dismissible fade show">
											{{ session('message') }}
											<button type="button" style="top:-10px" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									</div>
									@endif
								</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@push('scriptBottom')
    <script src="{{asset('assets/js/easyzoom.js')}}"></script>
    <script>
        // Instantiate EasyZoom plugin
		jQuery('.easyzoom').easyZoom();
    </script>
@endpush