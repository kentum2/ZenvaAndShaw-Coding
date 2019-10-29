let apiKey = '279B62CF56582CF8C2BAFE0FA7B56076';
//gameID I got from steam web searching particular games, 730 is CS:GO
let gameID = '730';

//to allow fetch function to work use the below function
//Also install the package to file root directory npm i node-fetch --save
const fetch = require ('node-fetch');

let url = 'http://api.steampowered.com/ISteamUserStats/GetGlobalAchievementPercentagesForApp/v0002/?gameid=730';
//fetching data from url

class Achievement {

  constructor(name, percent) {
    this.name = name;
    this.percent = percent;
  }
   printValues() {
     if (this.percent == 0){
       console.log(`No one has completed the achievement: ${this.name}.`);
     } else {
       console.log(`${this.name} achievement has been
       completed by ${this.percent}% of people`);
     }
   }
}



async function fetchData (url) {
  let response = await fetch(url);
  let jsonResponse = await response.json();
  printData(jsonResponse);
}
//printing the data fetched
function printData(jsonData) {
  //creating an empty array where to store the output
  var achievementsArray =[];
  let jsonObject = jsonData ['achievementpercentages'];
  let allAchievements = jsonObject ['achievements'];

//using for loop to iterate through dictionaries and get
//key>value pairs in this case achievementpercentages>achievements:>name|percent
for (let achievements of allAchievements) {
  let name = achievements['name'];
  let percent = achievements['percent'];
  let newAchievement = new Achievement(name,percent);
  newAchievement.printValues();
  achievementsArray.push(newAchievement);

  }
  console.log(achievementsArray.length);
  return achievementsArray;

}

fetchData(url).catch(function() {
  console.log('Could not fetch data');
});
