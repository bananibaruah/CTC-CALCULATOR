<?php

session_start();

require("config.php");

$Employee_Id=$_POST["Employee_Id"];
$Employee_Name=$_POST["Employee_Name"];
$Ref_No_of_Offer_Letter=$_POST["Ref_No_of_Offer_Letter"];
$Contact_No=$_POST["Contact_No"];
$Email_ID=$_POST["Email_ID"];
$Date_of_Birth=$_POST["Date_of_Birth"];
$Sd=$_POST["Sd"];
$ed=$_POST["ed"];
$Gender=$_POST["Gender"];
$Marital_Status=$_POST["Marital_Status"];
$Offer_Status=$_POST["Offer_Status"];
$Offer_Date=$_POST["Offer_Date"];
$Joining_Status = filter_input(INPUT_POST, 'Joining_Status', FILTER_SANITIZE_STRING);
$Type_of_Hire=$_POST["Type_of_Hire"];
$Address_Line_1=$_POST["Address_Line_1"];
$Address_Line_2=$_POST["Address_Line_2"];
$Address_Line_3=$_POST["Address_Line_3"];
$City=$_POST["City"];
$Pincode=$_POST["Pincode"];
$Requirement_Type=$_POST["Requirement_Type"];
$Replaced_Emp_Name=$_POST["Replaced_Emp_Name"];
$Old_Department=$_POST["Old_Department"];
$Business_Unit=$_POST["Business_Unit"];
$Sub_Unit=$_POST["Sub_Unit"];
$New_Department=$_POST["New_Department"];
$Position=$_POST["Position"];
$Role=$_POST["Role"];
$Skills=$_POST["Skills"];
$Skills_Category=$_POST["Skills_Category"];
$Ref_No_of_Termination_Letter=$_POST["Ref_No_of_Termination_Letter"];
$Consultant_Contract_date_Ref=$_POST["Consultant_Contract_date_Ref"];
$Highest_Qualification=$_POST["Highest_Qualification"];
$Total_Exp_in_yrs=$_POST["Total_Exp_in_yrs"];
$Rel_Exp_in_yrs=$_POST["Rel_Exp_in_yrs"];
$Present_Employer=$_POST["Present_Employer"];
$Delivery_Leader=$_POST["Delivery_Leader"];
$Delivery_Head=$_POST["Delivery_Head"];
$Reporting_Manager=$_POST["Reporting_Manager"];
$Client_Name=$_POST["Client_Name"];
$Source=$_POST["Source"];
$Source_Name=$_POST["Source_Name"];
$Recruiter_Name=$_POST["Recruiter_Name"];
$Medical_Status=$_POST["Medical_Status"];
$Eligible_for_Relocation_Allowance=$_POST["Eligible_for_Relocation_Allowance"];
$Relocation_Allowance_Clause=$_POST["Relocation_Allowance_Clause"];
$Mail_Subject__Offer_Letter_Name=$_POST["Mail_Subject__Offer_Letter_Name"];
$Adhar_Card_Details=$_POST["Adhar_Card_Details"];
$Pan_Card_Details=$_POST["Pan_Card_Details"];
$Fresher_OLBond=$_POST["Fresher_OLBond"];
$Bond_Amount=$_POST["Bond_Amount"];
$Bond_Expiry_Date=$_POST["Bond_Expiry_Date"];
$Offer_Prepared_By=$_POST["Offer_Prepared_By"];
$Offer_Acceptance=$_POST["Offer_Acceptance"];
$Offer_Acceptance_Date=$_POST["Offer_Acceptance_Date"];
$Name_of_Authorized_Signatory=$_POST["Name_of_Authorized_Signatory"];
$Designation_of_Authorized_Signatory=$_POST["Designation_of_Authorized_Signatory"];


