<?php
require_once("config.php");
require_once("TCPDF/tcpdf.php");
$name = $_POST["name"];
$Sd = $_POST["Sd"];
$ed = $_POST["ed"];
$doj = $_POST["doj"];
$Ad1 = $_POST["Ad1"];
$Ad2 = $_POST["Ad2"];
$Ad3 = $_POST["Ad3"];
$Position = $_POST["Position"];
$Pincode = $_POST["Pincode"];
$City = $_POST["City"];
$vp = $_POST["vp"];

$state = $_POST["state"];
$grade = $_POST["grade"];

$ctc = $_POST["ctc"];

$basic = $_POST["basic"];
$hra = $_POST["hra"];
$basic1 = round($basic / 12);
$hra1 = round($hra / 12);
$Statutory_Bonus = $_POST['Statutory_Bonus'];
$Statutory_Bonus1 = round($Statutory_Bonus / 12);
$Conveyance_Allowance = $_POST['Conveyance_Allowance'];
$Conveyance_Allowance1 = round($Conveyance_Allowance / 12);
$Executive_Allowance = $_POST['Executive_Allowance'];
$Executive_Allowance1 = round($Executive_Allowance / 12);
$lta = $_POST['lta'];
$lta1 = round($lta / 12);
$Food_Allowance = $_POST['Food_Allowance'];
$Food_Allowance1 = round($Food_Allowance / 12);
$m_c_r = $_POST['m_c_r'];
$m_c_r1 = round($m_c_r / 12);
$Attire_Allowance = $_POST['Attire_Allowance'];
$Attire_Allowance1 = round($Attire_Allowance / 12);
$vr = $_POST['vr'];
$vr1 = round($vr / 12);
$driver_reimbursement = $_POST['driver_reimbursement'];
$driver_reimbursement1 = round($driver_reimbursement / 12);
$Retention_Allowance = $_POST['Retention_Allowance'];
$Retention_Allowance1 = round($Retention_Allowance / 12);

$Total_A = $_POST['Total_A'];
$Total_A1 = round($Total_A / 12);
$PF = $_POST['PF'];
$PF1 = round($PF / 12);
$ESIC = $_POST['ESIC'];
$ESIC1 = round($ESIC / 12);
$gratuity = $_POST['gratuity'];
$Gratuity1 = round($gratuity / 12);

$Total_B = $_POST['Total_B'];
$Total_B1 = round($Total_B / 12);

$LTOTAL = $_POST['LTotal'];
$LTOTAL1 = round($LTOTAL / 12);
$Variable_Pay = $_POST['Variable_Pay'];
$Variable_Pay1 = round($Variable_Pay / 12);

$STRB = $_POST['STRB'];
$STRB1 = round($STRB / 12);

$Incentive_Bonus = $_POST['Incentive_Bonus'];
$Incentive_Bonus1 = round($Incentive_Bonus / 12);

$Total_II = $_POST['Total_II'];
$Total_II1 = round($Total_II / 12);

$TOTAL = $_POST['TOTAL'];
$TOTAL1 = round($TOTAL / 12);

$Code = $_POST['Code'];

