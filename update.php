<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>NSE-IT</title>



    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />




    <link rel="stylesheet" href="css/css-circular-prog-bar.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="top_container">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-custom navbar-mainbg">

                    <a class="navbar-brand navbar-logo" href="#"><img src="../images/nselogo.png" width="150px"
                            height="100px" alt=""><span></span></a>
                    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars text-white"></i>
                        <a href="/jarvis/RNR/index.php" class="btn btn-primary ml-3">View
                            Records</a>
                        <a href="/jarvis/welcome.php" class="btn btn-primary ml-3">Home</a>
                        <a href="../logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
                    </button>

                    <div class=" navbar" id="navbarSupportedContent">

                        <!--a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>HOME</a>
            <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>HOME</a-->

                    </div>
                </nav>

            </div>
        </header>
        <section class="hero_section ">
            <div class="hero-container container">

                <div class="hero_detail-box">
                    <h3>
                        <center>Update your Record</center> <br>

                    </h3>
                </div>
                <div class="hero_img-container">
                    <div>
                        <?php
// Include config file
require_once "../config.php";

// Define variables and initialize with empty values
$name = $address = $salary = $name1 = $address1 = $salary1 = $name2 = $address2 = $salary2 = $name3 = $address3 = "";
$name_err = $address_err = $salary_err = $name1_err = $address1_err = $salary1_err = $name2_err = $address2_err = $salary2_err = $name3_err = $address3_err = "";


if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Get hidden input value
    $id = $_POST["id"];
    $name = filter_input(INPUT_POST, 'nc', FILTER_SANITIZE_STRING);

    $address = filter_input(INPUT_POST, 'bc', FILTER_SANITIZE_STRING);

    $salary = filter_input(INPUT_POST, 'rk', FILTER_SANITIZE_STRING);

    $name1 = filter_input(INPUT_POST, 'nc1', FILTER_SANITIZE_STRING);

    $address1 = filter_input(INPUT_POST, 'bc1', FILTER_SANITIZE_STRING);

    $salary1 = filter_input(INPUT_POST, 'rk1', FILTER_SANITIZE_STRING);

    $name2 = filter_input(INPUT_POST, 'nc2', FILTER_SANITIZE_STRING);

    $address2 = filter_input(INPUT_POST, 'bc2', FILTER_SANITIZE_STRING);

    $salary2 = filter_input(INPUT_POST, 'rk2', FILTER_SANITIZE_STRING);

    $name3 = filter_input(INPUT_POST, 'nc3', FILTER_SANITIZE_STRING);

    $address3 = filter_input(INPUT_POST, 'bc3', FILTER_SANITIZE_STRING);




    // $salary = trim($_POST["rk"]);

    echo $salary;


    $sql = "UPDATE rnr SET  
    Emp_Name = '$name', 
    PROJECT = '$address', 
    RM = '$salary', 
    DH = '$name1', 
    DEPT = '$address1', 
    TOA = '$salary1',
    AMT = '$name2', 
    MMONTH = '$address2', 
    CITATION = '$salary2', 
    DDate = '$name3', 
    BU = '$address3'
    
    
     WHERE EMP_Id = '$id';";
    $link->query($sql);

    header("Refresh:0");


// // Attempt insert query execution
// if (mysqli_query($link, $sql)) {
//     echo '<script>alert("Data Updated Successfully.")</script>';
//     sleep(3);



// }
// else {
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

