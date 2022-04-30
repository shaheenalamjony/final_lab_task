<!doctype html>
<html lang="en" dir="ltr">


<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>UMS</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Plugins css -->
<link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css"/>

<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css"/>
<link rel="stylesheet" href="assets/css/theme1.css"/>
</head>

<body class="font-montserrat">

<!-- logout button -->


<!-- Page Loader -->
<?php
session_start();
if (!isset($_SESSION['uname']))
{
    header('Location: login.html');
}

include '../model/tabledb.php';

?>
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">

    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                
                
            </div>
            <div class="hright">
                <div class="dropdown">
                   
                </div>            
            </div>
        </div>
    </div>

    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>


      
    </div>

   

  











    <!-- <a href="../controller/logout.php"></a> -->
    <!-- this is sidebar -->
    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">UMS-ADMIN <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading"></li>
                <li class="active"><a href="home.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>    

               
                <li>
                    <a href="addStudent.php">
                        <i class="fa fa-calendar-check-o">

                        </i>
                        <span>
                            Add Student
                        </span>
                    </a>
                </li>

                <li>
                    <a href="viewStudent.php">
                        <i class="fa fa-calendar-check-o">

                        </i>
                        <span>
                            View Student
                        </span>
                    </a>
                </li>
                


                <li>
                    <a href="#">
                        <i class="fa fa-calendar-check-o">

                        </i>
                        <span>
                            Add Teacher
                        </span>
                    </a>
                </li>
                


                <li>
                    <a href="#">
                        <i class="fa fa-calendar-check-o">

                        </i>
                        <span>
                            Add Library Book
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-calendar-check-o">

                        </i>
                        <span>
                            Add Course
                        </span>
                    </a>
                </li>




                <!-- logout button -->

                <li>
                    <a href="../controller/logout.php">
                        <i class="fa fa-calendar-check-o">

                        </i>
                        <span>
                            Logout
                        </span>
                    </a>
                </li>


               
            </ul>
        </nav>        
    </div>

    <div class="page">
        <div id="page_top" class="section-body top_dark">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i class="fa  fa-align-left"></i></a>
                        <h1 class="page-title">University Managment System</h1>                        
                    </div>
                    <div class="right">
                        <div class="input-icon xs-hide mr-4">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- dorkar -->
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h4>Welcome  <?php echo $_SESSION['uname']; ?></h4>
                        </div>                        
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Faculties/Schools</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">4</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Academic Programs</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">19</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Total Graduates</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">32,189</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Convocations</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">20</h5>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>



        <div class="section-body">
            <div class="container-fluid">
                <div class="row clearfix row-deck">
                    <div class="col-xl-4 col-lg-12 col-md-12">

                    


                    </div>




                





                </div>  
                
                


                <div class="row clearfix">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Project Summary</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                        <thead>
                                        <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Dept</th>
                                                <th>Password</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $res = showTeacher();
                                            while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
                                                
                                                echo '<tr>';
                                                foreach ($row as $item) 
                                                {
                                                    echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
                                                }
                                                echo '</tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
        </div>    

        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <!-- <div class="col-md-6 col-sm-12">
                            <a href="templateshub.net">Templates Hub</a>
                        </div> -->
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0"><h3>
                                
                            </ul>
                        </div>
                        <div class="col-md-12 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <h4>University Management System is the process of several manages. It used structured data and to define the relationships between structured data groups of University Management System.</h4>
                                

                                
                                <!-- <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>




    </div>    
</div>


<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/apexcharts.bundle.js"></script>
<script src="assets/bundles/counterup.bundle.js"></script>
<script src="assets/bundles/knobjs.bundle.js"></script>
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/page/project-index.js"></script>
</body>

<!-- soccer/project/  07 Jan 2020 03:37:22 GMT -->
</html>
