<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="WebRTC getUserMedia MediaRecorder API">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <title></title>
        <style>
      button{
        margin: 10px 5px;
      }
      li{
        margin: 10px;
      }
      body{
        width: 90%;
        max-width: 960px;
        margin: 0px auto;
      }
      #btns{
        display: none;
      }
      h1{
        margin: 100px;
      }
    </style>
        <style>
            .container {
	margin: 0 auto;
	padding: 0;
	width: 90%;
	overflow: hidden;
}

.flexform-column {
	margin: 40px auto;
	padding: 40px 40px 30px 40px;
	display: flex;
	flex-direction: column;
	align-items: center;
	width: 50%;
	/*background: #efefef;*/
	background: linear-gradient(to bottom, #e8e8e8 0, #f5f5f5 100%);
	border: 1px solid #dfdfdf;
	border-radius: 4px;
	font: normal 1.4rem Arial, sans-serif;
	box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
	box-sizing: border-box;
}

.input-text {
	margin: 0 0 15px 0;
	padding: 6px 8px;
	font: 400 1.2rem Arial, sans-serif;
	color: #555;
	border: 1px solid #ddd;
	border-radius: 4px;
	width: 100%;
}

.input-text:focus {
	border: 1px solid #ddd;
	outline: none;
	background: #ffffe0;
	box-shadow: none;
}

.input-text::placeholder {
	color: rgba(85, 85, 85, 0.6);
}

.select-text {
	margin: 0 0 15px 0;
	padding: 6px 8px 6px 4px;
	font: 400 1.2rem Arial, Roboto, sans-serif;
	display: inline-block;
	border: 1px solid #ddd;
	border-radius: 4px;
	width: 100%;
}

.select-text:focus {
	border: 1px solid #ddd;
	outline: none;
	background: #ffffe0;
	box-shadow: none;
}

.input-textarea {
	margin: 0 0 20px 0;
	padding: 2px 10px 10px 10px;
	font: 400 1.2rem Arial, Roboto, sans-serif;
	line-height: 2rem;
	border: 1px solid #ddd;
	border-radius: 4px;
	width: 100%;
	height: 120px;
}

.input-textarea:focus {
	border: 1px solid #ddd;
	outline: none;
	background: #ffffe0;
	box-shadow: none;
}

.input-textarea::placeholder {
	color: rgba(85, 85, 85, 0.6);
}

.button-group-right {
	margin: 10px 0 20px 0;
	padding: 0;
	display: flex;
	flex-direction: row;
	justify-content: flex-end;
	width: 100%;
}

.button-group-left {
	margin: 15px 0;
	padding: 0;
	display: flex;
	flex-direction: row;
	justify-content: flex-start;
	width: 100%;
}

.mr-10 {
	margin-right: 10px;
}

select,
select option {
	color: #555;
}

select:invalid,
option[value=""] {
	color: rgba(85, 85, 85, 0.6);
}
/* popup */
popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
.ip{
  visibility: hidden;
}
/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
            td{
                padding: 2%
            }
        </style>
    </head>
    <body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>
        <div class="container">

            <form id="ajaxform" class="flexform-column" action="insert.php" method="post"> 
             
           <h3 style="text-align: center;">Report & Track Complaints</h3>
                <label for="idatype" class="sr-only"></label>
        
                <!-- <label for="fullname" class="sr-only">Location:</label> -->
                <table>
                <tr>
                    <td>Your Name:</td>
                    <td>
                    <div>
                 <input type="number" name="longitude" id="long" class="ip">
              <input type="number" name="latitude" id="lat" class="ip">
                <input type="text" class="input-text" name="name" title="Supporting Evidence" autocomplete="off"  >
            </div>
                    </td>
                    </tr>
                    <tr>
                    <td>Phone Number:</td>
                    <td>
                    <div>
                
                <input type="tel" class="input-text" name="contact_number" autocomplete="off"  >
            </div>
                    </td>
                    </tr>
                    <tr>
                    <td>Your Address:</td>
                    <td>
                    <div>
                
                <input type="text" class="input-text" name="residential_add" autocomplete="off"  >
            </div>
                    </td>
                    </tr>
                <tr>
                    <td>Supporting Evidence:</td>
                    <td>
                    <div>
                <div class="popup">
                    <span class="popuptext" id="myPopup">Supporting Evidence</span>
                  </div>
                <input type="file" class="input-text" name="attachment" placeholder="Attach File" title="Supporting Evidence" autocomplete="off"  >
            </div>
                    </td>
                    </tr>
                
                <tr>
                    <td>
                    <div id='gUMArea'>
      <div>
      Complaint details in given format:
        <input type="radio" name="media" value="video" checked id='mediaVideo'>Video
        <input type="radio" name="media" value="audio">Audio
      </div>
      
    
                    </td>
                    <td><button class="btn btn-default" type="button" id='gUMbtn'>Start Recording</button>
                    <div id='btns'>
      <button  class="btn btn-default" id='start'>Start</button>
      <button  class="btn btn-default" id='stop'>Stop</button>
    </div>
    <div>
      <ul  class="list-unstyled" id='ul'></ul>
    </div>
                    </td>
                    </tr>
                </div>
                <tr>
                <td colspan="2" style="text-align: center">
                    OR
                    </td>
                    
                </tr>
                <tr>
                <td colspan="2">
                    <input class="input-textarea" placeholder="Brief your Complaint here" title="Message or Comments" name="brief" id="blob"></textarea>
                    </td>
                    
                </tr>
                 <tr>
                <td colspan="2">
                     
                     <div class="button-group-right">
                    <button  class="btn btn-primary mr-10" type="button" name="submit" onclick="getIp()">submit</button>
                    <input type="button" class="btn btn-default cancel" value="Cancel">
                </div>
                     </td>
    
                </tr>        
                    </table>
            </form>
        
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).on("click", ".cancel", function () {
	location.reload(true);
});
$("#idatype").focus();
    

var latitude=document.getElementById('lat');
var longitude=document.getElementById('long');

      function getIp(){
        if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
    
  } else { 
    console.log("Geolocation is not supported by this browser.");
  }
      }
      function showPosition(position) {
    latitude.value=position.coords.latitude;
    longitude.value=position.coords.longitude;
    console.log(latitude.value);
    console.log(longitude.value);
    document.getElementById("ajaxform").submit();
}
    </script>
</html>

