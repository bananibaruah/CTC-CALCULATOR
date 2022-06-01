<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTC Calculator</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
    var x = 0,efn=0, taff=0, tb2n1=0;
        y = 0;
    var y1 = 0;
    var hr1 = 0;
    var hr = 0;
    var ca = 0;
    var sb = 0;
    var fa = 0;
    var mcr = 0;
    var aa = 0,
        vt = 0,
        de = 0,
        ra = 0,
        ta1 = 0,
        ta2 = 0,
        pf = 0,
        esic = 0,
        g = 0,
        gt = 0,
        tb1 = 0,
        tb2 = 0,
        ot = 0,
        total_esic = 0;
    var e = 0,
        fta = 0,
        tab = 0,
        ttwo = 0,
        total1 = 0,
        total2 = 0,
        sbb = 0,
        hike = 0,
        total_grade = 0,
        incentive, gross,
        total_state = 0,
        lta1 = 0,
        aa1 = 0,
        vr1 = 0,
        mcr1 = 0,
        dr1 = 0,
        old_check = 0;
        executive_allowance=0;
    oc1 = 0;
    ctotal = 0;
    var w = 0;
    var w1 = 0;
    var tb3 = 0;
    var mra = 0;
    var flag = 0,
        eflag = 0,
        yflag = 0,wf=0;
    rechange_e = 0, rechange_y = 0;
    caflag = 0, rechange_ca = 0;
    var Food_Allowance =0,lta=0, r=0, m_c_r=0, Attire_Allowance=0, driver_reimbursement=0;
    var STRB=0;
    var Incentive_Bounus=0;
    var total_esic=0;
    var Total_A=0;
    Total_B=0;
    $(document).ready(function() {


        if (y < 21000) {
            $("#state").on("change", function() {
                var state = $("#state").val();
                var ctc = $("#ctc").val();
                var state_val = 0;
                var sbb = 0;
                total_state = 0;
                if (ctc != "") {
                    $.ajax({
                        type: "POST",
                        url: "state_check.php",
                        data: "a=" + state,
                        success: function(data) {
                            if (data != "not found") {
                                state_val = parseInt(data);
                                var dy = 0,
                                    dy1 = 0;
                                dy = Math.floor((ctc * (x / 100)) / 12);
                                dy1 = dy * 0.01;
                                y = parseInt(Math.floor(dy1) + "00");
                                if (y < 21000) {
                                    sbb = Math.round(y * (20 / 100));

                                    if (sbb > state_val) {
                                        total_state = (sbb);
                                        $('#Statutory_Bonus').val(total_state * 12);
                                    } else {
                                        total_state = state_val;
                                        $('#Statutory_Bonus').val(total_state * 12);
                                    }
                                } else {
                                    // alert(data);
                                }
                            }
                            basic_pay_ch();
                        },
                    });
                } else {

                }
            });

        } else {
            total_state = 0;
        }


        $("#grade").on("change", function() {
            var grade = $("#grade").val();

            $.ajax({
                type: "POST",
                url: "grade_check.php",
                data: "a=" + grade,
                success: function(data) {
                    if (data != "not found") {
                        //lta
                        const str = data.split("_");
                        lta = str[0];
                        $('#lta').val(parseInt(lta) * 12);

                        vr=str[1];
                        $('#vr').val(parseInt(vr)*12);

                        Food_Allowance=str[2];
                        $('#Food_Allowance').val(parseInt(Food_Allowance)*12);

                        m_c_r=str[3];
                        $('#m_c_r').val(parseInt(m_c_r)*12);

                        Attire_Allowance=str[4];
                        $('#Attire_Allowance').val(parseInt(Attire_Allowance)*12);

                        driver_reimbursement=str[5];
                        $('#driver_reimbursement').val(parseInt(driver_reimbursement)* 12);

                        total_grade = Math.round(parseInt(lta) +
                            parseInt(vr) +
                            parseInt(Food_Allowance) +
                            parseInt(m_c_r) +
                            parseInt(Attire_Allowance) +
                            parseInt(driver_reimbursement)
                        );

                    } else {
                        alert(data);
                    }

                },
            });


        });
        $("#lta").on('change', function() {
            lta = $("#lta").val();
            //lta = (rechange_lta / 12);
            //$('#lta').val(parseInt(lta) * 12);
            total_grade = Math.round(
                            parseInt(lta) +
                            parseInt(vr) +
                            parseInt(Food_Allowance) +
                            parseInt(m_c_r) +
                            parseInt(Attire_Allowance) +
                            parseInt(driver_reimbursement)
                        );
            basic_pay_ch();
        });
        $("#vr").on('change', function() {
            vr = $("#vr").val();
            //lta = (rechange_lta / 12);
            //$('#lta').val(parseInt(lta) * 12);
            total_grade = Math.round(
                            parseInt(lta) +
                            parseInt(vr) +
                            parseInt(Food_Allowance) +
                            parseInt(m_c_r) +
                            parseInt(Attire_Allowance) +
                            parseInt(driver_reimbursement)
                        );
            basic_pay_ch();
        });
        $("#Food_Allowance").on('change', function() {
            vr = $("#Food_Allowance").val();
            //lta = (rechange_lta / 12);
            //$('#lta').val(parseInt(lta) * 12);
            total_grade = Math.round(
                            parseInt(lta) +
                            parseInt(vr) +
                            parseInt(Food_Allowance) +
                            parseInt(m_c_r) +
                            parseInt(Attire_Allowance) +
                            parseInt(driver_reimbursement)
                        );
            basic_pay_ch();
        });
        $("#m_C_r").on('change', function() {
            vr = $("#m_c_r").val();
            //lta = (rechange_lta / 12);
            //$('#lta').val(parseInt(lta) * 12);
            total_grade = Math.round(
                            parseInt(lta) +
                            parseInt(vr) +
                            parseInt(Food_Allowance) +
                            parseInt(m_c_r) +
                            parseInt(Attire_Allowance) +
                            parseInt(driver_reimbursement)
                        );
            basic_pay_ch();
        });
        $("#Attire_Allowance").on('change', function() {
            vr = $("#Attire_Allowance").val();
            //lta = (rechange_lta / 12);
            //$('#lta').val(parseInt(lta) * 12);
            total_grade = Math.round(
                            parseInt(lta) +
                            parseInt(vr) +
                            parseInt(Food_Allowance) +
                            parseInt(m_c_r) +
                            parseInt(Attire_Allowance) +
                            parseInt(driver_reimbursement)
                        );
            basic_pay_ch();
        });
        $("#driver_reimbursement").on('change', function() {
            vr = $("#driver_reimbursement").val();
            //lta = (rechange_lta / 12);
            //$('#lta').val(parseInt(lta) * 12);
            total_grade = Math.round(
                            parseInt(lta) +
                            parseInt(vr) +
                            parseInt(Food_Allowance) +
                            parseInt(m_c_r) +
                            parseInt(Attire_Allowance) +
                            parseInt(driver_reimbursement)
                        );
            basic_pay_ch();
        });

        $("#vpp1").on("keyup", function() {
            var z = $("#vpp1").val();
            var ctc = $("#ctc").val();
            wf = 0;
            if (ctc != "") {
                if (z >= 3 && z <= 50) {
                    $("#al2").css('display', 'none');
                    w1 = ctc * (z / 100);
                    w = w1 / 12;
                    wf = w * 12;
                    $('#Variable_Pay').Math.round(val(wf));
                    $('#Total_II').Math.round(val(wf));

                } else {
                    $("#Variable_Pay").val('0');
                    $('#Total_II').val('0');
                    $("#al2").css('display', 'inline-block');

                }

            } else {
                alert('enter ctc first..');
            }

        });

        $("#oldctc").on("change", function() {
            oc1 = $("#oldctc").val();
            var ctc = $("#ctc").val();
            hike = Math.round((ctc / oc1 - 1) * 100);
            old_check = (oc1 * 1.8);
            if (hike >= 81) {
                var dra = 0,
                    dra1 = 0;
                dra = Math.floor((ctc - old_check) / 12);
                dra1 = dra * 0.01;
                ra = parseInt(Math.floor(dra1) + "00");

            } else {
                ra = 0;
            }

        });

        $("#basicp").on("keyup", function() {
            basic_pay_ch();

        });

        $("#ctc").on("keyup", function() {
            var ctc = $("#ctc").val();
        });


        $("hra").focus(function() {

            var basic = $("#basic").val();

            y = basic / 2;
            $("#hra").val(y);
        });

        $("#Executive_Allowance").on('change', function() {
            rechange_e = $("#Executive_Allowance").val();
            rechange_e = (rechange_e * 12);
            eflag = 1;
            basic_pay_ch();
        });
        $("#basic").on('change', function() {
            rechange_y = $("#basic").val();
            rechange_y = (rechange_y / 12);
            yflag = 1;
            basic_pay_ch();
        });
        $("#Conveyance_Allowance").on('change', function() {
            rechange_ca = $("#Conveyance_Allowance").val();
            rechange_ca = (rechange_ca / 12);
            caflag = 1;
            basic_pay_ch();
        });


        $("#Retention_Allowance").on('change', function() {
            mra = $("#Retention_Allowance").val();
            mra = (mra);
            flag = 1;
            basic_pay_ch();
        });

    });


    function basic_pay_ch() {
        $(document).ready(function() {
            x = $("#basicp").val();
            var ctc = $("#ctc").val(); //ctc
            oc1 = $("#oldctc").val(); //old ctc
            if (ctc != "") {
                if (x >= 5 && x <= 50) {
                    $("#al1").css('display', 'none');
                    var dy = 0,
                        dy1 = 0;
                    dy = Math.floor((ctc * (x / 100)) / 12);
                    dy1 = dy * 0.01;
                    y = parseInt(Math.floor(dy1) + "00");

                    if (yflag == 0) {

                        hr = y / 2;

                        ca = 1600;

                        if(caflag == 1)
                        {
                            ca = parseInt(rechange_ca);
                        }

                        if (flag == 0) {
                            ta1 = y + hr + ca + total_state + total_grade + ra;
                        }
                        if (flag == 1) {
                            var ct = 0,
                                ct1 = 0;
                            ct = parseInt(mra);
                            ra = Math.floor(ct / 12);
                            if(caflag == 1)
                        {
                            ca = parseInt(rechange_ca);
                        }

                            ta1 = y + hr + ca + total_state + total_grade + ra;
                        }


                    }
                    if (yflag == 1) {
                        y = rechange_y;
                        hr = y / 2;

                        
                        if (flag == 0) {
                            if(caflag == 1)
                        {
                            ca = parseInt(rechange_ca);
                        }
                            ta1 =y + hr + ca + total_state + total_grade + ra;
                        }
                        if (flag == 1) {
                            var ct = 0,
                                ct1 = 0;
                            ct = parseInt(mra);
                            ra = Math.floor(ct / 12);
                        if(caflag == 1)
                        {
                            ca = parseInt(rechange_ca);
                        }

                            ta1 = y + hr + ca + total_state + total_grade + ra;
                        }


                    }

                    var y_12 = y;
                    var total_y_12 = 0;
                    var pf = 0;
                    var pf1 = 0;
                    if (y_12 > 15000) {
                        total_y_12 = y_12 * (12 / 100);
                        pf = total_y_12 * 12;
                        pf1 = pf;
                        $("#PF").val(Math.round(pf1));
                      

                    } else {
                        // console.log("ta1",ta1);
                        y_12 = ta1 - hr;
                        // console.log("y_12",y_12);
                        if (y_12 > 15000) {
                            y_12 = 1800;
                            total_y_12 = y_12 * 12;
                            // console.log("total_y_12",total_y_12);
                            pf = total_y_12;
                            // console.log("pf",pf);
                            pf1 = pf;
                            // console.log("pf1",pf1);
                            $("#PF").val(Math.round(pf1));
                         
                        } else {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12 * 12;
                            pf1 = pf;
                            $("#PF").val(Math.round(pf1));
                      
                        }
                    }
                    gt = (y / 12);
                    var e_12 = 0;
                    var esic = 0;
                    var total_esic = 0;
                    var e_12 = ta1 / 12;
                    esic = e_12;
                    if (esic < 21000) {
                        total_esic = 0;
                        $("#ESIC").val(total_esic);
                    } else {
                        total_esic = e_121 - ca * (3.25 / 100) * 12;
                        $("#ESIC").val(total_esic);
                    }
                    tb1 = pf + gt + total_esic;
                    valtab = 0;
                    valtab1 = 0;
                    valtab = ta1 + tb1;
                    valtab1 = valtab;
                    var e1old = 0;
                    var eold = 0;
                    e1 = ctc - valtab1;
                    ctc3 = ctc / 12;
                    e1old = ctc3 - valtab1;
                    e = e1old;
                    if (e < 0) {
                        alert("Executive Allowance Value in Minus");
                        if (flag == 0) {
                            eold = e;
                            $("#Old_Executive_Allowance").val(eold * 12);
                            $("#OEAV").html(Math.round(eold * 12));
                            $("#ORAV").html(Math.round(ra * 12));

                            e = 0;
                        }
                        $(".Retention_Allowance").show();
                    }

                    if (e < 0) {
                        ta2 = ta1;
                    }
                    // if (eflag == 1) {
                    //     e = rechange_e;
                        ta2 = ta1 + e;
                    // } else {
                    //     ta2 = ta1 + e;
                    // }
            
                    enew =y + hr + ca + total_state + total_grade + pf + gt + total_esic + w;


                    ef = ctc - (enew * 12);


                    tb2 = pf + gt + total_esic;

                    // if(eflag==0){
                    //     taf = (ta1 * 12)  + ef;
                    // }
                    // if(eflag==1){
                    //     ef=rechange_e;
                        taf = (ta1 * 12)  + ef;
                    // }
                    

                    

                    var pfsy = y;
                    var total_pfsy = 0;
                    var pfs = 0;
                    var pfs1 = 0;
                    if (pfsy > 15000) {
                        total_pfsy = pfsy * (12 / 100);
                        pfs = total_pfsy * 12;
                        pfs1 = pfs;
                        $("#PF").val(Math.round(pfs1));

                    } else {
                        var taf1=taf/12;
                        pfsy = taf1 - hr;
                        if (pfsy > 15000) {
                            pfsy = 1800;
                            total_pfsy = pfsy * 12;
                            pfs = total_pfsy;
                            pfs1 = pfs;
                            $("#PF").val(Math.round(pfs1));
                        } else {
                            total_pfsy = pfsy * (12 / 100);
                            pfs = total_pfsy * 12;
                            pfs1 = pfs;
                            $("#PF").val(Math.round(pfs1));
                        }
                    }
                    gt = (y / 12);


                    var taf1=taf/12;
                    var es = 0;
                    var es1 = 0;
                    var total_es1 = 0;
                    var es = (taf1 - ca);
                    esic12 = es;
                    if (esic12 <= 21000) {
                        total_es1 = es * (3.25 / 100);
                        $("#ESIC").val(Math.round(total_es1*12));
                    } else {
                        total_es1 = 0;
                        $("#ESIC").val(Math.round(total_es1*12));
                    }

                    tb2n= pfs1+ (gt*12)+ (total_es1 *12);

                    
                    tafn = y + hr + ca + total_state + total_grade + ra;

                    efn=0;
                    enewn =y + hr + ca + total_state + total_grade + (pfs1/12) + gt + ra +total_es1 + w;
                    efn = ctc - (enewn * 12);


                    if(eflag==0){
                        taff=(tafn *12)+efn;
                    }
                    if (eflag==1){
                        efn=rechange_e;
                        taff=(tafn *12)+efn;
                    }
                   

                    var pfsy1 = y;
                    var total_pfsy1 = 0;
                    var pfs1 = 0;
                    var pfs11 = 0;
                    if (pfsy1 > 15000) {
                        total_pfsy1 = pfsy1 * (12 / 100);
                        pfs1 = total_pfsy1 * 12;
                        pfs11 = pfs1;
                        $("#PF").val(Math.round(pfs11));

                    } else {
                        var taf11=taff/12;
                        pfsy1 = taf11 - hr;
                        if (pfsy1 > 15000) {
                            pfsy1 = 1800;
                            total_pfsy1 = pfsy1 * 12;
                            pfs1 = total_pfsy1;
                            pfs11 = pfs1;
                            $("#PF").val(Math.round(pfs11));
                        } else {
                            total_pfsy1 = pfsy1 * (12 / 100);
                            pfs1 = total_pfsy1 * 12;
                            pfs11 = pfs1;
                            $("#PF").val(Math.round(pfs11));
                        }
                    }
                    gt = (y / 12);


                    var taf11=taff/12;
                    var es1 = 0;
                    var es11 = 0;
                    var total_es11 = 0;
                    var es1 = (taf11 - ca);
                    esic121 = es1;
                    if (esic121 <= 21000) {
                        total_es11 = es1 * (3.25 / 100);
                        $("#ESIC").val(Math.round(total_es11*12));
                    } else {
                        total_es11 = 0;
                        $("#ESIC").val(Math.round(total_es11*12));
                    }

                    tb2n1= pfs11+ (gt*12)+ (total_es11 *12);
                    Total_B=tb2n1/12;

                    efn1=0;
                    enewn1 =y + hr + ca + total_state + total_grade + (pfs11/12) + gt + ra +  total_es11 + w;
                    efn1 = ctc - (enewn1 * 12);
                    executive_allowance = efn1/12;
                    
                    Total_A=(y+hr+ca+total_state+total_grade+executive_allowance+ra);
                    // console.log("basic", y);
                    // console.log("hra", hr);
                    // console.log("ca",ca);
                    // console.log("total_state", total_state);
                    // console.log("total_grade",total_grade);
                    // console.log("executive aalowance", executive_allowance);
                    // console.log("RA", ra);
                    // console.log("Total_A",Total_A);
                    total2 = Total_A + Total_B;
                    ctotal = w + total2;



                    $("#basic").val(y * 12);
                    $("#hra").val(hr * 12);
                    $("#Conveyance_Allowance")
                        .val(ca * 12);
                    if (y < 21000) {
                        total_state = 0;
                    } else {
                        $("#Statutory_Bonus").val(total_state * 12);
                    }
                    $("#gratuity").val(Math.round(gt * 12));
                    $("#Total_B").val(Math.round(Total_B*12));
                   
                
                    $("#Executive_Allowance").val(Math.round(executive_allowance*12));
                   
                    $("#Retention_Allowance").val(Math.round(ra * 12));
                    $("#Total_A").val(Math.round(Total_A*12));
                    $("#LTotal").val(Math.round(total2*12));
                    $("#TOTAL").val(Math.round(ctotal*12));


                } else {
                    $("#basic").val('0');
                    $("#al1").css('display', 'inline-block');
                }
            } else {
                alert('enter ctc first..');
            }
        });
    }
    </script>
