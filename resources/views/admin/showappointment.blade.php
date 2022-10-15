
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

                            <th scope="col">Customer Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Approve</th>
                            <th scope="col">Cancel</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $appoint)
                                <tr>

                                    <td>{{$appoint->name}}</td>
                                    <td>{{$appoint->email}}</td>
                                    <td>{{$appoint->phone}}</td>
                                    <td>{{$appoint->doctor}}</td>
                                    <td>{{$appoint->date}}</td>
                                    <td>{{$appoint->message}}</td>
                                    <td>{{$appoint->status}}</td>

                                    <td>
                                        <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a>
                                    </td>

                                    <td>
                                        <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancel</a>
                                    </td>
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
