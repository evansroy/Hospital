
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">


        @include('admin.sidebar')

          @include('admin.navbar')

          {{-- @include('admin.body') --}}
          <div class="main-panel">
              <div class="content-wrapper">

                  @if (session()->has('message'))
                      <div class="alert alert-success">
                          <button class="close" type="button" data-dismiss="alert">
                              X
                          </button>
                          {{session()->get('message')}}
                      </div>
                   @endif

                  <div class="row">
                      <div class="col-md-6 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Edit Doctor</h4>
                              {{-- <p class="card-description"> Basic form layout </p> --}}
                              <form class="forms-sample" action="{{url('edit_doctor',$data->id)}}" method="post" enctype="multipart/form-data">
                                  @csrf
                                <div class="form-group">
                                  <label for="exampleInputUsername1">Full Names</label>
                                  <input type="text" class="form-control" name="name" value="{{$data->name}}" style="color: black">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <input type="email" class="form-control" value="{{$data->email}}" style="color: black" name="email">
                                </div>
                                <div class="form-group">
                                  <label for="description">Phone Number</label>
                                  <input type="text" class="form-control" value="{{$data->phone}}" style="color: black" name="phone">
                                </div>
                                <div class="form-group">
                                  <label for="file">Speciality</label>
                                  <input type="text" class="form-control" value="{{$data->specialty}}" style="color: black" name="specialty">
                                </div>
                                <div class="form-group">
                                    <label for="file">Room Number</label>
                                    <input type="text" class="form-control" value="{{$data->room}}" style="color: black" name="room">
                                </div>
                                <div class="form-group">
                                    <label for="file">Old Image</label>
                                    <img src="doctorimage/{{$data->image}}" alt="" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="file">Change Image</label>
                                    <input type="file" name="file" name="image">
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                              </form>
                            </div>
                          </div>
                        </div>
                  </div>
              </div>

          </div>

      </div>

            @include('admin.script')

    </div>
  </body>
</html>
