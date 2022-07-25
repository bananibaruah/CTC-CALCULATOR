<?php
require_once("config.php");
require_once("TCPDF/tcpdf.php");
if(isset($_POST["preview_data"]))
{
$Code = $_POST["Code"];
$name = $_POST["name"];
$Ad1 = $_POST["Ad1"];
$Ad2 = $_POST["Ad2"];
$Ad3 = $_POST["Ad3"];
$state = $_POST["state"];
$Pincode = $_POST["Pincode"];
$City = $_POST["City"];
$grade = $_POST["grade"];
$Sd = $_POST["Sd"];
$ed = $_POST["ed"];
$doj = $_POST["doj"];
$dojtype = $_POST["dojtype"];
$Position = $_POST["Position"];
$wsd = $_POST['wsd'];
$wed = $_POST['wed'];
$aloc = $_POST["aloc"];
$jbamount = $_POST["jbamount"];
$ctc = $_POST["ctc"];
$basic = $_POST["basic"];
$basic1 = round($basic / 12);
$hra = $_POST["hra"];
$hra1 = round($hra / 12);
$Conveyance_Allowance = $_POST['Conveyance_Allowance'];
$Conveyance_Allowance1 = round($Conveyance_Allowance / 12);
$Statutory_Bonus = $_POST['Statutory_Bonus'];
$Statutory_Bonus1 = round($Statutory_Bonus / 12);
$Executive_Allowance = $_POST['Executive_Allowance'];
$Executive_Allowance1 = round($Executive_Allowance / 12);
$Total_A = $_POST['Total_A'];
$Total_A1 = round($Total_A / 12);
$PF = $_POST['PF'];
$PF1 = round($PF / 12);
$ESIC = $_POST['ESIC'];
$ESIC1 = round($ESIC / 12);
$Total_B = $_POST['Total_B'];
$Total_B1 = round($Total_B / 12);
$LTotal = $_POST['LTotal'];
$LTotal1 = round($LTotal / 12);
$TOTAL = $_POST['TOTAL'];
$TOTAL1 = round($TOTAL / 12);
$chkPassPort=$_POST['chkPassPort'];
if($jbamount != "")
{
$chkPassPort="yes";
}
else
{
    $chkPassPort="no";
}

$doj1 = date("F d, Y", strtotime($doj));
$Sd1 = date("F d, Y", strtotime($Sd));
$ed1 = date("F d, Y", strtotime($ed));
$dojtype1 = date("F d, Y", strtotime($dojtype));


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
$pdf->SetCreator(PDF_CREATOR);
$pdf->setHeaderData();
$pdf->setPrintHeader(true);
$pdf->setPrintFooter(false);
$pdf->setFontSubsetting(true);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetFont('times', '', 10.5);
$pdf->SetMargins(15, 38, 10, true);
$pdf->AddPage();
$pdf->SetAutoPageBreak(TRUE,15);
// $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// // set document information
// $pdf->SetCreator(PDF_CREATOR);
// $pdf->SetAuthor('');
// $pdf->SetTitle('OFFER LETTER');
// $pdf->SetSubject('OFFER LETTER');
// $pdf->SetKeywords('TCPDF, PDF');

// // set default header data
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// // set header and footer fonts
// $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// // set default monospaced font
// $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// // set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
// $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// // set auto page breaks
// $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// // set image scale factor
// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// // set some language-dependent strings (optional)
// // if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
// //     require_once(dirname(__FILE__) . '/lang/eng.php');
// //     $pdf->setLanguageArray($l);
// // }

// // ---------------------------------------------------------

// // set font
// $pdf->SetFont('times', '', 10.5);

// // add a page
// $pdf->AddPage();

// // set some text to print


// // ---------------------------------------------------------

// //Close and output PDF document






$html .= '<br>' . $name . '<br>

&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<b>Annexure I</b><br>
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<u><b>COMPENSATION DETAILS </b></u>
<br><br>
<table cellspacing="0" cellpadding="1" border="1" style="border-color:gray width:100% height:100%;">
<tr>
        
		<td style="text-align:center" colspan="4">&nbsp; <b>ANNEXURE I</b></td>
    </tr>

    <tr>
      <td style= "width:15%;"><b>&nbsp; &nbsp; &nbsp;FTE Name</b></td>
      <td style= "width:45%;"><b>&nbsp; &nbsp; &nbsp;' . $name . '</b></td>
      <td style= "width:20%;"><b>&nbsp; &nbsp; &nbsp;Location</b></td>
      <td style= "width:20%;"><b>&nbsp; &nbsp; &nbsp;' . $aloc . '</b></td>
    </tr>
    <tr>
        <td><b>&nbsp; &nbsp; &nbsp;Designation</b></td>
        <td><b>&nbsp; &nbsp; &nbsp;' . $Position . '</b></td>
        <td></td>
		<td></td>
    </tr>
	<tr>
        <td><b>&nbsp; &nbsp; &nbsp;w.e.f</b></td>
        <td><b>&nbsp; &nbsp; &nbsp;' . $dojtype1 . '</b></td>
		<td style="text-align:center"><b>Grade</b></td>
		<td style="text-align:center"><b>' . $grade . '</b></td>
    </tr>
	<tr>
        <td><b></b></td>
        <td>&nbsp; &nbsp; &nbsp;<b>Compensation Head</b></td>
		<td style="text-align:center"><b>Monthly</b></td>
		<td style="text-align:center"><b>Annual</b></td>
    </tr>
    <tr>
        <td><b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;PART I</b></td>
        <td><b>&nbsp; &nbsp; &nbsp;Fixed Components</b></td>
       <td style="text-align:center" colspan="2"><b>All Figures in INR</b></td>
    </tr>
    <tr>
        <td><b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;A</b></td>
        <td><b>&nbsp; &nbsp; &nbsp;Salary</b></td>
        <td><b></b></td>
		<td><b></b></td>
    </tr>
    <tr>
        <td><b></b></td>
        <td>&nbsp; &nbsp; &nbsp;Basic</td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $basic1) . '</td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $basic) . '</td>
    </tr>
    <tr>
        <td><b></b></td>
        <td>&nbsp; &nbsp; &nbsp;HRA</td>
        <td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $hra1) . '</td>
        <td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $hra) . '</td>
    </tr>';