// Close connection
//mysqli_close($link);



}
else {
    if ($_GET["id"] != "") {

        $id = $_GET["id"];

        $sql = "SELECT * FROM rnr WHERE EMP_Id  = '$id'";
        $stmt = $link->query($sql);
        if ($stmt->num_rows > 0) {
            $param_id = $id;
            $row = $stmt->fetch_assoc();
            $name = $row["Emp_Name"];
            $address = $row["PROJECT"];
            $salary = $row["RM"];
            $name1 = $row["DH"];
            $address1 = $row["DEPT"];
            $salary1 = $row["TOA"];
            $name2 = $row["AMT"];
            $address2 = $row["MMONTH"];
            $salary2 = $row["CITATION"];
            $name3 = $row["DDate"];
            $address3 = $row["BU"];

            echo "<script>
            $(document).ready(function(){
                $('#nc').val('$name');
                $('#bc').val('$address');
                $('#rk').val('$salary');
                $('#nc1').val('$name1');
                $('#bc1').val('$address1');
                $('#rk1').val('$salary1');
                $('#nc2').val('$name2');
                $('#bc2').val('$address2');
                $('#rk2').val('$salary2');
                $('#nc3').val('$name3');
                $('#bc3').val('$address3');
                
            
            });
            </script>";


        }
        else {
            header("location: error.php");
        }
    // if ($stmt = mysqli_prepare($link, $sql)) {
    //     mysqli_stmt_bind_param($stmt, "s", $param_id);



    //     if (mysqli_stmt_execute($stmt)) {
    //         $result = mysqli_stmt_get_result($stmt);

    //         if (mysqli_num_rows($result) == 1) {
    //             $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    //             // Retrieve individual field value



    //         }
    //         else {
    //             // URL doesn't contain valid id. Redirect to error page

    //             exit();
    //         }

    //     }
    //     else {
    //         echo "Oops! Something went wrong. Please try again later.";
    //     }
    // }

    // // Close statement
    // mysqli_stmt_close($stmt);

    // // Close connection
    // mysqli_close($link);
    }
    else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
                        <link rel="stylesheet"
                            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                        <style>
                        .wrapper {
                            width: 100%;
                            margin: 0 auto;
                        }
                        </style>

                        <div class="wrapper">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-md-12">
                                        <h2 class="mt-5"></h2>
                                        <p>
                                        <h6>Please edit the input values and submit to update the employee record.</h6>
                                        </p>
                                        <form
                                            action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>"
                                            method="post">

                                            <div class="row">

                                                <div class="col-lg-12">

                                                    <div class="form-group">
                                                        <label for=“nc”>Employee name</label><textarea name="nc"
                                                            class="form-control "><?php echo $name; ?></textarea>
                                                    </div>

                                                    <div class=“form-group”>
                                                        <label for=“bc”>Project</label><textarea name="bc"
                                                            class="form-control "><?php echo $address; ?></textarea>
                                                    </div><br>

                                                    <div class=“form-group”><label for=“rk”>RM</label>
                                                        <select name="rk" id="rk" class="form-control "
                                                            value="<?php echo $salary; ?>">
                                                            <option value="Sumeet Nembhani">Sumeet Nembhani</option>
                                                            <option value="Sameer Salgoankar">Sameer Salgoankar</option>
                                                            <option value="Charles Prince">Charles Prince</option>
                                                            <option value="Sudhir Sawant">Sudhir Sawant</option>
                                                            <option value="Pallavi Patil">Pallavi Patil</option>
                                                            <option value="Santosh(00061)">Santosh(00061)</option>
                                                            <option value="Nandkumar M">Nandkumar M</option>
                                                            <option value="Sanjay Bhavnani">Sanjay Bhavnani</option>
                                                            <option value="Manoj Kahar">Manoj Kahar</option>
                                                            <option value="Rupal N Pandya">Rupal N Pandya</option>
                                                            <option value="Sachin Bhagat">Sachin Bhagat</option>
                                                            <option value="Supriyo Dutta">Supriyo Dutta</option>
                                                            <option value="Raman Sharma">Raman Sharma</option>
                                                            <option value="Pravin Pillai">Pravin Pillai</option>
                                                            <option value="Sanu Thomas">Sanu Thomas</option>
                                                            <option value="Susmita Dutta">Susmita Dutta</option>
                                                            <option value="Santosh Manchal">Santosh Manchal</option>
                                                            <option value="Vishal Doshi">Vishal Doshi</option>
                                                            <option value="Suhas Dingare">Suhas Dingare</option>
                                                            <option value="Satish Sharma">Satish Sharma</option>
                                                            <option value="Montu Surati">Montu Surati</option>
                                                            <option value="Vidyut Vilas Jadhav">Vidyut Vilas Jadhav
                                                            </option>
                                                            <option value="Nishigandh Sudrik">Nishigandh Sudrik</option>
                                                            <option value="Sanjeev Asher">Sanjeev Asher</option>
                                                            <option value="Sumeet Batra">Sumeet Batra</option>
                                                            <option value="Amarjeet">Amarjeet</option>
                                                            <option value="Satish Sharma(00159)">Satish Sharma(00159)
                                                            </option>
                                                            <option value="Sachin R Bhagat(00859)">Sachin R
                                                                Bhagat(00859)</option>
                                                            <option value="Ketaki Ameya Bhagwat(03855)">Ketaki Ameya
                                                                Bhagwat(03855)</option>
                                                            <option value="Samar Sawale">Samar Sawale</option>
                                                            <option value="Meenakshi Mohandas Nagdev(04847)">Meenakshi
                                                                Mohandas Nagdev(04847)</option>
                                                            <option value="Sanjeev Krishnaraj Asher(C461)">Sanjeev
                                                                Krishnaraj Asher(C461)</option>
                                                            <option value="Pallavi Sudhir Patil(03318)">Pallavi Sudhir
                                                                Patil(03318)</option>
                                                            <option value="Supriyo Bhumendra Dutta(02406)">Supriyo
                                                                Bhumendra Dutta(02406)</option>
                                                            <option value="Kumar NK">Kumar NK</option>
                                                            <option value="Nitesh Bharat Bedi(03507)">Nitesh Bharat
                                                                Bedi(03507)</option>
                                                            <option value="Mohnish Motwani (03280)">Mohnish Motwani
                                                                (03280)</option>
                                                            <option value="Jeevika Perumal (03424)">Jeevika Perumal
                                                                (03424)</option>
                                                            <option value="Prachi Karwatkar(00034)">Prachi
                                                                Karwatkar(00034)</option>
                                                            <option value="Sankar Pradhan(04416)">Sankar Pradhan(04416)
                                                            </option>
                                                            <option value="Samir Kulkarni(00191)">Samir Kulkarni(00191)
                                                            </option>
                                                            <option value="Sankara Narayanan Subramaniam(02896)">Sankara
                                                                Narayanan Subramaniam(02896)</option>
                                                            <option value="Montu Surati(00120)">Montu Surati(00120)
                                                            </option>
                                                            <option value="Narasimha Prasad Badada(04093)">Narasimha
                                                                Prasad Badada(04093)</option>
                                                            <option value="Victor Johnbritto (03294)">Victor Johnbritto
                                                                (03294)</option>
                                                            <option value="Nirnoy Sinha Chaudhuri(04175)">Nirnoy Sinha
                                                                Chaudhuri(04175)</option>
                                                            <option value="Sanket Rohit Upadhyay(C449)">Sanket Rohit
                                                                Upadhyay(C449)</option>
                                                            <option value="Vaibhav Padyal(00333)">Vaibhav Padyal(00333)
                                                            </option>
                                                            <option value="Nandkumar   M(00003)">Nandkumar M(00003)
                                                            </option>
                                                            <option value="Swapnil Arun Gholap(04369)">Swapnil Arun
                                                                Gholap(04369)</option>
                                                            <option value="Shyam Sundar G(04245)">Shyam Sundar G(04245)
                                                            </option>
                                                            <option value="Mathew Joseph (C458)">Mathew Joseph (C458)
                                                            </option>
                                                            <option value="Vinothkumar Swamidhanapal(04227)">Vinothkumar
                                                                Swamidhanapal(04227)</option>
                                                            <option value="Francy Chacko Thattil(03219)">Francy Chacko
                                                                Thattil(03219)</option>
                                                            <option value="Sanjay  Quadros(03350)">Sanjay Quadros(03350)
                                                            </option>
                                                            <option value="Charles Prince H(03970)">Charles Prince
                                                                H(03970)</option>
                                                            <option value="Avadhut Narsinha Gharat(00632)">Avadhut
                                                                Narsinha Gharat(00632)</option>
                                                            <option value="Kriti Sanjay Swarup(03170)">Kriti Sanjay
                                                                Swarup(03170)</option>
                                                            <option value="Amarjeet(00161)">Amarjeet(00161)</option>
                                                            <option value="Paresh Narendra Mehta(04846)">Paresh Narendra
                                                                Mehta(04846)</option>
                                                            <option value="N Swaminathan(C444)">N Swaminathan(C444)
                                                            </option>
                                                            <option value="Sandip   Patil(00254)">Sandip Patil(00254)
                                                            </option>
                                                            <option value="Chintaman Pandharinath Sanap(00716)">
                                                                Chintaman Pandharinath Sanap(00716)</option>
                                                            <option value="Rucha Patil (03125)">Rucha Patil (03125)
                                                            </option>
                                                            <option value="Santosh Shankar Manchal(04243)">Santosh
                                                                Shankar Manchal(04243)</option>
                                                            <option value="Manojkumar Premshankar Kahar(03762)">
                                                                Manojkumar Premshankar Kahar(03762)</option>
                                                            <option value="Mahesh Arun Newalkar(04513)">Mahesh Arun
                                                                Newalkar(04513)</option>
                                                            <option value="Satish Awadh Sharma(01760)">Satish Awadh
                                                                Sharma(01760)</option>
                                                            <option value="Sumeet Nembhani (03527)">Sumeet Nembhani
                                                                (03527)</option>
                                                            <option value="Vishant Kishore Mhadolkar(05073)">Vishant
                                                                Kishore Mhadolkar(05073)</option>
                                                            <option value="Ashok Reddy Yenumala(04706)">Ashok Reddy
                                                                Yenumala(04706)</option>
                                                            <option value="Vishal Doshi(00068)">Vishal Doshi(00068)
                                                            </option>
                                                            <option value="Raju Harilal Soni(03786)">Raju Harilal
                                                                Soni(03786)</option>
                                                            <option value="Bharat Kumar Dayaramani(01794)">Bharat Kumar
                                                                Dayaramani(01794)</option>
                                                            <option value="Dennis Joe Christopher David(02248)">Dennis
                                                                Joe Christopher David(02248)</option>
                                                            <option value="Ashay Sudhakar Deshpande(04345)">Ashay
                                                                Sudhakar Deshpande(04345)</option>
                                                            <option value="Shailendra Puri">Shailendra Puri</option>
                                                            <option value="Taranjit Saini">Taranjit Saini</option>
                                                            <option value="Dennis David">Dennis David</option>
                                                            <option value="Ajay Barot">Ajay Barot</option>
                                                            <option value="Vaidehi Pawar">Vaidehi Pawar</option>
                                                            <option value="Nirnoy Sinha Chaudhuri">Nirnoy Sinha
                                                                Chaudhuri</option>
                                                            <option value="Swarup  Mitra">Swarup Mitra</option>
                                                            <option value="Ketaki Bhagwat">Ketaki Bhagwat</option>
                                                            <option value="Avadhut Gharat">Avadhut Gharat</option>
                                                            <option value="Sankara Narayanan Subramaniam">Sankara
                                                                Narayanan Subramaniam</option>
                                                            <option value="Rupal Pandya">Rupal Pandya</option>
                                                            <option value="Ravi Kiran">Ravi Kiran</option>
                                                            <option value="Arpan Mazumdar">Arpan Mazumdar</option>
                                                            <option value="Bharat Kumar Dayaramani">Bharat Kumar
                                                                Dayaramani</option>
                                                            <option value="Sanjay Bhavnani (03965)">Sanjay Bhavnani
                                                                (03965)</option>

                                                        </select>
                                                    </div><br>

                                                    <div class=“form-group”>
                                                        <label for=“nc1”>DH</label>
                                                        <select name="nc1" id="nc1" class="form-control "
                                                            value="<?php echo $name1; ?>">

                                                            <option value="Sumeet Nembhani">Sumeet Nembhani</option>
                                                            <option value="Chintan Turki">Chintan Turki</option>
                                                            <option value="Sanjay Bhavnani">Sanjay Bhavnani</option>
                                                            <option value="Sudhir Sawant">Sudhir Sawant</option>
                                                            <option value="Pallavi Patil">Pallavi Patil</option>
                                                            <option value="Swarup Bose">Swarup Bose</option>
                                                            <option value="Sanjay Quadros">Sanjay Quadros</option>
                                                            <option value="Manoj Kahar">Manoj Kahar</option>
                                                            <option value="Supriyo Dutta">Supriyo Dutta</option>
                                                            <option value="Nandkumar M">Nandkumar M</option>
                                                            <option value="Sachin Bhagat">Sachin Bhagat</option>
                                                            <option value="Raman Sharma">Raman Sharma</option>
                                                            <option value="Pravin Pillai">Pravin Pillai</option>
                                                            <option value="Sanu Thomas">Sanu Thomas</option>
                                                            <option value="Ribhudeb Bhattacharya">Ribhudeb Bhattacharya
                                                            </option>
                                                            <option value="Shailendra Puri">Shailendra Puri</option>
                                                            <option value="Sameer Salgaonkar">Sameer Salgaonkar</option>
                                                            <option value="Yogita Dere">Yogita Dere</option>
                                                            <option value="Raju Soni">Raju Soni</option>
                                                            <option value="Prakash Mahajan">Prakash Mahajan</option>
                                                            <option value="Santosh(00061)">Santosh(00061)</option>
                                                            <option value="Yogita   Dere(00028)">Yogita Dere(00028)
                                                            </option>
                                                            <option value="Sachin R Bhagat(00859)">Sachin R
                                                                Bhagat(00859)</option>
                                                            <option value="Tina Mathew(03690)">Tina Mathew(03690)
                                                            </option>
                                                            <option value="NA">NA</option>
                                                            <option value="Raju Harilal Soni(03786)">Raju Harilal
                                                                Soni(03786)</option>
                                                            <option value="Sanjeev Krishnaraj Asher(C461)">Sanjeev
                                                                Krishnaraj Asher(C461)</option>
                                                            <option value="Pallavi Sudhir Patil(03318)">Pallavi Sudhir
                                                                Patil(03318)</option>
                                                            <option value="Pravin Pillai(00240)">Pravin Pillai(00240)
                                                            </option>
                                                            <option value="Supriyo Bhumendra Dutta(02406)">Supriyo
                                                                Bhumendra Dutta(02406)</option>
                                                            <option value="Kumar NK">Kumar NK</option>
                                                            <option value="Victor Johnbritto (03294)">Victor Johnbritto
                                                                (03294)</option>
                                                            <option value="Mathew Joseph (C458)">Mathew Joseph (C458)
                                                            </option>
                                                            <option value="Prachi Karwatkar(00034)">Prachi
                                                                Karwatkar(00034)</option>
                                                            <option value="Sanjay  Quadros(03350)">Sanjay Quadros(03350)
                                                            </option>
                                                            <option value="Vaidehi Pawar(00099)">Vaidehi Pawar(00099)
                                                            </option>
                                                            <option value="Hariharan Manjeri Narayanan(03907)">Hariharan
                                                                Manjeri Narayanan(03907)</option>
                                                            <option value="Ravishanker Pazhayanur Ramachandran(00942)">
                                                                Ravishanker Pazhayanur Ramachandran(00942)</option>
                                                            <option value="Montu Surati(00120)">Montu Surati(00120)
                                                            </option>
                                                            <option value="Sanjay Bhavnani(03965)">Sanjay
                                                                Bhavnani(03965)</option>
                                                            <option value="Nandkumar   M(00003)">Nandkumar M(00003)
                                                            </option>
                                                            <option value="Vaibhav Padyal(00333)">Vaibhav Padyal(00333)
                                                            </option>
                                                            <option value="Swarup Krishna Bose(03912)">Swarup Krishna
                                                                Bose(03912)</option>
                                                            <option value="Francy Chacko Thattil(03219)">Francy Chacko
                                                                Thattil(03219)</option>
                                                            <option value="Ketan Vinodrai Parajia(04642)">Ketan Vinodrai
                                                                Parajia(04642)</option>
                                                            <option value="Dr. Pareshnath Paul(04495)">Dr. Pareshnath
                                                                Paul(04495)</option>
                                                            <option value="N Swaminathan(C444)">N Swaminathan(C444)
                                                            </option>
                                                            <option value="Sandip   Patil(00254)">Sandip Patil(00254)
                                                            </option>
                                                            <option value="Manojkumar Premshankar Kahar(03762)">
                                                                Manojkumar Premshankar Kahar(03762)</option>
                                                            <option value="Sumeet Nembhani (03527)">Sumeet Nembhani
                                                                (03527)</option>
                                                            <option value="Amarjeet(00161)">Amarjeet(00161)</option>
                                                            <option value="Sameer Salgaonkar(04078)">Sameer
                                                                Salgaonkar(04078)</option>
                                                            <option value="Mayuresh Nirantar(05149)">Mayuresh
                                                                Nirantar(05149)</option>
                                                            <option value="Dennis Joe Christopher David(02248)">Dennis
                                                                Joe Christopher David(02248)</option>
                                                            <option value="Chintan M Turki(03917)">Chintan M
                                                                Turki(03917)</option>
                                                            <option value="Ashay Sudhakar Deshpande(04345)">Ashay
                                                                Sudhakar Deshpande(04345)</option>
                                                            <option value="Pratap ">Pratap </option>
                                                            <option value="Ketaki Bhagwat">Ketaki Bhagwat</option>
                                                            <option value="Dennis David">Dennis David</option>
                                                            <option value="Vinay Wankhede">Vinay Wankhede</option>
                                                            <option value="Vaidehi Pawar">Vaidehi Pawar</option>
                                                            <option value="Nirnoy Sinha Chaudhuri">Nirnoy Sinha
                                                                Chaudhuri</option>
                                                            <option value="Riten Thakkar">Riten Thakkar</option>
                                                            <option value="Tina Mathew">Tina Mathew</option>
                                                            <option value="Ravishanker Ramachandran">Ravishanker
                                                                Ramachandran</option>
                                                            <option value="Test">Test</option>
                                                        </select>

                                                    </div><br>

                                                    <div class=“form-group”><label for=“bc1”>DEPT</label>
                                                        <select name="bc1" id="bc1" class="form-control "
                                                            value="<?php echo $address1; ?>">
                                                            <option value="Software Delivery">Software Delivery</option>
                                                            <option value="DeX - Digital Examination">DeX - Digital
                                                                Examination</option>
                                                            <option value="Infrastructure Management Services">
                                                                Infrastructure Management Services</option>
                                                            <option value="Customer Care Services">Customer Care
                                                                Services</option>
                                                            <option value="Human Resources Department">Human Resources
                                                                Department</option>
                                                            <option value="Administration">Administration</option>
                                                            <option value="Sales & Marketing">Sales & Marketing</option>

                                                            <option value="Application Modernisation : Practice">
                                                                Application
                                                                Modernisation :
                                                                Practice</option>
                                                            <option value="Business Operations">Business Operations
                                                            </option>
                                                            <option value="Business Operations : Business Support">
                                                                Business
                                                                Operations :
                                                                Business Support</option>
                                                            <option value="Business Operations : Channel">Business
                                                                Operations :
                                                                Channel
                                                            </option>
                                                            <option value="Business Operations : Content">Business
                                                                Operations :
                                                                Content
                                                            </option>
                                                            <option value="Business Operations : DEX Development">
                                                                Business
                                                                Operations : DEX
                                                                Development</option>
                                                            <option
                                                                value="Business Operations : Exam Result Processingt">
                                                                Business
                                                                Operations : Exam Result Processingt</option>
                                                            <option value="Business Operations : HO Operations">Business
                                                                Operations : HO
                                                                Operations</option>
                                                            <option value="Business Operations : Production Support">
                                                                Business
                                                                Operations :
                                                                Production Support</option>
                                                            <option value="Business Operations : Quality & Training">
                                                                Business
                                                                Operations :
                                                                Quality & Training</option>
                                                            <option value="Business Operations : Regional IT">Business
                                                                Operations : Regional
                                                                IT</option>
                                                            <option value="Business Operations : Regional Operations">
                                                                Business
                                                                Operations :
                                                                Regional Operations</option>
                                                            <option value="Business Operations : Software Testing">
                                                                Business
                                                                Operations :
                                                                Software Testing</option>
                                                            <option value="Business Operations : Vigilance">Business
                                                                Operations
                                                                : Vigilance
                                                            </option>
                                                            <option value="Business Solutions">Business Solutions
                                                            </option>
                                                            <option value="Business Solutions : Sales">Business
                                                                Solutions :
                                                                Sales</option>
                                                            <option value="CEO's Office">CEO's Office</option>
                                                            <option value="CEO's Office : Strategy">CEO's Office :
                                                                Strategy
                                                            </option>
                                                            <option value="Delivery : CCS">Delivery : CCS</option>
                                                            <option value="Delivery : Infrastructure">Delivery :
                                                                Infrastructure
                                                            </option>
                                                            <option value="DEX">DEX</option>
                                                            <option value="Digital DeliveryGST">Digital DeliveryGST
                                                            </option>
                                                            <option
                                                                value="Digital Delivery : Application Modernisation">
                                                                Digital
                                                                Delivery :
                                                                Application Modernisation</option>
                                                            <option value="Digital Delivery : Business Excellence">
                                                                Digital
                                                                Delivery :
                                                                Business Excellence</option>
                                                            <option value="Digital Delivery : Business Transformation">
                                                                Digital
                                                                Delivery :
                                                                Business Transformation</option>
                                                            <option value="Digital Delivery : Data Analytics">Digital
                                                                Delivery :
                                                                Data
                                                                Analytics</option>
                                                            <option
                                                                value="Digital Delivery : Professional Services Group">
                                                                Digital Delivery
                                                                : Professional Services Group</option>
                                                            <option value="Digital Sales">Digital Sales</option>
                                                            <option value="Finance & Accounts">Finance & Accounts
                                                            </option>
                                                            <option value="Finance & Accounts : Accounts Payables">
                                                                Finance &
                                                                Accounts :
                                                                Accounts Payables</option>
                                                            <option value="Finance & Accounts : Accounts Receivables">
                                                                Finance &
                                                                Accounts :
                                                                Accounts Receivables</option>
                                                            <option value="Finance & Accounts : GST">Finance & Accounts
                                                                : GST
                                                            </option>
                                                            <option value="Finance & Accounts : MIS">Finance & Accounts
                                                                : MIS
                                                            </option>
                                                            <option value="Finance & Accounts : Payroll">Finance &
                                                                Accounts :
                                                                Payroll
                                                            </option>
                                                            <option value="HO Operations : Core">HO Operations : Core
                                                            </option>
                                                            <option value="HO Operations : Gateway">HO Operations :
                                                                Gateway
                                                            </option>
                                                            <option value="Human Resource Department">Human Resource
                                                                Department
                                                            </option>
                                                            <option
                                                                value="Human Resource Department : Service Delivery">
                                                                Human
                                                                Resource
                                                                Department : Service Delivery</option>
                                                            <option
                                                                value="Human Resource Department : Talent Acquisition">
                                                                Human
                                                                Resource
                                                                Department : Talent Acquisition</option>
                                                            <option value="Legal & Secretarial">Legal & Secretarial
                                                            </option>
                                                            <option value="NSEIT">NSEIT</option>
                                                            <option value="Technology & Innovation">Technology &
                                                                Innovation
                                                            </option>
                                                            <option value="Technology & Innovation : IT & Infra">
                                                                Technology &
                                                                Innovation :
                                                                IT & Infra</option>
                                                            <option value="Technology & Innovation : RMG">Technology &
                                                                Innovation : RMG
                                                            </option>
                                                            <option
                                                                value="Technology & Innovation : Tech Solutions Group">
                                                                Technology &
                                                                Innovation : Tech Solutions Group</option>
                                                        </select>
                                                    </div><br>


                                                    <div class=“form-group”><label for=“rk1”>TOA</label>
                                                        <select name="rk1" id="rk1" class="form-control "
                                                            value="<?php echo $salary1; ?>">
                                                            <option value="Star">Star</option>
                                                            <option value="Special">Special</option>
                                                            <option value="Spot">Spot</option>
                                                        </select>
                                                    </div><br>
                                                    <div class=“form-group”><label for=“nc2”>AMOUNT</label>
                                                        <select name="nc2" id="nc2" class="form-control "
                                                            value="<?php echo $name2; ?>">
                                                            <option value="5000">5000</option>
                                                            <option value="2500">2500</option>
                                                            <option value="1000">1000</option>
                                                        </select>
                                                    </div><br>
                                                    <div class=“form-group”>
                                                        <label for=“bc2”>MONTH</label><textarea name="bc2"
                                                            class="form-control "><?php echo $address2; ?></textarea>
                                                    </div><br>
                                                    <div class=“form-group”>
                                                        <label for=“rk2”>CITATION</label><textarea name="rk2"
                                                            class="form-control "><?php echo $salary2; ?></textarea>
                                                    </div><br>
                                                    <div class=“form-group”>
                                                        <label for=“nc3”>DDate</label><textarea name="nc3"
                                                            class="form-control "><?php echo $name3; ?></textarea>
                                                    </div><br>
                                                    <div class=“form-group”><label for=“bc3”>BU</label>
                                                        <select name="bc3" id="bc3" class="form-control "
                                                            value="<?php echo $address3; ?>">
                                                            <option value="Digital">Digital</option>
                                                            <option value="DEX">DEX</option>
                                                            <option value="Support">Support</option>
                                                            <option value="NSE-IT">NSE-IT</option>
                                                        </select>
                                                    </div><br>

                                                </div>

                                            </div>

                                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                            <input type="submit" name="update_btn" class="btn btn-primary"
                                                value="Submit">
                                            <a href="viewjtasjt.php" class="btn btn-secondary ml-2">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end header section -->



    <end landing section -->




        <!-- footer section -->
        <section class="container-fluid footer_section">
            <p>
                NSE-IT &copy; 2022 All Rights Reserved By
            </p>
        </section>
        <!-- footer section -->

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!-- google map js -->
        <!-- end google map js -->
</body>

</html>