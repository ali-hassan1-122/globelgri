@extends('layouts.admin.layouts')
@section('content')
@include('layouts.admin.includes.sidebar')
<!-- Header -->
@include('layouts.admin.includes.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Agent</li>
            </ol>
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
                <h3 class="card-title">Edit Agent</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="agentform">
                  @csrf
                  <input type="hidden" name="id" value="{{$user->id}}">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Choose a safe one..">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="confirm-password" class="form-control" placeholder="..and confirm it!">
                  </div>
                  <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="agent_role" style="width: 100%;" autocomplete="off">
                    <option selected="selected">{{$user->role}}</option>
                    @foreach ($roles as $row)
                        <option>{{$row->agent_role}}</option>
                    @endforeach
                  </select>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit"  id="update" class="btn btn-primary">Update</button>
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
<!--End Header -->
    {{-- <!-- Main Container -->
    <main id="main-container">
      <!-- Page Content -->
      <div class="content">
          <!-- Lock Forms -->
          <!-- Mega Form -->
          <div class="block">
            <div class="block-header  block-header-default ">
                  <h3 class="block-title">Edit User</h3>
              </div>
              <div class="block-content">
                  <div class="row justify-content-center py-20">
                      <div class="col-xl-6">
                          <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                          <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->       
                          <form id="agentform" class="js-validation-material">
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">
                              <div class="form-group">
                                  <div class="form-material">
                                      <input type="text" class="form-control" id="val-username2" name="name" value="{{$user->name}}" required>
                                      <label for="val-username2">Username</label>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="form-material">
                                      <input type="text" class="form-control" id="val-email2" name="email"  value="{{$user->email}}" required>
                                      <label for="val-email2">Email</label>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="form-material">
                                      <input type="password" class="form-control" id="val-password2" name="password" placeholder="Choose a safe one..">
                                      <label for="val-password2">Password</label>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="form-material">
                                      <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="..and confirm it!">
                                      <label for="val-confirm-password2">Confirm Password</label>
                                  </div>
                              </div>
                             
                              <div class="form-group">
                                  <button type="submit" id="update" class="btn btn-alt-primary">Update</button>
                              </div>
                          </form>
                      
                      </div>
                  </div>
              </div>
          </div>
          <!-- END Mega Form -->
      </div>
      <!-- END Page Content -->

  </main>
  <!-- END Main Container --> --}}

@endsection



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
       
       $('#agentform').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.agent.update")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                beforeSend:function(){
                    $('#update').attr('disabled','disabled');
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