</head>
<br><br>

<body>
<div class="wrapper">
        <div class="container-fluid"><br>
            <a href="index.php"><img src="..\images\nselogo.png" height="70px" width="110px"></a>
            <a href="https://hr.nseit.com/CTC-CALCULATOR" class="btn btn-primary ml-3" style="float: right;">Home</a>
            <a href="../logout.php" class="btn btn-danger ml-3" style="float: right;">Sign Out of Your Account</a>
            <h5><b><center><font color="#0056b3">PE E10 - S10 CALCULATOR</font></center></b></h5>
        </div>
</div>
    <form method="post" action="create_tcpdf.php">
        <div class="container">
            <div class="card" style=background-color:#BFD7ED>
                <div class="card-body">
                
                    <br />
                    <div class="green box">
                        <div class="row">

                            <div class="col-lg-6">
                                <label=""><b>CODE</b></label>
                                    <input type="text" class="form-control" id="Code" name="Code" placeholder="Code" />
                                    <br>
                                    <label="">Address Line 1</label>
                                        <input type="text" class="form-control" id="Ad1" name="Ad1"
                                            placeholder="Address Line 1" />
                                        <br>
                                        <label="">Address Line 3</label>
                                            <input type="text" class="form-control" id="Ad3" name="Ad3"
                                                placeholder="Address Line 3" />
                                            <br>
                                            <label="">Pincode</label>
                                                <input type="text" class="form-control" id="Pincode" name="Pincode"
                                                    placeholder="Pincode" />
                                                <br>
                                                <!-- <label="">Start Date</label>
                        <input type="date" class="form-control" id="Sd" name="Sd"
                            placeholder="Start Date" />
                        <br> -->

                                                <label="">Position</label>
                                                    <input type="text" class="form-control" id="Position"
                                                        name="Position" placeholder="Position" />
                                                    <br>
                                                    <label=""><b>OLD CTC</b></label>
                                                        <span id="hike" name="hike" class="badge badge-danger">
                                                            Hike % </span>


                                                        <input type="text" class="form-control" id="oldctc"
                                                            name="oldctc" placeholder="OLD CTC" />
                                                        <br>



                                                        <label=""><b>BASIC PERCENTAGE <small id="al1"
                                                                    style="display:none;" class="badge badge-danger"> (
                                                                    Enter %
                                                                    between 5
                                                                    to 50 )
                                                                </small></b></label>
                                                            <input type="number" class="form-control" id="basicp"
                                                                name="basicp" placeholder="basicp" />
                                                            <br>
                                                            <label=""><b>State</b></label>

                                                                <select id="state" name="state" class="custom-select">
                                                                    <option selected>Select State</option>
                                                                    <?php