$sql = "INSERT INTO `olt` 
(

`Employee_Id`,
`Employee_Name`,
`Ref_No_of_Offer_Letter`,
`Offer_Date`,
`Sd`,
`ed`,
`Contact_No`,
`Email_ID`,
`Date_of_Birth`,
`Gender`,
`Marital_Status`,

`Address_Line_1`,
`Address_Line_2`,
`Address_Line_3`,
`City`,
`Pincode`,

`Offer_Status`,
`Joining_Status`,
`Type_of_Hire`,
`Requirement_Type`,
`Replaced_Emp_Name`,
`Old_Department`,
`Business_Unit`,
`Sub_Unit`,
`New_Department`,
`Position`,
`Role`,
`Skills`,
`Skills_Category`,
`Ref_No_of_Termination_Letter`,
`Consultant_Contract_date_Ref`,
`Highest_Qualification`,
`Total_Exp_in_yrs`,
`Rel_Exp_in_yrs`,
`Present_Employer`,
`Delivery_Leader`,
`Delivery_Head`,
`Reporting_Manager`,
`Client_Name`,
`Source`,
`Source_Name`,
`Recruiter_Name`,
`Medical_Status`,
`Eligible_for_Relocation_Allowance`,
`Relocation_Allowance_Clause`,
`Mail_Subject__Offer_Letter_Name`,
`Adhar_Card_Details`,
`Pan_Card_Details`,
`Fresher_OLBond`,
`Bond_Amount`,
`Bond_Expiry_Date`,
`Offer_Prepared_By`,
`Offer_Acceptance`,
`Offer_Acceptance_Date`,
`Name_of_Authorized_Signatory`,
`Designation_of_Authorized_Signatory`
)  
VALUES 
(

'$Employee_Id',
'$Employee_Name',
'$Ref_No_of_Offer_Letter',
'$Contact_No',
'$Offer_Date',
'$Email_ID',
'$Date_of_Birth',
'$Sd',
'$ed',
'$Gender',
'$Marital_Status',
'$Offer_Status',
'$Joining_Status',
'$Type_of_Hire',

'$Address_Line_1',
'$Address_Line_2',
'$Address_Line_3',
'$City',
'$Pincode',

'$Requirement_Type',
'$Replaced_Emp_Name',
'$Old_Department',
'$Business_Unit',
'$Sub_Unit',
'$New_Department',
'$Position',
'$Role',
'$Skills',
'$Skills_Category',
'$Ref_No_of_Termination_Letter',
'$Consultant_Contract_date_Ref',
'$Highest_Qualification',
'$Total_Exp_in_yrs',
'$Rel_Exp_in_yrs',
'$Present_Employer',
'$Delivery_Leader',
'$Delivery_Head',
'$Reporting_Manager',
'$Client_Name',
'$Source',
'$Source_Name',
'$Recruiter_Name',
'$Medical_Status',
'$Eligible_for_Relocation_Allowance',
'$Relocation_Allowance_Clause',
'$Mail_Subject__Offer_Letter_Name',
'$Adhar_Card_Details',
'$Pan_Card_Details',
'$Fresher_OLBond',
'$Bond_Amount',
'$Bond_Expiry_Date',
'$Offer_Prepared_By',
'$Offer_Acceptance',
'$Offer_Acceptance_Date',
'$Name_of_Authorized_Signatory',
'$Designation_of_Authorized_Signatory'
);" ;
       
       


if(mysqli_query($link, $sql)){
    echo '<script>alert("Data Updated Successfully.")</script>';
    $sql ="SELECT MAX(olt_Id) AS ol FROM olt";
$result = $link->query($sql);
$result -> num_rows>0;
$row = $result->fetch_assoc();
$olt_id = $row['ol'];
    // header("location: ../../FTE/index.php?a=".base64_encode(base64_encode($Position))."&&b=".base64_encode(base64_encode($Employee_Name)).
    // "&&c=".base64_encode(base64_encode($City))."&&ol=".$olt_id."");

    header("location: ../../CTC-CALCULATOR/FTE/index.php?j=".base64_encode(base64_encode($Employee_Name))."&&s=".base64_encode(base64_encode($Ref_No_of_Offer_Letter)).
"&&u=".base64_encode(base64_encode($Offer_Date))."&&w=".base64_encode(base64_encode($Sd))."&&z=".base64_encode(base64_encode($ed)).
"&&aa=".base64_encode(base64_encode($Position))."&&bb=".base64_encode(base64_encode($Address_Line_1))."&&cc=".base64_encode(base64_encode($Address_Line_2)).
"&&dd=".base64_encode(base64_encode($Address_Line_3))."&&ee=".base64_encode(base64_encode($City ))."&&ff=".base64_encode(base64_encode($Pincode))."&&ol=".$olt_id."");
    //print_r($sql);
    sleep(3);



} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



?>