<!DOCTYPE html>
<html lang="en">
  <head>
   <title></title>
  </head>
  <body>
    
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

    <div style="position: relative; top:60px; right; -150px">

      <table style= "background-color: grey; color: black;  border: 3px solid black ">
        <tr>
          <th style="padding: 25px">Name</th>
          <th style="padding: 25px">Email</th>
          <th style="padding: 25px">Action</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
          <td style="padding: 8px">{{$data->name}}</td>
          <td style="padding: 8px">{{$data->email}}</td>

          @if($data->usertype=="0")
          <td  style="padding: 8px"><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
          @else
          <td style="color: red; padding: 8px">Not Allowed!!</td>
          @endif

        </tr>
        @endforeach

      </table>

    </div>

    </div>    
    @include("admin.adminscript")
  </body>
</html>
    
  </body>
</html>