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

    <div class="container">
      <h1>Welcome to Admin Management System</h1>
      <li><a href="{{url('/users')}}"><label>Manage User</label></a></li>
      <li><a href="{{url('/foodmenu')}}"><label>Manage Food</label></a></li>
      <li><a href="{{url('/viewchef')}}"><label>Manage Chef</label></a></li>
      <li><a href="{{url('/viewreservation')}}"><label>Manage Reservation</label></a></li>
    </div>
    
        </div>

    @include("admin.adminscript")
  </body>
</html>