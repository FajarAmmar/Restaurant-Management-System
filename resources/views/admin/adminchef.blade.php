<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include("admin.admincss");
  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar");
    <div style="position: relative; top: 60px; right: -150px">
    <form action="{{url('uploadchef')}}" method="post" enctype="multipart/form-data"> 
      @csrf
      <div>
        <label>Name</label>
        <input style="color: blue" type="text" name="name" placeholder="Enter Chef Name" required>
      </div>
      <div>
        <label>Position</label>
        <input style="color: blue" type="text" name="position" placeholder="Enter Chef Position" required>
      </div>
      <div>
        <label>Quote</label>
        <input style="color: blue" type="text" name="quote" placeholder="Enter Quote" required>
      </div>
      <div>
        <input type="file" name="image"  required>
      </div>
      <div>
        <input style="background-color: orange" type="submit" name="save" value="save" >
      </div>

    </form>
    

    <table class="table table-light table-bordered border-primary">
      <tr>
        <th style="padding: 22px">Name</th>
        <th style="padding: 22px">Position</th>
        <th style="padding: 22px">Quote</th>
        <th style="padding: 22px">Image</th>
        <th style="padding: 22px">Action</th>
      </tr>

      @foreach($data as $data)
      <tr align="center">
        <td style="padding: 8px">{{$data->name}}</td>
        <td style="padding: 8px">{{$data->position}}</td>
        <td style="padding: 8px">{{$data->quote}}</td>
        <td style="padding: 8px"><img width="150" height=" 150" src="/chefimage/{{$data->image}}"></td>
        <td style="padding: 8px">
          <a style="margin: 5px" href="{{url('/deletechef', $data->id)}}">Delete</a>
          <a style="margin: 5px" href="{{url('/updatechef', $data->id)}}">Update</a>
            </td>
      </tr>
      @endforeach

    </table>
    
        </div>
        </div>

    @include("admin.adminscript")
  </body>
</html>