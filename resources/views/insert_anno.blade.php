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
$attachment = mysqli_real_escape_string($link, $_REQUEST['attachment']);
$brief = mysqli_real_escape_string($link, $_REQUEST['brief']);
 $longitude = mysqli_real_escape_string($link, $_REQUEST['longitude']);
 $latitude = mysqli_real_escape_string($link, $_REQUEST['latitude']);
$MAC= exec('getmac');
$MAC=strtok($MAC,'');
$ip= getenv("REMOTE_ADDR");
// Attempt insert query execution
$sql = "INSERT INTO anonymous_table (attachment,brief,latitude,longitude,ip,mac) VALUES ('$attachment','$brief','$latitude','$longitude','$ip','$MAC')";
if(mysqli_query($link, $sql)){
    echo "Complaint Has Been Successfully Reported. You Will Get A Reply Within 1-2 Hours. ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>
<?php
$conn = mysqli_connect("localhost", "root", "", "chat");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


      ?>
            </table>
        </fieldset>
        <br>
       
</center>
</div>


</body>

</html>