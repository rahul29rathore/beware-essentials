@extends('layouts.app')
@section('stylesheet')
<style>
    .thanks-msg {
        font-size: 60px;
        font-weight: 700;
        color: #15438d;
    }
</style>
@endsection
@section('content')
<section class="section-gap thanks-msg-conatiner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="thanks-msg mb-4">Thank You!</h1>
                <p style="color:#000; font-size:16px;" class="m-0">For your requirement , Our representative will contact you soon. </p>
                <p style="color:#000; font-size:16px;" class="mb-4">Our Support Team Available 24*7  </p>
                <p style="color: #006190; font-weight:bold; font-size:16px;">Email : <a href = "mailto:sales@beware-essentials.com" style="color:#ed1c24;">sales@beware-essentials.com</a></p>
            </div>
        </div>
    </div>
</section>
@endsection