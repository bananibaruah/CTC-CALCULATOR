<?php

require_once "config.php";
ini_set('log_errors', 'Off');


?>


<!doctype html>


<html lang="en">

<head>
    <title>Documentation Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    body {
        font-family: Arial;
    }

    * {
        box-sizing: border-box;
    }

    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #17a2b8;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
    }

    form.example button:hover {
        background: #17a2b8;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <!-- <div class="button-container"><br> -->
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
                    <button class="GFG"
                        onclick="window.location.href = '/CTC-CALCULATOR/FTESA/index.php';"
                        style="float: right;">
                        SAMPLE ANNEXURE
                    </button>
                    <br />

                    </form>




                    <center>
                        <h2 class="heading-section">OLTRACKER</h2>
                    </center>
                </div>
            </div>

            <style>

            </style>





            <div class="row">
                <div class="col-md-12">
                    <div class="div1">
                        <table id="dt">
                            <tr>
                                <th> Edit </th>
                                <td><b>Sr. No.</b></td>
                                <td><b>Offer Status</b></td>
                                <td><b>Current Status</b></td>
                                <td><b>Department</b></td>
                                <td><b>Business Unit</b></td>
                                <td><b>New Department</b></td>
                                <td><b>Role</b></td>
                                <td><b>Emp Code</b></td>
                                <td><b>Type of Hire</b></td>
                                <td><b>Title</b></td>
                                <td><b>Employee Name</b></td>
                                <td><b>Contact Details</b></td>
                                <td><b>Email Id</b></td>
                                <td><b>Date of Birth(DD/MM/YYYY)</b></td>
                                <td><b>Gender</b></td>
                                <td><b>Marital Status</b></td>
                                <td><b>Sub Unit</b></td>
                                <td><b>Ref. No. of Termination Letter</b></td>
                                <td><b>Consultant Contract date (Ref.)</b></td>
                                <td><b>Ref. No. of Offer letter</b></td>
                                <td><b>New Ref. No. of Offer letter</b></td>
                                <td><b>Offer Date</b></td>
                                <td><b>Offer Date (in text)</b></td>
                                <td><b>Contract Start Date</b></td>
                                <td><b>Contract Start Date(in text)</b></td>
                                <td><b>Contract End Date</b></td>
                                <td><b>Contract End Date(in text)</b></td>
                                <td><b>Designation</b></td>
                                <td><b>Address Line 1</b></td>
                                <td><b>Address Line 2</b></td>
                                <td><b>Address Line 3</b></td>
                                <td><b>City </b></td>
                                <td><b>Pincode</b></td>
                                <td><b>Working days</b></td>
                                <td><b>Skills</b></td>
                                <td><b>Skills Category</b></td>
                                <td><b>Education</b></td>
                                <td><b>Exp</b></td>
                                <td><b>Name of Authorized Signatory</b></td>
                                <td><b>Designation of Authorized Signatory</b></td>
                                <td><b>Base Location</b></td>
                                <td><b>Posting Location</b></td>
                                <td><b>Area of operation</b></td>
                                <td><b>Requirement Type</b></td>
                                <td><b>Replaced Emp Namekale</b></td>
                                <td><b>Reporting Manager</b></td>
                                <td><b>Delivery Leader</b></td>
                                <td><b>Delivery Head</b></td>
                                <td><b>Recruiter Name</b></td>
                                <td><b>Source</b></td>
                                <td><b>Source Name</b></td>
                                <td><b>Client Name_Location</b></td>
                                <td><b>Relocation Allowance</b></td>
                                <td><b>Existing CTC</b></td>
                                <td><b>MG</b></td>
                                <td><b>AG</b></td>
                                <td><b>New CTC</b></td>
                                <td><b>Adjusted CTC</b></td>
                                <td><b>ESIC Applicable</b></td>
                                <td><b>State</b></td>
                                <td><b>Mail Subject & Offer Letter Name</b></td>
                                <td><b>Offer Prepared By:-</b></td>
                                <td><b>Joining bonus</b></td>
                                <td><b>Offer Acceptance</b></td>
                                <td><b>Offer Acceptance Date</b></td>
                                <td><b>Adhar Card Details</b></td>
                                <td><b>Pan Card Details</b></td>


                            </tr>
                            <?php
// Include config file
require_once "config.php";

$limit  = 500;
$page = isset($_GET['page'])? $_GET['page']:1;
$start=($page - 1)*$limit;

$sql = "SELECT * FROM olt;";

// Attempt select query execution
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {

        $finalcount = mysqli_num_rows($result);

        $pages = ceil($finalcount/$limit);
        $Previous = $page - 1;
        $Next = $page + 1;
    

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
       echo "<td>";
            // echo '<a href="read.php?EMPLOYEE_ID='. $row['EMPLOYEE_ID'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
            echo '<a href="updatedt.php?id=' . $row['Employee_Id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-comment"></span></a>';
            // echo '<a href="delete.php?EMPLOYEE_ID='. $row['EMPLOYEE_ID'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
echo"<td>".$row['olt_Id']."</td>";
echo"<td>".$row['Offer_Status']."</td>";
echo"<td>".$row['Current_Status']."</td>";
echo"<td>".$row['Old_Department']."</td>";
echo"<td>".$row['Business_Unit']."</td>";
echo"<td>".$row['New_Department']."</td>";
echo"<td>".$row['Role']."</td>";
echo"<td>".$row['Employee_Id']."</td>";
echo"<td>".$row['Type_of_Hire']."</td>";
echo"<td>".$row['Title']."</td>";
echo"<td>".$row['Employee_Name']."</td>";
echo"<td>".$row['Contact_No']."</td>";
echo"<td>".$row['Email_ID']."</td>";
echo"<td>".$row['Date_of_Birth']."</td>";
echo"<td>".$row['Gender']."</td>";
echo"<td>".$row['Marital_Status']."</td>";
echo"<td>".$row['Sub_Unit']."</td>";
echo"<td>".$row['Ref_No_of_Termination_Letter']."</td>";
echo"<td>".$row['Consultant_Contract_date_Ref']."</td>";
echo"<td>".$row['Ref_No_of_Offer_Letter']."</td>";
echo"<td>".$row['New_Ref_No_of_Offer_Letter']."</td>";
echo"<td>".$row['Offer_Date']."</td>";
echo"<td>".$row['Offer_Dt_Text']."</td>";
echo"<td>".$row['Sd']."</td>";
echo"<td>".$row['C_Sd_txt']."</td>";
echo"<td>".$row['ed']."</td>";
echo"<td>".$row['C_Ed_txt']."</td>";
echo"<td>".$row['Position']."</td>";
echo"<td>".$row['Address_Line_1']."</td>";
echo"<td>".$row['Address_Line_2']."</td>";
echo"<td>".$row['Address_Line_3']."</td>";
echo"<td>".$row['City']."</td>";
echo"<td>".$row['Pincode']."</td>";
echo"<td>".$row['Working_Days']."</td>";
echo"<td>".$row['Skills']."</td>";
echo"<td>".$row['Skills_Category']."</td>";
echo"<td>".$row['Education']."</td>";
echo"<td>".$row['Rel_Exp_in_yrs']."</td>";
echo"<td>".$row['Name_of_Authorized_Signatory']."</td>";
echo"<td>".$row['Designation_of_Authorized_Signatory']."</td>";
echo"<td>".$row['Base_Location']."</td>";
echo"<td>".$row['Posting_Location']."</td>";
echo"<td>".$row['Area_of_Operation']."</td>";
echo"<td>".$row['Requirement_Type']."</td>";
echo"<td>".$row['Replaced_Emp_Name']."</td>";
echo"<td>".$row['Reporting_Manager']."</td>";
echo"<td>".$row['Delivery_Leader']."</td>";
echo"<td>".$row['Delivery_Head']."</td>";
echo"<td>".$row['Recruiter_Name']."</td>";
echo"<td>".$row['Source']."</td>";
echo"<td>".$row['Source_Name']."</td>";
echo"<td>".$row['Client_Name']."</td>";
echo"<td>".$row['Relocation_Allowance_Clause']."</td>";
echo"<td>".$row['Old_CTC_']."</td>";
echo"<td>".$row['MG']."</td>";
echo"<td>".$row['AG']."</td>";
echo"<td>".$row['ctc']."</td>";
echo"<td>".$row['Adjusted_ctc']."</td>";
echo"<td>".$row['ESIC']."</td>";
echo"<td>".$row['state']."</td>";
echo"<td>".$row['Mail_Subject__Offer_Letter_Name']."</td>";
echo"<td>".$row['Offer_Prepared_By']."</td>";
echo"<td>".$row['Joining_Bonus']."</td>";
echo"<td>".$row['Offer_Acceptance']."</td>";
echo"<td>".$row['Offer_Acceptance_Date']."</td>";
echo"<td>".$row['Adhar_Card_Details']."</td>";
echo"<td>".$row['Pan_Card_Details']."</td>";

            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        mysqli_free_result($result);
    }
    else {
        echo '<div class="alert alert-danger"><em>Please Select A Date range.</em></div>';
    }
}
else {
    echo "Oops! Something went wrong. Please try again later.";
}

// Close connection
mysqli_close($link);


?>

                        </table>
                    </div>

                    <style>
                    .div1 {
                        width: 100%;
                        height: 800px;
                        overflow: scroll;
                        border: 1px solid #777777;
                    }

                    .div1 table {
                        border-spacing: 0;
                    }

                    .fltrow td {
                        border-left: none;
                        border-right: 1px solid #bbbbbb;
                        padding: 5px !important;

                        min-width: 10px !important;
                        position: sticky;
                        top: 45px;
                        background: white;
                        color: #e0e0e0;
                        font-weight: normal;
                    }

                    .div1 th {
                        border-left: none;
                        border-right: 1px solid #bbbbbb;
                        padding: 5px;
                        width: 45px;
                        min-width: 80px;
                        position: sticky;
                        top: 0;
                        background: #17a2b8;
                        color: #e0e0e0;
                        font-weight: normal;
                    }

                    .div1 td {
                        border-left: none;
                        border-right: 1px solid #bbbbbb;
                        border-bottom: 1px solid #bbbbbb;
                        padding: 5px;
                        width: 45px;
                        min-width: 80px;
                    }
                    </style>

                    <script src="../tablefilter/tablefilter.js"></script>

                    <script data-config="">
                    var filtersConfig = {
                        base_path: '../tablefilter/',
                        filters_row_index: 1,
                        state: true,
                        alternate_rows: true,
                        rows_counter: false,
                        btn_reset: false,
                        status_bar: false,
                        msg_filter: 'Filtering...'
                    };
                    var tf = new TableFilter('dt', filtersConfig);
                    tf.init();
                    </script>

</html>