$(document).ready(function () {
    $("#selectsem").change(function () {
                var val = $(this).val();
                if (val == "1") {
                    $("#selectsub").html("<option value='BEE'>BEE</option><option value='AP1'>AP-1</option><option value='AC1'>AC-1</option> <option value='EM'>EM</option><option value = 'AM1' > AM-1 </option>");
                    }
                    else if (val == "4") {
                        $("#selectsub").html("<option value='COA'>COA</option><option value='CG'>CG</option><option value='OSTL'>OSTL</option><option value='OS'>OS</option> <option value = 'AM4' > AM-4 </option>");
                        }
                        else if (val == "3") {
                            $("#selectsub").html("<option value='ECCF'>ECCF</option><option value='DLDA'>DLDA</option><option value='DIM'>DIM</option><option value='OOP'>OOP</option><option value = 'AM3' > AM-3 </option>");
                            }
                            else {
                                $("#selectsub").html("<option value=''>--Select sem first--</option>");
                            }
                        });
                });