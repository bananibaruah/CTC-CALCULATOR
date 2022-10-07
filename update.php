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

                    <a href="index.php"><img src="images\nselogo.png" height="80px" width="150px"></a>
                    <!-- <button class="GFG1" onclick="window.location.href = '../logout.php';" style="float: right;">
                        Logout
                    </button> -->
                    <!-- <button class="GFG" onclick="window.location.href = 'exportdt.php';" style="float: right;">
                        Export
                    </button> -->
                    <button class="GFG" onclick="window.location.href = '/CTC-CALCULATOR/index.php';"
                        style="float: right;">
                        Home
                    </button>
                    <button class="GFG" onclick="window.location.href = '/CTC-CALCULATOR/FTESA/index.php';"
                        style="float: right;">
                        SAMPLE ANNEXURE
                    </button>
                    <br />


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
$name = $address = $salary = $name1 = $address1 = $salary1 = $name2 = $address2 = $salary2 = $name3 = $address3 = $salary3 = $name4 = $address4 = $salary4 = $name5 = $address5 = $salary5 = $name6 = $address6 = $salary6 = $name7 = $address7 = $salary7 = $name8 = $address8 = $salary8 = $name9 = $address9 = $salary9 = $name10 = $address10 = $salary10 = $name11 = $address11 = $salary11 = $name12 = $address12 = $salary12 = $name13 = $address13 = $salary13 = $name14 = $address14 = $salary14 = $name15 = $address15 = $salary15 = $name16 = $address16 = $salary16 = $name17 = $address17 = $salary17 = $name18 = $address18 =  $name19 = $address19 = $salary19 = $salary20 = "";

$name_err = $address_err = $salary_err = $name1_err = $address1_err = $salary1_err = $name2_err = $address2_err = $salary2_err = $name3_err = $address3_err = $salary3_err = $name4_err = $address4_err = $salary4_err = $name5_err = $address5_err = $salary5_err = $name6_err = $address6_err = $salary6_err = $name7_err = $address7_err = $salary7_err = $name8_err = $address8_err = $salary8_err = $name9_err = $address9_err = $salary9_err = $name10_err = $address10_err = $salary10_err = $name11_err = $address11_err = $salary11_err = $name12_err = $address12_err = $salary12_err = $name13_err = $address13_err = $salary13_err = $name14_err = $address14_err = $salary14_err = $name15_err = $address15_err = $salary15_err = $name16_err = $address16_err = $salary16_err = $name17_err = $address17_err = $salary17_err = $name18_err = $name19_err = $address19_err = $salary_19_err = $salary_20_err ="";


