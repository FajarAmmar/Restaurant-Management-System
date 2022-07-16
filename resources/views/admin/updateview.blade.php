<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
    
   @include("admin.admincss");
  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar");

    <div style="position: relative; top: 60px; right: -150px">
      <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">

      @csrf

        <div>
          <label>Title</label>
          <input type="text" class="bg-light text-dark" name="title" value="{{$data->title}}" required>
        </div>

        <div>
          <label>Price</label>
          <input type="number" class="bg-light text-dark" name="price" value="{{$data->price}}" required>
        </div>

        <div>
          <input type="text" class="bg-light text-dark" name="description" value="{{$data->description}}" required>
        </div>

        <div>
          <label>Old Image</label>
          <img height="150" width="150" src="/foodimage/{{ $data->image }}">
        </div>

        <div>
          <label>New Image</label>
          <input type="file" class="bg-light text-dark" name="image"  required>
        </div>

        <div>
          <input class="btn-warning" type="submit" value="Save">
        </div>

      </form>
</div>
    
        </div>

    @include("admin.adminscript")
  </body>
</html>