if ($Conveyance_Allowance != 0) {
    $html .= '<tr>
        <td><b></b></td>
        <td>&nbsp; &nbsp; &nbsp;Conveyance Allowance</td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Conveyance_Allowance1) . '</td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Conveyance_Allowance) . '</td>
    </tr>';
}
if ($Statutory_Bonus != 0) {
    $html .= ' <tr>
        <td><b></b></td>
        <td>&nbsp; &nbsp; &nbsp;Statutory Bonus</td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Statutory_Bonus1) . '</td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Statutory_Bonus) . '</td>
    </tr>';
}
if ($Executive_Allowance != 0) {
$html .= '<tr>
    <td><b></b></td>
        <td>&nbsp; &nbsp; &nbsp;Executive Allowance</td>
        <td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Executive_Allowance1) . '</td>
        <td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Executive_Allowance) . '</td>
    </tr>';
}

$html .= '<tr>
        <td><b></b></td>
        <td><b>&nbsp; &nbsp; &nbsp;Total A</b></td>
		<td style="text-align:right"><b>' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Total_A1) . '</b></td>
		<td style="text-align:right"><b>' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Total_A) . '</b></td>
    </tr>
    <tr>
        <td><b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;B</b></td>
        <td><b>&nbsp; &nbsp; &nbsp; Retirals / Other Benefits </b></td>
        <td><b></b></td>
		<td><b></b></td>
    </tr>
    <tr>
        <td><b></b></td>
        <td>&nbsp; &nbsp; &nbsp;Employer Contribution to Provident Fund </td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $PF1) . '</td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $PF) . '</td>
    </tr>';


if ($ESIC != 0) {
    $html .= '<tr>
        <td><b></b></td>
        <td>&nbsp; &nbsp; &nbsp;ESIC</td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $ESIC1) . '</td>
		<td style="text-align:right">' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $ESIC) . '</td>
    </tr>';
}

$html .= '<tr>
        <td><b></b></td>
        <td><b>&nbsp; &nbsp; &nbsp;Total B</b></td>
		<td style="text-align:right"><b>' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Total_B1) . '</b></td>
		<td style="text-align:right"><b>' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $Total_B) . '</b></td>
    </tr>
    <tr>
        <td><b></b></td>
        <td><b>&nbsp; &nbsp; &nbsp;Total of PART I (A+B)</b>  </td>
		<td style="text-align:right"><b>' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $LTotal1) . '</b></td>
		<td style="text-align:right"><b>' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $LTotal) . '</b></td>
    </tr>  
   
    <tr>
    <td><b></b></td>
        <td><b> &nbsp; &nbsp; &nbsp;Cost to Company PART I (A + B) </b>  </td>
        <td><b></b></td>
        <td style="text-align:right"><b>' . preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $TOTAL) . '</b></td>
    </tr>
    <tr>
        <td colspan="4"><b>&nbsp; &nbsp; Please note: </b></td>
    </tr>
    <tr>
        <td colspan="4">&nbsp; &nbsp;Please note:<br>
        The company provides the following benefits for their FTEs, the premium for which is directly paid by the company:<br>
        * Personal Accident Policy for the FTEs.<br>
        * Incase of any amendment in compliance law, the company reserves right to restructure the salary components keeping the CTC  intact adhering to compliance.<br>
        
        </td>
    </tr>
   