if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Get hidden input value
    $id = $_POST["id"];

    $address13 = trim($_POST["bc13"]);
    $name = trim($_POST["nc"]);
    $address = trim($_POST["bc"]);
    $salary = trim($_POST["rk"]);
    $name1 = trim($_POST["nc1"]);
    $address1 = trim($_POST["bc1"]);
    $salary1 = trim($_POST["rk1"]);
    $name2 = trim($_POST["nc2"]);
    $address2 = trim($_POST["bc2"]);


    $name4 = filter_input(INPUT_POST, 'nc4', FILTER_SANITIZE_STRING);

    $address4 = filter_input(INPUT_POST, 'bc4', FILTER_SANITIZE_STRING);

    $salary4 = filter_input(INPUT_POST, 'rk4', FILTER_SANITIZE_STRING);

    $name5 = filter_input(INPUT_POST, 'nc5', FILTER_SANITIZE_STRING);

    $address5 = filter_input(INPUT_POST, 'bc5', FILTER_SANITIZE_STRING);

    $salary5 = filter_input(INPUT_POST, 'rk5', FILTER_SANITIZE_STRING);

    $name6 = filter_input(INPUT_POST, 'nc6', FILTER_SANITIZE_STRING);

    $address6 = filter_input(INPUT_POST, 'bc6', FILTER_SANITIZE_STRING);

    $salary6 = filter_input(INPUT_POST, 'rk6', FILTER_SANITIZE_STRING);

    $name7 = filter_input(INPUT_POST, 'nc7', FILTER_SANITIZE_STRING);

    $address7 = filter_input(INPUT_POST, 'bc7', FILTER_SANITIZE_STRING);

    $salary7 = filter_input(INPUT_POST, 'rk7', FILTER_SANITIZE_STRING);

    $name8 = filter_input(INPUT_POST, 'nc8', FILTER_SANITIZE_STRING);

    $address8 = filter_input(INPUT_POST, 'bc8', FILTER_SANITIZE_STRING);

    $salary8 = filter_input(INPUT_POST, 'rk8', FILTER_SANITIZE_STRING);

    $name9 = filter_input(INPUT_POST, 'nc9', FILTER_SANITIZE_STRING);

    $address9 = filter_input(INPUT_POST, 'bc9', FILTER_SANITIZE_STRING);

    $salary9 = filter_input(INPUT_POST, 'rk9', FILTER_SANITIZE_STRING);

    $name10 = filter_input(INPUT_POST, 'nc10', FILTER_SANITIZE_STRING);

    $address10 = filter_input(INPUT_POST, 'bc10', FILTER_SANITIZE_STRING);

    $salary10 = filter_input(INPUT_POST, 'rk10', FILTER_SANITIZE_STRING);

    $name11 = filter_input(INPUT_POST, 'nc11', FILTER_SANITIZE_STRING);

    $address11 = filter_input(INPUT_POST, 'bc11', FILTER_SANITIZE_STRING);

    $salary11 = filter_input(INPUT_POST, 'rk11', FILTER_SANITIZE_STRING);

    $name12 = filter_input(INPUT_POST, 'nc12', FILTER_SANITIZE_STRING);

    $address12 = filter_input(INPUT_POST, 'bc12', FILTER_SANITIZE_STRING);

    $salary12 = filter_input(INPUT_POST, 'rk12', FILTER_SANITIZE_STRING);

    $name13 = filter_input(INPUT_POST, 'nc13', FILTER_SANITIZE_STRING);

    // $address13 = filter_input(INPUT_POST, 'bc13', FILTER_SANITIZE_STRING);

    $salary13 = filter_input(INPUT_POST, 'rk13', FILTER_SANITIZE_STRING);

    $name14 = filter_input(INPUT_POST, 'nc14', FILTER_SANITIZE_STRING);

    $address14 = filter_input(INPUT_POST, 'bc14', FILTER_SANITIZE_STRING);

    $salary14 = filter_input(INPUT_POST, 'rk14', FILTER_SANITIZE_STRING);

    $name15 = filter_input(INPUT_POST, 'nc15', FILTER_SANITIZE_STRING);

    $address15 = filter_input(INPUT_POST, 'bc15', FILTER_SANITIZE_STRING);

    $salary15 = filter_input(INPUT_POST, 'rk15', FILTER_SANITIZE_STRING);

    $name16 = filter_input(INPUT_POST, 'nc16', FILTER_SANITIZE_STRING);

    $address16 = filter_input(INPUT_POST, 'bc16', FILTER_SANITIZE_STRING);

    $salary16 = filter_input(INPUT_POST, 'rk16', FILTER_SANITIZE_STRING);

    $name17 = filter_input(INPUT_POST, 'nc17', FILTER_SANITIZE_STRING);

    $address17 = filter_input(INPUT_POST, 'bc17', FILTER_SANITIZE_STRING);

    $salary17 = filter_input(INPUT_POST, 'rk17', FILTER_SANITIZE_STRING);

    $name18 = filter_input(INPUT_POST, 'nc18', FILTER_SANITIZE_STRING);

    // $name1 = filter_input(INPUT_POST, 'nc1', FILTER_SANITIZE_STRING);

    // $address1 = filter_input(INPUT_POST, 'bc1', FILTER_SANITIZE_STRING);

    // $salary1 = filter_input(INPUT_POST, 'rk1', FILTER_SANITIZE_STRING);

    // $name2 = filter_input(INPUT_POST, 'nc2', FILTER_SANITIZE_STRING);

    // $address2 = filter_input(INPUT_POST, 'bc2', FILTER_SANITIZE_STRING);

    $salary2 = filter_input(INPUT_POST, 'rk2', FILTER_SANITIZE_STRING);

    $name3 = filter_input(INPUT_POST, 'nc3', FILTER_SANITIZE_STRING);

    $address3 = filter_input(INPUT_POST, 'bc3', FILTER_SANITIZE_STRING);

    $salary3 = filter_input(INPUT_POST, 'rk3', FILTER_SANITIZE_STRING);

    // $name = filter_input(INPUT_POST, 'nc', FILTER_SANITIZE_STRING);

    // $address = filter_input(INPUT_POST, 'bc', FILTER_SANITIZE_STRING);

    // $salary = filter_input(INPUT_POST, 'rk', FILTER_SANITIZE_STRING);

    $address18 = filter_input(INPUT_POST, 'bc18', FILTER_SANITIZE_STRING);

    $name19 = filter_input(INPUT_POST, 'nc19', FILTER_SANITIZE_STRING);

    $address19 = filter_input(INPUT_POST, 'bc19', FILTER_SANITIZE_STRING);

    $salary19 = filter_input(INPUT_POST, 'rk19', FILTER_SANITIZE_STRING);

    $salary20 = filter_input(INPUT_POST, 'rk20', FILTER_SANITIZE_STRING);


    // $salary = trim($_POST["rk"]);

    echo $salary;


    $sql = "UPDATE dt SET  
    Personal_Bank_Name = '$name', 
    Personal_Account_Number = '$address', 
    Personal_IFSC_Number = '$salary', 
    HDFC_IFSC_Number = '$name1', 
    PAN_Card_Number = '$address1', 
    Aadhar_Card_Number = '$salary1',
    HDFC_Account_Number = '$name2', 
    HDFC_Bank_Name = '$address2', 
    Warning_Letter = '$salary2', 
    Transfer_Letter = '$name3', 
    PIP = '$address3', 
    Absconding_Letter = '$salary3',
    Employee_Database_Detail_Form = '$name4',   
    ID_Card_Form = '$address4',
    Reference_Check_Form = '$salary4',
    GMP_Form_Only_PE = '$name5', 
    NDA = '$address5', 
    Form_F_Gratuity_only_PE = '$salary5',
    Nomination_Decaration_Form = '$name6', 
    EPFO_From = '$address6', 
    EPFO_Detail_Form = '$salary6',
    IT_Form = '$name7', 
    Personal_Data_Form = '$address7', 
    Investment_Form = '$salary7', 
    Code_of_Conduct_From_December_2020 = '$name8', 
    Dex_Undertaking_From_July_2021 = '$address8', 
    COE__AUP = '$salary8', 
    Aadhar_Card = '$name9', 
    Pan_Card = '$address9', 
    Four__Photographs = '$salary9', 
    SSC_Birth_Transfer = '$name10', 
    PP_DL_Pho_VID = '$address10', 
    TB_EB_VPP_RC = '$salary10', 
    SSC_Board_marksheet = '$name11', 
    HSC_Board_Marksheet= '$address11', 
    Degree__PG = '$salary11', 
    ECRL = '$name12', 
    HDFC_Cheque_Passbook = '$address12', 
    Appointment_Letter_Shared_Status = '$salary12', 
    Appointment_Letter_Acknowledged_Status = '$name13',
    BGV_Status = '$address13', 
    Offer_Letter_signed = '$salary13', 
    Offer_acceptance_email = '$name14', 
    Approvals = '$address14', 
    Employee_aplication_Form = '$salary14', 
    File_Status = '$name15', 
    Count_of_Pending = '$address15', 
    Final_total_Status = '$salary15', 
    Documents_Pending = '$name16', 
    Forms_Pending = '$address16', 
    Remarks = '$salary16', 
    Confirmation_Letter = '$name17', 
    Service_Letter = '$address17', 
    Experience_Letter = '$salary17',
    Relieving_Letter = '$name18',
    Employee_Status = '$address18'

     WHERE Ecodedt = '$id';";
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


        
        $id = trim($_GET["id"]);


        $sql = "SELECT * FROM dt WHERE Ecodedt  = '$id'";
        $sql2 = "SELECT * FROM jt WHERE Ecode  = '$id'";

        $stmt = $link->query($sql);


        $stmt2 = $link->query($sql2);


        if ($stmt2->num_rows > 0) {

            $param_id = $id;
            $row2 = $stmt2->fetch_assoc();

            $name19 = $row2["Ecode"];
            $address19 = $row2["Efname"]. " " .$row2["Emname"]. " " .$row2["Elname"];
            $salary19 = $row2["Eomail"];
            $salary20 = $row2["Edoj"];

            // echo $name19;
            // echo $address19;

        echo "<script>
            $(document).ready(function(){
            $('#nc19').val('$name19');
            $('#bc19').val('$address19');
            $('#rk19').val('$salary19');
            $('#rk20').val('$salary20');
        });
        </script>";



        }

        // // mysqli_stmt_bind_param($stmt, "s", $param_id);
        // $param_id = $id;


        if ($stmt->num_rows > 0) {
            $param_id = $id;
            $row = $stmt->fetch_assoc();


            $name = $row["Personal_Bank_Name"];
            $name = $row["Personal_Bank_Name"];
            $address = $row["Personal_Account_Number"];
            $salary = $row["Personal_IFSC_Number"];
            $name1 = $row["HDFC_IFSC_Number"];
            $address1 = $row["PAN_Card_Number"];
            $salary1 = $row["Aadhar_Card_Number"];
            $name2 = $row["HDFC_Account_Number"];
            $address2 = $row["HDFC_Bank_Name"];
            $salary2 = $row["Warning_Letter"];
            $name3 = $row["Transfer_Letter"];
            $address3 = $row["PIP"];
            $salary3 = $row["Absconding_Letter"];
            $name4 = $row['Employee_Database_Detail_Form'];
            $address4 = $row['ID_Card_Form'];
            $salary4 = $row['Reference_Check_Form'];
            $name5 = $row['GMP_Form_Only_PE'];
            $address5 = $row['NDA'];
            $salary5 = $row['Form_F_Gratuity_only_PE'];
            $name6 = $row['Nomination_Decaration_Form'];
            $address6 = $row['EPFO_From'];
            $salary6 = $row['EPFO_Detail_Form'];
            $name7 = $row['IT_Form'];
            $address7 = $row['Personal_Data_Form'];
            $salary7 = $row['Investment_Form'];
            $name8 = $row['Code_of_Conduct_From_December_2020'];
            $address8 = $row['Dex_Undertaking_From_July_2021'];
            $salary8 = $row['COE__AUP'];
            $name9 = $row['Aadhar_Card'];
            $address9 = $row['Pan_Card'];
            $salary9 = $row['Four__Photographs'];
            $name10 = $row['SSC_Birth_Transfer'];
            $address10 = $row['PP_DL_Pho_VID'];
            $salary10 = $row['TB_EB_VPP_RC'];
            $name11 = $row['SSC_Board_marksheet'];
            $address11 = $row['HSC_Board_Marksheet'];
            $salary11 = $row['Degree__PG'];
            $name12 = $row['ECRL'];
            $address12 = $row['HDFC_Cheque_Passbook'];
            $salary12 = $row['Appointment_Letter_Shared_Status'];
            $name13 = $row['Appointment_Letter_Acknowledged_Status'];
            $address13 = $row['BGV_Status'];
            $salary13 = $row['Offer_Letter_signed'];
            $name14 = $row['Offer_acceptance_email'];
            $address14 = $row['Approvals'];
            $salary14 = $row['Employee_aplication_Form'];
            $name15 = $row['File_Status'];
            $address15 = $row['Count_of_Pending'];
            $salary15 = $row['Final_total_Status'];
            $name16 = $row['Documents_Pending'];
            $address16 = $row['Forms_Pending'];
            $salary16 = $row['Remarks'];
            $name17 = $row['Confirmation_Letter'];
            $address17 = $row['Service_Letter'];
            $salary17 = $row['Experience_Letter'];
            $name18 = $row['Relieving_Letter'];
            $address18 = $row['Employee_Status'];

           

            echo "<script>
            $(document).ready(function(){
                $('#nc4').val('$name4');
                $('#bc4').val('$address4');
                $('#rk4').val('$salary4');
                $('#nc5').val('$name5');
                $('#bc5').val('$address5');
                $('#rk5').val('$salary5');
                $('#nc6').val('$name6');
                $('#bc6').val('$address6');
                $('#rk6').val('$salary6');
                $('#nc7').val('$name7');
                $('#bc7').val('$address7');
                $('#rk7').val('$salary7');
                $('#nc8').val('$name8');
                $('#bc8').val('$address8');
                $('#rk8').val('$salary8');
                $('#nc9').val('$name9');
                $('#bc9').val('$address9');
                $('#rk9').val('$salary9');
                $('#nc10').val('$name10');
                $('#bc10').val('$address10');
                $('#rk10').val('$salary10');
                $('#nc11').val('$name11');
                $('#bc11').val('$address11');
                $('#rk11').val('$salary11');
                $('#nc12').val('$name12');
                $('#bc12').val('$address12');
                $('#rk12').val('$salary12');
                $('#nc13').val('$name13');
                $('#bc13').val('$address13');
                $('#rk13').val('$salary13');
                $('#nc14').val('$name14');
                $('#bc14').val('$address14');
                $('#rk14').val('$salary14');
                $('#nc15').val('$name15');
                $('#bc15').val('$address15');
                $('#rk15').val('$salary15');
                $('#nc16').val('$name16');
                $('#bc16').val('$address16');
                $('#rk16').val('$salary16');
                $('#nc17').val('$name17');
                $('#bc17').val('$address17');
                $('#rk17').val('$salary17');
                $('#nc18').val('$name18');
                $('#nc1').val('$name1');
                $('#bc1').val('$address1');
                $('#rk1').val('$salary1');
                $('#nc2').val('$name2');
                $('#bc2').val('$address2');
                $('#rk2').val('$salary2');
                $('#nc3').val('$name3');
                $('#bc3').val('$address3');
                $('#rk3').val('$salary3');
                $('#nc').val('$name');
                $('#bc').val('$address');
                $('#rk').val('$salary');
                $('#bc18').val('$address18');
                

            
            });
            </script>";


        }
    // if ($stmt = mysqli_prepare($link, $sql)) {



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
                                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>"
                                        method="post">
                                        <div class="row">
                                            <div class="col-lg-3">

                                                <div class="form-group"><label for="nc19">Ecode</label><textarea
                                                        name="nc19" class="form-control "
                                                        readonly><?php echo $name19; ?></textarea>
                                                </div><br><br>
                                            </div>
                                            <div class="col-lg-3">

                                                <div class="form-group"><label for="bc19">Emp Name</label><textarea
                                                        name="bc19" class="form-control "
                                                        readonly><?php echo $address19; ?></textarea>
                                                </div><br><br>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"><label for="rk19">Emp Official
                                                        Mail</label><textarea name="rk19" class="form-control "
                                                        readonly><?php echo $salary19; ?></textarea>
                                                </div><br>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"><label for="rk20">Emp DOJ</label><textarea
                                                        name="rk20" class="form-control "
                                                        readonly><?php echo $salary20; ?></textarea>
                                                </div><br>
                                            </div>


                                            <div class="row">

                                                <div class="col-lg-3">

                                                    <div class="form-group"><label for="bc18">Employee Status</label>
                                                        <select name="bc18" id="bc18" class="form-control "
                                                            value="<?php echo $address18; ?>">
                                                            <option value=""></option>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>
                                                    </div><br>



                                                    <div class="form-group">
                                                        <label for="nc4">Employee_Database_Detail_Form</label>
                                                        <select name="nc4" id="nc4" class="form-control "
                                                            value="<?php echo $name4; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group"><label for="bc4">ID_Card_Form</label>
                                                        <select name="bc4" id="bc4" class="form-control "
                                                            value="<?php echo $address4; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>

                                                    <div class="form-group"><label
                                                            for="rk4">Reference_Check_Form</label><select name="rk4"
                                                            id="rk4" class="form-control "
                                                            value="<?php echo $salary4; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>

                                                    <div class="form-group"><label for="nc5">GMP_Form_Only_PE</label>
                                                        <select name="nc5" id="nc5" class="form-control "
                                                            value="<?php echo $name5; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>

                                                    <div class="form-group"><label for="bc5">NDA</label>
                                                        <select name="bc5" id="bc5" class="form-control "
                                                            value="<?php echo $address5; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>


                                                    <div class="form-group"><label
                                                            for="rk5">Form_F_Gratuity_only_PE</label>
                                                        <select name="rk5" id="rk5" class="form-control "
                                                            value="<?php echo $salary5; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="nc6">Nomination_Decaration_Form</label>
                                                        <select name="nc6" id="nc6" class="form-control "
                                                            value="<?php echo $name6; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="bc6">EPFO_From</label>
                                                        <select name="bc6" id="bc6" class="form-control "
                                                            value="<?php echo $address6; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="rk6">EPFO_Detail_Form</label>
                                                        <select name="rk6" id="rk6" class="form-control "
                                                            value="<?php echo $salary6; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="nc7">IT_Form</label>
                                                        <select name="nc7" id="nc7" class="form-control "
                                                            value="<?php echo $name7; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="bc7">Personal_Data_Form</label>
                                                        <select name="bc7" id="bc7" class="form-control "
                                                            value="<?php echo $address7; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="rk7">Investment_Form</label>
                                                        <select name="rk7" id="rk7" class="form-control "
                                                            value="<?php echo $salary7; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="nc8">Code_of_Conduct_<br>From_December_2020</label>
                                                        <select name="nc8" id="nc8" class="form-control "
                                                            value="<?php echo $name8; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="bc8">Dex_Undertaking_<br>From_July_2021</label>
                                                        <select name="bc8" id="bc8" class="form-control "
                                                            value="<?php echo $address8; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>

                                                </div>

                                                <div class="col-lg-3">


                                                    <div class="form-group"><label for="rk8">COE__AUP</label>
                                                        <select name="rk8" id="rk8" class="form-control "
                                                            value="<?php echo $salary8; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="nc9">Aadhar_Card</label>
                                                        <select name="nc9" id="nc9" class="form-control "
                                                            value="<?php echo $name9; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="bc9">Pan_Card</label>
                                                        <select name="bc9" id="bc9" class="form-control "
                                                            value="<?php echo $address9; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="rk9">Four__Photographs</label>
                                                        <select name="rk9" id="rk9" class="form-control "
                                                            value="<?php echo $salary9; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>




                                                    <div class="form-group"><label for="nc10">SSC_Birth_Transfer</label>
                                                        <select name="nc10" id="nc10" class="form-control "
                                                            value="<?php echo $name10; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="bc10">PP_DL_Pho_VID</label>
                                                        <select name="bc10" id="bc10" class="form-control "
                                                            value="<?php echo $address10; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="rk10">TB_EB_VPP_RC</label>
                                                        <select name="rk10" id="rk10" class="form-control "
                                                            value="<?php echo $salary10; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="nc11">SSC_Board_marksheet</label>
                                                        <select name="nc11" id="nc11" class="form-control "
                                                            value="<?php echo $name11; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="bc11">HSC_Board_Marksheet</label>
                                                        <select name="bc11" id="bc11" class="form-control "
                                                            value="<?php echo $address11; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>

                                                    <div class="form-group"><label for="rk11">Degree__PG</label>
                                                        <select name="rk11" id="rk11" class="form-control "
                                                            value="<?php echo $salary11; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="nc12">ECRL</label>
                                                        <select name="nc12" id="nc12" class="form-control "
                                                            value="<?php echo $name12; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="bc12">HDFC_Cheque_Passbook</label>
                                                        <select name="bc12" id="bc12" class="form-control "
                                                            value="<?php echo $address12; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="rk12">Appointment_Letter_<br>Shared_Status</label>
                                                        < <select name="rk12" id="rk12" class="form-control "
                                                            value="<?php echo $salary12; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                            </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="nc13">Appointment_Letter_<br>Acknowledged_Status</label>
                                                        <select name="nc13" id="nc13" class="form-control "
                                                            value="<?php echo $name13; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>

                                                </div>

                                                <div class="col-lg-3">



                                                    <div class="form-group"><label
                                                            for="bc13">BGV_Status</label><textarea name="bc13"
                                                            class="form-control "><?php echo $address13; ?></textarea>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="rk13">Offer_Letter_signed</label>
                                                        <select name="rk13" id="rk13" class="form-control "
                                                            value="<?php echo $salary13; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="nc14">Offer_acceptance_email</label>
                                                        <select name="nc14" id="nc14" class="form-control "
                                                            value="<?php echo $name14; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="bc14">Approvals</label>
                                                        <select name="bc14" id="bc14" class="form-control "
                                                            value="<?php echo $address14; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="rk14">Employee_aplication_Form</label>
                                                        <select name="rk14" id="rk14" class="form-control "
                                                            value="<?php echo $salary14; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>

                                                    <div class="form-group"><label
                                                            for="nc15">File_Status</label><textarea name="nc15"
                                                            class="form-control "><?php echo $name15; ?></textarea>
                                                    </div><br>
                                                    <div class="form-group"><label for="bc15">Count_of_Pending</label>
                                                        <textarea name="bc15"
                                                            class="form-control "><?php echo $address15; ?></textarea>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="rk15">Final_total_Status</label><textarea name="rk15"
                                                            class="form-control "><?php echo $salary15; ?></textarea>
                                                    </div><br>
                                                    <div class="form-group"><label for="nc16">Documents_Pending</label>
                                                        <select name="nc16" id="nc16" class="form-control "
                                                            value="<?php echo $name16; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="bc16">Forms_Pending</label>
                                                        <select name="bc16" id="bc16" class="form-control "
                                                            value="<?php echo $address16; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="rk16">Remarks</label>
                                                        <select name="rk16" id="rk16" class="form-control "
                                                            value="<?php echo $salary16; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="nc17">Confirmation_Letter</label>
                                                        <select name="nc17" id="nc17" class="form-control "
                                                            value="<?php echo $name17; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label for="bc17">Service_<br>Letter</label>
                                                        <select name="bc17" id="bc17" class="form-control "
                                                            value="<?php echo $address17; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group"><label
                                                            for="rk17">Experience_<br>Letter</label>
                                                        <select name="rk17" id="rk17" class="form-control "
                                                            value="<?php echo $salary17; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                </div>


                                                <div class="col-lg-3">


                                                    <div class="form-group"><label for="nc18">Relieving_Letter</label>
                                                        <select name="nc18" id="nc18" class="form-control "
                                                            value="<?php echo $name18 ?>">name18
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="nc">Personal_Bank_Name</label>
                                                        <textarea name="nc"
                                                            class="form-control "><?php echo $name; ?></textarea>
                                                    </div><br>
                                                    <div class="form-group">

                                                        <label for="bc">Personal_Account_Number</label>
                                                        <textarea name="bc"
                                                            class="form-control "><?php echo $address; ?></textarea>
                                                    </div><br>
                                                    <!-- <div class="form-group">
                                                    <label for="rk">Personal_IFSC_Number</label>
                                                    <textarea name="rk"
                                                        class="form-control "></textarea>
                                                </div><br> -->

                                                    <div class="form-group">
                                                        <label for="rk">Personal_IFSC_Number</label>
                                                        <textarea name="rk"
                                                            class="form-control "><?php echo $salary; ?></textarea>
                                                    </div><br>

                                                    <div class="form-group">
                                                        <label for="nc1">HDFC_IFSC_Number</label>
                                                        <textarea name="nc1"
                                                            class="form-control "><?php echo $name1; ?></textarea>
                                                    </div><br>
                                                    <div class="form-group">

                                                        <label for="bc1">PAN_Card_Number</label>
                                                        <textarea name="bc1"
                                                            class="form-control "><?php echo $address1; ?></textarea>
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="rk1">Aadhar_Card_Number</label>
                                                        <textarea name="rk1"
                                                            class="form-control "><?php echo $salary1; ?></textarea>
                                                    </div><br>

                                                    <div class="form-group">
                                                        <label for="nc2">HDFC_Account_Number</label>
                                                        <textarea name="nc2"
                                                            class="form-control "><?php echo $name2; ?></textarea>
                                                    </div><br>
                                                    <div class="form-group">

                                                        <label for="bc2">HDFC_Bank_Name</label>
                                                        <textarea name="bc2"
                                                            class="form-control "><?php echo $address2; ?></textarea>
                                                    </div><br>
                                                    <div class="form-group">
                                                        <label for="rk2">Warning_Letter</label>
                                                        <select name="rk2" id="rk2" class="form-control "
                                                            value="<?php echo $salary2; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="nc3">Transfer_<br>Letter</label>
                                                        <select name="nc3" id="nc3" class="form-control "
                                                            value="<?php echo $name3; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">

                                                        <label for="bc3">PIP</label>
                                                        <select name="bc3" id="bc3" class="form-control "
                                                            value="<?php echo $address3; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="rk3">Absconding_<br>Letter</label>
                                                        <select name="rk3" id="rk3" class="form-control "
                                                            value="<?php echo $salary3; ?>">
                                                            <option value=""></option>
                                                            <option value="Submitted">Submitted</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="NA">NA</option>
                                                        </select>
                                                    </div><br>





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
        <!-- 
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script> -->
        <!-- google map js -->
        <!-- end google map js -->
</body>

</html>