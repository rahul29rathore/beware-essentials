@extends('layouts.app')
@section('content')
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
            <!-- Test -->
            @foreach($blog as $blogger)
            @section('title'){{ $blogger->meta_title ?? "beware.essential.com"}}@endsection
            @section('meta_description'){{ $blogger->meta_description ?? "meta title"}}@endsection
            @section('meta_keywords'){{ $blogger->meta_keywords ?? "meta title"}}@endsection
            @section('other'){!! $blogger->other !!}@endsection
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 m-auto">

                @if (isset($blogger['image']))
                <img class="w-100 br-20 mb-3" src="{{ $blogger['image']->temporaryUrl() }}" alt="edit">
                @elseif (!empty($blogger['product_image_url']))
                <img class="w-100 br-20 mb-3" src="{{ $blogger['product_image_url'] }}" alt="edit">

                @endif

                <h4>{{$blogger['title']}}</h4>
                <p class="post-date text-primary mb-4">Posted on {{ $blogger['created_at']->format('jS M Y') }}</p>
                <p>{!! $blogger['description'] !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@push('scriptBottom')
<script type="text/javascript">
    jQuery('#Demo').socialSharingPlugin({
        urlShare: window.location.href,
        description: jQuery('meta[name=description]').attr('content'),
        title: jQuery('title').text()
    })
</script>
@endpush