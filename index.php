<?php

session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

else {
 

        if ($_SESSION["roles"] != 5) {


            header("location: ../welcome.php");

        }

}


require_once "../config.php";
ini_set('log_errors', 'Off');


?>


<div style="font-family:verdana;">

    <header>

        <nav class="navbar navbar-light" style="background-color:#BFD7ED">

            <div align=center>

                <img src="NSE.png" height="35%" width="40%">

            </div>

        </nav>

    </header>

</div>

<?php require_once("header.php"); ?>
<form method="post" action="submit.php" id="JT">
    <div class="container">
        <div class="card" style=background-color:#BFD7ED>
            <div class="card-body">
                <b>
                    <h4>
                        <center>
                            ADD NEW ENTRY
                        </center>
                    </h4>
                    <!-- <a href="https://hr.nseit.com/jarvis/welcome.php" class="btn btn-primary ml-2">Home</a> -->
                    <a href="view.php" class="btn btn-primary ml-2">View
                        Records</a>
                    <a href="/CTC-CALCULATOR/FTESA/index.php" class="btn btn-primary ml-2">SAMPLE
                        ANNEXURE</a>


                    <!-- <a href="../logout.php" class="btn btn-danger ml-2">Sign Out of Your Account</a> -->
                </b>
                <br>
                <hr>
                <br>

                <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                td,
                th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #dddddd;
                }
                </style>


                <script>
                function revealdateod() {


                    var myElement = document.getElementById("od").value;
                    document.getElementById("odt").value = new Date(myElement).toLocaleDateString('en-us', {
                        year: "numeric",
                        month: "short",
                        day: "numeric"
                    });



                }


                function revealdatecsd() {


                    var myElement2 = document.getElementById("csd").value;
                    document.getElementById("csdt").value = new Date(myElement2).toLocaleDateString('en-us', {
                        year: "numeric",
                        month: "short",
                        day: "numeric"
                    });




                }

                function revealdateced() {


                    var myElement = document.getElementById("ced").value;
                    document.getElementById("cedt").value = new Date(myElement).toLocaleDateString('en-us', {
                        year: "numeric",
                        month: "short",
                        day: "numeric"
                    });



                }
                </script>
                </head>


                <?php

// php select option value from database
// session_start();
$hostname = "localhost";
$username = "root";
$password = "mypass";
$databaseName = "jarvis";


// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


// mysql select query
$query = "SELECT DISTINCT bu from dependentlist;";


$result = mysqli_query($connect, $query);

$bu = "";

while ($row = mysqli_fetch_array($result)) 
{
  $bu = $bu . "<option>$row[0]</option>";
}

// $bu = filter_input(INPUT_POST, 'bu', FILTER_SANITIZE_STRING);
// $_SESSION['bu'] = $bu;

// mysql select query
$query = "SELECT distinct dept from dependentlist where bu lIKE '$bu';";

$result = mysqli_query($connect, $query);

$dept = "";

