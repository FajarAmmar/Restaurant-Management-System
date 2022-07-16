<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    <!-- Required meta tags -->
   @include("admin.admincss");
  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar");

    <form action="{{url('updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data"> 
      @csrf
      <div>
        <label>Name</label>
        <input style="color: blue" type="text" name="name" value="{{$data->name}}" >
      </div>
      <div>
        <label>Position</label>
        <input style="color: blue" type="text" name="position" value="{{$data->position}}">
      </div>
      <div>
        <label>Quote</label>
        <input style="color: blue" type="text" name="quote" value="{{$data->quote}}" >
      </div>
      <div>
        <label>Old Image</label>
        <img height="300" width="300" src="/chefimage/{{$data->image}}">
      </div>
      <div>
        <label>New Image</label>
        <input type="file" name="image" name="image">
      </div>
      <div>
        <input style="background-color: orange" type="submit" name="update" value="update Chef" >
      </div>

    </form>
    
        </div>

    @include("admin.adminscript")
  </body>
</html>