$g_sql = "SELECT DISTINCT COL_1 FROm stat";
$g_result = $link->query($g_sql);
if ($g_result->num_rows > 0) {
    while ($g_row = $g_result->fetch_assoc()) {
        echo "<option value='" . $g_row['COL_1'] . "'>" . $g_row['COL_1'] . "</option>";
    }
}

?>
                                                                </select>
                                                                <br><br>



                                                                <label="">HRA</label>
                                                                    <input type="text" class="form-control" id="hra"
                                                                        name="hra" placeholder="hra" />
                                                                    <br>
                                                                    <label="">STATUTORY BONUS</label>
                                                                        <input type="text" class="form-control"
                                                                            id="Statutory_Bonus" name="Statutory_Bonus"
                                                                            placeholder="Statutory_Bonus" />
                                                                        <br>

                                                                        <label="">EXECUTIVE
                                                                            ALLOWANCE</label>
                                                                            <span id="OEAV" class="badge badge-danger">
                                                                                Old Value : 0</span>
                                                                            <input type="text" class="form-control"
                                                                                id="Executive_Allowance"
                                                                                name="Executive_Allowance"
                                                                                placeholder="Executive_Allowance" />

                                                                            <br>

                                                                            <label="">MOBILE
                                                                                CHARGES
                                                                                REIMBURSEMENT</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="m_c_r" name="m_c_r"
                                                                                    placeholder="MOBILE CHARGES REIMBURSEMENT" />

                                                                                <br>

                                                                                <label="">
                                                                                    VEHICLE
                                                                                    REIMBURSEMENT</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id="vr"
                                                                                        name="vr"
                                                                                        placeholder="VEHICLE REIMBURSEMENT" />

                                                                                    <div class="Retention_Allowance">
                                                                                        <br>
                                                                                        <label class="">
                                                                                            RETENTION
                                                                                            ALLOWANCE</label>
                                                                                        <span id="ORAV"
                                                                                            class="badge badge-danger">
                                                                                            Old Value : 0</span>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="Retention_Allowance"
                                                                                            name="Retention_Allowance"
                                                                                            placeholder="Retention Allowance" />
                                                                                    </div>
                                                                                    <br>
                                                                                    <label="">
                                                                                        PF</label>
                                                                                        <input type="text"
                                                                                            class="form-control" id="PF"
                                                                                            name="PF"
                                                                                            placeholder="PF" />

                                                                                        <br>


                                                                                        <label="">
                                                                                            GRATUITY</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="gratuity"
                                                                                                name="gratuity"
                                                                                                placeholder="Gratuity" />

                                                                                            <br>


                                                                                            <label="">
                                                                                                <b>TOTAL
                                                                                                    OF
                                                                                                    PART
                                                                                                    I(A+B)</b></label>
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    id="LTotal"
                                                                                                    name="LTotal"
                                                                                                    placeholder="Total A+B" />

                                                                                                <br>
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <label="">
                                                                                                            VARIABLE
                                                                                                            COMPONENTS*</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <select
                                                                                                            name="vp"
                                                                                                            id="vp"
                                                                                                            class="custom-select"
                                                                                                            style="border:none;background-color:transparent;margin-top:-10px !important">

                                                                                                            <option
                                                                                                                selected>
                                                                                                                <b>Select
                                                                                                                    One</b>
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="Variable Pay * ">
                                                                                                                Variable
                                                                                                                Pay
                                                                                                                *
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="Sales Incentive *** ">
                                                                                                                Sales
                                                                                                                Incentive
                                                                                                                ***
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="Business Incentive *** ">
                                                                                                                Business
                                                                                                                Incentive
                                                                                                                ***
                                                                                                            </option>


                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>


                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    id="Variable_Pay"
                                                                                                    name="Variable_Pay"
                                                                                                    placeholder="VARIABLE  PAY" />

                                                                                                <br>


                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <label="">
                                                                                                            STRB</label>
                                                                                                    </div>
                                                                                                    
                                                                                                </div>


                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    id="STRB"
                                                                                                    name="STRB"
                                                                                                    placeholder="STRB" />

                                                                                                <br>
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-6">
                                                                                                        <label="">
                                                                                                            Incentive_Bonus</label>
                                                                                                    </div>
                                                                                                    
                                                                                                </div>


                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    id="Incentive_Bonus"
                                                                                                    name="Incentive_Bonus"
                                                                                                    placeholder="Incentive_Bonus" />

                                                                                                <br>
                                                                                                <label><b>COST
                                                                                                        TO
                                                                                                        COMPANY
                                                                                                        (PART
                                                                                                        I
                                                                                                        +
                                                                                                        PART
                                                                                                        II)</b>
                                                                                                </label>
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    id="TOTAL"
                                                                                                    name="TOTAL"
                                                                                                    placeholder=" COST TO COMPANY (PART I+ PART II" />
                                                                                                <br>

                                                                                                
                                                                                                    <script
                                                                                                        type="text/javascript">
                                        $(document).ready(function(){
                                            $("#compYes").on('click',function(){
                                                //alert('1');
                                                $("#Variable_Pay").val(wf);
                                                $("#Total_II").val(wf);
                                            });
                                            $("#compNo").on('click',function(){
                                                //alert('2');
                                                $("#Variable_Pay").val('0');
                                                $("#Total_II").val('0');
                                            });
                                        });
                                                                                                    function ShowHideDiv() {
                                                                                                        var chkYes =
                                                                                                            document
                                                                                                            .getElementById(
                                                                                                                "chkYes"
                                                                                                            );
                                                                                                        var jbamount =
                                                                                                            document
                                                                                                            .getElementById(
                                                                                                                "jbamount"
                                                                                                            );
                                                                                                        jbamount
                                                                                                            .style
                                                                                                            .display =
                                                                                                            chkYes
                                                                                                            .checked ?
                                                                                                            "block" :
                                                                                                            "none";
                                                                                                    }
                                                                                                    </script>
                                                                                                      <script
                                                                                                        type="text/javascript">
                                        $(document).ready(function(){
                                            $("#comp1Yes").on('click',function(){
                                                //alert('1');
                                                $("#STRB").val(wf);
                                                $("#Total_II").val(wf);
                                            });
                                            $("#comp1No").on('click',function(){
                                                //alert('2');
                                                $("#STRB").val('0');
                                                $("#Total_II").val('0');
                                            });
                                        });
                                                                                                    function ShowHideDiv() {
                                                                                                        var chkYes =
                                                                                                            document
                                                                                                            .getElementById(
                                                                                                                "chkYes"
                                                                                                            );
                                                                                                        var jbamount =
                                                                                                            document
                                                                                                            .getElementById(
                                                                                                                "jbamount"
                                                                                                            );
                                                                                                        jbamount
                                                                                                            .style
                                                                                                            .display =
                                                                                                            chkYes
                                                                                                            .checked ?
                                                                                                            "block" :
                                                                                                            "none";
                                                                                                    }
                                                                                                    </script>

