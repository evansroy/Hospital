
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

            @include('admin.sidebar')



            @include('admin.navbar')

            <div class="main-panel" >
                <div class="content-wrapper">
                    <div class="table-responsive">
                        <table class="table table-striped table-dark">
                            <thead>
                              <tr>

                                <th scope="col">Doctor Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Speciality</th>
                                <th scope="col">Room No</th>
                                <th scope="col">Profile Image</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Update</th>

                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $doctor)
                                    <tr>

                                        <td>{{$doctor->name}}</td>
                                        <td>{{$doctor->email}}</td>
                                        <td>{{$doctor->phone}}</td>
                                        <td>{{$doctor->specialty}}</td>
                                        <td>{{$doctor->room}}</td>
                                        <td> <img src="doctorimage/{{$doctor->image}}" alt="Profile Image"></td>
                                        <td>
                                            <a class="btn btn-danger" href="{{url('delete_doctor',$doctor->id)}}" onclick="return confirm('Are you sure you want to Delete This Doctor ?')">Delete</a>
                                        </td>

                                        <td>
                                            <a class="btn btn-primary" href="{{url('update_doctor',$doctor->id)}}">Update</a>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                          </table>
                    </div>

                </div>
            </div>

            @include('admin.script')

    </div>
  </body>
</html>
