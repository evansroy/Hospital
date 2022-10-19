
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

            <div class="container-fluid page-body-wrapper" >
                <div align = "center" style="padding: 100px">
                    <table class="table table-striped table-dark">
                        <thead>
                          <tr>

                            <th scope="col">Doctor Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Speciality</th>
                            <th scope="col">Room No</th>
                            <th scope="col">Profile Image</th>
                            
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
                                    <td>{{$doctor->image}}</td>



                                </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>

            @include('admin.script')

    </div>
  </body>
</html>
