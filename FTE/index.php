<?php require_once('config.php');
?>
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
    oc1 = 0;
    ctotal = 0;
    var w = 0;
    var w1 = 0;
    var tb3 = 0;
    var mra = 0;
    var flag = 0,
        eflag = 0,
        yflag = 0;
    rechange_e = 0, rechange_y = 0;
    caflag = 0, rechange_ca = 0;
    rechange_bp = 0, bpflag = 0;
    EXEALL = 0;



    $(document).ready(function() {

        // $("#Retention_Allowance").on("keyup", function() {
        //     mra = $("#Retention_Allowance").val();
        //     flag = 1;
        //     basic_pay_ch();
        // });
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
                                    sbb = (y * (20 / 100));

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
                                    alert(data);
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
                        $('#lta').val(str[0] * 12);

                        $('#vr').val(str[1] * 12);

                        $('#Food_Allowance').val(str[2] * 12);

                        $('#m_c_r').val(str[3] * 12);

                        $('#Attire_Allowance').val(str[4] * 12);

                        $('#driver_reimbursement').val(str[5] * 12);

                        total_grade = (parseInt(str[0]) +
                            parseInt(str[1]) +
                            parseInt(str[2]) +
                            parseInt(str[3]) +
                            parseInt(str[4]) +
                            parseInt(str[5])
                        );

                    } else {
                        alert(data);
                    }

                },
            });


        });


        $("#vpp1").on("keyup", function() {
            var z = $("#vpp1").val();
            var ctc = $("#ctc").val();
            var wf = 0;
            if (ctc != "") {
                if (z >= 5 && z <= 50) {
                    $("#al2").css('display', 'none');
                    w1 = ctc * (z / 100);
                    w = w1 / 12;
                    wf = w * 12;
                    $('#Variable_Pay').val(wf);
                    $('#Total_II').val(wf);

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
            hike = ((ctc / oc1 - 1) * 100);
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
                $("#Mbasic").val((y / 12));


            } else {
                alert('enter ctc first..');
            }
            basic_pay_ch();
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

    });

    //Retention_Allowance
    function basic_pay_ch() {
        $(document).ready(function() {
            x = $("#basicp").val();
            var ctc = $("#ctc").val(); //ctc
            // oc1 = $("#oldctc").val(); //old ctc
            // $("#hike").html(hike, "%");
            if (ctc != "") {
                if (bpflag == 0) {
                    if (x = 40) {
                        $("#al1").css('display', 'none');
                        var dy = 0,
                            dy1 = 0,
                            dy2 = 0;
                        dy = Math.floor((ctc * (x / 100)) / 12);
                        dy1 = dy * 0.01;
                        dy2 = parseInt(Math.floor(dy1) + "00");
                        if (dy2 < 10000) {
                            y = 10000;
                        } else {
                            y = parseInt(Math.floor(dy1) + "00");
                        }


                        if (yflag == 0) {

                            hr = y / 2;

                            ca = 1600;

                            if (caflag == 1) {
                                ca = parseInt(rechange_ca);
                            }

                            if (flag == 0) {
                                ta1 = y + hr + ca + total_state;
                            }


                        }
                        if (yflag == 1) {
                            y = rechange_y;
                            hr = y / 2;


                            if (flag == 0) {
                                if (caflag == 1) {
                                    ca = parseInt(rechange_ca);
                                }
                                ta1 = y + hr + ca + total_state;
                            }


                        }

                        gross = 0;
                        gross = ctc / 12;




                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").val((pf1));


                        } else {
                            y_12 = gross - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }


                        True_Gross = 0;
                        True_Gross = gross - pf1;




                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        esic = True_Gross - ca;

                        total_esic = esic * (3.25 / 100);
                        $("#ESIC").val((total_esic * 12));
                        $("#MESIC").val((total_esic));





                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;
                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = True_Gross - (y + hr + ca + total_state);
                            executive_allowance = (e);

                        }

                        Second_Total_Gross = 0;
                        Second_Total_Gross = gross - pf1 - total_esic;


                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = Second_Total_Gross - (y + hr + ca + total_state);
                            executive_allowance = (e);

                        }

                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        esic = Second_Total_Gross - ca;
                        total_esic = esic * (3.25 / 100);
                        $("#ESIC").val((total_esic * 12));
                        $("#MESIC").val((total_esic));



                        Final_True_Gross = 0;
                        Final_True_Gross = gross - pf1 - total_esic;
                        Total_A = Final_True_Gross;


                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            Total_A4 = 0;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;
                            Total_A4 = Total_A;

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = Final_True_Gross - (y + hr + ca + total_state);
                            executive_allowance = (e);

                        }

                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        Total_A4 = 0;
                        Total_A4 = Total_A;
                        esic = Total_A4 - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));

                        } else {
                            total_esic = 0;
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));

                        }

                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").val((pf1));


                        } else {
                            y_12 = Total_A - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }

                        True_Gross_1st = 0;
                        True_Gross_1st = (ctc / 12) - pf1 - total_esic;
                        Total_A = True_Gross_1st;

                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        Total_A5 = 0;
                        Total_A5 = Total_A;
                        esic = Total_A5 - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));

                        } else {
                            total_esic = 0;
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));

                        }

                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").val((pf1));


                        } else {
                            y_12 = Total_A - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }

                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            Total_A5 = 0;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;
                            Total_A5 = Total_A;

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = True_Gross_1st - (y + hr + ca + total_state);
                            executive_allowance = (e);

                        }

                        True_Gross_2nd = 0;
                        True_Gross_2nd = ((ctc / 12) - pf1 - total_esic);
                        Total_A = True_Gross_2nd;

                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        Total_A6 = 0;
                        Total_A6 = Total_A;
                        esic = Total_A6 - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val(Math.ceil(total_esic * 12));
                            $("#MESIC").val((Math.round(total_esic)));

                        } else {
                            total_esic = 0;
                            $("#ESIC").val(Math.ceil(total_esic * 12));
                            $("#MESIC").val(Math.round(total_esic));

                        }

                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").val((pf1));


                        } else {
                            y_12 = Total_A - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }

                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            Total_A5 = 0;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;
                            Total_A5 = Total_A;

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = (True_Gross_2nd - (y + hr + ca + total_state));
                            executive_allowance = (e);
                        }

                        //TOTAL_A
                        Total_A = y + hr + ca + total_state + executive_allowance;
                        Total_A7 = 0;
                        Total_A7 = Total_A;

                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").val((pf1));


                        } else {
                            y_12 = Total_A7 - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }

                        True_Gross_3rd = 0;
                        True_Gross_3rd = ((ctc / 12) - pf1 - total_esic);
                        Total_A = Math.round(True_Gross_3rd);
                        Total_A9 = 0;
                        Total_A9 = Total_A;


                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            Total_A5 = 0;
                            executive_allowance = Math.round(e);
                            Total_A = y + hr + ca + total_state + e;
                            Total_A5 = Total_A;

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = (True_Gross_3rd - (y + hr + ca + total_state));
                            executive_allowance = Math.round(e);
                        }

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
                            y_12 = Total_A9 - hr;
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
                        //Total_B
                        Total_B = pf1 + total_esic;

                        //TotalA+TotalB
                        total2 = Total_A + Total_B;

                        //Part I + part II Total
                        ctotal = total2;



                        $("#basic").val(Math.round(y * 12));
                        $("#Mbasic").val(Math.round(y));

                        $("#hra").val(Math.round(hr * 12));
                        $("#Mhra").val(Math.round(hr));

                        $("#Conveyance_Allowance").val(Math.round(ca * 12));
                        $("#MConveyance_Allowance").val(Math.round(ca));

                        if (y > 21000) {
                            total_state = 0;
                            $("#Statutory_Bonus").val(Math.round(total_state * 12));
                            $("#MStatutory_Bonus").val(Math.round(total_state));
                        } else {
                            $("#Statutory_Bonus").val(Math.round(total_state * 12));
                            $("#MStatutory_Bonus").val(Math.round(total_state));
                        }


                        $("#Total_B").val(Math.ceil(Total_B * 12));
                        $("#MTotal_B").val((Math.round(Total_B)));


                        $("#Executive_Allowance").val((executive_allowance * 12));
                        $("#MExecutive_Allowance").val((executive_allowance));

                        $("#Total_A").val(Math.ceil(Total_A * 12));
                        $("#MTotal_A").val(Math.round(Total_A));

                        $("#LTotal").val(Math.ceil(total2 * 12));
                        $("#MLTotal").val(Math.round(total2));

                        $("#TOTAL").val(Math.ceil(ctotal * 12));
                        $("#MTOTAL").val(Math.round(ctotal));
                    }
                }
                if (bpflag == 1) {
                    if (x = rechange_bp) {
                        $("#al1").css('display', 'none');
                        var dy = 0,
                            dy1 = 0,
                            dy2 = 0;
                        dy = Math.floor((ctc * (x / 100)) / 12);
                        dy1 = dy * 0.01;
                        dy2 = parseInt(Math.floor(dy1) + "00");
                        if (dy2 < 10000) {
                            y = 10000;
                        } else {
                            y = parseInt(Math.floor(dy1) + "00");
                        }


                        if (yflag == 0) {

                            hr = y / 2;

                            ca = 1600;

                            if (caflag == 1) {
                                ca = parseInt(rechange_ca);
                            }

                            if (flag == 0) {
                                ta1 = y + hr + ca + total_state;
                            }


                        }
                        if (yflag == 1) {
                            y = rechange_y;
                            hr = y / 2;


                            if (flag == 0) {
                                if (caflag == 1) {
                                    ca = parseInt(rechange_ca);
                                }
                                ta1 = y + hr + ca + total_state;
                            }


                        }

                        gross = 0;
                        gross = ctc / 12;



                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").val((pf1));


                        } else {
                            y_12 = gross - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }


                        True_Gross = 0;
                        True_Gross = gross - pf1;



                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        esic = True_Gross - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));
                        } else {
                            total_esic = 0;
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));
                        }


                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;
                            console.log("Total_A5: " + Total_A);
                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = True_Gross - (y + hr + ca + total_state);
                            executive_allowance = (e);
                        }

                        Second_Total_Gross = 0;
                        Second_Total_Gross = gross - pf1 - total_esic;

                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;
                            console.log("Total_A6 = " + Total_A);

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = Second_Total_Gross - (y + hr + ca + total_state);
                            executive_allowance = (e);
                        }

                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        esic = Second_Total_Gross - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));
                        } else {
                            total_esic = 0;
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));
                        }

                        Final_True_Gross = 0;
                        Final_True_Gross = gross - pf1 - total_esic;
                        Total_A = Final_True_Gross;
                        console.log("Total_A7 = " + Total_A);

                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;
                            console.log("Total_A8 = " + Total_A);

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = Final_True_Gross - (y + hr + ca + total_state);
                            executive_allowance = (e);
                        }

                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        esic = Final_True_Gross - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));
                        } else {
                            total_esic = 0;
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));
                        }


                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").val((pf1));


                        } else {
                            y_12 = Total_A - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }

                        True_Gross_1st = 0;
                        True_Gross_1st = (ctc / 12) - pf1 - total_esic;
                        Total_A = True_Gross_1st;

                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        Total_A5 = 0;
                        Total_A5 = Total_A;
                        esic = Total_A5 - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));

                        } else {
                            total_esic = 0;
                            $("#ESIC").val((total_esic * 12));
                            $("#MESIC").val((total_esic));

                        }

                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").val((pf1));


                        } else {
                            y_12 = Total_A - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }

                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            Total_A5 = 0;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;
                            Total_A5 = Total_A;

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = True_Gross_1st - (y + hr + ca + total_state);
                            executive_allowance = (e);

                        }

                        True_Gross_2nd = 0;
                        True_Gross_2nd = ((ctc / 12) - pf1 - total_esic);
                        Total_A = True_Gross_2nd;

                        //ESIC
                        esic = 0;
                        total_esic = 0;
                        Total_A6 = 0;
                        Total_A6 = Total_A;
                        esic = Total_A6 - ca;
                        if (esic < 21000) {
                            total_esic = esic * (3.25 / 100);
                            $("#ESIC").val(Math.ceil(total_esic * 12));
                            $("#MESIC").val((Math.round(total_esic)));

                        } else {
                            total_esic = 0;
                            $("#ESIC").val(Math.ceil(total_esic * 12));
                            $("#MESIC").val(Math.round(total_esic));

                        }

                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").va((pf1));


                        } else {
                            y_12 = Total_A - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }

                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            Total_A5 = 0;
                            executive_allowance = (e);
                            Total_A = y + hr + ca + total_state + e;
                            Total_A5 = Total_A;

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = (True_Gross_2nd - (y + hr + ca + total_state));
                            executive_allowance = (e);
                        }

                        //TOTAL_A
                        Total_A = y + hr + ca + total_state + executive_allowance;
                        Total_A7 = 0;
                        Total_A7 = Total_A;

                        //PF
                        var y_12 = y;
                        var total_y_12 = 0;
                        var pf = 0;
                        var pf1 = 0;
                        if (y_12 > 15000) {
                            total_y_12 = y_12 * (12 / 100);
                            pf = total_y_12;
                            pf1 = pf;
                            $("#PF").val((pf1 * 12));
                            $("#MPF").val((pf1));


                        } else {
                            y_12 = Total_A7 - hr;
                            if (y_12 > 15000) {
                                y_12 = 1800;
                                total_y_12 = y_12;
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            } else {
                                total_y_12 = y_12 * (12 / 100);
                                pf = total_y_12;
                                pf1 = pf;
                                $("#PF").val((pf1 * 12));
                                $("#MPF").val((pf1));

                            }
                        }

                        True_Gross_3rd = 0;
                        True_Gross_3rd = ((ctc / 12) - pf1 - total_esic);
                        Total_A = Math.round(True_Gross_3rd);
                        Total_A9 = 0;
                        Total_A9 = Total_A;


                        //executive_allowance

                        if (eflag == 1) {
                            e = rechange_e;
                            Total_A5 = 0;
                            executive_allowance = Math.round(e);
                            Total_A = y + hr + ca + total_state + e;
                            Total_A5 = Total_A;

                        }

                        if (eflag == 0) {
                            var e = 0;
                            // e = y + hr + ca + total_state + pf1 + total_esic;
                            // executive_allowance = (ctc / 12) - e;
                            e = (True_Gross_3rd - (y + hr + ca + total_state));
                            executive_allowance = Math.round(e);
                        }

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
                            y_12 = Total_A9 - hr;
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
                        //Total_B
                        Total_B = pf1 + total_esic;

                        //TotalA+TotalB
                        total2 = Total_A + Total_B;

                        //Part I + part II Total
                        ctotal = total2;



                        $("#basic").val(Math.round(y * 12));
                        $("#Mbasic").val(Math.round(y));

                        $("#hra").val(Math.round(hr * 12));
                        $("#Mhra").val(Math.round(hr));

                        $("#Conveyance_Allowance").val(Math.round(ca * 12));
                        $("#MConveyance_Allowance").val(Math.round(ca));

                        if (y > 21000) {
                            total_state = 0;
                            $("#Statutory_Bonus").val(Math.round(total_state * 12));
                            $("#MStatutory_Bonus").val(Math.round(total_state));
                        } else {
                            $("#Statutory_Bonus").val(Math.round(total_state * 12));
                            $("#MStatutory_Bonus").val(Math.round(total_state));
                        }


                        $("#Total_B").val(Math.ceil(Total_B * 12));
                        $("#MTotal_B").val((Math.round(Total_B)));


                        $("#Executive_Allowance").val((executive_allowance * 12));
                        $("#MExecutive_Allowance").val((executive_allowance));

                        $("#Total_A").val(Math.ceil(Total_A * 12));
                        $("#MTotal_A").val(Math.round(Total_A));

                        $("#LTotal").val(Math.ceil(total2 * 12));
                        $("#MLTotal").val(Math.round(total2));

                        $("#TOTAL").val(Math.ceil(ctotal * 12));
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
                        <font color="#0056b3">FTE CALCULATOR</font>
                    </center>
                </b></h5>
        </div>
    </div>
    <br>
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
                <div class="card-body">
                    <!-- <div style="text-align: center;"><b>FTE</b></div> <br /> -->
                    <div class="green box">
                        <div class="row">
                            <div class="col-lg-6">
                                <label=""><b>Reference number of offer letter</b></label>
                                    <input type="text" class="form-control" id="Code" name="Code" placeholder="" />
                                    <br>
                            </div>
                            <div class="col-lg-6">
                                <label=""><b>TARGETED CTC</b></label>
                                    <input type="text" class="form-control" id="ctc" name="ctc" placeholder="" />
                            </div>

                        </div>
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
                                <td><input type="text" class="form-control" id="Pincode" name="Pincode"
                                        placeholder="" />

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
                                <td><input type="text" class="form-control" id="Position" name="Position"
                                        placeholder="" />
                                </td>
                                <td>Grade</td>
                                <td><input class="form-control" id="grade" name="grade" value="F00" readonly />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label="">Start Date</label>
                                </td>
                                <td><input type="date" class="form-control" id="Sd" name="Sd" placeholder="" /></td>
                                <td>
                                    <label="">End Date</label>
                                </td>
                                <td><input type="date" class="form-control" id="ed" name="ed" placeholder="" />
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
                                    DOJ
                                </td>
                                <td>
                                    <input type="date" class="form-control" id="dojtype" name="dojtype"
                                        placeholder="" />
                                </td>
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
                                        <div class="col-lg-3">
                                            <label="">BASIC</label>
                                        </div>
                                        <div class="col-lg-3">
                                            <label=""><b>BASIC %<small id="al1" style="display:none;"
                                                        class="badge badge-danger"> (Enter % between 5 to 50)
                                                    </small></b></label>
                                        </div>
                                        <div class="col-lg-5">
                                            <input type="number" class="form-control" id="bp1" name="bp1"
                                                placeholder="" />
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
                                    <label="">STATUTORY BONUS</label>
                                </td>
                                <td><input type="text" class="form-control" id="MStatutory_Bonus"
                                        name="MStatutory_Bonus" placeholder="" />

                                </td>
                                <td><input type="text" class="form-control" id="Statutory_Bonus" name="Statutory_Bonus"
                                        placeholder="" />

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
                                    <label="">EXECUTIVE ALLOWANCE</label>
                                </td>
                                <td><input type="text" class="form-control" id="MExecutive_Allowance"
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
                                    <b>
                                        <label=""> <b>TOTAL A</b></label>
                                    </b>
                                </td>
                                <td><input type="text" class="form-control" id="MTotal_A" name="MTotal_A"
                                        placeholder="" />
                                </td>
                                <td><input type="text" class="form-control" id="Total_A" name="Total_A"
                                        placeholder="" />


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
                                <td> <input type="text" class="form-control" id="MTotal_B" name="MTotal_B"
                                        placeholder="" />



                                </td>
                                <td> <input type="text" class="form-control" id="Total_B" name="Total_B"
                                        placeholder="" />


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
                                    <input type="text" class="form-control" id="MLTotal" name="MLTotal"
                                        placeholder="" />




                                </td>
                                <td> <input type="text" class="form-control" id="LTotal" name="LTotal" placeholder="" />



                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
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
                        <div class="row">
                            <div class="col-lg-6"><input type="submit" name="submit" value="Export to PDF"></div>
                            <!-- <div class="col-lg-6"><a href="http://localhost/CTC-CALCULATOR/OLT/view.php"
                                    class="btn btn-primary ml-2">View Records to Fill Other Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>

    <body>

</html>