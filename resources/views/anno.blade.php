
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <title></title>
        <style>
@media only screen and (max-width: 600px){
.container{
  width:100%;
}

.flexform-column {
    margin: 40px auto;
    padding: 40px 40px 30px 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    /* background: #efefef; */
    background: linear-gradient(to bottom, #e8e8e8 0, #f5f5f5 100%);
    border: 1px solid #dfdfdf;
    border-radius: 4px;
    font: normal 1.4rem Arial, sans-serif;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-sizing: border-box;
}
table{
  width:100%;
 padding:0px;

}

}
@media only screen and (max-width: 480px){
.container{
  width:100%;
}

.flexform-column {
    margin: 40px auto;
    padding: 40px 40px 30px 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    /* background: #efefef; */
    background: linear-gradient(to bottom, #e8e8e8 0, #f5f5f5 100%);
    border: 1px solid #dfdfdf;
    border-radius: 4px;
    font: normal 1.4rem Arial, sans-serif;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-sizing: border-box;
}
table{
  width:100%;
 padding:0px;

}

}
        
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
  width: 100%;
  /background: #efefef;/
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
s


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
            .list-unstyled{
              width:100%
            }
            video{
              width:70%;
            }
            audio{
              width:70%;
            }
        </style>
    </head>
    <body>
  
        <div class="container">

            <form id="ajaxform" class="flexform-column" action="annonSubmit" method="post" enctype="multipart/form-data"> 
              {{csrf_field()}}
             <input type="hidden" name="longitude" id="long">
             <input type="hidden" name="latitude" id="lat">
             <input type="hidden" name="ip" id="ip">
             <input type="hidden" name="mac" id="mac">
           <h3 style="text-align: center; color:#b50d29"><b>Report Anonymously </b>  </h3>
                <label for="idatype" class="sr-only"></label>
        
                <!-- <label for="fullname" class="sr-only">Location:</label> -->
                <table>
                
                <tr>
                    <td>Supporting Evidence:</td>
                    <td>
                    <div>
                
                <input type="file" class="input-text" name="attachment" placeholder="Attach File" title="Supporting Evidence" autocomplete="off" required  >
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
                    <input class="input-textarea" placeholder="Brief your Complaint here" title="Message or Comments" name="brief" id="blob" autocomplete="off"></textarea>
                    </td>
                    
                </tr>
                 <tr>
                <td colspan="2">
                     
                     <div class="button-group-right">
                    <input type="submit"  class="btn btn-primary mr-10" onclick="form.submit()" name="submit" value="submit">
                    <input type="button" class="btn btn-default cancel" value="Cancel">
                </div>
                     </td>
    
                </tr>        
                    </table>
            </form>
        
        </div>
        
        <script>
      
              if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition);
             console.log("if");

              } else { 
                  console.log("else");
              }
          
              var long= document.getElementById("long")
              var long= document.getElementById("long")
          function showPosition(position) {
            console.log("show")
              console.log(position.coords.latitude) 
              console.log(position.coords.longitude) 
             
              lat.value= position.coords.latitude
              
              long.value=position.coords.longitude
              console.log(document.getElementById("long").value) 
              console.log(document.getElementById("lat").value)
          }
          </script>
    </body>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).on("click", ".cancel", function () {
  location.reload(true);
});
$("#idatype").focus();
  
    </script>

</html>