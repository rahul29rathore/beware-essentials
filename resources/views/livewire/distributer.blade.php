<div class="lead-popup-container" wire:ignore.self>
    <div class="leadform-container">
        <div class="leadform-header">
            <img src="{{asset('assets/images/leadform-logo.png')}}" alt="beware-logo">
            <h3 class="m-0">Eyes in Every Corner</h3>
            <p>Clear Vision With Full Security</p>
            <span class="close-leadform"><i class="zmdi zmdi-close"></i></span>
        </div>
        <div class="bg-white">
            <img src="{{asset('assets/images/cams-2.png')}}" alt="beware-cameras" class="beware-cameras">
        </div>
        <div class="leadform text-left">
            <div class="px-3">
                <div class="row">
                     @if(session()->has('success'))
            <div class=" alert-success" role="alert">
                <!-- <h5 class="mt-4 mb-0 text-success">Your message has been sent successfully!</h5> -->
                {{ session()->get('success') }}
            </div>
        @endif                
        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
                    {{-- <div class="col-lg-12 text-center pt-4">
                        <img src="{{asset('assets/images/sent-message.png')}}" alt="beware-cameras">
                        <h5 class="mt-4 mb-0 text-success">Your message has been sent successfully!</h5>
                        <div class="col-lg-12 d-flex py-3 justify-content-center">
                            <button type="submit" class="btn btn-theme btn-close-leadform">Close</button>
                        </div>
                    </div> --}}

                <form style="width: 100%;" wire:submit.prevent="saveStudent">

                    @csrf

                    <div class="col-lg-12 mt-2">
                        <div class="form-group" data-error="Name Required">
                            <label>Names</label>
                            <input type="text" wire:model="name" placeholder="Enter Name" class="form-control">
                            @error('name') <span style="font-size: 10px;" class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group" data-error="Email ID is already been taken">
                            <label>Email</label>
                            <input type="text" wire:model="email" placeholder="Enter Email" class="form-control">
                            @error('email') <span style="font-size: 10px;" class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group m-0" data-error="Phone number must be of 10 digit">
                            <label>Phone</label>
                            <input type="text"  wire:model="phone" placeholder="Enter Phone" class="form-control">
                            @error('phone') <span style="font-size: 10px;" class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group" data-error="Email ID is already been taken">
                            <label>Company Name</label>
                            <input type="text"  wire:model="company" placeholder="Enter Company Name" class="form-control">
                            @error('company') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group m-0" data-error="Phone number must be of 10 digit">
                            <label>Location</label>
                            <input type="text"  wire:model="location" placeholder="Enter Location" class="form-control">
                            @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group m-0" data-error="Phone number must be of 10 digit">
                            <label>GST (optional)</label>
                            <input type="text"  wire:model="Gst" placeholder="Enter GSt No. (if any)" class="form-control">
                            @error('Gst') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                   <!--  <div class="col-lg-12 mt-2">
                        <div class="form-group h-100" data-error="Message Required">
                            <label>Message</label>
                            <textarea  wire:model="message" placeholder="Type message..." class="form-control pt-3"></textarea>
                            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div> -->
                    <div class="col-lg-12 d-flex pb-3 justify-content-center">
                        <button type="submit" class="btn btn-theme">Send Message</button>
                    </div>

                </form> 
                </div>
            </div>
        </div>
    </div>
</div>