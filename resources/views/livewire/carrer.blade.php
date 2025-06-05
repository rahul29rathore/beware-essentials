<div wire:ignore.self class="modal fade" id="apply-job" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="bg-light p-lg-5 p-3 br-20">
                <h4 class="mb-4 down-line">Make Your Career With Us</h4>
                <span class="d-table mb-4">Kindly submit the form with your updated resume.</span>
                <form  wire:submit.prevent="saveJobseeker"  autocomplete="off" class="contact_message" action="" method="post" novalidate="novalidate">
                    <div class="row p-0">
                        <div class="col-md-12">
                            <div class="error-handel">

                            @if(session()->has('success'))
            <div class=" alert-success" role="alert">
                <!-- <h5 class="mt-4 mb-0 text-success">Your message has been sent successfully!</h5> -->
                {{ session()->get('success') }}
            </div>
        @endif   
                                {{-- <div class="dt-sc-success-box ">Applied for Job Successfully!</div>
                                <div class="dt-sc-error-box ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div> --}}
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <input class="form-control" wire:model.lazy="name"  placeholder="Name" type="text">
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <input class="form-control" wire:model.lazy="phone" name="phone" placeholder="Mobile" type="text">
                            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <input class="form-control" wire:model.lazy="email" placeholder="Email Address" type="text">
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-md-6 col-sm-12 customer-type">
                            <input type="file" wire:model.lazy="resume" name="resume"  class="form-control btn-file">
                            @error('resume')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <textarea class="form-control" wire:model.lazy="message" rows="5"placeholder="Message"></textarea>
                            @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-md-12 col-sm-6 d-flex justify-content-center m-0">
                            <button type="submit" class="dt-sc-button  medium bordered" wire:target='store'
                                wire:loading.class="btn-disable-processing" wire:loading.attr="disabled">
                                <i class="mdi mdi-content-save"></i>
                                Apply Now &nbsp;
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:target='store' wire:loading></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>