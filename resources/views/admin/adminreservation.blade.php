<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    
   @include("admin.admincss");
  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar");

    <div class="container">
    <h1>Reservation Data</h1>
    <form action="{{url('/search')}}" method="get">

    @csrf

      <input type="text" name="search" style="color:blue;">
      <input type="submit" name="search" class="btn btn-success">

    </form>
    <div style="position: relative; top: 70px;">
      <table class="table table-light table-bordered border-primary">
        <tr>
          <th style="padding: 22px">Name</th>
          <th style="padding: 22px">Email</th>
          <th style="padding: 22px">Phone Number</th>
          <th style="padding: 22px">Number of Guest</th>
          <th style="padding: 22px">Date</th>
          <th style="padding: 22px">Time</th>
          <th style="padding: 22px">Message</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
          <td style="padding: 8px">{{$data->name}}</td>
          <td style="padding: 8px">{{$data->email}}</td>
          <td style="padding: 8px">{{$data->phone}}</td>
          <td style="padding: 8px">{{$data->guest}}</td>
          <td style="padding: 8px">{{$data->date}}</td>
          <td style="padding: 8px">{{$data->time}}</td>
          <td style="padding: 8px">{{$data->message}}</td>
        </tr>
        @endforeach
      </table>
    </div>
    </div>
    
        </div>

    @include("admin.adminscript")
  </body>
</html>