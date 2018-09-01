<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
     @include('News.Admin.title')
    
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
               @include('News.Admin.body')
              
            </header>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">





<form action="{{url('Updatevalue')}}" method="post">
	   {{csrf_field()}}
<table>
<tr><td><input type="hidden" name="rpToken"  value={{Session::get('rpToken')}}></td></tr>	
<tr><td>Name:</td><td><input type="text" name="name" placeholder="Enter your Name" value={{Session::get('name')}}></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" placeholder="Enter Your email" value={{Session::get('email')}}></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"></td></tr> 
<tr><td><input type="submit" name="update" value="update"></td></tr>
<tr><td><a href="{{url('resetpassword')}}">reset</a></td></tr>
</form>
</table>
<!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    <script src="vendor/vector-map/jquery.vmap.brazil.js"></script>
    <script src="vendor/vector-map/jquery.vmap.europe.js"></script>
    <script src="vendor/vector-map/jquery.vmap.france.js"></script>
    <script src="vendor/vector-map/jquery.vmap.germany.js"></script>
    <script src="vendor/vector-map/jquery.vmap.russia.js"></script>
    <script src="vendor/vector-map/jquery.vmap.usa.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>


</body>

</html>


            