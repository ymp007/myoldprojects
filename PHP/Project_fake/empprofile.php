<?php
session_start();
if(isset($_SESSION['username'])){
$user = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Software Developers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Vollkorn" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="main-heading">Organization Management System(HR)</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php">Home</a>
                </li>
                <li>
                    <a href="department.php">Employee List</a>
                </li>
                <li>
                    <a href="departmentwork.php">Employees Work</a>
                </li>
                <li>
                    <a href="meeting.php">Meetings</a>
                </li>
                <li>
                    <a href="jobposting.php">Job Postings</a>
                </li>
                <li>
                    <a href="servicerequest.php">Service Request</a>
                </li>
                <li>
                    <a href="vacationrequest.php">Vacation Request</a>
                </li>            
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" aria-expanded="false" class="btn btn-info">
                        <i class="fas fa-align-left"></i>             
                    </button>
                    <h1 class="content-heading">Yash Patel</h1>
                    <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="../images/profile.png" width="20px"  />
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link profile-link" href="empprofile.php"><?php if(isset($user)){echo $user;}?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link profile-link" href="../lib/logout.php">Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../images/super.jpg"  alt=""/>
                            <!--<div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Yash Patel
                                    </h5>
                                    <h6>
                                        Software Developer
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <form>
                        <a class="btn btn-primary profile" name="editprofile" href="editprofile.php">Edit Profile</a>
                        <form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Project Working</p>
                            <a href="">Organization Management</a><br/>
                            <a href="">Nimrod</a><br/>
                            <a href="">iOS Project</a>
                            <p>SKILLS</p>
                            <a href="">Android</a><br/>
                            <a href="">iOS Development</a><br/>
                            <a href="">PHP Development</a><br/>
                            <a href="">Bootstrap Development</a><br/>
                            <a href="">React Developer</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>ymp007</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Yashkumar Patel</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>patelymp007@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Designation</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Software Developer</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Salary</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>25$/Hour</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <p class="footer">Copyrights by YMP</p>
        </div>
         
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>