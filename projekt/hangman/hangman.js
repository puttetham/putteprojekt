var words = ['ZLATAN', 'PATRIK', 'JAVASCRIPT', 'JQUERY', 'STOCKHOLM'],

  hit = false,
  i = 0,
  buttons = [],
  charCodeA = 65,
  charCodeZ = 90,
  disableInput = false,
  buttonContainer = document.getElementById('buttons'),
  livesContainer = document.getElementById('lives'),
  wordContainer = document.getElementById('word'),
  nextButton = document.getElementById('next');

function gameOver() {
  //Reveal the missing characters of the word
  for (i = 0; i < length; i++) {
    if (letterSpan[i].innerHTML == "_") {
      letterSpan[i].innerHTML = word[i];
      letterSpan[i].className = "missing";
    }
  }

  disableInput = true
  document.getElementsByTagName("html")[0].className = "gameOver";
}

function processInput(character) {
  //Loop through the word-array and check, if the given character matches
  for (i = 0; i < length; i++) {
    if (word[i] == character) {
      letterSpan[i].innerHTML = character;
      hit = true;
    }
    //Check if there is any character left, that hasn't been guessed yet
    if(letterSpan[i].innerHTML == "_"){
      finished = false;
    }
  }

  //After the for-loop is finished, check if there was a hit
  if (hit === true) {
    //Set hit back to false
    hit = false;
  } else {
    //Decrease lives and display them
    lives--;
    livesContainer.style.width = lives * 40 + "px";

   //Check, if there are lives left
    if (lives == 0) {
      gameOver();
    }
  }

  //After the for-loop is finished, check if every character is already guessed
  if(finished === true){
    document.getElementsByTagName("html")[0].className = "finished";
    disableInput = true;
  }else{
    finished = true;
  }
}

function echoButtons() {
  i = 0;

  for (var letter = charCodeA; letter <= charCodeZ; letter++) {
    //Create a button for every character of the alphabet
    buttons[i] = document.createElement("button");
    buttons[i].innerHTML = String.fromCharCode(letter);

    //Create a EventListener for every button
    buttons[i].addEventListener("click", function() {
      if(disableInput === false){
        if (this.className.indexOf("disabled") == -1) {
          processInput(this.innerHTML);
          this.className = "disabled";
        }
      }
    });

    //Insert every button into the buttonContainer
    buttonContainer.appendChild(buttons[i]);
    i++;
  }
}

//Get new random word and set back various stuff
function newWord() {
  selected = Math.floor(Math.random() * words.length);
  word = words[selected].split('');
  length = word.length;
  letterSpan = [];
  lives = 10;
  letterString = "";
  finished = true,
  disableInput = false;

  livesContainer.style.width = lives*40 +"px"
  wordContainer.innerHTML = "";
  document.getElementsByTagName("html")[0].className = "";

  //Remove the disabled-class from all buttons
  for(i = 0; i <= 25; i++){
    buttons[i].className = "";
  }

  //Create a <span> for each character of the word and fill it with _
  for (i = 0; i < length; i++) {
    letterSpan[i] = document.createElement("span");
    letterSpan[i].innerHTML = "_";
    wordContainer.appendChild(letterSpan[i]);
  }
}

nextButton.addEventListener("click", newWord);
echoButtons();
newWord();
