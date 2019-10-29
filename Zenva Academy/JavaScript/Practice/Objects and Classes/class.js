var move = function(moveX, moveY){
  this.xPos += moveX;
  this.moveY += moveY;
}

//Both methods have the same ending. The most common is the bottom one
//Method 1
var GameCharacter = function(name, x, y, move ){
    this.name=name;
    this.x=xPos;
    this.y=yPos;
    this.move=move;
};

var newCharacter1 = new GameCharacter('Kenneth', 1, 1, move);
var newCharacter1 = new GameCharacter('Saiake', 2, 5, move);
var newCharacter1 = new GameCharacter('Marec', 4, 7, move);

newCharacter1.x= 4;
newCharacter3.name='Kohuke';
newCharacter1.move=(3,0);

//Method 2, creating class
class GameCharacter ={
    constructor(name, xPos, yPos){
      this.name=name;
      this.xPos=xPos;
      this.yPos=yPos
    }
    move(xAmount, yAmount){
      this.xPos +=xAmount;
      this.yPos += yAmount;
    }
}
var character1 =new GameCharacter('Sendina',5,12);
//Creating sub class and making main class "super class"
 class NonPlayerCharacter extens GameCharacter{
   constructor(name, xPos, yPos, speed){
     this.speed=speed;
     super(name, xPos, yPos);
   }
 }