while ($row = mysqli_fetch_array($result)) 
{
  $dept = $dept . "<option>$row[0]</option>";
}
?>

                <script>
                var csd = 0;
                </script>


                <body>

                    <table>

                        <tr>
                            <td><label>Offer Status</label><input type="text" name="Offer_Status" value=""
                                    class="form-control"><br /></td>
                            <td> <label>Joining Status</label><input type="text" name="Joining_Status"
                                    value="Yet to Join" class="form-control" readonly></td>

                            <td><label>Department</label><input type="text" name="Old_Department" value=""
                                    class="form-control"><br /></td>
                            <td><label>Business Unit</label>
                                <input type="text" name="Business_Unit" value="" class="form-control"><br />

                                <!-- <select name="bu" id="bu" class="custom-select" style="">

                                    <?php echo $bu; ?>

                                </select> -->
                            </td>

                        </tr>
                        <tr>
                            <td><label>New Department</label>
                                <input type="text" name="New_Department" value="" class="form-control"><br />


                                <!-- <select name="dept" id="dept" class="custom-select" style="">

                                    <?php echo $dept; ?>

                                </select> -->
                            </td>
                            <td><label>Role</label><input type="text" name="Role" value="" class="form-control"><br />
                            </td>
                            <!-- <td><label>Emp Code</label><input type="text" name="Employee_Id" value=""
                                    class="form-control"><br /></td> -->
                            <td> <label>Type_of_Hire</label><input type="text" name="Type_of_Hire" value="FTE"
                                    class="form-control" readonly></td>
                            <td><label>Employee Name</label><input type="text" name="Employee_Name" value=""
                                    class="form-control"><br /></td>

                        </tr>
                        <tr>
                            <!-- <td><label>Title</label><input type="text" name="Title" value="" class="form-control"><br />
                            </td> -->

                            <td><label>Contact Details</label><input type="text" name="Contact_No" value=""
                                    class="form-control"><br /></td>
                            <td><label>Email Id</label><input type="text" name="Email_ID" value=""
                                    class="form-control"><br />
                            </td>
                            <td><label>Date of Birth(DD/MM/YYYY)</label><input type="date" name="Date_of_Birth" value=""
                                    class="form-control"><br /></td>
                            <td> <label><b>Gender : </b></label>

                                  <input type="radio" id="Male" name="Gender" value="Male">
                                <label for="Male">Male</label>

                                  <input type="radio" id="Female" name="Gender" value="Female">


                                  <label for="Female">Female</label><br>
                            </td>

                        </tr>
                        <tr>

                            <td> <label> <b>Marital Status :</b></label> <br>
                                  <input type="radio" id="Single" name="Marital_Status" value="Single">
                                <label for="Single">Single</label>
                                  <input type="radio" id="Married" name="Marital_Status" value="Married">
                                  <label for="Married">Married</label> <br>
                                  <input type="radio" id="Separated" name="Marital_Status" value="Separated">
                                  <label for="Separated">Separated</label><br>
                            </td>
                            <td><label>Sub Unit</label><input type="text" name="Sub_Unit" value=""
                                    class="form-control"><br />
                            </td>
                            <td><label>Ref. No. of Termination Letter</label><input type="text"
                                    name="Ref_No_of_Termination_Letter" value="" class="form-control"><br /></td>
                            <td><label>Consultant Contract date (Ref.)</label><input type="date"
                                    name="Consultant_Contract_date_Ref" value="" class="form-control"><br /></td>

                        </tr>
                        <tr>

                            <!-- <td><label>Ref. No. of Offer letter</label><input type="text" name="Ref_No_of_Offer_Letter"
                                    value="" class="form-control"><br /></td> -->
                            <td><label>New Ref. No. of Offer letter</label><input type="text"
                                    name="New_Ref_No_of_Offer_Letter" value="" class="form-control"><br /></td>
                            <td><label>Offer Date</label><input type="date" name="Offer_Date" value="" id="od"
                                    class="form-control"><br /></td>
                            <td><label>Offer Date (in text)</label><input type="text" name="Offer_Dt_Text" value=""
                                    onfocus="revealdateod()" id="odt" class="form-control"><br /></td>


                            <td><label>Contract Start Date</label><input type="date" name="Sd" id="csd" value=""
                                    class="form-control"><br /></td>
                            <script>
                            $(document).ready(function() {
                                $("#csd").on('change', function(e) {
                                    var x = $("#csd").val();
                                    const x1 = new Date(x);
                                    x1.setFullYear(x1.getFullYear() + 1);
                                    alert(x1);
                                    $("#ced").val(x1.format.date(new Date(), 'YYYY-MM-DD'));
                                });
                            });
                            </script>
                        </tr>
                        <tr>

                            <td><label>Contract Start Date(in text)</label><input type="text" id="csdt"
                                    onfocus="revealdatecsd()" name="C_Sd_txt" value="" class="form-control"><br /></td>

                            <td><label>Contract End Date</label><input type="date" name="ed" value="" id="ced"
                                    class="form-control" /><br /></td>
                            <td><label>Contract End Date(in text)</label><input type="text" name="C_Ed_txt" value=""
                                    id="cedt" onfocus="revealdateced()" class="form-control"><br /></td>

                            <td><label>Designation</label><input type="text" name="Position" value="Associate"
                                    class="form-control" readonly><br /></td>

                        </tr>




                        <tr>

                            <td><label>Address Line 1</label><input type="text" name="Address_Line_1" value=""
                                    class="form-control"><br /></td>
                            <td><label>Address Line 2</label><input type="text" name="Address_Line_2" value=""
                                    class="form-control"><br /></td>
                            <td><label>Address Line 3</label><input type="text" name="Address_Line_3" value=""
                                    class="form-control"><br /></td>
                            <td><label>City </label><input type="text" name="City" value="" class="form-control"><br />
                            </td>


                        </tr>
                        <tr>

                            <td><label>Pincode</label><input type="text" name="Pincode" value=""
                                    class="form-control"><br />
                            </td>
                            <td><label>Working days</label><input type="text" name="Working_Days" value=""
                                    class="form-control"><br /></td>
                            <td><label>Skills</label><input type="text" name="Skills" value=""
                                    class="form-control"><br /></td>
                            <td><label>Skills Category</label><input type="text" name="Skills_Category" value=""
                                    class="form-control"><br /></td>


                        </tr>
                        <tr>

                            <td><label>Education</label><input type="text" name="Highest_Qualification" value=""
                                    class="form-control"><br /></td>
                            <td><label>Experience</label><input type="text" name="Total_Exp_in_yrs" value=""
                                    class="form-control"><br /></td>
                            <td><label>Name of Authorized Signatory</label><input type="text"
                                    name="Name_of_Authorized_Signatory" value="Tina Mathew" class="form-control"
                                    readonly><br />
                            </td>
                            <td><label>Designation of Authorized Signatory</label><input type="text"
                                    name="Designation_of_Authorized_Signatory" value="HR-HEAD" class="form-control"
                                    readonly><br /></td>


                        </tr>
                        <tr>

                            <td><label>Base Location</label><input type="text" name="Base_Location" value=""
                                    class="form-control"><br /></td>
                            <td><label>Posting Location</label><input type="text" name="Posting_Location" value=""
                                    class="form-control"><br /></td>
                            <td><label>Area of operation</label><input type="text" name="Area_of_Operation" value=""
                                    class="form-control"><br /></td>
                            <td><label>Requirement Type</label><input type="text" name="Requirement_Type" value=""
                                    class="form-control"><br /></td>


                        </tr>
                        <tr>

                            <td><label>Replaced Emp Name</label><input type="text" name="Replaced_Emp_Name" value=""
                                    class="form-control"><br /></td>
                            <td><label>Reporting Manager</label><input type="text" name="Reporting_Manager" value=""
                                    class="form-control"><br /></td>
                            <td><label>Delivery Leader</label><input type="text" name="Delivery_Leader" value=""
                                    class="form-control"><br /></td>
                            <td><label>Delivery Head</label><input type="text" name="Delivery_Head" value=""
                                    class="form-control"><br /></td>


                        </tr>
                        <tr>

                            <td><label>Recruiter Name</label><input type="text" name="Recruiter_Name" value=""
                                    class="form-control"><br /></td>
                            <td><label>Source</label><input type="text" name="Source" value=""
                                    class="form-control"><br /></td>
                            <td><label>Source Name</label><input type="text" name="Source_Name" value=""
                                    class="form-control"><br /></td>
                            <td><label>Client Name_Location</label><input type="text" name="Client_Name" value=""
                                    class="form-control"><br /></td>


                        </tr>
                        <tr>

                            <td><label>Relocation Allowance</label><input type="text" name="Relocation_Allowance_Clause"
                                    value="" class="form-control"><br /></td>
                            <td><label>Old CTC</label><input type="text" name="Old_CTC_" value=""
                                    class="form-control"><br />
                            </td>
                            <!-- <td><label>Adjusted CTC</label><input type="text" name="Adjusted_ctc" value=""
                                    class="form-control"><br /></td> -->

                            <td><label>Mail Subject & Offer Letter Name</label><input type="text"
                                    name="Mail_Subject__Offer_Letter_Name" value="" class="form-control"><br /></td>
                            <td><label>Offer Prepared By:-</label><input type="text" name="Offer_Prepared_By"
                                    value="<?= $_SESSION["username"]?>" class="form-control"><br /></td>

                        </tr>
                        <tr>


                            <!-- <td><label>Offer Acceptance</label><input type="text" name="Offer_Acceptance" value=""
                                    class="form-control"><br /></td>
                            <td><label>Offer Acceptance Date</label><input type="date" name="Offer_Acceptance_Date"
                                    value="" class="form-control"><br /></td> -->
                            <td></td>
                            <td><label>Adhar Card Details</label><input type="text" name="Adhar_Card_Details" value=""
                                    class="form-control"><br /></td>
                            <td><label>Pan Card Details</label><input type="text" name="Pan_Card_Details" value=""
                                    class="form-control"><br /></td>
                            <td></td>

                        </tr>
                        <!-- <tr>





                        </tr> -->


                    </table>









                    <hr />
                    <input type="submit" class="btn btn-primary" />
            </div>
        </div>
    </div>
</form>
<script src="JT.js"></script>
<?php require_once("footer.php"); ?>