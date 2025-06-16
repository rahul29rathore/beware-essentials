<div>
     <div class="container">
        <div class="row justify-content-center">
            @foreach($display_categories as $category)
                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <a href="{{ route('products', $category->slug) }}" class="card__img" data-aos="fade-left">
                            <img src="{{ $category->category_image_url }}" alt="{{$category->name}}">
                            <div class="card__overlay">
                                <h2>{{$category->name}}</h2>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
</div>
