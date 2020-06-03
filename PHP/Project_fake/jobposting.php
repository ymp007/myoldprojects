<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="main-heading">Organization Management System</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link">Home</a>
                </li>
                <li class="active">
                    <a href="#jobposting">Job Postings</a>
                </li>
                <li>
                    <a href="#">Service Request</a>
                </li>
                <li>
                    <a href="#">Vacation Request</a>
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
                    <h1 class="content-heading">Job Posting</h1>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link profile-link" href="#profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link profile-link" href="#signout">Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
            <h3>To-do List</h3>
            <div class="container">
                  <div class="row">
                    <a href="#task1" class="To-do urgent"><div class="col-sm">
                      <div class="To-do-heading">
                        TaskName : Develop UI for Shopify
                      </div>
                      <div class="To-do-content">
                        Task details : Develop UI for Shopify customers in React-Native
                      </div>
                      <div class="To-do-deadline">
                        Dead Line : 30-10-2019
                      </div>
                    </div></a>
                    <a href="#task2" class="To-do medium"><div class="col-sm">
                      <div class="To-do-heading">
                        TaskName : Develop UI for Shopify
                      </div>
                      <div class="To-do-content">
                        Task details : Develop UI for Shopify customers in React-Native
                      </div>
                      <div class="To-do-deadline">
                        Dead Line : 30-10-2019
                      </div>
                    </div></a>
                    <a href="#task3" class="To-do ok"><div class="col-sm">
                      <div class="To-do-heading">
                        TaskName : Develop UI for Shopify
                      </div>
                      <div class="To-do-content">
                        Task details : Develop UI for Shopify customers in React-Native
                      </div>
                      <div class="To-do-deadline">
                        Dead Line : 30-10-2019
                      </div>
                    </div></a>
                    <a href="#task3" class="To-do ok"><div class="col-sm">
                      <div class="To-do-heading">
                        TaskName : Develop UI for Shopify
                      </div>
                      <div class="To-do-content">
                        Task details : Develop UI for Shopify customers in React-Native
                      </div>
                      <div class="To-do-deadline">
                        Dead Line : 30-10-2019
                      </div>
                    </div></a>
                  </div>
                </div>
        </div>
        <div class="container-fluid">
            <h3>Meetings</h3>
            <div class="container">
                  <div class="row">
                    <a href="#task1" class="To-do"><div class="col-sm">
                      <div class="To-do-heading">
                        TaskName : Develop UI for Shopify
                      </div>
                      <div class="To-do-content">
                        Task details : Develop UI for Shopify customers in React-Native
                      </div>
                      <div class="To-do-deadline">
                        Dead Line : 30-10-2019
                      </div>
                    </div></a>
                    <a href="#task2" class="To-do"><div class="col-sm">
                      <div class="To-do-heading">
                        TaskName : Develop UI for Shopify
                      </div>
                      <div class="To-do-content">
                        Task details : Develop UI for Shopify customers in React-Native
                      </div>
                      <div class="To-do-deadline">
                        Dead Line : 30-10-2019
                      </div>
                    </div></a>
                    <a href="#task3" class="To-do"><div class="col-sm">
                      <div class="To-do-heading panel panel-default">
                        TaskName : Develop UI for Shopify
                      </div>
                      <div class="To-do-content">
                        Task details : Develop UI for Shopify customers in React-Native
                      </div>
                      <div class="To-do-deadline">
                        Dead Line : 30-10-2019
                      </div>
                    </div></a>
                    <a href="#task3" class="To-do"><div class="col-sm">
                      <div class="To-do-heading">
                        TaskName : Develop UI for Shopify
                      </div>
                      <div class="To-do-content">
                        Task details : Develop UI for Shopify customers in React-Native
                      </div>
                      <div class="To-do-deadline">
                        Dead Line : 30-10-2019
                      </div>
                    </div></a>
                  </div>
                </div>
        </div>
        <p class="footer">Copyrights by YMP</p>
        </div>
         
    </div>
    <footer>
         
        </footer>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>