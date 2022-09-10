<!DOCTYPE html>
<!-- Created By CodingNepal - www.youtube.com/codingnepal || www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tic Tac Toe Game | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
           @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
::selection{
  color: #fff;
  background:#56baed;
}
body{
  background:#56baed;
}
.select-box, .play-board, .result-box{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transition: all 0.3s ease;
}
.select-box{
  background: aqua;
  padding: 20px 25px 25px;
  border-radius: 5px;
  max-width: 400px;
  width: 100%;
}
.select-box.hide{
  opacity: 0;
  pointer-events: none;
}
.select-box header{
  font-size: 30px;
  font-weight: 600;
  padding-bottom: 10px;
  border-bottom: 1px solid lightgrey;
}
.select-box .title{
  font-size: 22px;
  font-weight: 500;
  margin: 20px 0;
}
.select-box .options{
  display: flex;
  width: 100%;
}
.options button{
  width: 100%;
  font-size: 20px;
  font-weight: 500;
  padding: 10px 0;
  border: none;
  background: #56baed;
  border-radius: 5px;
  color: #fff;
  outline: none;
  cursor: pointer;
  transition: all 0.3s ease;
}
.options button:hover,
.btn button:hover{
  transform: scale(0.96);
}
.options button.playerX{
  margin-right: 5px;
}
.options button.playerO{
  margin-left: 5px;
}
.select-box .credit{
  text-align: center;
  margin-top: 20px;
  font-size: 18px;
  font-weight: 500;
}
.select-box .credit a{
  color: #56baed;
  text-decoration: none;
}
.select-box .credit a:hover{
  text-decoration: underline;
}

.play-board{
  opacity: 0;
  pointer-events: none;
  transform: translate(-50%, -50%) scale(0.9);
}
.play-board.show{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
}
.play-board .details{
  padding: 7px;
  border-radius: 5px;
  background: #fff;
}
.play-board .players{
  width: 100%;
  display: flex;
  position: relative;
  justify-content: space-between;
}
.players span{
  position: relative;
  z-index: 2;
  color: #56baed;
  font-size: 20px;
  font-weight: 500;
  padding: 10px 0;
  width: 100%;
  text-align: center;
  cursor: default;
  user-select: none;
  transition: all 0.3 ease;
}
.players.active span:first-child{
  color: #fff;
}
.players.active span:last-child{
  color: #56baed;
}
.players span:first-child{
  color: #fff;
}
.players .slider{
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: #56baed;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.players.active .slider{
  left: 50%;
}
.players.active span:first-child{
  color: #56baed;
}
.players.active span:nth-child(2){
  color: #fff;
}
.players.active .slider{
  left: 50%;
}
.play-area{
  margin-top: 20px;
}
.play-area section{
  display: flex;
  margin-bottom: 1px;
}
.play-area section span{
  display: block;
  height: 90px;
  width: 90px;
  margin: 2px;
  color: #56baed;
  font-size: 40px;
  line-height: 80px;
  text-align: center;
  border-radius: 5px;
  background: #fff;
}

.result-box{
  padding: 25px 20px;
  border-radius: 5px;
  max-width: 400px;
  width: 100%;
  opacity: 0;
  text-align: center;
  background: #fff;
  pointer-events: none;
  transform: translate(-50%, -50%) scale(0.9);
}
.result-box.show{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
}
.result-box .won-text{
  font-size: 30px;
  font-weight: 500;
  display: flex;
  justify-content: center;
}
.result-box .won-text p{
  font-weight: 600;
  margin: 0 5px;
}
.result-box .btn{
  width: 100%;
  margin-top: 25px;
  display: flex;
  justify-content: center;
}
.btn button{
  font-size: 18px;
  font-weight: 500;
  padding: 8px 20px;
  border: none;
  background: #56baed;
  border-radius: 5px;
  color: #fff;
  outline: none;
  cursor: pointer;
  transition: all 0.3s ease;
}
    </style>
