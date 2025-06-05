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

            @foreach($blog as $blog)
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 m-auto">

                  @if (isset($blog['image']))
                            <img class="w-100 br-20 mb-3" src="{{ $blog['image']->temporaryUrl() }}" alt="edit">
                            @elseif (!empty($blog['product_image_url'])) 
                            <img class="w-100 br-20 mb-3" src="{{ $blog['product_image_url'] }}" alt="edit">
                            
                            @endif
                <!-- <img src="{{asset('assets/images/grid-1.jpg')}}" class="w-100 br-20 mb-3"> -->
                <!-- <div id="Demo" class="mb-4 text-right">
                    <a class="btn btn-light" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Fblog-detail" target="_blank" title="Share on facebook">
                        <i class="fa fa-facebook fa-2x" style="color: rgb(66, 103, 178);"></i>
                    </a>
                    <a class="btn btn-light" href="https://twitter.com/share?url=http%3A%2F%2F127.0.0.1%3A8000%2Fblog-detail&amp;text=CCTV%20Security%20Products%20%7C%20Beware&amp;via=&amp;hashtags=" target="_blank" title="Share on twitter">
                       <img src="{{asset('assets/images/icons/x-logo.png')}}" class="img-fluid">
                    </a>
                    <a class="btn btn-light" href="https://www.linkedin.com/shareArticle?url=http%3A%2F%2F127.0.0.1%3A8000%2Fblog-detail&amp;title=CCTV%20Security%20Products%20%7C%20Beware" target="_blank" title="Share on linkedin">
                        <i class="fa fa-linkedin fa-2x" style="color: rgb(0, 114, 177);"></i>
                    </a>
                    <a class="btn btn-light" href="https://wa.me/?text=CCTV%20Security%20Products%20%7C%20Beware+http%3A%2F%2F127.0.0.1%3A8000%2Fblog-detail" target="_blank" title="Share on whatsapp">
                        <i class="fa fa-instagram fa-2x" style="color: rgb(230, 0, 35);"></i>
                    </a>
                </div> -->
                <h4>{{$blog['title']}}</h4>
                <p class="post-date text-primary mb-4">Posted on {{ $blog['created_at']->format('jS M Y') }}</p>
                <!--p>{{strip_tags($blog['description'])}}</p!-->
                <p>{!! $blog['description'] !!}</p>
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