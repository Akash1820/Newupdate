var sendForm = document.querySelector('#chatform'),
    textInput = document.querySelector('.chatbox'),
    chatList = document.querySelector('.chatlist'),
    userBubble = document.querySelectorAll('.userInput'),
    botBubble = document.querySelectorAll('.bot__output'),
    animateBotBubble = document.querySelectorAll('.bot__input--animation'),
    overview = document.querySelector('.chatbot__overview'),
    hasCorrectInput,
    imgLoader = false,
    animationCounter = 1,
    animationBubbleDelay = 600,
    input,
    previousInput,
    isReaction = false,
    unkwnCommReaction = "I didn't quite get that. Please write a mail to us from <a href='mail'>Here</a> if you need any urgent assistance.",
    chatbotButton = document.querySelector(".submit-button")

sendForm.onkeydown = function(e){
  if(e.keyCode == 13){
    e.preventDefault();

    //No mix ups with upper and lowercases
    var input = textInput.value.toLowerCase();

    //Empty textarea fix
    if(input.length > 0) {
      createBubble(input)
    }
  }
};

sendForm.addEventListener('submit', function(e) {
  //so form doesnt submit page (no page refresh)
  e.preventDefault();

  //No mix ups with upper and lowercases
  var input = textInput.value.toLowerCase();

  //Empty textarea fix
  if(input.length > 0) {
    createBubble(input)
  }
}) //end of eventlistener

var createBubble = function(input) {
  //create input bubble
  var chatBubble = document.createElement('li');
  chatBubble.classList.add('userInput');

  //adds input of textarea to chatbubble list item
  chatBubble.innerHTML = input;

  //adds chatBubble to chatlist
  chatList.appendChild(chatBubble)

  checkInput(input);
}

var checkInput = function(input) {
  hasCorrectInput = false;
  isReaction = false;
  //Checks all text values in possibleInput
  for(var textVal in possibleInput){
    //If user reacts with "yes" and the previous input was in textVal
    if(input == "yes" || input.indexOf("yes") >= 0){
      if(previousInput == textVal) {
        console.log("sausigheid");

        isReaction = true;
        hasCorrectInput = true;
        botResponse(textVal);
      }
    }
    if(input == "no" && previousInput == textVal){
      unkwnCommReaction = "For a list of commands type: Commands";
      unknownCommand("I'm sorry to hear that :(")
      unknownCommand(unkwnCommReaction);
      hasCorrectInput = true;
    }
    //Is a word of the input also in possibleInput object?
    if(input == textVal || input.indexOf(textVal) >=0 && isReaction == false){
			console.log("succes");
      hasCorrectInput = true;
      botResponse(textVal);
		}
	}
  //When input is not in possibleInput
  if(hasCorrectInput == false){
    console.log("failed");
    unknownCommand(unkwnCommReaction);
    hasCorrectInput = true;
  }
}

// debugger;

function botResponse(textVal) {
  //sets previous input to that what was called
  // previousInput = input;

  //create response bubble
  var userBubble = document.createElement('li');
  userBubble.classList.add('bot__output');

  if(isReaction == true){
    if (typeof reactionInput[textVal] === "function") {
    //adds input of textarea to chatbubble list item
      userBubble.innerHTML = reactionInput[textVal]();
    } else {
      userBubble.innerHTML = reactionInput[textVal];
    }
  }

  if(isReaction == false){
    //Is the command a function?
    if (typeof possibleInput[textVal] === "function") {
      // console.log(possibleInput[textVal] +" is a function");
    //adds input of textarea to chatbubble list item
      userBubble.innerHTML = possibleInput[textVal]();
    } else {
      userBubble.innerHTML = possibleInput[textVal];
    }
  }
  //add list item to chatlist
  chatList.appendChild(userBubble) //adds chatBubble to chatlist

  // reset text area input
  textInput.value = "";
}

function unknownCommand(unkwnCommReaction) {
  // animationCounter = 1;

  //create response bubble
  var failedResponse = document.createElement('li');

  failedResponse.classList.add('bot__output');
  failedResponse.classList.add('bot__output--failed');

  //Add text to failedResponse
  failedResponse.innerHTML = unkwnCommReaction; //adds input of textarea to chatbubble list item

  //add list item to chatlist
  chatList.appendChild(failedResponse) //adds chatBubble to chatlist

  animateBotOutput();

  // reset text area input
  textInput.value = "";

  //Sets chatlist scroll to bottom
  chatList.scrollTop = chatList.scrollHeight;

  animationCounter = 1;
}

function responseText(e) {

  var response = document.createElement('li');

  response.classList.add('bot__output');

  //Adds whatever is given to responseText() to response bubble
  response.innerHTML = e;

  chatList.appendChild(response);

  animateBotOutput();

  console.log(response.clientHeight);

  //Sets chatlist scroll to bottom
  setTimeout(function(){
    chatList.scrollTop = chatList.scrollHeight;
    console.log(response.clientHeight);
  }, 0)
}

