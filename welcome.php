<?php
use function UI\Draw\Text\Font\fontFamilies;
// Initialize the session
session_start();


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

if (isset($_POST['logout'])) {
    echo "Logged Out ";
    session_destroy();
    header("location: index.php");

}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/style.css" type="text/css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>nseit</title>

    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- CSS Files For Plugin -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/YTPlayer.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    body {
        background: #ffff;
        font: 14px sans-serif;
        text-align: center;
    }

    #rcorners2 {
        border-radius: 25px;
        border: 0px solid #708090;
        padding: 10px;
        width: 120px;
        height: 120px;
        background: #ffff;
        /* background:#E6E6FA;#F5F5F5 */
        /* box-shadow: 10px 10px; */
        box-shadow: 0 4px 8px 0 rgba(176, 190, 222), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    </style>
</head>

<body>
    <!-- <a href="#home"><img class="logo" src="image\NseLogo.jpg" width="250" height="80" alt="logo" data-rjs="2"></a> -->
    <header>
        <!-- 
       <div class="container-fluid"> -->

        <nav class="navbar navbar-light"
            style="  background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);">


            <form class="container-fluid justify-content-start" method="post">

                <a href="#home"><img class="logo" src="images\nselogo.png" width="100" height="75" alt="logo"
                        data-rjs="2"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <h5 class="my-2">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><br>Welcome to Jarvis
                </h5>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <input class="favorite styled" type="submit" name="logout" value="Logout">
            </form>
        </nav>
    </header>
    </div><br><br>
    <style>
    .styled {
        border: 0;
        line-height: 2.5;
        padding: 0 20px;
        font-size: 1rem;
        font-weight: bold;
        text-align: center;
        color: #1904E5;
        border-radius: 10px;
        background-image: linear-gradient(135deg, #FFFFFF 10%, #FAB2FF 200%);
        box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
            inset -2px -2px 3px rgba(0, 0, 0, .6);
    }

    .styled:hover {
        background-color: rgba(255, 0, 0, 1);
    }

    .styled:active {
        box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
            inset 2px 2px 3px rgba(0, 0, 0, .6);
    }

    .my-2 {
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: "Open Sans", sans-serif;
        color: white;
    }
    </style>

    <style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 15%;
        background: #ADD8E6
    }

    .img:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 2px 10px;
    }

    .p {
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: "Open Sans", sans-serif;
        color: white;
    }
    </style>


    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div id="rcorners2">
                    <br>
                    <centre><a href="orgchart\index.html"><img class="card-img-top" src="images\org.png" alt=""
                                style="width:80px"></centre></a><br><br><br>
                    <h6 style="font-family:verdana">Organizational<br>Chart</h6>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-2">
                <div id="rcorners2">
                    <br>
                    <centre><a href="attrition/index.php"><img class="card-img-top" src="images\at.png" alt=""
                                style="width:80px">
                    </centre></a><br><br><br>
                    <h6 style="font-family:verdana">Attrition
                        <br>Dashboard
                    </h6>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-2">
                        <div id="rcorners2">
                            <br>
                            <centre><a href="joiningtracker\index.php"><img class="card-img-top"
                                        src="images\google-forms.png" alt="" style="width:80px"></centre></a>
                            <br><br><br>
                            <h6 style="font-family:verdana">Joining Tracker</h6>
                        </div>
                    </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-2">
                <div id="rcorners2"><br>
                    <centre><a href="bgv/rview.php"><img class="card-img-top" src="images\bgv.png" alt=""
                                style="width:80px">
                    </centre></a><br><br><br>
                    <h6 style="font-family:verdana">Multi Access &nbsp;BGV Tracker</h6>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div id="rcorners2">
                    <br>
                    <centre><a href="dttracker\index.php"><img class="card-img-top" src="images\docs.png" alt=""
                                style="width:80px">
                    </centre></a><br><br><br>
                    <h6 style="font-family:verdana">Documentation Tracker</h6>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-2">
                <div id="rcorners2">
                    <br>
                    <centre><a href="rolefinder\index.php"><img class="card-img-top" src="images\rf1.png" alt=""
                                style="width:80px"></centre></a>
                <br><br><br>
                <h6 style="font-family:verdana">Role Finder</h6>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-2">
                <div id="rcorners2"><br>
                    <centre><a href="RNR\index.php"><img class="card-img-top" src="images\cup.png" alt=""
                                style="width:80px"></centre></a><br><br><br>
                                <h6 style="font-family:verdana">RNR <br>Dashboard</h6>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-2">
                <div id="rcorners2"><br>
                    <centre><a href="PIP\PIPForm.php"><img class="card-img-top" src="images\decrease.png" alt=""
                                style="width: 80px"></centre></a><br><br><br>
                                <h6 style="font-family:verdana">PIP <br>Dashboard</h6>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <div class="container">
                <br>
                <br>
                <div class="row">
                <div class="col-lg-2">
                        <div id="rcorners2">
                            <br>
                            <centre><a href="onb-dashboard\index.php"><img class="card-img-top"
                                        src="images\dashboard.png" alt="" style="width:80px"></centre></a>
                                        <br><br><br>
                                        <h6 style="font-family:verdana">Documentation Dashboard</h6>
                        </div>
                    </div>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-lg-2">
                        <div id="rcorners2">
                            <br>
                            <centre><a href="darwinpractices\index.html"><img class="card-img-top"
                                        src="images\do&dont.png" alt="" style="width:80px"></centre></a>
                                        <br><br><br>
                                        <h6 style="font-family:verdana">DarwinBox <br> Do's and Don'ts</h6>
                        </div>
                    </div>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-lg-2">
                        <div id="rcorners2">
                    <br>
                            <centre><a href="darwinbox\index.html"><img class="card-img-top" src="images\faqs.png" alt=""
                                style="width:80px"></centre></a><br><br><br>
                                <h6 style="font-family:verdana">DarwinBox<br>FAQ</h6>
                    </div>
            </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>
</body>

</html>