$ins_sql = "INSERT INTO pe_jt(Code, Name, State,DOJ,Position,CTC,Basic,HRA,STATUTORY_BONUS,CONVEYANCE_ALLOWANCE,LTA,EXECUTIVE_ALLOWANCE,FOOD_ALLOWANCE,MOBILE_REIMBURSEMENT,ATTIRE_ALLOWANCE,VEHICLE_REIMBURSEMENT,RETENTION_ALLOWANCE,TOTAL_A,PF,ESIC,TOTAL_B,VARIABLE_PAY,TOTAL_AB,TOTAL) 
            Values('$Code', '$name', '$state', '$doj', '$Position', '$ctc', '$basic', '$hra',$Statutory_Bonus,'$Conveyance_Allowance','$lta','$Executive_Allowance','$Food_Allowance','$m_c_r', '$Attire_Allowance', '$vr', '$driver_reimbursement', '$Retention_Allowance', '$Total_A', '$PF', '$ESIC', '$gratuity', '$Total_B', '$LTOTAL', $Variable_Pay', '$Total_II', '$TOTAL')";

$link->query($ins_sql);

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->setFontSubsetting(true);
$pdf->SetFont('times', '', 10.8);
$pdf->SetMargins(10, 10, 15, true);
$pdf->AddPage();
$pdf->SetAutoPageBreak(TRUE, 30);
$doj1 = date("F d, Y", strtotime($doj));
$Sd1 = date("F d, Y", strtotime($Sd));
$ed1 = date("F d, Y", strtotime($ed));

function CurrencyFormat($number)
{
    $decimalplaces = 2;
    $decimalcharacter = '.';
    $thousandseparater = ',';
    $lakhseparater = ',';

    return number_format($number, $decimalplaces, $decimalcharacter, $thousandseparater, $lakhseparater);
}

// echo $doj1;

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF
{

    //Page header
    public function Header()
    {
        // Logo
        $image_file = 'header.png';
        $this->Image($image_file, 6, 9, 170, '', 'png', '', 'T', false, 200, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('times', '', 10.8);
        // Title
        $this->Cell(0, 15, '', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer()
    {
        $image_file = 'footer.png';
        $this->Image($image_file, 10, 270, 190, '', 'png', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font        // Title
        $this->Cell(0, -15, '', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('times', '', 10.8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
    public function Signature()
    {
        $image_file = 'Sig.png';
        $this->Image($image_file, 10, 350, 190, '', 'png', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font        // Title
        $this->Cell(0, -15, '', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('times', '', 10.8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('');
$pdf->SetTitle('OFFER LETTER');
$pdf->SetSubject('OFFER LETTER');
$pdf->SetKeywords('TCPDF, PDF');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10.5);

// add a page
$pdf->AddPage();

// set some text to print
$txt = <<<EOD
EOD;

// print a block of text using Write()
$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);

// ---------------------------------------------------------

//Close and output PDF document
$html .= <<<EOD
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
<b>Provisional Offer Letter </b>

<b>
<br>$doj1<br>
$Code<br><br>
$name <br>
$Ad1 ,<br>
$Ad2 ,<br>
$Ad3 ,<br>
$City  $Pincode <br><br>
Dear $name , <br><br>
</b>
Further to your application and subsequent discussions that we had with you, we are pleased to offer you the position of a “<b>$position</b>” in our company.<br>
1.	Your appointment will be subject to your scoring minimum aggregate (aggregate of all subjects in all semesters) marks of 60% or above in the first attempt in Graduation/Post Graduation examination which includes successful completion of your final semester/year without any pending arrears/back logs during the entire course duration. As per NSEIT eligibility criteria, marks/CGPA obtained during the normal duration of the course and your performance during the professional training period only will be considered to decide on the eligibility.<br>
2.	You  will  be  eligible  for  a  monthly  gross  salary  of  Rs. /- <b>$basic1</b> per month w.e.f.  <b>$d1</b>, subject to fulfillment of clause no 1.<br>
3.	You will require to undergo professional training of four weeks with NSEIT from the DOJ i.e. effective <b>$doj</b>. <br>
4.	In case the result of the final semester has not been declared by <b>$doj</b>, then you shall be taken as an intern on a per day stipend of Rs.450/- only till the time results are declared. Subject to fulfillment of clause no 1.<br>
5.	At the start of your professional training, you are required to sign a service agreement committing to serve 24 months training period which will be bifurcated into four weeks of professional training and 23 months of on-the-job training.<br>
6.	On successful completion of the professional training you will be appointed as “<b>$position</b>” effective from your date of joining i.e.  <b>$doj</b>. You will be on probation for a period of 6 months from your date of joining. The company reserves the right to extend your probation if necessary and you shall be informed of such an extension in writing. If at any stage during probation your work or any aspect of your behavior is found unsatisfactory, your probation will be discontinued with immediate effect. On successful completion of the probation period your appointment to the post of “<b>$position</b>” will be confirmed in writing and you will then become eligible for all the confirmation linked benefits / components of the salary as per the prevalent policies of the company.<br>

EOD;

$html .= <<<EOD
<br><br>
7.	Your appointment will be subject to you being found medically fit for service in the company and satisfactory report thereof being received.<br>
As communicated to you through various forums during the recruitment process, your appointment is subject to completion of your course within the stipulated time as specified by your University/Institute and as per NSEIT selection guidelines.<br>
It is mandatory to declare the gaps/arrears/backlogs, if any, during your academics. The management reserves the right to withdraw/revoke the offer/appointment at any time, at its sole discretion in case any discrepancy or false information is found in the details submitted by you.<br>
<b>8.	Background Verification:</b><br>
The Company reserves the right to carry out reference verifications or background checks (not restricted to the last salary drawn, past employment, use of banned / illegal drugs / narcotic substances, criminal records etc.) prior to your joining the Company or during the course of your employment with the Company. You understand and acknowledge that this is a requirement and you have no objections whatsoever if such checks are carried out by the company or a third party agency engaged by the company.<br>
If you find the above terms and conditions acceptable, we expect you to join us on or before <b>$doj</b>.
Kindly return the duplicate copy of this letter duly signed as a token of acceptance of offer.<br>
A detailed appointment letter will be issued to you on joining.<br>
We look forward to work with you.<br>
Yours sincerely,<br>
<img src="Sig.png" style="height:60px , width:30px"><br>
<b>Tina Mathew<br>
Head – HR<br><br>

EOD;

$html .= <<<EOD
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
<b>Provisional Offer Letter Office Copy</b>

<b>
<br><br>$doj1<br>
$Code<br><br>
$name <br>
$Ad1 ,<br>
$Ad2 ,<br>
$Ad3 ,<br>
$City  $Pincode <br><br>
Dear $name , <br><br>
</b>
Further to your application and subsequent discussions that we had with you, we are pleased to offer you the position of a “<b>$position</b>” in our company.<br>
1.	Your appointment will be subject to your scoring minimum aggregate (aggregate of all subjects in all semesters) marks of 60% or above in the first attempt in Graduation/Post Graduation examination which includes successful completion of your final semester/year without any pending arrears/back logs during the entire course duration. As per NSEIT eligibility criteria, marks/CGPA obtained during the normal duration of the course and your performance during the professional training period only will be considered to decide on the eligibility.<br>
2.	You  will  be  eligible  for  a  monthly  gross  salary  of  Rs. /- <b>$basic1</b> per month w.e.f.  <b>$d1</b>, subject to fulfillment of clause no 1.<br>
3.	You will require to undergo professional training of four weeks with NSEIT from the DOJ i.e. effective <b>$doj</b>. <br>
4.	In case the result of the final semester has not been declared by <b>$doj</b>, then you shall be taken as an intern on a per day stipend of Rs.450/- only till the time results are declared. Subject to fulfillment of clause no 1.<br>
5.	At the start of your professional training, you are required to sign a service agreement committing to serve 24 months training period which will be bifurcated into four weeks of professional training and 23 months of on-the-job training.<br>
6.	On successful completion of the professional training you will be appointed as “<b>$position</b>” effective from your date of joining i.e.  <b>$doj</b>. You will be on probation for a period of 6 months from your date of joining. The company reserves the right to extend your probation if necessary and you shall be informed of such an extension in writing. If at any stage during probation your work or any aspect of your behavior is found unsatisfactory, your probation will be discontinued with immediate effect. On successful completion of the probation period your appointment to the post of “<b>$position</b>” will be confirmed in writing and you will then become eligible for all the confirmation linked benefits / components of the salary as per the prevalent policies of the company.<br>
EOD;

$html .= <<<EOD
<br><br>
7.	Your appointment will be subject to you being found medically fit for service in the company and satisfactory report thereof being received.<br>
As communicated to you through various forums during the recruitment process, your appointment is subject to completion of your course within the stipulated time as specified by your University/Institute and as per NSEIT selection guidelines.<br>
It is mandatory to declare the gaps/arrears/backlogs, if any, during your academics. The management reserves the right to withdraw/revoke the offer/appointment at any time, at its sole discretion in case any discrepancy or false information is found in the details submitted by you.<br>
<b>8.	Background Verification:</b><br>
The Company reserves the right to carry out reference verifications or background checks (not restricted to the last salary drawn, past employment, use of banned / illegal drugs / narcotic substances, criminal records etc.) prior to your joining the Company or during the course of your employment with the Company. You understand and acknowledge that this is a requirement and you have no objections whatsoever if such checks are carried out by the company or a third party agency engaged by the company.<br>
If you find the above terms and conditions acceptable, we expect you to join us on or before <b>$doj</b>.
Kindly return the duplicate copy of this letter duly signed as a token of acceptance of offer.<br>
A detailed appointment letter will be issued to you on joining.<br>
We look forward to work with you.<br>
Yours sincerely,<br>
<img src="Sig.png" style="height:60px , width:30px"><br>
<b>Tina Mathew<br>
Head – HR<br><br>

EOD;


$html .= '<br>' . $name . '<br><br><br>

&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<b>Annexure I</b><br>
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<u><b>COMPENSATION DETAILS </b></u>
<br><br>
<table cellspacing="0" cellpadding="1" border="1" style="border-color:gray width:100% height:100%;">
<tr>
        <td style="text-align:center"></td>
		<td style="text-align:center">&nbsp; <b>ANNEXURE I</b></td>
        <td style= "width:20%;"><b>&nbsp; &nbsp; &nbsp;Location</b></td>
        <td style= "width:20%;"><b>&nbsp; &nbsp; &nbsp;' . $aloc . '</b></td>

    </tr>

    <tr>
      <td style= "width:15%;"><b>&nbsp; &nbsp; &nbsp;FTE Name</b></td>
      <td style= "width:45%;"><b>&nbsp; &nbsp; &nbsp;' . $name . '</b></td>
      <td style= "width:20%;"></td>
      <td style= "width:20%;">></td>
    </tr>
    <tr>
        <td><b>&nbsp; &nbsp; &nbsp;Designation</b></td>
        <td><b>&nbsp; &nbsp; &nbsp;' . $Position . '</b></td>
        <td style="text-align:center"><b>Grade</b></td>
		<td style="text-align:center"><b>' . $grade . '</b></td>
    </tr>
	<tr>
        <td><b>&nbsp; &nbsp; &nbsp;w.e.f</b></td>
        <td><b>&nbsp; &nbsp; &nbsp;' . $Sd1 . '</b></td>
		<td style="text-align:center" colspan="2">All Figures in INR</td>
    </tr>
	<tr>
        <td>></td>
        <td></td>
		<td style="text-align:center"><b>Monthly</b></td>
		<td style="text-align:center"><b>Annual</b></td>
    </tr>
    <tr>
        <td><b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;PART I</b></td>
        <td><b>&nbsp; &nbsp; &nbsp;Fixed Components</b></td>
        <td><b></b></td>
		<td><b></b></td>
    </tr>
    <tr>
        <td><b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;A</b></td>
        <td><b>&nbsp; &nbsp; &nbsp;Salary</b></td>
        <td><b></b></td>
		<td><b></b></td>
    </tr>
    <tr>
        <td><b></b></td>
        <td>Basic</td>
		<td>' . $basic1 . '</td>
		<td>' . $basic . '</td>
    </tr>
    <tr>
        <td><b></b></td>
        <td>HRA</td>
        <td>' . $hra1 . '</td>
        <td>' . $hra . '</td>
    </tr>
    <tr>
        <td><b></b></td>
        <td>Conveyance Allowance</td>
		<td>' . $Conveyance_Allowance1 . '</td>
		<td>' . $Conveyance_Allowance . '</td>
    </tr>
    <tr>
        <td><b></b></td>
        <td>Statutory Bonus</td>
		<td>' . $Statutory_Bonus1 . '</td>
		<td>' . $Statutory_Bonus . '</td>
    </tr>';

if ($lta1 != 0) {
    $html .= '<tr>
        <td><b></b></td>
        <td>LTA</td>
		<td>' . $lta1 . '</td>
		<td>' . $lta . '</td>
    </tr>';
}
$html .= '<tr>
    <td><b></b></td>
        <td>Executive Allowance</td>
        <td>' . $Executive_Allowance1 . '</td>
        <td>' . $Executive_Allowance . '</td>
    </tr>';
if ($Food_Allowance1 != 0) {
    $html .= '<tr>
        <td><b></b></td>
        <td>Food Allowance</td>
		<td>' . $Food_Allowance1 . '</td>
		<td>' . $Food_Allowance . '</td>
    </tr>';
}
$html .= '<tr>
        <td><b></b></td>
        <td>Mobile Reimbursement Charges</td>
		<td>' . $m_c_r1 . '</td>
		<td>' . $m_c_r . '</td>
    </tr>';
if ($Attire_Allowance1 != 0) {
    $html .= '<tr>
        <td><b></b></td>
        <td>Attire Allowance</td>
		<td>' . $Attire_Allowance1 . '</td>
		<td>' . $Attire_Allowance . '</td>
    </tr>';
}

if ($vr1 != 0) {
    $html .= '<tr>
        <td><b></b></td>
        <td>Vehicle Reimbursement</td>
		<td>' . $vr1 . '</td>
		<td>' . $vr . '</td>
    </tr>';
}

if ($driver_reimbursement1 != 0) {
    $html .= '<tr>
        <td><b></b></td>
        <td>Driver Reimbursement</td>
		<td>' . $driver_reimbursement1 . '</td>
		<td>' . $driver_reimbursement . '</td>
    </tr>';
}

if ($dRetention_Allowance1 != 0) {
    $html .= '<tr>
        <td><b></b></td>
        <td>Retention Allowance</td>
		<td>' . $Retention_Allowance1 . '</td>
		<td>' . $Retention_Allowance . '</td>
    </tr>';
}

$html .= '<tr>
        <td><b></b></td>
        <td><b>Total A</b></td>
		<td><b>' . $Total_A1 . '</b></td>
		<td><b>' . $Total_A . '</b></td>
    </tr>
    <tr>
        <td><b>B</b></td>
        <td><b> Retirals / Other Benefits </b></td>
        <td><b></b></td>
		<td><b></b></td>
    </tr>
    <tr>
        <td><b></b></td>
        <td>Employer Contribution to Provident Fund </td>
		<td>' . $PF1 . '</td>
		<td>' . $PF . '</td>
    </tr>';


if ($ESIC != 0) {
    $html .= '<tr>
        <td><b></b></td>
        <td>ESIC</td>
		<td>' . $ESIC1 . '</td>
		<td>' . $ESIC . '</td>
    </tr>';
}

$html .= '<tr>
        <td><b></b></td>
        <td>Gratuity</td>
		<td>' . $gratuity1 . '</td>
		<td>' . $gratuity . '</td>
    </tr>
    <tr>
        <td><b></b></td>
        <td><b>Total B</b></td>
		<td><b>' . $Total_B1 . '</b></td>
		<td><b>' . $Total_B . '</b></td>
    </tr>
    <tr>
        <td><b></b></td>
        <td><b>Total of PART I (A+B)</b>  </td>
		<td><b>' . $LTOTAL1 . '</b></td>
		<td><b>' . $LTOTAL . '</b></td>
    </tr>  
    <tr>
        <td><b>PART II</b></td>
        <td><b>Variable Components</b>  </td>
        <td><b></b></td>
        <td><b></b></td>
    </tr>';
if ($Variable_Pay != 0) {
        $html .= '<tr>
        <td><b></b></td>
        <td> ' . $vp . ' </td>
        <td></td>
        <td>' . $Variable_Pay . '</td>
    </tr>';
}

if ($STRB != 0) {
    $html .= '<tr>
    <td><b></b></td>
    <td>  STRB </td>
    <td></td>
    <td>' . $STRB . '</td>
</tr>';
}

if ($Incentive_Bonus != 0) {
$html .= '<tr>
<td><b></b></td>
<td> Incentive Bonus </td>
<td></td>
<td>' . $Incentive_Bonus. '</td>
</tr>';
}

$html .= '<tr>
        <td><b></b></td>
        <td><b> Total of Part II</b>  </td>
		<td><b></b></td>
		<td><b>' . $Total_II . '</b></td>
    </tr>
    <tr>
    <td><b></b></td>
        <td><b> Cost to Company Part I + Part II</b>  </td>
        <td><b></b></td>
        <td><b>' . $TOTAL . '</b></td>
    </tr>
    <tr>
        <td colspan="4"><b>Please note: </b></td>
    </tr>
    <tr>
        <td colspan="4">1. All Allowances / Bonuses / Incentives / Rewards / Benefits will be paid / reimbursed as per the Company policy. Employees who are on the rolls of the organization on the day of disbursement will be eligible for the same. <br>2. All employees are requested to keep themselves updated with changes announced in policies and procedures on the HRMS. <br> 3. Payment of Gratuity will be in accordance with the Gratuity Act, 1972.<br>4. Incase of any amendment in compliance law, the company reserves right to restructure the salary components keeping the CTC intact adhering to compliance
        </td>
    </tr>
    <tr>
    <td colspan="4">';
    if($vp == 0)
    {

    }
    if($vp == "Variable Pay * ")
    {
        $html.='* Currently paid bi-annually in April and October every year s.t. performance and you being confirmed on rolls of organization.';
        $html .= ' <br><br>';
    }
    if($vp=="Sales Incentive *** ")
    {
        $html.='*** As per policy';
        $html .= ' <br><br>';
    }
    if($vp=="Business Incentive *** ")
    {
        $html.='* *** As per policy';
        $html .= ' <br><br>';
    }
    
if($comp1YesNo == "no"){
    $html .= ' <br><br>';
}
if($comp1YesNo == "yes"){
    $html .= '** Payable in 2 equal installments (after completion of every 6 months) from the effective date of this letter; s.t. your being on the rolls of the organization on those dates. On completion of 12 months this component will be redundant and the amount will be aligned to the fixed component.';
    $html .= ' <br><br>';
}
if($comp2YesNo == "no"){
    $html .= ' <br><br>';
}
if($comp2YesNo == "yes"){
    $html .= '#  Payable Monthly as an exception. Recoverable if you resign the organization within 12 months of the effective date of this letter. On completion of 12 months this component will be redundant and the amount will be aligned to the fixed component.';
    $html .= ' <br><br>';
}

    $html.='</td>
    </tr>
    <tr>
        <td colspan="4"><b>In addition to the above: </b><br>The company provides the following benefits for their employees, the premium for which is directly paid by the company:<br>
        a. Mediclaim for employees and their eligible dependents (as defined by the company).<br>
        b. Personal Accident Policy for the employees        
        </td>
    </tr>
</table>
<P style="page-break-before: always"><br>';

$pdf->writeHTML($html, true, false, true, false, '');
ob_end_clean();
$pdf->Output('index.pdf');

?>