function responseImg(e) {
  var image = new Image();

  image.classList.add('bot__output');
  //Custom class for styling
  image.classList.add('bot__outputImage');
  //Gets the image
  image.src = "/images/"+e;
  chatList.appendChild(image);

  animateBotOutput()
  if(image.completed) {
    chatList.scrollTop = chatList.scrollTop + image.scrollHeight;
  }
  else {
    image.addEventListener('load', function(){
      chatList.scrollTop = chatList.scrollTop + image.scrollHeight;
    })
  }
}

//change to SCSS loop
function animateBotOutput() {
  chatList.lastElementChild.style.animationDelay= (animationCounter * animationBubbleDelay)+"ms";
  animationCounter++;
  chatList.lastElementChild.style.animationPlayState = "running";
}

function commandReset(e){
  animationCounter = 1;
  previousInput = Object.keys(possibleInput)[e];
}

// hlep

var possibleInput = {
  // "hlep" : this.help(),
  "happened" : function(){
    responseText("Oh, no problem, we are here to help you through everything.")
    responseText("Just tell us what exactly you want to talk about?")
    
    commandReset(0);
    return
    },
    "report" : function(){
      responseText("Oh, no problem, we are here to help you through everything.")
      responseText("Just tell us what exactly you want to talk about?")
      
      commandReset(0);
      return
      },
  "cyber crime" : function(){
    responseText("Ok, give us a short description of your issue.");
    
    commandReset(1);
    return
    },
  "hack" : function(){
    responseText("In this case, firstly you should 'Report Your Account'");
    responseText("And also ask your friends to do it.");
    responseText("Or you can change your credentials");
    responseText("After that take screenshots of the changes you are facing.");
    responseText("And provide us that with as many details as you have for the particular incident!");
    responseText("For anonymous reporting, <a href='annon' target='_top'>Click here</a> ");
    responseText("For report & track, <a href='form' target='_top'>Click here</a> ");
    commandReset(2);
    return
    },
  "fake account" : function(){
    responseText("I believe such an action is called as Web Jacking.");
    responseText("And such an offense may get punishment upto 3 years. ");
    responseText("You don't have to worry about anything, just simply share a screenshot with us as a supporting evidence");
    responseText("And the cyber cell will take care of it.");
    responseText("For anonymous reporting, <a href='annon' target='_top'>Click here</a> ");
    responseText("For report & track, <a href='form' target='_top'>Click here</a> ");
    commandReset(3);
    return
  },
  "leak" : function(){
    responseText("This type of crime is child pornography.");
    responseText("You don't have to worry about this, we are here to help you.");
    responseText("So Firstly, Block this person. Depending on your privacy settings. Once you block someone, they no longer have access to your profile.");
    responseText("If you're under 18, we recommend talking with a parent or other adult you trust to have a moral support. ");
    responseText("And Report this crime with us, so that we can take particular legal actions.");
    responseText("For anonymous Reporting,<a href='annon' target='_top'> Click here </a>");
    responseText("For Report & track, <a href='form' target='_top'> Click here </a>");
    commandReset(4);
    return
  },
  "copy" : function(){
    responseText("This type of crime is web-jacking crime ");
    responseText("The punishment for this is 3 years or a fine which may extend to five lakh rupees or with both.");
    responseText("And Report this crime with us, so that we can take particular legal actions.");
    responseText("For anonymous Reporting, <a href='annon' target='_top'>Click here</a>");
    responseText("For Report & track, <a href='form' target='_top'> Click here </a>");
    commandReset(5);
    return
  },
  "bullying" : function(){
    responseText("This type of crime is cyber bullying.");
    responseText("Make Your settings private");
    responseText("And Report this crime to us.");
    responseText("Report the account through which you are reciving these msg or block the number through which you receving these msg");
    responseText("Take screenshots of the chat");
    responseText("And submit it with your complaint.");
    responseText("For anonymous Reporting, <a href='annon'>Click Here</a>");
    responseText("For Report & track, <a href='form'>Click Here</a>");
    responseText("You may check 'Safe Use of social Media Platform' for more tips here <a href='https://cybercrime.gov.in/Webform/CyberAware.aspx'>Click Here</a> ");
    commandReset(6);
    return
  },
  "track" : function(){
    
    responseText("Track Your Complaints  <a href='track' > Here </a>");
    commandReset(7);
    return
  },
  "commands" : function(){
    responseText("This is a list of commands Navvy knows:")
    responseText("help, best work, about, vision, experience, hobbies / interests, contact, rick roll");
    commandReset(8);
    return
  },
  "rick roll" : function(){
    window.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
    },
  // work experience
}

var reactionInput = {
  "best work" : function(){
    //Redirects you to a different page after 3 secs
    responseText("On this GitHub page you'll find everything about Navvy");
    responseText("<a href='https://github.com/meesrutten/chatbot'>Navvy on GitHub</a>")
    animationCounter = 1;
    return
  },
  "about" : function(){
    responseText("Things I want to learn or do:");
    responseText("Get great at CSS & JS animation");
    responseText("Create 3D browser experiences");
    responseText("Learn Three.js and WebGL");
    responseText("Combine Motion Design with Front-End");
    animationCounter = 1;
    return
    }
}