</table>
<br><br><br><br><br><br><br><br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<b>_________________</b><br>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Initials</b>
';



$pdf->writeHTML($html, true, false, true, false, '');
ob_end_clean();
$pdf->Output('index.pdf');
}
if(isset($_POST['sumibt_data']))
{
    $Code = $_POST["Code"];
    $name = $_POST["name"];
    $Ad1 = $_POST["Ad1"];
    $Ad2 = $_POST["Ad2"];
    $Ad3 = $_POST["Ad3"];
    $state = $_POST["state"];
    $Pincode = $_POST["Pincode"];
    $City = $_POST["City"];
    $grade = $_POST["grade"];
    $Sd = $_POST["Sd"];
    $ed = $_POST["ed"];
    $doj = $_POST["doj"];
    $dojtype = $_POST["dojtype"];
    $Position = $_POST["Position"];
    $wsd = $_POST['wsd'];
    $wed = $_POST['wed'];
    $aloc = $_POST["aloc"];
    $jbamount = $_POST["jbamount"];
    $ctc = $_POST["ctc"];
    $basic = $_POST["basic"];
    $basic1 = round($basic / 12);
    $hra = $_POST["hra"];
    $hra1 = round($hra / 12);
    $Conveyance_Allowance = $_POST['Conveyance_Allowance'];
    $Conveyance_Allowance1 = round($Conveyance_Allowance / 12);
    $Statutory_Bonus = $_POST['Statutory_Bonus'];
    $Statutory_Bonus1 = round($Statutory_Bonus / 12);
    $Executive_Allowance = $_POST['Executive_Allowance'];
    $Executive_Allowance1 = round($Executive_Allowance / 12);
    $Total_A = $_POST['Total_A'];
    $Total_A1 = round($Total_A / 12);
    $PF = $_POST['PF'];
    $PF1 = round($PF / 12);
    $ESIC = $_POST['ESIC'];
    $ESIC1 = round($ESIC / 12);
    $Total_B = $_POST['Total_B'];
    $Total_B1 = round($Total_B / 12);
    $LTotal = $_POST['LTotal'];
    $LTotal1 = round($LTotal / 12);
    $TOTAL = $_POST['TOTAL'];
    $TOTAL1 = round($TOTAL / 12);
    $chkPassPort=$_POST['chkPassPort'];
    $olt_id = $_POST['olt_id'];
    $ins_sql = "UPDATE olt SET
    Ref_No_of_Offer_Letter = '$Code',
    Employee_Name = '$name',
    Address_Line_1 = '$Ad1',
    Address_Line_2 = '$Ad2',
    Address_Line_3 = '$Ad3',
    state = '$state',
    Pincode = '$Pincode',
    City = '$City',
    grade = '$grade',
    Sd = '$Sd',
    ed = '$ed',
    doj = '$doj',
    dojtype = '$dojtype',
    Position = '$Position',
    wed = '$wsd',
    wsd = '$wed',
    aloc = '$aloc',
    jbamount = '$jbamount',
    ctc = '$ctc',
    basic = '$basic',
    hra = '$hra',
    Conveyance_Allowance = '$Conveyance_Allowance',
    Statutory_Bonus = '$Statutory_Bonus',
    Executive_Allowance = '$Executive_Allowance',
    Total_A = '$Total_A',
    PF = '$PF',
    ESIC = '$ESIC',
    Total_B = '$Total_B',
    LTotal = '$LTotal',
    TOTAL = '$TOTAL' WHERE olt_Id = $olt_id";
    //print_r($ins_sql);
    $link->query($ins_sql);
    $sql_sel = "SELECT MAX(olt_Id) AS olt_Id FROM olt";
    $sql_result = $link->query($sql_sel);
    $sql_result -> num_rows > 0 ;
    $sql_row = $sql_result -> fetch_assoc();
    $iq = $sql_row["olt_Id"];
    if($iq == "" )
    {
        $iq = 0;
    }
    header('location: create_tcpdf.php?id='.$iq); 
}
?>