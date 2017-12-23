<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title></title>
<link rel="stylesheet" content="text/css" href="main2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function() 
{
    if($('#VCB:checked')) 
        {
        $('#vehiclesmeta').attr('readonly',true);
        $('#VCB').attr('checked',false);
        }    

    if($('#HCB:checked')) 
        {
        $('#handlingmeta').attr('readonly',true);
        $('#HCB').attr('checked',false);
        } 
  
$('#VCB').change(function() 
    {
    if($('#VCB').is(':checked')) 
        {
        $('#vehiclesmeta').attr('readonly',false); //Read Mode
        }
    else{
        $('#vehiclesmeta').attr('readonly',true);//Edit Mode
        }
    });

$('#HCB').change(function() 
    {
    if($('#HCB').is(':checked')) 
        {
        $('#handlingmeta').attr('readonly',false); //Read Mode
        }
    else{
        $('#handlingmeta').attr('readonly',true);//Edit Mode
        }
    });

$('#SaveButt').click(function() {
setTimeout(function(){ alert("Changes Saved!"); }, 60);
$('#VCB').prop('checked',false)
});
});

</script>
</head>

<body>
<script>
function myFunction() {
setTimeout(location.reload.bind(location), 50);
}
</script>

  <div id="main_wrapper">
    <div class="scrollbar" id="style-5">
      <div class="scrollbar-overflow">
        <h1> Sports Cars </h1>
<div id="vehicle_wrapper_main">


<div id="vehicle_wrapper">
<span class="SPAN_VehicleName">
1982 Porsche 911 Turbo 3.3 [Add-On / Replace] 1.0<img src="https://i.imgur.com/dCCDnDh.png"></span>
<img src="#" onclick="">

<div id="Additional_Images">
  <img src="https://img.gta5-mods.com/q95/images/1982-porsche-911-turbo-3-3-add-on-replace/ea067e-5z92KW5VaUGZkv1PV9XBxA_0_0.jpg" style="float:left;">
<img src="https://img.gta5-mods.com/q95/images/1982-porsche-911-turbo-3-3-add-on-replace/ea067e-P1hYsbCEgEOEMAl3ybWyxw_0_0.jpg" style="float:left;">
<img src="https://img.gta5-mods.com/q95/images/1982-porsche-911-turbo-3-3-add-on-replace/ea067e-3SRF8TTJnUa55zzr2mwOHQ_0_0.jpg" style="float:left;">
<br><br><br>
</div><br>

<div id="ModURL">
<a href="https://files.gta5-mods.com/uploads/1982-porsche-911-turbo-3-3-add-on-replace/cdb253-1982%20Porsche%20911%20Turbo%203.3%20V1.0.zip"><img src="https://imagizer.imageshack.us/v2/100x21q90/924/rGcgt4.png"></a></div><br>

<div id="textarea_main_content">

<em id="vehicles-meta">VEHICLES.META</em><br>
<input type="checkbox" id="VCB"><span id="ro">Edit</span>
<form method="POST" onsubmit="myFunction()">
<input type="submit" id="SaveButt" value="   Save">
<div id="textarea_wrapper">
<textarea id="vehiclesmeta" name="vehiclesmeta" class="field" placeholder='<NO DATA>'><?php include('filetoread.php'); ?></textarea>

</div>

<div id="txdRelationship"><span id='txdr'>vehicles_comet_interior</span></div>

<em id="handling-meta">HANDLING.META</em><br>
<input type="checkbox" id="HCB"><span id="ho">Edit</span>
<form method="POST">
<div id="textarea_wrapper">
<textarea id="handlingmeta" name="handlingmeta" class="field" placeholder='<NO DATA>'><?php include('handling.php') ?></textarea>

</div>

<em id="carvariations-meta">CARVARIATIONS.META</em><br>
<input type="checkbox" id="VAR"><span id="ho">Edit</span>
<form method="POST">
<div id="textarea_wrapper">
<textarea id="carvariationsmeta" name="carvariationsmeta" class="field" placeholder='<NO DATA>'><?php include('carvariations.php') ?></textarea>
</form>
</div>

<!-- MAIN-END -->
</div><!-- End textarea_main_content -->
</div><!-- End vehicle_wrapper -->

</div>

<span id="new_vehicle" onClick="alert('test')">

<?php

   if($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER[REMOTE_ADDR] == '74.107.64.2') {
$fv = fopen('filetoread.php', 'w');$fh = fopen('handling.php', 'w');$fcv = fopen('carvariations.php', 'w');
fwrite($fv, $_POST['vehiclesmeta']);fwrite($fh, $_POST['handlingmeta']);fwrite($fcv, $_POST['carvariationsmeta']);
fclose($fv);fclose($fh);fclose($fcv);
   }
   elseif($_SERVER[REMOTE_ADDR] !== '74.107.64.2') {
      echo '<span style="color: #f00; font-size: 3em; "> 403 Forbidden </span>';
   }
?>
