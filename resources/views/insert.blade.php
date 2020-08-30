<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html> 
<head>
<script> 
        function printDiv() { 
            var divContents = document.getElementById("FIR_copy").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write('<body >'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        } 
    </script> 
  </head>

<?php

$link = mysqli_connect("localhost", "root", "", "chat");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$contact_number = mysqli_real_escape_string($link, $_REQUEST['contact_number']);
$residential_add = mysqli_real_escape_string($link, $_REQUEST['residential_add']);
$attachment = mysqli_real_escape_string($link, $_REQUEST['attachment']);
$brief = mysqli_real_escape_string($link, $_REQUEST['brief']);
$longitude = mysqli_real_escape_string($link, $_REQUEST['longitude']);
$latitude = mysqli_real_escape_string($link, $_REQUEST['latitude']);


mysqli_close($link);


?>
<?php
$conn = mysqli_connect("localhost", "root", "", "chat");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = mysqli_query($conn,"SELECT * FROM complaint_track ORDER BY id DESC LIMIT 1");
$print_data = mysqli_fetch_row($sql);

?>


<div id="FIR_copy" >
<center>
<fieldset style="width: 50%; top: 50%;height:400px">

    <legend style="text-align: center"><img src="https://odishapolice.gov.in/sites/default/files/opImages/Bureau%20of%20Police%20Research%20%26%20Devlopment%2C%20Ministry%20of%20Home%20Affairs_central%20Police%20Organisation..jpg"></legend>
        <h2 style="text-align: center;color: #b50d29">Complaint Details</h2>
        <hr style="height: 2px;background-color:red">
        <table style="width: 100%;">
            <tr>
            <td><b>Complaint ID:</b></td>
            <td class="text"><?php echo $print_data[0]?></td>
            </tr>
   
  <tr>          
<td><b>Date and time:</b></td>
<td class="text"><?php echo $print_data[1]?></td>    
      </tr>
  <tr>          
<td><b>Complainant Name:</b></td>
<td class="text"><?php echo $print_data[2]?></td>     
      </tr>
  
  
      
            </table>
        </fieldset>
        <br>
       
</center>
</div>
<center>
 <input type="button" value="Download Complaint Copy" class="button btn-success" onclick="printDiv()" style="padding:15px" >
</center>
<div id="FIR_copy" style=" display:none">
<fieldset style="width: 50%">
    <legend style="text-align: center"><img src="https://odishapolice.gov.in/sites/default/files/opImages/Bureau%20of%20Police%20Research%20%26%20Devlopment%2C%20Ministry%20of%20Home%20Affairs_central%20Police%20Organisation..jpg"></legend>
        <h2 style="text-align: center;color: #b50d29">Complaint Details</h2>
        <hr style="height: 2px;background-color:red">
        <table style="width: 100%;">
            <tr>
            <td><b>Complaint ID:</b></td>
            <td class="text"><?php echo $print_data[0]?></td>
            </tr>
   

  <tr>          
<td><b>Date and Time:</b></td>
<td class="text"><?php echo $print_data[1]?></td>    
      </tr>
  <tr>          
<td><b>Complainant Name:</b></td>
<td class="text"><?php echo $print_data[2]?></td>     
      </tr>
  
  
      
            </table>
        </fieldset>
</div>

</body>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>
<script>
        function printDiv() { 
            var divContents = document.getElementById("FIR_copy").innerHTML; 
            var a = window.open('', '', 'height=500, width=500'); 
            a.document.write('<html>'); 
            a.document.write('<body >'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        } 
</script>
</html>