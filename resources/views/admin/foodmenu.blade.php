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

    <div style="position: relative; top: 60px; right: -150px" >
      <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

      @csrf

        <div>
          <label>Title</label>
          <input type="text" class="bg-light text-dark" name="title" placeholder="Write a food Name" required>
        </div>

        <div>
          <label>Price</label>
          <input type="number" class="bg-light text-dark" name="price" placeholder="Write a food price" required>
        </div>

        <div>
          <label>Image</label>
          <input type="file" class="bg-light text-dark" name="image"  required>
        </div>

        <div>
          <input type="text" class="bg-light text-dark" name="description" placeholder="Description" required>
        </div>

        <div>
          <input class="btn-warning" type="submit" value="Save">
        </div>

      </form>

      <div style="margin: 35px;">
        <table class="table table-light table-bordered border-primary" bg-color="black">
          
          <tr>
            <th style="padding: 20px">Food Name</th>
            <th style="padding: 20px">Price</th>
            <th style="padding: 20px">Description</th>
            <th style="padding: 20px">Image</th>
            <th style="padding: 20px">Action</th>
            
          </tr>

          @foreach($data as $data)
          <tr align="center">
            <td style="padding: 8px">{{$data->title}}</td>
            <td style="padding: 8px">{{$data->price}}</td>
            <td style="padding: 8px">{{$data->description}}</td>
            <td><img width="150" height=" 150" src="/foodimage/{{$data->image}}"></td>
            <td style="padding: 8px">
              <a style="margin: 5px" href="{{url('/deletemenu', $data->id)}}">Delete</a>
              <a style="margin: 5px" href="{{url('/updateview', $data->id)}}">Update</a>
            </td>
          </tr>
          @endforeach

        </table>
      </div>

    </div>

        
</div>

    @include("admin.adminscript")
  </body>
</html>