<script
                                                                                                        type="text/javascript">
                                        $(document).ready(function(){
                                            $("#comp2Yes").on('click',function(){
                                                //alert('1');
                                                $("#Incentive_Bonus").val(wf);
                                                $("#Total_II").val(wf);
                                            });
                                            $("#comp2No").on('click',function(){
                                                //alert('2');
                                                $("#Incentive_Bonus").val('0');
                                                $("#Total_II").val('0');
                                            });
                                        });
                                                                                                    function ShowHideDiv() {
                                                                                                        var chkYes =
                                                                                                            document
                                                                                                            .getElementById(
                                                                                                                "chkYes"
                                                                                                            );
                                                                                                        var jbamount =
                                                                                                            document
                                                                                                            .getElementById(
                                                                                                                "jbamount"
                                                                                                            );
                                                                                                        jbamount
                                                                                                            .style
                                                                                                            .display =
                                                                                                            chkYes
                                                                                                            .checked ?
                                                                                                            "block" :
                                                                                                            "none";
                                                                                                    }
                                                                                                    </script>
                                                                                                    
                                                                                                    

                                                                                                    <br>


                            </div>


                            <div class="col-lg-6">

                                <label="">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                                    <br>
                                    <label="">Address Line2</label>
                                        <input type="text" class="form-control" id="Ad2" name="Ad2"
                                            placeholder="Address Line 2" />
                                        <br>
                                        <label="">City</label>
                                            <input type="text" class="form-control" id="City" name="City"
                                                placeholder="City" />
                                            <br>


                                            <label="">DOJ</label>
                                                <input type="date" class="form-control" id="doj" name="doj"
                                                    placeholder="DOJ" />
                                                <br>
                                                <label=""><b>TARGETED CTC</b></label>
                                                    <input type="text" class="form-control" id="ctc" name="ctc"
                                                        placeholder="CTC" />
                                                    <br>

                                                    <label=""><b>GRADE</b></label>

                                                        <select id="grade" name="grade" class="custom-select">
                                                            <option selected>Select Grade</option>
                                                            <?php
