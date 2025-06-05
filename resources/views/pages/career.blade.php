@extends('layouts.app')
@section('content')
<section class="main-title-section-wrapper default" style="background:transparent;">
    <div class="container">
        <div class="main-title-section custom-title">
            <h1>Career</h1>
        </div>
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span class="fa default"></span>
            <span class="current">Career</span>
        </div>
        <p class="type-script text-lg-left position-relative mt-3">FIRST CHOICE FOR <span id="typed" class="text-primary"></span></p>
    </div>
</section>
<section id="primary" class="content-full-width pt-0">
    <div class="container">
        <div class="row pt-0">
            <div class="col-lg-8 col-md-8">
                <h2 class="text-uppercase mb-4">Job Vacancies</h2>
                {{-- <p>There are currently no jobs vacancies.</p> --}}
                
                <div class="job-container">
                    <div class="row">
                        <div class="col-lg-9">
                            <h3>Urgent Requirement of Sales Manager in Lucknow/Kanpur/Ahmedabad</h3>
                            <h5>Experience Required : <span class="text-danger">3+ years</span></h5>
                            <h5>Job Type : <span class="text-danger">Work from office</span> </h5>
                        </div>
                        <div class="col-lg-3">
                            <button type="button" onclick="showDetails(this)" class="btn btn-block btn-theme-blue">View Details</button>
                            <button type="button" data-toggle="modal" data-target="#apply-job" class="btn btn-block btn-theme">Apply Now</button>
                        </div>
                    </div>
                    <div class="more-details">
                        <div class="py-3">
                            <p><strong>Profile Description:</strong></p>
                            <p>It is a full-time on-site role located in Lucknow/Kanpur/Ahmedabad with expertise in CCTV & Security Surveillance. </p>
                            <p>He will be responsible for developing Distributor and Dealer Network to generate the Business and will work closely with all the partners & cross-functional teams to identify business opportunities and provide customized solutions to clients.</p>
                        </div>
                        <div class="py-3">
                            <p><strong>Qualifications:</strong></p>
                            <ul class="skills1">
                                <li>Strong sales experience in the security industry, preferably in CCTV and surveillance products and services.</li>
                                <li>Demonstrated expertise in building and maintaining customer relationships, and in developing sales strategies and plans to achieve target sales goals.</li>
                                <li>Excellent communication and presentation skills, and ability to communicate technical information in a clear and concise manner to technical and non-technical audiences.</li>
                                <li>Proven ability to work collaboratively with cross-functional teams and clients, and to identify and solve complex business problems.</li>
                            </ul>
                            
                        </div>
                        <div class="py-3">
                            <p><strong>Skills Required:</strong></p>
                            <ul class="skills">
                                <li>Excellent Communication Skills</li>
                                <li>Bachelor's Degree</li>
                                <li>Clients Interaction</li>
                                <li>Industry Experience</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--div class="job-container">
                    <div class="row">
                        <div class="col-lg-9">
                            <h3>Urgent requirement of project manager</h3>
                            <h5>Experience Required : <span class="text-danger">8+ years</span></h5>
                            <h5>Job Type : <span class="text-danger">Work from office</span> </h5>
                        </div>
                        <div class="col-lg-3">
                            <button type="button" onclick="showDetails(this)" class="btn btn-block btn-theme-blue">View Details</button>
                            <button type="button" data-toggle="modal" data-target="#apply-job" class="btn btn-block btn-theme">Apply Now</button>
                        </div>
                    </div>
                    <div class="more-details">
                        <div class="py-3">
                            <p><strong>Profile Description:</strong></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="py-3">
                            <p><strong>Skills Required:</strong></p>
                            <ul class="skills">
                                <li>Product Handling</li>
                                <li>Project Handling</li>
                                <li>Clients Interaction</li>
                                <li>Excellent Communication Skills</li>
                            </ul>
                        </div>
                    </div>
                </div!-->
            </div>
            <div class="col-lg-6 col-md-6" data-aos="fade-right">
                
            </div>
        </div>
    </div>
</section>

@livewire('carrer')

@endsection
@push('scriptBottom')
    <script>
        function showDetails(e){
            var detail = jQuery(e).parents('.job-container').find('.more-details');
            detail.slideToggle();
            jQuery(e).text(jQuery(e).text() == 'Hide Details' ? 'View Details' : 'Hide Details');
        }
    </script>
@endpush