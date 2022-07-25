<?php

session_start();

require("config.php");


$Offer_Status=$_POST["Offer_Status"];
$Old_Department=$_POST["Old_Department"];
$Business_Unit=$_POST["Business_Unit"];
$New_Department=$_POST["New_Department"];
$Role=$_POST["Role"];
$Employee_Id=$_POST["Employee_Id"];
$Type_of_Hire=$_POST["Type_of_Hire"];
$Title=$_POST["Title"];
$Employee_Name=$_POST["Employee_Name"];
$Contact_No=$_POST["Contact_No"];
$Email_ID=$_POST["Email_ID"];
$Date_of_Birth=$_POST["Date_of_Birth"];
$Gender=$_POST["Gender"];
$Marital_Status=$_POST["Marital_Status"];
$Sub_Unit=$_POST["Sub_Unit"];
$Ref_No_of_Termination_Letter=$_POST["Ref_No_of_Termination_Letter"];
$Consultant_Contract_date_Ref=$_POST["Consultant_Contract_date_Ref"];
$Ref_No_of_Offer_Letter=$_POST["Ref_No_of_Offer_Letter"];
$New_Ref_No_of_Offer_Letter=$_POST["New_Ref_No_of_Offer_Letter"];
$Offer_Date=$_POST["Offer_Date"];
$Offer_Dt_Text=$_POST["Offer_Dt_Text"];
$Sd=$_POST["Sd"];
$C_Sd_txt=$_POST["C_Sd_txt"];
$ed=$_POST["ed"];
$C_Ed_txt=$_POST["C_Ed_txt"];
$Position=$_POST["Position"];
$Address_Line_1=$_POST["Address_Line_1"];
$Address_Line_2=$_POST["Address_Line_2"];
$Address_Line_3=$_POST["Address_Line_3"];
$City=$_POST["City"];
$Pincode=$_POST["Pincode"];
$Working_Days=$_POST["Working_Days"];
$Skills=$_POST["Skills"];
$Skills_Category=$_POST["Skills_Category"];
$Highest_Qualification=$_POST["Highest_Qualification"];
$Total_Exp_in_yrs=$_POST["Total_Exp_in_yrs"];
$Name_of_Authorized_Signatory=$_POST["Name_of_Authorized_Signatory"];
$Designation_of_Authorized_Signatory=$_POST["Designation_of_Authorized_Signatory"];
$Base_Location=$_POST["Base_Location"];
$Posting_Location=$_POST["Posting_Location"];
$Area_of_Operation=$_POST["Area_of_Operation"];
$Requirement_Type=$_POST["Requirement_Type"];
$Replaced_Emp_Name=$_POST["Replaced_Emp_Name"];
$Reporting_Manager=$_POST["Reporting_Manager"];
$Delivery_Leader=$_POST["Delivery_Leader"];
$Delivery_Head=$_POST["Delivery_Head"];
$Recruiter_Name=$_POST["Recruiter_Name"];
$Source=$_POST["Source"];
$Source_Name=$_POST["Source_Name"];
$Client_Name=$_POST["Client_Name"];
$Relocation_Allowance_Clause=$_POST["Relocation_Allowance_Clause"];
$Old_CTC_=$_POST["Old_CTC_"];
$Adjusted_ctc=$_POST["Adjusted_ctc"];
$Mail_Subject__Offer_Letter_Name=$_POST["Mail_Subject__Offer_Letter_Name"];
$Offer_Prepared_By=$_POST["Offer_Prepared_By"];
$Offer_Acceptance=$_POST["Offer_Acceptance"];
$Offer_Acceptance_Date=$_POST["Offer_Acceptance_Date"];
$Adhar_Card_Details=$_POST["Adhar_Card_Details"];
$Pan_Card_Details=$_POST["Pan_Card_Details"];
$Joining_Status=$_POST["Joining_Status"];




$sql = "INSERT INTO `olt` 
(


`Offer_Status`,
`Old_Department`,
`Business_Unit`,
`New_Department`,
`Role`,
`Employee_Id`,
`Type_of_Hire`,
`Title`,
`Employee_Name`,
`Contact_No`,
`Email_ID`,
`Date_of_Birth`,
`Gender`,
`Marital_Status`,
`Sub_Unit`,
`Ref_No_of_Termination_Letter`,
`Consultant_Contract_date_Ref`,
`Ref_No_of_Offer_Letter`,
`New_Ref_No_of_Offer_Letter`,
`Offer_Date`,
`Offer_Dt_Text`,
`Sd`,
`C_Sd_txt`,
`C_Ed_txt`,
`ed`,
`Position`,
`Address_Line_1`,
`Address_Line_2`,
`Address_Line_3`,
`City`,
`Pincode`,
`Working_Days`,
`Skills`,
`Skills_Category`,
`Highest_Qualification`,
`Total_Exp_in_yrs`,
`Name_of_Authorized_Signatory`,
`Designation_of_Authorized_Signatory`,
`Base_Location`,
`Posting_Location`,
`Area_of_Operation`,
`Requirement_Type`,
`Replaced_Emp_Name`,
`Reporting_Manager`,
`Delivery_Leader`,
`Delivery_Head`,
`Recruiter_Name`,
`Source`,
`Source_Name`,
`Client_Name`,
`Relocation_Allowance_Clause`,
`Old_CTC_`,
`Adjusted_ctc`,
`Mail_Subject__Offer_Letter_Name`,
`Offer_Prepared_By`,
`Offer_Acceptance`,
`Offer_Acceptance_Date`,
`Adhar_Card_Details`,
`Pan_Card_Details`,
`Joining_Status`
)  
VALUES 
(


'$Offer_Status',
'$Old_Department',
'$Business_Unit',
'$New_Department',
'$Role',
'$Employee_Id',
'$Type_of_Hire',
'$Title',
'$Employee_Name',
'$Contact_No',
'$Email_ID',
'$Date_of_Birth',
'$Gender',
'$Marital_Status',
'$Sub_Unit',
'$Ref_No_of_Termination_Letter',
'$Consultant_Contract_date_Ref',
'$Ref_No_of_Offer_Letter',
'$New_Ref_No_of_Offer_Letter',
'$Offer_Date',
'$Offer_Dt_Text',
'$Sd',
'$C_Sd_txt',
'$C_Ed_txt',
'$ed',
'$Position',
'$Address_Line_1',
'$Address_Line_2',
'$Address_Line_3',
'$City',
'$Pincode',
'$Working_Days',
'$Skills',
'$Skills_Category',
'$Highest_Qualification',
'$Total_Exp_in_yrs',
'$Name_of_Authorized_Signatory',
'$Designation_of_Authorized_Signatory',
'$Base_Location',
'$Posting_Location',
'$Area_of_Operation',
'$Requirement_Type',
'$Replaced_Emp_Name',
'$Reporting_Manager',
'$Delivery_Leader',
'$Delivery_Head',
'$Recruiter_Name',
'$Source',
'$Source_Name',
'$Client_Name',
'$Relocation_Allowance_Clause',
'$Old_CTC_',
'$Adjusted_ctc',
'$Mail_Subject__Offer_Letter_Name',
'$Offer_Prepared_By',
'$Offer_Acceptance',
'$Offer_Acceptance_Date',
'$Adhar_Card_Details',
'$Pan_Card_Details',
'$Joining_Status'

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