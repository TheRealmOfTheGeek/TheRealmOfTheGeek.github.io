var head = document.getElementById("loadjs");
var js = document.createElement("script");

js.type = "text/javascript";

if(screen.width >= 450) {
  js.src = "js/optimize/mobile.js";
  console.log("Loaded mobile.js");
}


/* IF THE SCREEN SIZE IS FROM 800-1000 */
if(screen.width >= 450) {
  js.src = "js/optimize/1000.js";
  console.log("Loaded 1000.js");
}

/* IF THE SCREEN SIZE IS FROM 1000-1155 */
if(screen.width >= 1000) {
  js.src = "js/optimize/1155.js";
  console.log("Loaded 1155.js");
}

/* IF THE SCREEN SIZE IS FROM 1155-1300 */
if(screen.width >= 1155) {
  js.src = "js/optimize/medium.js";
  console.log("Loaded medium.js");
}

/* IF THE SCREEN SIZE IS GREATER TO 1300 */
if (screen.width >= 1300) {
    js.src = "js/optimize/desktop.js";
    console.log("Loaded Desktop.js");
}





head.appendChild(js);