</head>
<body>
  <!-- select box -->
    <center><img src="logo.png" width="150px"></center>
  <div class="select-box">
    
    <header>Tic Tac Toe</header>
    <div class="content">
      <div class="title">Select which you want to be?</div>
      <div class="options">
        <button class="playerX">Player (X)</button>
        <button class="playerO">Player (O)</button>
      </div>
      <div class="credit">Created By <a href="https://www.youtube.com/codingnepal" target="_blank">CodingNepal</a></div>
    </div>
  </div> 

  <!-- playboard section -->
  <div class="play-board">
    <div class="details">
      <div class="players">
        <span class="Xturn">X's Turn</span>
        <span class="Oturn">O's Turn</span>
        <div class="slider"></div>
      </div>
    </div>
    <div class="play-area">
      <section>
        <span class="box1"></span>
        <span class="box2"></span>
        <span class="box3"></span>
      </section>
      <section>
        <span class="box4"></span>
        <span class="box5"></span>
        <span class="box6"></span>
      </section>
      <section>
        <span class="box7"></span>
        <span class="box8"></span>
        <span class="box9"></span>
      </section>
    </div>
  </div>

  <!-- result box -->
  <div class="result-box">
    <div class="won-text"></div>
    <div class="btn"><button>Replay</button></div>
  </div>

  <script ">
      //I've tried to explain each JavaScript line with comments....Hope you'll understand

//selecting all required elements
const selectBox = document.querySelector(".select-box"),
selectBtnX = selectBox.querySelector(".options .playerX"),
selectBtnO = selectBox.querySelector(".options .playerO"),
playBoard = document.querySelector(".play-board"),
players = document.querySelector(".players"),
allBox = document.querySelectorAll("section span"),
resultBox = document.querySelector(".result-box"),
wonText = resultBox.querySelector(".won-text"),
replayBtn = resultBox.querySelector("button");

window.onload = ()=>{ //once window loaded
    for (let i = 0; i < allBox.length; i++) { //add onclick attribute in all available span
       allBox[i].setAttribute("onclick", "clickedBox(this)");
    }
}

selectBtnX.onclick = ()=>{
    selectBox.classList.add("hide"); //hide select box
    playBoard.classList.add("show"); //show the playboard section
}

selectBtnO.onclick = ()=>{ 
    selectBox.classList.add("hide"); //hide select box
    playBoard.classList.add("show"); //show the playboard section
    players.setAttribute("class", "players active player"); //set class attribute in players with players active player values
}

let playerXIcon = "fas fa-times"; //class name of fontawesome cross icon
let playerOIcon = "far fa-circle"; //class name of fontawesome circle icon
let playerSign = "X"; //this is a global variable beacuse we've used this variable inside multiple functions
let runBot = true; //this also a global variable with boolen value..we used this variable to stop the bot once match won by someone or drawn

// user click function
function clickedBox(element){
    if(players.classList.contains("player")){
        playerSign = "O"; //if player choose (O) then change playerSign to O
        element.innerHTML = `<i class="${playerOIcon}"></i>`; //adding circle icon tag inside user clicked element/box
        players.classList.remove("active"); ///add active class in players
        element.setAttribute("id", playerSign); //set id attribute in span/box with player choosen sign
    }else{
        element.innerHTML = `<i class="${playerXIcon}"></i>`; //adding cross icon tag inside user clicked element/box
        element.setAttribute("id", playerSign); //set id attribute in span/box with player choosen sign
        players.classList.add("active"); ///add active class in players
    }
    selectWinner(); //calling selectWinner function
    element.style.pointerEvents = "none"; //once user select any box then that box can'be clicked again
    playBoard.style.pointerEvents = "none"; //add pointerEvents none to playboard so user can't immediately click on any other box until bot select
    let randomTimeDelay = ((Math.random() * 1000) + 200).toFixed(); //generating random number so bot will randomly delay to select unselected box
    setTimeout(()=>{
        bot(runBot); //calling bot function
    }, randomTimeDelay); //passing random delay value
}