$g_sql = "SELECT DISTINCT COL_1 FROm lta_list";
$g_result = $link->query($g_sql);
if ($g_result->num_rows > 0) {
    while ($g_row = $g_result->fetch_assoc()) {
        echo "<option value='" . $g_row['COL_1'] . "'>" . $g_row['COL_1'] . "</option>";
    }
}

?>
                                                        </select>
                                                        <br><br>


                                                        <label=""><b>VARIABLE
                                                                PAY
                                                                PERCENATGE<small id="al2" style="display:none;"
                                                                    class="badge badge-danger">
                                                                    ( Enter %
                                                                    between 5
                                                                    to 50 )
                                                                </small></b></label>
                                                            <input type="number" class="form-control" id="vpp1"
                                                                name="vpp1" placeholder="VARIABLE PAY" />



                                                            <br>

                                                            <label="">BASIC</label>
                                                                <input type="text" class="form-control" id="basic"
                                                                    name="basic" placeholder="basic" />
                                                                <br>




                                                                <label="">CONVEYANCE ALLOWANCE</label>
                                                                    <input type="text" class="form-control"
                                                                        id="Conveyance_Allowance"
                                                                        name="Conveyance_Allowance"
                                                                        placeholder="Conveyance_Allowance" />
                                                                    <br>

                                                                    <label="">LTA</label>
                                                                        <input type="text" class="form-control" id="lta"
                                                                            name="lta" placeholder="LTA" />
                                                                        <br>

                                                                        <!-- <label="">EXECUTIVE
                                                    ALLOWANCE OLD VALUE</label>


                                                    <input type="text" class="form-control"
                                                        id="Old_Executive_Allowance"
                                                        name="Old_Executive_Allowance"
                                                        placeholder="Old_Executive_Allowance" /> -->




                                                                        <!-- <br> -->

                                                                        <label="">FOOD
                                                                            ALLOWANCE</label>
                                                                            <input type="text" class="form-control"
                                                                                id="Food_Allowance"
                                                                                name="Food_Allowance"
                                                                                placeholder="Food Allowance" />

                                                                            <br>


                                                                            <label="">ATTIRE
                                                                                ALLOWANCE</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="Attire_Allowance"
                                                                                    name="Attire_Allowance"
                                                                                    placeholder="Attire Allowance" />
                                                                                <br>
                                                                                <label="">
                                                                                    DRIVER
                                                                                    REIMBURSEMENT</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="driver_reimbursement"
                                                                                        name="driver_reimbursement"
                                                                                        placeholder="DRIVER REIMBURSEMENT" />

                                                                                    <br>

                                                                                    <label="">
                                                                                        <b>TOTAL
                                                                                            A</b></label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="Total_A" name="Total_A"
                                                                                            placeholder="Total_A" />

                                                                                        <br>
                                                                                        <label="">
                                                                                            ESIC</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="ESIC" name="ESIC"
                                                                                                placeholder="ESIC" />

                                                                                            <br>
                                                                                            <label="">
                                                                                                <b>TOTAL
                                                                                                    B</b></label>
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    id="Total_B"
                                                                                                    name="Total_B"
                                                                                                    placeholder="Total_B" />
                                                                                                <br><br><br>

                                                                                                <span>Variable Components</span>
                                                                                                    <label for="compYes">
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            id="compYes"
                                                                                                            name="compYesNo"
                                                                                                            value="yes" />
                                                                                                        Yes
                                                                                                    </label>
                                                                                                    <label for="compNo">
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            id="compNo"
                                                                                                            name="compYesNo"
                                                                                                            value="no" />
                                                                                                        No
                                                                                                    </label><br><br><br>

                                                                                                    <span>STRB</span>
                                                                                                    <label for="comp1Yes">
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            id="comp1Yes"
                                                                                                            name="com1YesNo"
                                                                                                            value="yes" />
                                                                                                        Yes
                                                                                                    </label>
                                                                                                    <label for="comp1No">
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            id="comp1No"
                                                                                                            name="comp1YesNo"
                                                                                                            value="no" />
                                                                                                        No
                                                                                                    </label><br><br><br>
                                                                                                    <span>Incentive Bonus</span>
                                                                                                    <label for="comp2Yes">
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            id="comp2Yes"
                                                                                                            name="com2YesNo"
                                                                                                            value="yes" />
                                                                                                        Yes
                                                                                                    </label>
                                                                                                    <label for="comp2No">
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            id="comp2No"
                                                                                                            name="comp2YesNo"
                                                                                                            value="no" />
                                                                                                        No
                                                                                                    </label><br><br>

                                                                                                    

                                                                                                    <label="">
                                                                                                    <b>TOTAL
                                                                                                        OF
                                                                                                        PART
                                                                                                        II</b>
                                                                                                    </label>
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        id="Total_II"
                                                                                                        name="Total_II"
                                                                                                        placeholder="TOTAL OF PART II" />
                                                                                                    <br><br><br>
                                                                                                    <span>Joining
                                                                                                        Bonus</span>
                                                                                                    <label for="chkYes">
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            id="chkYes"
                                                                                                            name="chkPassPort"
                                                                                                            value="yes"
                                                                                                            onclick="ShowHideDiv()" />
                                                                                                        Yes
                                                                                                    </label>
                                                                                                    <label for="chkNo">
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            id="chkNo"
                                                                                                            name="chkPassPort"
                                                                                                            value="no"
                                                                                                            onclick="ShowHideDiv()" />
                                                                                                        No
                                                                                                    </label>
                                                                                                    <hr />
                                                                                                    <div id="jbamount"
                                                                                                        style="display: none">
                                                                                                        Joining
                                                                                                        Bonus :
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            name="jbamount"
                                                                                                            id="jbamount" />
                                                                                                    </div>

                                                                                                


                            </div>

                        </div>
                        <input type="submit" class="btn btn-primary" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>