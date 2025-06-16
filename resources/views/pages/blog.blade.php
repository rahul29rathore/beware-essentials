@extends('layouts.app')
@section('content')

@if($seotags)
    @section('title'){{ $seotags->meta_title ?? "beware.essential.com" }}@endsection
    @section('meta_description'){{ $seotags->meta_description ?? "meta title" }}@endsection
    @section('meta_keywords'){{ $seotags->meta_keywords ?? "meta title" }}@endsection
    @section('other'){!! $seotags->other !!}@endsection
@endif


<section class="main-title-section-wrapper default m-0 p-0" style="background:transparent;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title-section custom-title">
                    <h1>Blogs</h1>
                </div>
                <div class="breadcrumb">
                    <a href="/">Home</a>
                    <span class="fa default"></span>
                    <span class="current">Blogs</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="blog" class="content-full-width">
    <div class="container py-5">
        <div class="row">

            @foreach($blogs as $blog)

            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <a href="{{ route('blog-detail',$blog->slug) }}" class="blog-container">
                    <div class="img-box">
                        @if (isset($blog['image']))
                        <img class="img-fluid" src="{{ $blog['image']->temporaryUrl() }}" alt="edit">
                        @elseif (!empty($blog['product_image_url']))
                        <img class="img-fluid" src="{{ $blog['product_image_url'] }}" alt="edit">

                        @endif

                    </div>
                    <h4>{{$blog->title}}</h4>
                    <p class="post-date">Posted on {{ $blog->created_at->format('j M Y') }}</p>
                    <p class="m-0">{{$blog->short_description}}</p>
                </a>
            </div>

            @endforeach
            <!--  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <a href="{{ route('page', 'blog-detail') }}" class="blog-container">
                    <div class="img-box">
                        <img src="{{asset('assets/images/grid-2.jpg')}}" class="img-fluid">
                    </div>
                    <h4>Fire Protection Measures are Essential in Warehouses and Storage</h4>
                    <p class="post-date">Posted on 24, Jan. 2024</p>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <a href="{{ route('page', 'blog-detail') }}" class="blog-container">
                    <div class="img-box">
                        <img src="{{asset('assets/images/grid-3.jpg')}}" class="img-fluid">
                    </div>
                    <h4>Fire Protection Measures are Essential in Warehouses and Storage</h4>
                    <p class="post-date">Posted on 24, Jan. 2024</p>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <a href="{{ route('page', 'blog-detail') }}" class="blog-container">
                    <div class="img-box">
                        <img src="{{asset('assets/images/grid-1.jpg')}}" class="img-fluid">
                    </div>
                    <h4>Fire Protection Measures are Essential in Warehouses and Storage</h4>
                    <p class="post-date">Posted on 24, Jan. 2024</p>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <a href="{{ route('page', 'blog-detail') }}" class="blog-container">
                    <div class="img-box">
                        <img src="{{asset('assets/images/grid-1.jpg')}}" class="img-fluid">
                    </div>
                    <h4>Fire Protection Measures are Essential in Warehouses and Storage</h4>
                    <p class="post-date">Posted on 24, Jan. 2024</p>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <a href="{{ route('page', 'blog-detail') }}" class="blog-container">
                    <div class="img-box">
                        <img src="{{asset('assets/images/grid-2.jpg')}}" class="img-fluid">
                    </div>
                    <h4>Fire Protection Measures are Essential in Warehouses and Storage</h4>
                    <p class="post-date">Posted on 24, Jan. 2024</p>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <a href="{{ route('page', 'blog-detail') }}" class="blog-container">
                    <div class="img-box">
                        <img src="{{asset('assets/images/grid-3.jpg')}}" class="img-fluid">
                    </div>
                    <h4>Fire Protection Measures are Essential in Warehouses and Storage</h4>
                    <p class="post-date">Posted on 24, Jan. 2024</p>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <a href="{{ route('page', 'blog-detail') }}" class="blog-container">
                    <div class="img-box">
                        <img src="{{asset('assets/images/grid-1.jpg')}}" class="img-fluid">
                    </div>
                    <h4>Fire Protection Measures are Essential in Warehouses and Storage</h4>
                    <p class="post-date">Posted on 24, Jan. 2024</p>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </a>
            </div> -->
        </div>
        <!-- <div class="row mt-5 pt-5">
            <div class="col-lg-12 text-center">
                <a href="#" class="position-relative d-block">
                    <h5>View More</h5>
                    <i class="fa fa-arrow-circle-down fa-lg arrow-slidedown"></i>
                </a>
            </div>
        </div> -->
    </div>
</section>
@endsection