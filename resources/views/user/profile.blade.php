
@extends('layouts.user')

@section('content')
       <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <span id="result"></span>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6 align-self-center" style="margin-left: 25%">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Profile</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="agentform" enctype="multipart/form-data">
                            @csrf
                                 @if ($errors->any())
                                       <div class="alert alert-danger">
                                           <ul>
                                               @foreach ($errors->all() as $error)
                                                   <li>{{ $error }}</li>
                                               @endforeach
                                           </ul>
                                       </div>
                                   @endif
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}"
                                        required>
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone}}"
                                        required placeholder="Enter Phone..">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name="password" class="form-control"
                                         required autocomplete="new-password" placeholder="New Password..">
                                </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                         required autocomplete="new-password" placeholder="Confirm New Password..">
                                </div>
                                 <div class="form-group">
                                <label for="exampleInputPassword1">About</label>
                                <textarea class="form-control" name="about" id="" cols="10" rows="3" placeholder="About.." >{{Auth::user()->about}}</textarea>
                            </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8" style="margin-left: 15%">
                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input" name="image"
                                            onchange="readURL(this);" accept="image/*">
                                        <label class="custom-file-label" for="thumbnail">Choose file</label>
                                    </div>
                                    <div class="img-thumbnail  text-center" id="imagepreview">
                                        <img src="{{asset(Auth::user()->image)}}" style="height: 80px; width: 80px;"
                                            class="img-fluid" id="one">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" id="add" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('#agentform').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                
                url: '{{route("user.profile.update")}}',
                method: 'post',
                processData: false,
                contentType: false,
                data: formData,
                beforeSend: function () {
                    $('#add').attr('disabled', 'disabled');
                },
                success: function (data) {
                    if (data.success) {
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
                    }

                }
            });
        });


    });

</script>
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
{{-- @extends('layouts.user')
@section('content')
<h1>this is </h1> --}}
    {{-- <!--End Header -->
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

    </main> --}}

{{-- @endsection --}}



