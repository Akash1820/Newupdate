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


<div id="FIR_copy" >
<center>
<fieldset style="width: 50%; top: 50%;height:400px">

    <legend style="text-align: center"><img src="https://odishapolice.gov.in/sites/default/files/opImages/Bureau%20of%20Police%20Research%20%26%20Devlopment%2C%20Ministry%20of%20Home%20Affairs_central%20Police%20Organisation..jpg"></legend>
        <h2 style="text-align: center;color: #b50d29">Complaint Details</h2>
        <hr style="height: 2px;background-color:red">
        <table style="width: 100%;">
            
            @foreach($Complaint as $row)
            <tr>
            <td><b>Complaint ID:</b></td>
            <td class="text">{{$row->id}}</td>
            </tr>
   
  <tr>          
<td><b>Date:</b></td>
<td class="text">{{$row->reportdate}}</td>    
      </tr>
  <tr>          
<td><b>Details:</b></td>
<td class="text">{{$row->Brief}}</td>     
      </tr>
  
  <tr>          
<td><b>Evidence:</b></td>
<td class="text">{{$row->attachment}}</td>     
</tr>
      @endforeach
            </table>

            <button onclick="location.href = '/home';" >Homepage</button>
        </fieldset>
        <br>
       
</center>
</div>
<!-- <center>
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
            <td class="text"></td>
            </tr>
   

  <tr>          
<td><b>Date: </b></td>
<td class="text"></td>    
      </tr>
  <tr>          
<td><b>Complainant Name:</b></td>
<td class="text"></td>     
      </tr>
  
  
     
            </table>
        </fieldset>
</div> -->

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