<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIOSKOP TELULAS - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">BIOSKOP TELULAS</div>
    <div class="address-bar">Gedung Teknik Informatika |Kampus ITS Sukolilo, Surabaya, 60111 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">BIOSKOP TELULAS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="film.php">Film</a>
                    </li>
                    
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="jadwal.php">Jadwal
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li> <a href="Jadwal.php"></i> Jadwal</a></li>
                        <li><a href="Search.php"></i> Search per rating</a></li>
                    </ul>
                </li>
                    <li>
                        <a href="pilih_film.php">Pembelian</a>
                    </li>
                  <li>
                        <a href="pendaftaran.php">Pendaftaran</a>
                    </li>
                  
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>

                        </ol>



<div class="panel panel-default">
		<div class="panel-body">
<form method="POST" action="insert_search.php">
  <div class="form-group has-success">
	<label class="control-label">Rating</label>
		<div class="controls">
		<select class="form-control" name='rating' >
		<option value = "" ></option>		
		<option value = "a" ><?php echo "50-60"; ?> </option>
		<option value = "b" ><?php echo "61-70"; ?> </option>
		<option value = "c" ><?php echo "71-80"; ?> </option>
		<option value = "d" ><?php echo "81-90"; ?> </option>
		<option value = "e" ><?php echo "91-100"; ?> </option>
		</select>
	</br>
		<div class="pull-right">
		<input class="btn btn-success" value="search" type="submit">
		</div>
	</div>
	</div>
</form>

   
<!-- Contact Section -->
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>   

</body>

</html>
