<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <title>Bot-Cop!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/f_chat.css">
<style>
.goog-tooltip {
    display: none !important;
}
.goog-tooltip:hover {
    display: none !important;
}
.goog-text-highlight {
    background-color: transparent !important;
    border: none !important; 
    box-shadow: none !important;
}
</style>
<link rel= "stylesheet" href="css/anon.css">
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en' , includedLanguages : 'hi,ta,en,gu,pa,or,bn,mr,ur,te,kns,ml'}, 'google_translate_element');
  }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <style>
  .goog-logo-link {
 display:none !important;
} 
 .goog-te-gadget{
     color: transparent !important;
 } 
 body, html {height:100%;}
.goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    }
  </style>


</head>
<body>
<!-- partial:index.partial.html -->
<!-- Currently BROKEN!
Working prototype on meesrutten.me :) -->
<div style="position:absolute;z-index: 1000 !important;" id="google_translate_element"></div>


<main class="page__main">
    <div class="block--background">
      
      <div class="chatbot__overview">
        <ul class="chatlist">
          <li class="bot__output bot__output--standard">Hello, I'm Bot-Cop!</li>
          <li class="bot__output bot__output--standard">You can talk to me about any of the problems you're facing.!</li>
          <li class="bot__output bot__output--standard">
            <span class="bot__output--second-sentence"></span>
            <ul>
              <li class="input__nested-list">If some crime has <span class="bot__command"> happened</span> to you.</li>
              <li class="input__nested-list">You want to <span class="bot__command">know</span> about a particular crime.</li>
              <li class="input__nested-list">You need any <span class="bot__command"> helpline</span> assistance (for further support)</li>
              <li class="input__nested-list"> You want to <span class="bot__command"> track</span> your complaints.</li>
            </ul>
           
          </li>
        </ul>
      </div>
      <div class="chatbox-area">
        <form action="" id="chatform">
            <textarea placeholder="Talk to me!" class="chatbox" name="chatbox" resize: "none" minlength="2"></textarea>
            <input class="submit-button" type="submit" value="Enter">
        </form>
      </div>
			    <div class="block--background"></div>

</main>
<!-- partial -->



  <script  src="js/f_chat.js"></script>

</body>
</html>
