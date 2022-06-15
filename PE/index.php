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
    var x = 0,
        efn = 0,
        taff = 0,
        tb2n1 = 0;
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
    executive_allowance = 0;
    oc1 = 0;
    ctotal = 0;
    var w = 0;
    var w1 = 0;
    var tb3 = 0;
    var mra = 0;
    var flag = 0,
        eflag = 0,
        yflag = 0,
        wf = 0;
    bwf = 0;
    rechange_e = 0, rechange_y = 0;
    caflag = 0, rechange_ca = 0;
    var Food_Allowance = 0,
        lta = 0,
        r = 0,
        m_c_r = 0,
        Attire_Allowance = 0,
        driver_reimbursement = 0;
    var STRB = 0;
    var Incentive_Bounus = 0;
    var total_esic = 0;
    var Total_A = 0;
    Total_B = 0, Total_II = 0;
    P12 = 0;
    swf = 0, iwf = 0;
    rechange_vp = 0, vpflag = 0;
    rechange_bp = 0, bpflag = 0;
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
                                        $('#MStatutory_Bonus').val(total_state);
                                    } else {
                                        total_state = state_val;
                                        $('#Statutory_Bonus').val(total_state * 12);
                                        $('#MStatutory_Bonus').val(total_state);
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
                        $("#Mlta").val(parseInt(lta));

                        vr = str[1];
                        $('#vr').val(parseInt(vr) * 12);
                        $("#Mvr").val(parseInt(vr));

                        Food_Allowance = str[2];
                        $('#Food_Allowance').val(parseInt(Food_Allowance) * 12);
                        $("#MFood_Allowance").val(parseInt(Food_Allowance));

                        m_c_r = str[3];
                        $('#m_c_r').val(parseInt(m_c_r) * 12);
                        $("#Mm_c_r").val(parseInt(m_c_r));

                        Attire_Allowance = str[4];
                        $('#Attire_Allowance').val(parseInt(Attire_Allowance) * 12);
                        $("#MAttire_Allowance").val(parseInt(Attire_Allowance));

                        driver_reimbursement = str[5];
                        $('#driver_reimbursement').val(parseInt(driver_reimbursement) * 12);
                        $("#Mdriver_reimbursement").val(parseInt(driver_reimbursement));

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
                    basic_pay_ch();
                },
            });


        });
        $("#lta").on('change', function() {
            lta = $("#lta").val();
            $('#lta').val(parseInt(lta) * 12);
            $("#Mlta").val(parseInt(lta));

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
            $('#vr').val(parseInt(vr) * 12);
            $("#Mvr").val(parseInt(vr));
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
            Food_Allowance = $("#Food_Allowance").val();
            $('#Food_Allowance').val(parseInt(Food_Allowance) * 12);
            $("#MFood_Allowance").val(parseInt(Food_Allowance));
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
        $("#m_c_r").on('change', function() {
            m_c_r = $("#m_c_r").val();
            $('#m_c_r').val(parseInt(m_c_r) * 12);
            $("#Mm_c_r").val(parseInt(m_c_r));
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
            Attire_Allowance = $("#Attire_Allowance").val();
            $('#Attire_Allowance').val(parseInt(Attire_Allowance) * 12);
            $("#MAttire_Allowance").val(parseInt(Attire_Allowance));
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
            driver_reimbursement = $("#driver_reimbursement").val();
            $('#driver_reimbursement').val(parseInt(driver_reimbursement) * 12);
            $("#Mdriver_reimbursement").val(parseInt(driver_reimbursement));
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



        $("#grade").on("change", function() {
            var grade = $("#grade").val();

            $.ajax({
                type: "POST",
                url: "vp_check.php",
                data: "a=" + grade,
                success: function(data) {
                    if (data != "not found") {
                        //lta
                        const str = data.split("_");
                        var ctc = $("#ctc").val();
                        if (ctc != "") {
                            vpp1 = str[0];
                            wf = (ctc * (vpp1 / 100));
                            $('#vpp1').val(parseInt(vpp1));
                            $('#Variable_Pay').val(parseInt(wf));
                            $("#MVariable_Pay").val(parseInt(wf / 12));
                        }

                        total_grade1 = Math.round(parseInt(vpp1));

                    } else {
                        alert(data);
                    }
                    basic_pay_ch();

                },
            });


        });

        $("#vpp1").on("change", function() {
            var ctc = $("#ctc").val();
            if (ctc != "") {
                $("#al2").css('display', 'none');
                rechange_vp = $('#vpp1').val();
                wf = (ctc * (rechange_vp / 100));
                vpflag = 1;
                $('#Variable_Pay').val(wf);
                $("#MVariable_Pay").val(Math.roun(wf / 12));


            } else {
                alert('enter ctc first..');
            }
            basic_pay_ch();
        });


        $("#bp1").on("change", function() {
            var ctc = $("#ctc").val();
            if (ctc != "") {
                $("#al2").css('display', 'none');
                rechange_bp = $('#bp1').val();
                dy1 = 0;
                bwf = ((ctc * (rechange_bp / 100)) / 12);
                dy1 = bwf * 0.01;
                y = parseInt(Math.floor(dy1) + "00");
                bpflag = 1;
                $('#basic').val(y);
                $("#Mbasic").val(Math.round(y / 12));


            } else {
                alert('enter ctc first..');
            }
            basic_pay_ch();
        });




        $("#strb1").on("keyup", function() {
            var s = $("#strb1").val();
            var ctc = $("#ctc").val();
            var swf = 0;
            if (ctc != "") {
                if (s >= 3 && s <= 50) {
                    $("#al2").css('display', 'none');
                    sw1 = ctc * (s / 100);
                    sw = sw1 / 12;
                    swf = sw * 12;
                    $('#STRB').val(swf);
                    $("#MSTRB").val(swf / 12);

                } else {
                    $("#STRB").val('0');
                    $("#MSTRB").val('0');
                    $("#al2").css('display', 'inline-block');

                }

            } else {
                alert('enter ctc first..');
            }
            basic_pay_ch();

        });

        $("#ib1").on("keyup", function() {
            var i = $("#ib1").val();
            var ctc = $("#ctc").val();
            var iwf = 0;
            if (ctc != "") {
                if (i >= 3 && i <= 50) {
                    $("#al2").css('display', 'none');
                    iw1 = ctc * (i / 100);
                    iw = iw1 / 12;
                    iwf = iw * 12;
                    $('#Incentive_Bonus').val(iwf);
                    $("#MIncentive_Bonus").val(iwf / 12);

                } else {
                    $("#Incentive_Bonus").val('0');
                    $("#MIncentive_Bonus").val('0');
                    $("#al2").css('display', 'inline-block');

                }

            } else {
                alert('enter ctc first..');
            }
            basic_pay_ch();
        });


        $("#oldctc").on("change", function() {
            oc1 = $("#oldctc").val();
            var ctc = $("#ctc").val();
            hike = Math.round((ctc / oc1 - 1) * 100);
            console.log("hike", hike);
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
            basic_pay_ch();

        });


        $("#basicp").on("keyup", function() {
            basic_pay_ch();

        });

        $("#ctc").on("keyup", function() {
            var ctc = $("#ctc").val();
            basic_pay_ch();
        });


        $("hra").focus(function() {

            var basic = $("#basic").val();

            y = basic / 2;
            $("#hra").val(y);
            basic_pay_ch();
        });

        $("#Executive_Allowance").on('change', function() {
            rechange_e = $("#Executive_Allowance").val();
            rechange_e = (rechange_e / 12);
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
                if (bpflag == 0) {
                    if (x = 40) {
                        $("#al1").css('display', 'none');
                        var dy = 0,
                            dy1 = 0;
                        dy = Math.floor((ctc * (x / 100)) / 12);
                        dy1 = dy * 0.01;
                        y = parseInt(Math.floor(dy1) + "00");
                        console.log("y 40", y);

                        if (yflag == 0) {

                            hr = y / 2;

                            ca = 1600;

                            if (caflag == 1) {
                                ca = parseInt(rechange_ca);
                            }



                        }
                        if (yflag == 1) {
                            y = rechange_y;
                            hr = y / 2;

                            ca = 1600;

                            if (caflag == 1) {
                                ca = parseInt(rechange_ca);
                            }

                        }
                        gross = 0;
                        gross = ctc / 12;

                        //Variable Pay

                        vp = 0;
                        vp1 = 0;
                        vp1 = wf;
                        vp = vp1 / 12;


                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val(Math.round(pf1 * 12));
                            $("#MPF").val(Math.round(pf1));


                        } else {
                            y_12 = gross - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val(Math.round(pf1 * 12));
                                $("#MPF").val(Math.round(pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val(Math.round(pf1 * 12));
                                $("#MPF").val(Math.round(pf1));

                            }
                        }

                        //Gratuity
                        gt = (y / 12);

                        //Total_A

                        Total_A = gross - vp - pf1 - gt;



                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        esic = Total_A - ra - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val(Math.round(total_esic * 12));
                            $("#MESIC").val(Math.round(total_esic));
                        } else {
                            total_esic = 0;
                            $("#ESIC").val(Math.round(total_esic * 12));
                            $("#MESIC").val(Math.round(total_esic));
                        }

                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            executive_allowance = e;
                            if (flag == 1) {
                                var ct = 0,
                                    ct1 = 0;
                                ct = parseInt(mra);
                                ra = Math.floor(ct / 12);
                                var e = 0;
                                e = y + hr + ca + total_state + total_grade + ra;
                                executive_allowance = (Total_A - e);


                            }
                        }

                        if (eflag == 0) {
                            var e = 0;
                            e = y + hr + ca + total_state + total_grade + ra;
                            executive_allowance = (Total_A - e);

                            if (flag == 1) {
                                var ct = 0,
                                    ct1 = 0;
                                ct = parseInt(mra);
                                ra = Math.floor(ct / 12);
                                var e = 0;
                                e = y + hr + ca + total_state + total_grade + ra;
                                executive_allowance = (Total_A - e);


                            }
                        }

                        if (flag == 1) {
                            var ct = 0,
                                ct1 = 0;
                            ct = parseInt(mra);
                            ra = Math.floor(ct / 12);
                            var e = 0;
                            e = y + hr + ca + total_state + total_grade + ra;
                            executive_allowance = (Total_A - e);

                            if (eflag == 1) {
                                e = rechange_e;
                                executive_allowance = e;
                            }
                        }




                        //Total_B
                        Total_B = pf1 + total_esic + gt;

                        //TotalA+TotalB
                        total2 = Total_A + Total_B;

                        //Part2 Total
                        P12 = wf + swf + iwf;

                        //Part I + part II Total
                        ctotal = total2 + (P12 / 12);

                        $("#span_hike").html("Hike % : " + (hike));

                        $("#basic").val(y * 12);
                        $("#Mbasic").val(Math.round(y));

                        $("#hra").val(hr * 12);
                        $("#Mhra").val(Math.round(hr));

                        $("#Conveyance_Allowance").val(ca * 12);
                        $("#MConveyance_Allowance").val(ca);

                        if (y > 21000) {
                            total_state = 0;
                            $("#Statutory_Bonus").val(total_state * 12);
                            $("#MStatutory_Bonus").val(Math.round(total_state));
                        } else {
                            $("#Statutory_Bonus").val(total_state * 12);
                            $("#MStatutory_Bonus").val(Math.round(total_state));
                        }

                        $("#gratuity").val(Math.round(gt * 12));
                        $("#Mgratuity").val(Math.round(gt));

                        $("#Total_B").val(Math.round(Total_B * 12));
                        $("#MTotal_B").val(Math.round(Total_B));

                        $("#Executive_Allowance").val(Math.round(executive_allowance * 12));
                        $("#MExecutive_Allowance").val(Math.round(executive_allowance));

                        $("#Retention_Allowance").val(Math.round(ra * 12));
                        $("#MRetention_Allowance").val(Math.round(ra));

                        $("#Total_A").val(Math.round(Total_A * 12));
                        $("#MTotal_A").val(Math.round(Total_A));

                        $("#LTotal").val(Math.round(total2 * 12));
                        $("#MLTotal").val(Math.round(total2));

                        $("#Total_II").val(Math.round(P12));
                        $("#MTotal_II").val(Math.round(P12 / 12));

                        $("#TOTAL").val(Math.round(ctotal * 12));
                        $("#MTOTAL").val(Math.round(ctotal));
                    }
                }

                if (bpflag == 1) {
                    if (x = rechange_bp) {
                        $("#al1").css('display', 'none');
                        var dy = 0,
                            dy1 = 0;
                        dy = Math.floor((ctc * (rechange_bp / 100)) / 12);
                        dy1 = dy * 0.01;
                        y = parseInt(Math.floor(dy1) + "00");
                        $("#basic").val(y * 12);
                        $("#Mbasic").val(Math.round(y));
                        console.log("y M", y);


                        if (yflag == 0) {

                            hr = y / 2;

                            ca = 1600;

                            if (caflag == 1) {
                                ca = parseInt(rechange_ca);
                            }



                        }
                        if (yflag == 1) {
                            y = rechange_y;
                            hr = y / 2;

                            ca = 1600;

                            if (caflag == 1) {
                                ca = parseInt(rechange_ca);
                            }

                        }
                        gross = 0;
                        gross = ctc / 12;

                        //Variable Pay

                        vp = 0;
                        vp1 = 0;
                        vp1 = wf;
                        vp = vp1 / 12;


                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val(Math.round(pf1 * 12));
                            $("#MPF").val(Math.round(pf1));


                        } else {
                            y_12 = gross - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val(Math.round(pf1 * 12));
                                $("#MPF").val(Math.round(pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val(Math.round(pf1 * 12));
                                $("#MPF").val(Math.round(pf1));

                            }
                        }

                        //Gratuity
                        gt = (y / 12);

                        //Total_A

                        Total_A = gross - vp - pf1 - gt;



                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        esic = Total_A - ra - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val(Math.round(total_esic * 12));
                            $("#MESIC").val(Math.round(total_esic));
                        } else {
                            total_esic = 0;
                            $("#ESIC").val(Math.round(total_esic * 12));
                            $("#MESIC").val(Math.round(total_esic));
                        }

                        //Executive Allowance
                        if (eflag == 1) {
                            e = rechange_e;
                            executive_allowance = e;
                            if (flag == 1) {
                                var ct = 0,
                                    ct1 = 0;
                                ct = parseInt(mra);
                                ra = Math.floor(ct / 12);
                                var e = 0;
                                e = y + hr + ca + total_state + total_grade + ra;
                                executive_allowance = (Total_A - e);
                            }

                        }

                        if (eflag == 0) {

                            var e = 0;
                            e = y + hr + ca + total_state + total_grade + ra;
                            executive_allowance = (Total_A - e);

                            if (flag == 1) {
                                var ct = 0,
                                    ct1 = 0;
                                ct = parseInt(mra);
                                ra = Math.floor(ct / 12);
                                var e = 0;
                                e = y + hr + ca + total_state + total_grade + ra;
                                executive_allowance = (Total_A - e);


                            }
                        }

                        if (flag == 1) {
                            var ct = 0,
                                ct1 = 0;
                            ct = parseInt(mra);
                            ra = Math.floor(ct / 12);
                            var e = 0;
                            e = y + hr + ca + total_state + total_grade + ra;
                            executive_allowance = (Total_A - e);
                            if (eflag == 1) {
                                e = rechange_e;
                                executive_allowance = e;
                            }
                        }

                        //Total_B
                        Total_B = pf1 + total_esic + gt;

                        //TotalA+TotalB
                        total2 = Total_A + Total_B;

                        //Part2 Total
                        P12 = wf + swf + iwf;

                        //Part I + part II Total
                        ctotal = total2 + (P12 / 12);

                        $("#span_hike").html("Hike % : " + (hike));

                        $("#basic").val(y * 12);
                        $("#Mbasic").val(Math.round(y));

                        $("#hra").val(hr * 12);
                        $("#Mhra").val(Math.round(hr));

                        $("#Conveyance_Allowance").val(ca * 12);
                        $("#MConveyance_Allowance").val(ca);

                        if (y > 21000) {
                            total_state = 0;
                            $("#Statutory_Bonus").val(total_state * 12);
                            $("#MStatutory_Bonus").val(Math.round(total_state));
                        } else {
                            $("#Statutory_Bonus").val(total_state * 12);
                            $("#MStatutory_Bonus").val(Math.round(total_state));
                        }

                        $("#gratuity").val(Math.round(gt * 12));
                        $("#Mgratuity").val(Math.round(gt));

                        $("#Total_B").val(Math.round(Total_B * 12));
                        $("#MTotal_B").val(Math.round(Total_B));

                        $("#Executive_Allowance").val(Math.round(executive_allowance * 12));
                        $("#MExecutive_Allowance").val(Math.round(executive_allowance));

                        $("#Retention_Allowance").val(Math.round(ra * 12));
                        $("#MRetention_Allowance").val(Math.round(ra));

                        $("#Total_A").val(Math.round(Total_A * 12));
                        $("#MTotal_A").val(Math.round(Total_A));

                        $("#LTotal").val(Math.round(total2 * 12));
                        $("#MLTotal").val(Math.round(total2));

                        $("#Total_II").val(Math.round(P12));
                        $("#MTotal_II").val(Math.round(P12 / 12));

                        $("#TOTAL").val(Math.round(ctotal * 12));
                        $("#MTOTAL").val(Math.round(ctotal));
                    }
                }
            } else
            //     $("#basic").val('0');
            //     $("#al1").css('display', 'inline-block');

            {
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
            <h5><b>
                    <center>
                        <font color="#0056b3">PE E10 - S10 CALCULATOR</font>
                    </center>
                </b></h5>
        </div>
    </div>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>
    <form method="post" action="create_tcpdf.php">
        <div class="container">
            <div class="card" style=background-color:#BFD7ED>
                <div class="card-body"><br />
                    <div class="row">
                        <div class="col-lg-4">
                            <label=""><b>Reference number of offer letter</b></label>
                                <input type="text" class="form-control" id="Code" name="Code" placeholder="" />
                                <br>
                        </div>

                        <div class="col-lg-4">
                            <label=""><b>TARGETED CTC</b></label>
                                <input type="text" class="form-control" id="ctc" name="ctc" placeholder="" />
                        </div>
                        <div class="col-lg-4">
                            <label=""><b>OLD CTC</b></label>
                                <span style="float:right" id="span_hike" class="badge badge-primary">Hike % : </span>
                                <input type="text" class="form-control" id="oldctc" name="oldctc" placeholder="" />

                        </div>


                    </div><br>


                    <table style="width:100%">
                        <tr>
                            <th>
                                <label="">Name</label>
                            </th>
                            <th><input type="text" class="form-control" id="name" name="name" placeholder="" />
                            </th>
                            <th>
                                <label="">Work Location</label>
                            </th>
                            <th> <input type="text" class="form-control" id="aloc" name="aloc" placeholder="" />

                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label="">
                                    <label="">Address Line 1</label></label>
                            </td>
                            <td><input type="text" class="form-control" id="Ad1" name="Ad1" placeholder="" />

                            </td>
                            <td>
                                <label="">Address Line2</label>
                            </td>
                            <td> <input type="text" class="form-control" id="Ad2" name="Ad2" placeholder="" />


                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label="">Address Line 3</label>
                            </td>
                            <td><input type="text" class="form-control" id="Ad3" name="Ad3" placeholder="" />

                            </td>
                            <td>
                                <label="">City</label>
                            </td>
                            <td> <input type="text" class="form-control" id="City" name="City" placeholder="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label="">Pincode</label>
                            </td>
                            <td><input type="text" class="form-control" id="Pincode" name="Pincode" placeholder="" />

                            </td>
                            <td>
                                <label="">Offer date</label>
                            </td>
                            <td> <input type="date" class="form-control" id="doj" name="doj" placeholder="" />


                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label="">Designation</label>
                            </td>
                            <td><input type="text" class="form-control" id="Position" name="Position" placeholder="" />
                            </td>
                            <td>Grade</td>
                            <td> <select id="grade" name="grade" class="custom-select">
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

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label="">
                                    <label="">Working Start Day</label></label>
                            </td>
                            <td> <input type="text" class="form-control" id="wsd" name="wsd" placeholder="" />
                            </td>
                            <td>
                                <label="">
                                    <label="">Working End Day</label></label>
                            </td>
                            <td> <input type="text" class="form-control" id="wed" name="wed" placeholder="" />


                            </td>
                        </tr>

                        <tr>
                            <td>
                            </td>
                            <td>
                            <td>
                                <b>
                                    <label=""><b>STATE</b></label>
                                </b>
                            </td>
                            <td>
                                <b>
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
                                    </select> </b>
                            </td>
                        </tr>


                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <b>
                                    <label="">Monthly</label>
                                </b>
                            </td>
                            <td>
                                <b>
                                    <label="">Annual</label>
                                </b>
                            </td>
                        </tr>

                        <tr>
                            <td><b>PART I</b></td>
                            <td><b>Fixed Componenets</b></td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td><b>A</b></td>
                            <td><b>Salary</b></td>
                            <td>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <label="">BASIC</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label=""><b>BASIC PERCENTAGE<small id="al1" style="display:none;"
                                                    class="badge badge-danger"> (Enter % between 5 to 50)
                                                </small></b></label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" id="bp1" name="bp1" placeholder="" />
                                    </div>

                                </div>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="Mbasic" name="Mbasic" placeholder="" />
                            </td>

                            <td><input type="text" class="form-control" id="basic" name="basic" placeholder="" />

                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">HRA</label>
                            </td>
                            <td><input type="text" class="form-control" id="Mhra" name="Mhra" placeholder="" />

                            </td>
                            <td><input type="text" class="form-control" id="hra" name="hra" placeholder="" />


                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">CONVEYANCE ALLOWANCE</label>
                            </td>
                            <td><input type="text" class="form-control" id="MConveyance_Allowance"
                                    name="MConveyance_Allowance" placeholder="" />
                            </td>
                            <td><input type="text" class="form-control" id="Conveyance_Allowance"
                                    name="Conveyance_Allowance" placeholder="" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">LTA</label>
                            </td>
                            <td><input type="text" class="form-control" id="Mlta" name="Mlta" placeholder="" />

                            </td>
                            <td><input type="text" class="form-control" id="lta" name="lta" placeholder="" />

                            </td>
                        </tr>

                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">STATUTORY BONUS</label>
                            </td>
                            <td><input type="text" class="form-control" id="MStatutory_Bonus" name="MStatutory_Bonus"
                                    placeholder="" />

                            </td>
                            <td><input type="text" class="form-control" id="Statutory_Bonus" name="Statutory_Bonus"
                                    placeholder="" />

                            </td>
                        </tr>

                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">EXECUTIVE ALLOWANCE</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="MExecutive_Allowance"
                                    name="MExecutive_Allowance" placeholder="" />
                            </td>
                            <td><input type="text" class="form-control" id="Executive_Allowance"
                                    name="Executive_Allowance" placeholder="" />

                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">MOBILE CHARGES REIMBURSEMENT</label>

                            </td>
                            <td>
                                <input type="text" class="form-control" id="Mm_c_r" name="Mm_c_r" placeholder="" />


                            </td>
                            <td><input type="text" class="form-control" id="m_c_r" name="m_c_r" placeholder="" />


                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">FOOD ALLOWANCE</label>


                            </td>
                            <td>
                                <input type="text" class="form-control" id="MFood_Allowance" name="MFood_Allowance"
                                    placeholder="" />



                            </td>
                            <td><input type="text" class="form-control" id="Food_Allowance" name="Food_Allowance"
                                    placeholder="" />



                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">ATTIRE ALLOWANCE</label>


                            </td>
                            <td>
                                <input type="text" class="form-control" id="MAttire_Allowance" name="MAttire_Allowance"
                                    placeholder="" />



                            </td>
                            <td><input type="text" class="form-control" id="Attire_Allowance" name="Attire_Allowance"
                                    placeholder="" />



                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">
                                    VEHICLE REIMBURSEMENT</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="Mvr" name="Mvr" placeholder="" />
                            </td>
                            <td><input type="text" class="form-control" id="vr" name="vr" placeholder="" />

                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">DRIVER REIMBURSEMENT</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="Mdriver_reimbursement"
                                    name="Mdriver_reimbursement" placeholder="" />




                            </td>
                            <td><input type="text" class="form-control" id="driver_reimbursement"
                                    name="driver_reimbursement" placeholder="" />




                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td> RETENTION ALLOWANCE</label>

                            </td>
                            <td> <input type="text" class="form-control" id="MRetention_Allowance"
                                    name="MRetention_Allowance" placeholder="" />


                            </td>
                            <td> <input type="text" class="form-control" id="Retention_Allowance"
                                    name="Retention_Allowance" placeholder="" />

                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <b>
                                    <label=""> <b>TOTAL A</b></label>
                                </b>
                            </td>
                            <td><input type="text" class="form-control" id="MTotal_A" name="MTotal_A" placeholder="" />
                            </td>
                            <td><input type="text" class="form-control" id="Total_A" name="Total_A" placeholder="" />


                            </td>
                        </tr>
                        <tr>
                            <td><b>B</b>
                            </td>
                            <td>
                                <b>
                                    Retirals / Other Benefits
                                </b>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>
                            </td>
                            <td>
                                <label=""> Employer Contribution to Provident Fund</label>
                            </td>
                            <td><input type="text" class="form-control" id="MPF" name="MPF" placeholder="" />

                            </td>
                            <td><input type="text" class="form-control" id="PF" name="PF" placeholder="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <label="">GRATUITY</label>

                            </td>
                            <td> <input type="text" class="form-control" id="Mgratuity" name="Mgratuity"
                                    placeholder="" />



                            </td>
                            <td> <input type="text" class="form-control" id="gratuity" name="gratuity" placeholder="" />


                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <label=""> ESIC</label>
                            </td>
                            <td> <input type="text" class="form-control" id="MESIC" name="MESIC" placeholder="" />


                            </td>
                            <td> <input type="text" class="form-control" id="ESIC" name="ESIC" placeholder="" />

                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <b>
                                    <label=""><b>TOTAL B</b></label>
                                </b>
                            </td>
                            <td> <input type="text" class="form-control" id="MTotal_B" name="MTotal_B" placeholder="" />



                            </td>
                            <td> <input type="text" class="form-control" id="Total_B" name="Total_B" placeholder="" />


                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <b>
                                    <label=""><b>TOTAL OF PART I(A+B)</b></label>

                                </b>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="MLTotal" name="MLTotal" placeholder="" />




                            </td>
                            <td> <input type="text" class="form-control" id="LTotal" name="LTotal" placeholder="" />



                            </td>
                        </tr>
                        <tr>
                            <td><b>PART II</b></td>
                            <td>
                                <b>
                                    <label=""><b>VARIABLE COMPONENTS</b></label>

                                </b>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label=""><b>VP PERCENATGE<small id="al2" style="display:none;"
                                                    class="badge badge-danger">
                                                    ( Enter %
                                                    between 5
                                                    to 50 )
                                                </small></b></label>

                                    </div>
                                    <div class="col-lg-4">
                                        <select name="vp" id="vp" class="custom-select"
                                            style="border:none;background-color:transparent;margin-top:-10px !important">

                                            <option selected>
                                                <b>Select
                                                    One</b>
                                            </option>
                                            <option value="Variable Pay * ">
                                                Variable
                                                Pay
                                                *
                                            </option>
                                            <option value="Sales Incentive *** ">
                                                Sales
                                                Incentive
                                                ***
                                            </option>
                                            <option value="Business Incentive *** ">
                                                Business
                                                Incentive
                                                ***
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" id="vpp1" name="vpp1"
                                            placeholder="" />

                                    </div>
                                    <div class="col-lg-1"></div>

                                </div>
                            </td>
                            <td><input type="text" class="form-control" id="MVariable_Pay" name="MVariable_Pay"
                                    placeholder="" />
                            </td>
                            <td><input type="text" class="form-control" id="Variable_Pay" name="Variable_Pay"
                                    placeholder="" />

                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label="">STRB PERCENATGE<small id="al2" style="display:none;"
                                                class="badge badge-danger">
                                                ( Enter %
                                                between 5
                                                to 50 )
                                            </small></label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="comp1Yes">
                                            <input type="radio" id="comp1Yes" name="com1YesNo" value="yes" />
                                            Yes
                                        </label>
                                        <label for="comp1No">
                                            <input type="radio" id="comp1No" name="comp1YesNo" value="no" />
                                            No
                                        </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" id="strb1" name="strb1"
                                            placeholder="" />
                                    </div>
                                    <div class="col-lg-1"></div>

                                </div>




                                <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#comp1Yes").on('click', function() {
                                        //alert('1');
                                        $("#STRB").val(swf);
                                        $("#MSTRB").val(swf / 12);
                                    });
                                    $("#comp1No").on('click', function() {
                                        //alert('2');
                                        $("#STRB").val('0');
                                        $("#MSTRB").val('0');
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

                            </td>
                            <td><input type="text" class="form-control" id="MSTRB" name="MSTRB" placeholder="" />

                            </td>
                            <td> <input type="text" class="form-control" id="STRB" name="STRB" placeholder="" />

                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label="">INCENTIVE BONUS<small id="al2" style="display:none;"
                                                class="badge badge-danger">
                                                ( Enter %
                                                between 5
                                                to 50 )
                                            </small></label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="comp2Yes">
                                            <input type="radio" id="comp2Yes" name="com2YesNo" value="yes" />
                                            Yes
                                        </label>
                                        <label for="comp2No">
                                            <input type="radio" id="comp2No" name="comp2YesNo" value="no" />
                                            No
                                        </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" id="ib1" name="ib1" placeholder="" />
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>



                                <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#comp2Yes").on('click', function() {
                                        //alert('1');
                                        $("#Incentive_Bonus").val(iwf);
                                        $("#MIncentive_Bonus").val(iwf / 12);
                                    });
                                    $("#comp2No").on('click', function() {
                                        //alert('2');
                                        $("#Incentive_Bonus").val('0');
                                        $("#MIncentive_Bonus").val('0');
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

                            </td>
                            <td> <input type="text" class="form-control" id="MIncentive_Bonus" name="MIncentive_Bonus"
                                    placeholder="" />


                            </td>
                            <td> <input type="text" class="form-control" id="Incentive_Bonus" name="Incentive_Bonus"
                                    placeholder="" />


                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td>
                                <b>
                                    <label=""><b>TOTAL OF PART II</b> </label>
                                </b>
                            </td>
                            <td> <input type="text" class="form-control" id="MTotal_II" name="MTotal_II"
                                    placeholder="" />
                            </td>
                            <td> <input type="text" class="form-control" id="Total_II" name="Total_II" placeholder="" />
                            </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td>
                                <b>
                                    <label><b>COST TO COMPANY (PART I + PART II)</b> </label>

                                </b>
                            </td>
                            <td> <input type="text" class="form-control" id="MTOTAL" name="MTOTAL" placeholder="" />




                            </td>
                            <td> <input type="text" class="form-control" id="TOTAL" name="TOTAL" placeholder="" />



                            </td>
                        </tr>

                        <tr>
                            <td>
                                <script type="text/javascript">
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

                                <span>Joining
                                    Bonus</span>
                                <label for="chkYes">
                                    <input type="radio" id="chkYes" name="chkPassPort" value="yes"
                                        onclick="ShowHideDiv()" />
                                    Yes
                                </label>
                                <label for="chkNo">
                                    <input type="radio" id="chkNo" name="chkPassPort" value="no"
                                        onclick="ShowHideDiv()" />
                                    No
                                </label>


                            </td>

                            <td>

                                <div id="jbamount" style="display: none">
                                    <input type="text" name="jbamount" id="jbamount" />
                                </div>

                            </td>

                            <td></td>

                            <td></td>

                        </tr>


                    </table>
                    <br><br>
                    <input type="submit" class="btn btn-primary" />
                </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>