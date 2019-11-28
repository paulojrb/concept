<?php 

session_start();

$logging = false;
if ( isset($_SESSION["user-u"]) )
    $logging = true;


?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Concept - Influencer Finder</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="./">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item nav-user">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item nav-user">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <?php require_once('navbar.php'); ?>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <?php require_once('nav-left-sidebar.php'); ?>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="influence-finder">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">Influencer Finder </h3>
                                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Influencer Finder</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- search bar  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="get" action="/concept-master/influencer-finder.php">
                                        <input class="form-control form-control-lg" type="search" name="profile" id="search-profile" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-primary search-btn" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end search bar  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-8 col-md-8 col-sm-12 col-12">
                            <?php
                            
                            if ( isset($_GET["profile"]) ) {
                                $search = $_GET["profile"];
                                $search = str_replace (">", ' ', $search);
                                $search = str_replace ("'", ' ', $search);
                                $search = str_replace ("\"", ' ', $search);
                                $search = str_replace ("<", ' ', $search);
                                
                                echo "<h5 class=\"mb-2\">Search por <a href=http://localhost/concept-master/influencer-finder.php?profile=$search>$search</a></h5>";
                            }
                            
                            ?>
                            <!--<h5 class="mb-2">Search por "Solange"</h5>-->
                            <!-- ============================================================== -->
                            <!-- card influencer one -->
                            <!-- ============================================================== -->
                            <div class="card" id="cards-profile">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="user-avatar float-xl-left pr-4 float-none">
                                                <img src="assets/images/avatar-1.jpg" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                            </div>
                                            <div class="pl-xl-3">
                                                <div class="m-b-0">
                                                    <div class="user-avatar-name d-inline-block">
                                                        <h2 class="font-24 m-b-10">Henry Barbara</h2>
                                                    </div>
                                                    <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <i class="fa fa-fw fa-star"></i>
                                                        <p class="d-inline-block text-dark">14 Reviews </p>
                                                    </div>
                                                </div>
                                                <div class="user-avatar-address">
                                                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Salt Lake City, UT <span class="m-l-10">Male<span class="m-l-20">29 Year Old</span></span>
                                                    </p>
                                                    <div class="mt-3">
                                                        <a href="#" class="mr-1 badge badge-light">Fitness</a><a href="#" class="mr-1 badge badge-light">Life Style</a><a href="#" class="mr-1 badge badge-light">Gym</a><a href="#" class="badge badge-light">Crossfit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="float-xl-right float-none mt-xl-0 mt-4">
                                                <a href="/concept-master/dashboard-influencer.php?profile=Henry Barbara" class="btn btn-secondary">Send Messages</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top user-social-box">
                                    <div class="user-social-media d-xl-inline-block "><span class="mr-2 twitter-color"> <i class="fab fa-twitter-square"></i></span><span>13,291</span></div>
                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2  pinterest-color"> <i class="fab fa-pinterest-square"></i></span><span>84,019</span></div>
                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2 instagram-color"> <i class="fab fa-instagram"></i></span><span>12,300</span></div>
                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2  facebook-color"> <i class="fab fa-facebook-square "></i></span><span>92,920</span></div>
                                    
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end card influencer one -->
                            <!-- ============================================================== -->
                              

                                <!-- ============================================================== -->
                                <!-- end content -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- ============================================================== -->
                            <!-- influencer sidebar  -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- end influencer sidebar  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    <div class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="text-md-right footer-links d-none d-sm-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="assets/libs/js/main-js.js"></script>
<script src="./pages/js/influencer.js"></script>
</body>
 
</html>