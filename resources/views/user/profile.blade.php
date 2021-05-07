@extends('layouts.user')

@section('content')
    <!--End Header -->
    <main id="main-container">
        <div class="bg-gd-emerald">
            <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
                <!-- Header -->
                <div class="py-30 px-5 text-center">

                    <h1 class="h2 font-w700  mb-10">Update Profile</h1>
                </div>
                <!-- END Header -->

                <!-- Sign Up Form -->
                <div class="row justify-content-center px-5">
                    <div class="col-sm-8 col-md-6 col-xl-4">
                        <!-- jQuery Validation functionality is initialized with .js-validation-signup class in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data"> 
                                @csrf

                            <input type="hidden" name="id" value="{{Auth::user()->id}}">

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-text" name="name" value="{{Auth::user()->name}}">
                                        <label for="signup-username">Name</label>
                                    </div>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                                        <label for="signup-email">Password</label>
                                        @error('password')
                                          <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <label for="signup-password-confirm">Password Confirmation</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                           
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-file">
                                        
                                        <input type="file" class="custom-file-input"  name="image" onchange="readURL(this);" accept="image/*">            
                                        <label class="custom-file-label" for="thumbnail">Choose file</label>
                                    </div>
                                    <div class="img-thumbnail  text-center"  id="imagepreview"> 
                                        <img src="{{asset(Auth::user()->image)}}" style="height: 80px; width: 80px;"  class="img-fluid" id="one">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row gutters-tiny">
                                <div class="col-12 mb-10">
                                    <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-success">
                                        <i class="si si-pencil mr-10"></i> Update
                                    </button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Sign Up Form -->
            </div>
        </div>
        <!-- END Page Content -->
        <!-- END Page Content -->

    </main>

@endsection



<script type="text/javascript">
    function readURL(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#one')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>