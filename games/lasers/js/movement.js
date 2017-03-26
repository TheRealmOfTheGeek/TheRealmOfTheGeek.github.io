movement.js

Skip to content
This repository
Search
Pull requests
Issues
Gist
 @kvizdos
 Sign out
 Unwatch 2
  Unstar 1
 Fork 2 TheRealmOfTheGeek/TheRealmOfTheGeek.github.io
 Code  Issues 3  Pull requests 0  Projects 2  Wiki  Pulse  Graphs  Settings
TheRealmOfTheGeek.github.io/games/lasers/js/ 
movement.js
   or cancel
    
 Edit file    Preview changes
25
}
26
​
27
window.onload = function() {
28
  document.getElementById('start-btn').onclick = startGame;
29
  document.getElementById('end-btn').onclick = died;
30
​
31
  var url_loc = window.location + '';
32
  var ifdead = url_loc.split("?");
33
​
34
  if(ifdead[1] == "died") {
35
    startGame();
36
  }
37
​
38
}
39
​
40
var gameMech;
41
​
42
function startGame() {
43
  document.getElementById('start-window').style.display = "none";
44
  document.getElementById('end-window').style.display = "none";
45
​
46
​
47
  startLasers();
48
  gameMech = setInterval(function(){
49
      if($('#player-container').offset().top > 15) {
50
          if(mouseDown == 1) {
51
              speed = speed - 2;
52
              player.style.top = speed;
53
          } else {
54
            if(($("#player-container").offset().top) > $('#game-container').height() - $("#player-container").height()) {
55
              if(mouseDown == 1) {
56
                  speed = speed - 0;
57
                  player.style.top = speed;
58
              }
59
            } else {
60
                speed = speed + 2;
61
                player.style.top = speed;
62
            }
63
          }
64
​
65
      } else {
66
        if(mouseDown == false) {
67
            speed = speed + 2;
68
            player.style.top = speed;
69
        }
70
      }
71
​
72
  }, 5);
73
​
74
​
75
}
76
​
77
function died() {
78
  var url_loc = window.location + '';
79
  var ifdead = url_loc.split("?");
80
  if(ifdead.length > 1) {
81
    window.location = window.location;
82
  } else {
83
    window.location = window.location + "?died";
84
  }
@kvizdos
Commit changes

Update 

Add an optional extended description…
  Commit directly to the master branch.
  Create a new branch for this commit and start a pull request. Learn more about pull requests.
Commit changes  Cancel
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help