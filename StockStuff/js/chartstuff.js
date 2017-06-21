window.onload = function () {
  if(localStorage.getItem("score") === null) {
    funds = 100;
  } else {
    funds = localStorage.getItem("score");
  }

	if(window.location.hash) {
		ss = window.location.hash = ss;
} else {

}

var dps = []; // dataPoints

var chart = new CanvasJS.Chart("chartContainer",{
  zoomEnabled: true,

		axisY:{

						includeZero: false

					},
  title :{
    text: "Live Random Data"
  },
  data: [{
    type: "line",
    dataPoints: dps
  }]
});

var xVal = 0;
var yVal = 100;
var updateInterval = 100;
var dataLength = 500; // number of dataPoints visible at any point

var updateChart = function (count) {
  count = count || 1;
  			// count is number of times loop runs to generate random dataPoints.

  			for (var j = 0; j < count; j++) {
  				yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
  				dps.push({
  					x: xVal,
  					y: price * 1
  				});
  				xVal++;
  			};

  if (dps.length > dataLength)
  {
    dps.shift();
  }

  chart.render();

};

// generates first set of dataPoints
updateChart(dataLength);

// update chart after specified time.
setInterval(function(){updateChart()}, updateInterval);

}


function searchSym() {
  document.getElementById('sumname').innerHTML =  name + " | " + summary;

	resetCanvas();

	ss = document.getElementById('sym-search').value;

}


function resetCanvas() {
	$('#chartContainer').html(''); // this is my <canvas> element
	$('#cntn').append("<div id='chartContainer'></div>");
	length = 0;
	chart = new CanvasJS.Chart("chartContainer", {
		zoomEnabled: true,
		axisY:{
						includeZero: false
					},

		pointStyle: 'spline',
		data: [
		{
			type: "spline",
			dataPoints: [{

		}]
		}
		],
		options: {
				layout: {
						padding: {
								left: 0,
								right: 0,
								top: 100,
								bottom: 0
						}
				}
		},
	});
  chart.options.data[0].dataPoints.splice(0, 1);

	chart.render();

};
