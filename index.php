<?php
// use function UI\Draw\Text\Font\fontFamilies;
// // Initialize the session
// session_start();


// // Check if the user is logged in, if not then redirect him to login page
// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: index.php");
//     exit;
// }

// if (isset($_POST['logout'])) {
//     echo "Logged Out ";
//     session_destroy();
//     header("location: index.php");

// }




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome TO CTC CALCULATOR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/style.css" type="text/css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NSEIT</title>

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
        padding: 20px;
        width: 150px;
        height: 150px;
        background: #ffff;
        /* background:#E6E6FA;#F5F5F5 */
        /* box-shadow: 10px 10px; */
        box-shadow: 0 4px 8px 0 rgba(176, 196, 222), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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

                <a href=""><img class="logo" src="images\nselogo.png" width="100" height="75" alt="logo"
                        data-rjs="2"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <h5 class="my-2">Welcome to <br>CTC CALCULATOR
                </h5>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <!-- <input class="favorite styled" type="submit" name="logout" value="Logout"> -->
            </form>






        </nav>
    </header>
    </div><br><br><br><br><br><br>
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

<!-- <option value="blue"><a href="FTE">FTE</a></option>
                        <option value="red" selected><a href="PE">PE E10 to S10</a></option>
                            <option value="red" selected><a href="">PE (M10 & Above)</a></option>
                            
                            <option value="yellow"><a href="">CAMPUS</a></option>
                            <option value="yellow"><a href="">OFF CAMPUS</a></option> -->
    <div class="container">
        <div class="row">
            &nbsp;

            <div class="col-lg-3">
                <div id="rcorners2">
                    <br>
                    <centre><a href="FTE"><img class="card-img-top" src="images\1.jpg" alt=""
                                ></centre></a>
                                <h5 style="font-family:verdana"><br><br>FTE</h5>
                </div><br>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            <div class="col-lg-3">
                <div id="rcorners2">
                    <br>
                    <centre><a href="PE"><img class="card-img-top" src="images\2.jpg" alt=""
                                style="height:80px"></centre></a>   
                                <h5 style="font-family:verdana"><br><br>PE E10 to S10</h5>
                </div><br>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            <div class="col-lg-3">
                <div id="rcorners2">
                    <br>
                    <centre><a href="PE (M10 & Above)"><img class="card-img-top" src="images\3.jpg" alt=""
                                style="width:80px">
                    </centre></a>
                    <h5 style="font-family:verdana"><br><br>PE (M10 & Above)
                    </h5>
                </div>
                <br>

            </div>
</div>
</div><br><br>
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-3">
                <div id="rcorners2"><br>
                    <centre><a href="CAMPUS"><img class="card-img-top" src="images\4.jpg" alt=""
                                style="height:80px">
                    </centre></a>
                    <h5 style="font-family:verdana"><br><br>CAMPUS</h3>
                </div>
                <br>
</div>
    <br>
    <br><br><br>

 
            <div class="col-lg-3">
                <div id="rcorners2">
                    <br>
                    <centre><a href="OFF CAMPUS"><img class="card-img-top" src="images\5.png" alt=""
                                style="width:80px">
                    </centre></a>
                    <h5 style="font-family:verdana"><br><br>OFF CAMPUS</h5>
                    <br>

                </div><br>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
        </div>
    </div>
</body>

</html>