// bot auto select function
function bot(){
    let array = []; //creating empty array...we'll store unclicked boxes index
    if(runBot){ //if runBot is true
        playerSign = "O"; //change the playerSign to O so if player has chosen X then bot will O
        for (let i = 0; i < allBox.length; i++) {
            if(allBox[i].childElementCount == 0){ //if the box/span has no children means <i> tag
                array.push(i); //inserting unclicked boxes number/index inside array
            }
        }
        let randomBox = array[Math.floor(Math.random() * array.length)]; //getting random index from array so bot will select random unselected box
        if(array.length > 0){ //if array length is greater than 0
            if(players.classList.contains("player")){ 
                playerSign = "X"; //if player has chosen O then bot will X
                allBox[randomBox].innerHTML = `<i class="${playerXIcon}"></i>`; //adding cross icon tag inside bot selected element
                allBox[randomBox].setAttribute("id", playerSign); //set id attribute in span/box with player choosen sign
                players.classList.add("active"); ///add active class in players
            }else{
                allBox[randomBox].innerHTML = `<i class="${playerOIcon}"></i>`; //adding circle icon tag inside bot selected element
                players.classList.remove("active"); //remove active class in players
                allBox[randomBox].setAttribute("id", playerSign); //set id attribute in span/box with player choosen sign
            }
            selectWinner(); //calling selectWinner function
        }
        allBox[randomBox].style.pointerEvents = "none"; //once bot select any box then user can't click on that box
        playBoard.style.pointerEvents = "auto"; //add pointerEvents auto in playboard so user can again click on box
        playerSign = "X"; //if player has chosen X then bot will be O right then we change the playerSign again to X so user will X because above we have changed the playerSign to O for bot
    }
}

function getIdVal(classname){
    return document.querySelector(".box" + classname).id; //return id value
}
function checkIdSign(val1, val2, val3, sign){ //checking all id value is equal to sign (X or O) or not if yes then return true
    if(getIdVal(val1) == sign && getIdVal(val2) == sign && getIdVal(val3) == sign){
        return true;
    }
}
function selectWinner(){ //if the one of following winning combination match then select the winner
    if(checkIdSign(1,2,3,playerSign) || checkIdSign(4,5,6, playerSign) || checkIdSign(7,8,9, playerSign) || checkIdSign(1,4,7, playerSign) || checkIdSign(2,5,8, playerSign) || checkIdSign(3,6,9, playerSign) || checkIdSign(1,5,9, playerSign) || checkIdSign(3,5,7, playerSign)){
        runBot = false; //passing the false boolen value to runBot so bot won't run again
        bot(runBot); //calling bot function
        setTimeout(()=>{ //after match won by someone then hide the playboard and show the result box after 700ms
            resultBox.classList.add("show");
            playBoard.classList.remove("show");
        }, 700); //1s = 1000ms
        wonText.innerHTML = `Player <p>${playerSign}</p> won the game!`; //displaying winning text with passing playerSign (X or O)
    }else{ //if all boxes/element have id value and still no one win then draw the match
        if(getIdVal(1) != "" && getIdVal(2) != "" && getIdVal(3) != "" && getIdVal(4) != "" && getIdVal(5) != "" && getIdVal(6) != "" && getIdVal(7) != "" && getIdVal(8) != "" && getIdVal(9) != ""){
            runBot = false; //passing the false boolen value to runBot so bot won't run again
            bot(runBot); //calling bot function
            setTimeout(()=>{ //after match drawn then hide the playboard and show the result box after 700ms
                resultBox.classList.add("show");
                playBoard.classList.remove("show");
            }, 700); //1s = 1000ms
            wonText.textContent = "Match has been drawn!"; //displaying draw match text
        }
    }
}

replayBtn.onclick = ()=>{
    window.location.reload(); //reload the current page on replay button click
}
  </script>

</body>
</html>
