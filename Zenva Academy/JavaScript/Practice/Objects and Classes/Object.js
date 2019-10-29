//Creating character objects/classes

var characters = [
{
    name:'Kenneth',
    xPos: 0,
    yPos: 0,
    move: function(moveX, moveY){
      this.xPos =+ moveX;
      this.moveY =+ moveY;
    }
},

{
  name:'Saiake',
  xPos: 1,
  yPos: 10,
  move: function(moveX, moveY){
    this.xPos =+ moveX;
    this.moveY =+ moveY;
  }
}
];

characters.forEach(function(element){
  element.move(5,0);
})
