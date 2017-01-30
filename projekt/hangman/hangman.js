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

//REVEAL THE MISSING CHARACTERS OF THE WORD
function gameOver() {
  for (i = 0; i < length; i++) {
    if (letterSpan[i].innerHTML == "_") {
      letterSpan[i].innerHTML = word[i];
      letterSpan[i].className = "missing";
    }
  }
  disableInput = true
  document.getElementsByTagName("html")[0].className = "gameOver";
}

//LOOP THROUHG THE WORD ARRAY AND CHECK, IF THE GIVEN CHARACTER MACTHES
function processInput(character) {
  for (i = 0; i < length; i++) {
    if (word[i] == character) {
      letterSpan[i].innerHTML = character;
      hit = true;
    }
    //CHECK IF THERE IS ANY CHARACTER LEFT, THAT HASENT BEEN GUSSED YET
    if(letterSpan[i].innerHTML == "_"){
      finished = false;
    }
  }
  //AFTER THE FOR LOOP IS FINISHED, CHECK IF THERE WAS A HIT
  if (hit === true) {
    //SET HIT BACK TO FALSE
    hit = false;
  } else {
    //DECREASE LIVES AND DISPLAY THEM
    lives--;
    livesContainer.style.width = lives * 70 + "px";

   //CHECK, IF THERE ARE LIVES YET
    if (lives == 0) {
      gameOver();
    }
  }

  //AFTER THE FOR LOOP IS FINISHED, CHECK IF EVERY CHARATCHER IS FINISHED
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
    //CREATE A BUTTON FOR EVERY CHARACTER OF THE ALPHABET
    buttons[i] = document.createElement("button");
    buttons[i].innerHTML = String.fromCharCode(letter);

    //CREATE EVENTLISTENER FOR BUTTONS
    buttons[i].addEventListener("click", function() {
      if(disableInput === false){
        if (this.className.indexOf("disabled") == -1) {
          processInput(this.innerHTML);
          this.className = "disabled";
        }
      }
    });

    //INSERT EVERY BUTTON INTO THE BUTTON CONTAINER
    buttonContainer.appendChild(buttons[i]);
    i++;
  }
}
//GET NEW RANDOM WORD AND SET BACK VARIOUS STUFF
function newWord() {
  selected = Math.floor(Math.random() * words.length);
  word = words[selected].split('');
  length = word.length;
  letterSpan = [];
  lives = 10;
  letterString = "";
  finished = true,
  disableInput = false;

  livesContainer.style.width = lives*70 +"px"
  wordContainer.innerHTML = "";
  document.getElementsByTagName("html")[0].className = "";

  //REMOVE THE DISABLED CLASS FROM ALL BUTTONS
  for(i = 0; i <= 25; i++){
    buttons[i].className = "";
  }

  //CREATE A SPAN FOR EACH CHARACTER OF THE WORD AND FILL IT WITH _
  for (i = 0; i < length; i++) {
    letterSpan[i] = document.createElement("span");
    letterSpan[i].innerHTML = "_";
    wordContainer.appendChild(letterSpan[i]);
  }
}

nextButton.addEventListener("click", newWord);
echoButtons();
newWord();
