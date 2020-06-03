
<?php

session_start();
if(isset($_SESSION['username'])){
$user = $_SESSION['username'];
}
function createheader($active,$title,$heading){
echo "
    <div class='wrapper'>
        <!-- Sidebar  -->
        <nav id='sidebar'>
            <div class='sidebar-header'>
                <h3 class='main-heading'>Organization Management System</h3>
            </div>

            <ul class='list-unstyled components'>";
            switch ($active) {
                case 'dashboard':
                    echo "<li class='active'>
                            <a href='dashboard.php'>Home</a>
                        </li>
                        <li>
                            <a href='jobposting.php'>Job Postings</a>
                        </li>
                        <li>
                            <a href='servicerequest.php'>Service Request</a>
                        </li>
                        <li>
                            <a href='vacation.php'>Vacation Request</a>
                        </li>
                        <li>
                            <a href='salary.php'>My Pay</a>
                        </li>
                        <li>
                            <a href='clock.php'>Clock-in Clock-out</a>
                        </li>";
                    break;
                case 'clock':
                    echo "<li>
                            <a href='dashboard.php'>Home</a>
                        </li>
                        <li>
                            <a href='jobposting.php'>Job Postings</a>
                        </li>
                        <li>
                            <a href='servicerequest.php'>Service Request</a>
                        </li>
                        <li>
                            <a href='vacation.php'>Vacation Request</a>
                        </li>
                        <li>
                            <a href='salary.php'>My Pay</a>
                        </li>
                        <li class='active'>
                            <a href='clock.php'>Clock-in Clock-out</a>
                        </li>";
                    break;
                case 'jobposting':
                    echo "<li>
                            <a href='dashboard.php'>Home</a>
                        </li>
                        <li class='active'>
                            <a href='jobposting.php'>Job Postings</a>
                        </li>
                        <li>
                            <a href='servicerequest.php'>Service Request</a>
                        </li>
                        <li>
                            <a href='vacation.php'>Vacation Request</a>
                        </li>
                        <li>
                            <a href='salary.php'>My Pay</a>
                        </li>
                        <li>
                            <a href='clock.php'>Clock-in Clock-out</a>
                        </li>";
                    break;
                case 'servicerequest':
                    echo "<li>
                            <a href='dashboard.php'>Home</a>
                        </li>
                        <li>
                            <a href='jobposting.php'>Job Postings</a>
                        </li>
                        <li class='active'>
                            <a href='servicerequest.php'>Service Request</a>
                        </li>
                        <li>
                            <a href='vacation.php'>Vacation Request</a>
                        </li>
                        <li>
                            <a href='salary.php'>My Pay</a>
                        </li>
                        <li>
                            <a href='clock.php'>Clock-in Clock-out</a>
                        </li>";
                    break;
                case 'vacation':
                    echo "<li>
                            <a href='dashboard.php'>Home</a>
                        </li>
                        <li>
                            <a href='jobposting.php'>Job Postings</a>
                        </li>
                        <li>
                            <a href='servicerequest.php'>Service Request</a>
                        </li>
                        <li class='active'>
                            <a href='vacation.php'>Vacation Request</a>
                        </li>
                        <li>
                            <a href='salary.php'>My Pay</a>
                        </li>
                        <li>
                            <a href='clock.php'>Clock-in Clock-out</a>
                        </li>";
                    break;
                case 'salary':
                    echo "<li>
                            <a href='dashboard.php'>Home</a>
                        </li>
                        <li>
                            <a href='jobposting.php'>Job Postings</a>
                        </li>
                        <li>
                            <a href='servicerequest.php'>Service Request</a>
                        </li>
                        <li>
                            <a href='vacation.php'>Vacation Request</a>
                        </li>
                        <li class='active'>
                            <a href='salary.php'>My Pay</a>
                        </li>
                        <li>
                            <a href='clock.php'>Clock-in Clock-out</a>
                        </li>";
                    break;
                default:
                    echo "<li>
                            <a href='dashboard.php'>Home</a>
                        </li>
                        <li>
                            <a href='jobposting.php'>Job Postings</a>
                        </li>
                        <li>
                            <a href='servicerequest.php'>Service Request</a>
                        </li>
                        <li>
                            <a href='vacation.php'>Vacation Request</a>
                        </li>
                        <li>
                            <a href='salary.php'>My Pay</a>
                        </li>
                        <li>
                            <a href='clock.php'>Clock-in Clock-out</a>
                        </li>";
                    break;
            }

                
                         
            echo "</ul>
        </nav>

        <!-- Page Content  -->
        <div id='content'>

            <nav class='navbar navbar-expand-lg navbar-light bg-light'>
                <div class='container-fluid'>

                    <button type='button' id'sidebarCollapse' aria-expanded='false' class='btn btn-info'>
                        <i class='fas fa-align-left'></i>             
                    </button>
                    <h1 class='content-heading'>".$heading."</h1>
                    <button class='btn d-inline-block d-lg-none ml-auto' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                        <img src='../images/profile.png' width='20px'  />
                    </button>

                    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='nav navbar-nav ml-auto'>
                            <li class='nav-item active'>
                                <a class='nav-link profile-link' href='empprofile.php'>"; if(isset($user)){echo $user;} echo "</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link profile-link' href='../lib/logout.php'>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>";
}
?>