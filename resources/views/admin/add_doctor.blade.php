
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
      label
        {
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">

            @include('admin.sidebar')



            @include('admin.navbar')
            {{-- @include('admin.body') --}}
            <div class="container-fluid page-body-wrapper" >

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            x
                        </button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <div class="container" align = "center" style="padding: 100px">
                    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="padding: 15px">
                            <label for="name">Doctor Name</label>
                            <input type="text" name="name" placeholder="Enter your name" style="color: black" required>
                        </div>

                        <div style="padding: 15px">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" placeholder="Enter your Phone Number" style="color: black" required>
                        </div>

                        <div style="padding: 15px">
                            <label for="specialty">Specialty</label>
                            <select name="specialty" id="specialty" style="color: black; width:200px " required>
                                <option value="defalt">--Select--</option>
                                <option value="skin">Skin</option>
                                <option value="heart">Heart</option>
                                <option value="eye">Eye</option>
                                <option value="nose">Nose</option>
                            </select>
                        </div>

                        <div style="padding: 15px">
                            <label for="room">Room No</label>
                            <input type="number" name="room" placeholder="Enter Room Number" style="color: black" required>
                        </div>

                        <div style="padding: 15px">
                            <label for="image">Doctor Image</label>
                            <input type="file" name="file">
                        </div>

                        <div style="padding: 15px">
                            <input type="submit" class="btn btn-success">
                        </div>

                    </form>
                </div>
            </div>

            @include('admin.script')

    </div>
  </body>
</html>
