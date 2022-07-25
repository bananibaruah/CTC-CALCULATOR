<?php  
$conn = new mysqli('localhost', 'root', 'mypass');  
mysqli_select_db($conn, 'jarvis');  
$sql = "SELECT * from olt";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = 
"olt_Id"."\t".
"Ref_No_of_Offer_Letter"."\t".
"New_Ref_No_of_Offer_Letter"."\t".
"Employee_Id"."\t".
"Employee_Name"."\t".
"Address_Line_1"."\t".
"Address_Line_2"."\t".
"Address_Line_3"."\t".
"Posting_Location"."\t".
"Base_Location"."\t".
"Area_of_Operation"."\t".
"Note"."\t".
"offer_date"."\t".
"state"."\t".
"Pin_Code"."\t".
"City"."\t".
"grade"."\t".
"Sd"."\t".
"ed"."\t".
"Working_Days"."\t".
"doj"."\t".
"DOJ_Text"."\t".
"Joined_Month__Year"."\t".
"dojtype"."\t".
"Offer_Dt_Text"."\t".
"Offer_Month__Year"."\t".
"Position"."\t".
"wed"."\t".
"wsd"."\t".
"aloc"."\t".
"jbamount"."\t".
"Old_CTC_"."\t".
"ctc"."\t".
"basic"."\t".
"hra"."\t".
"Conveyance_Allowance"."\t".
"Statutory_Bonus"."\t".
"LTA"."\t".
"Executive_Allowance"."\t".
"FOOD_ALLOWANCE"."\t".
"MOBILE_REIMBURSEMENT"."\t".
"ATTIRE_ALLOWANCE"."\t".
"VEHICLE_REIMBURSEMENT"."\t".
"driver_reimbursement"."\t".
"RETENTION_ALLOWANCE"."\t".
"Total_A"."\t".
"PF"."\t".
"ESIC"."\t".
"Gratuity"."\t".
"Total_B"."\t".
"LTotal"."\t".
"vp"."\t".
"Variable_Pay"."\t".
"Incentive_Bonus"."\t".
"STRB"."\t".
"RB"."\t".
"TOTAL_II"."\t".
"TOTAL"."\t".
"Contact_No"."\t".
"Email_ID"."\t".
"Date_of_Birth"."\t".
"Gender"."\t".
"Marital_Status"."\t".
"Offer_Status"."\t".
"Joining_Status"."\t".
"Current_Status"."\t".
"Type_of_Hire"."\t".
"Requirement_Type"."\t".
"Replaced_Emp_Name"."\t".
"Old_Department"."\t".
"Business_Unit"."\t".
"Sub_Unit"."\t".
"New_Department"."\t".
"Designation"."\t".
"Role"."\t".
"Skills"."\t".
"Skills_Category"."\t".
"Ref_No_of_Termination_Letter"."\t".
"Consultant_Contract_date_Ref"."\t".
"Highest_Qualification"."\t".
"Total_Exp_in_yrs"."\t".
"Rel_Exp_in_yrs"."\t".
"Present_Employer"."\t".
"Delivery_Leader"."\t".
"Delivery_Head"."\t".
"Reporting_Manager"."\t".
"Client_Name"."\t".
"Source"."\t".
"Source_Name"."\t".
"Recruiter_Name"."\t".
"Medical_Status"."\t".
"Eligible_for_Relocation_Allowance"."\t".
"Relocation_Allowance_Clause"."\t".
"MG"."\t".
"AG"."\t".
"Mail_Subject__Offer_Letter_Name"."\t".
"Adhar_Card_Details"."\t".
"Pan_Card_Details"."\t".
"Fresher_OLBond"."\t".
"Bond_Amount"."\t".
"Bond_Expiry_Date"."\t".
"Offer_Prepared_By"."\t".
"Offer_Acceptance"."\t".
"Offer_Acceptance_Date"."\t".
"Name_of_Authorized_Signatory"."\t".
"Designation_of_Authorized_Signatory"."\t";
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
header("location : index.php")
 ?>