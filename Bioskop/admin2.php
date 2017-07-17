<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin2.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
           
                        <li>
                            <a href="admin.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                <!--menu untuk drop down -->
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Edit data Film<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                             <li>
                                <a href="insert_film.php">Insert Film</a>
                            </li>
                            <li>
                                <a href="update.php">Update Film</a>
                            </li>
                            <li>
                                <a href="delete_film.php">Delete Film</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;" data-toggle="collapse2" data-target="#demo2"><i class="fa fa-fw fa-arrows-v2"></i> Edit data Member<i class="fa fa-fw fa-caret-down2"></i></a>
                        <ul id="demo2" class="collapse2">
                            <li>
                                <a href="update.php">Update Member </a>
                            </li>
                            <li>
                                <a href="delete_member.php">Delete Member</a>
                            </li>
                        </ul>
                    </li>
                         <li>
                        <a href="javascript:;" data-toggle="collapse2" data-target="#demo2"><i class="fa fa-fw fa-arrows-v2"></i> Edit data Jadwal<i class="fa fa-fw fa-caret-down2"></i></a>
                        <ul id="demo2" class="collapse2">
                            <li>
                                <a href="insert_jadwal.php">insert jadwal </a>
                            </li>
                          
                        </ul>
                    </li>
                    <li>
                        <a href="laporan_pengeluaran.php">Laporan Pengeluaran</a>
                    </li>
                    <li>
                        <a href="laporan_pemasukan.php">Laporan Pemasukan</a>
                    </li>
                </ul>
            </div>    

            
            <!-- /.navbar-collapse -->
        </nav>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
