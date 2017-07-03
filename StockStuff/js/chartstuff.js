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

    var dps = [{y: price * 1}];   //dataPoints.

    var chart = new CanvasJS.Chart("chartContainer",{
      zoomEnabled: true,
		axisY:{
		        includeZero: false
		      },

      data: [{
        type: "spline",
        dataPoints : dps
      }]
    });

    chart.render();
    var xVal = dps.length + 1;
    var yVal = 15;
    var updateInterval = 1000;

    var updateChart = function () {


      yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
      dps.push({y: price * 1, x: xVal});

      xVal++;
      if (dps.length >  60 )
      {
        dps.shift();
      }

      chart.render();

// update chart after specified time.

};

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
