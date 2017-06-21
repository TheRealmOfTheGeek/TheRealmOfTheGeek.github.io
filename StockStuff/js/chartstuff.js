window.onload = function () {
  if(localStorage.getItem("score") === null) {
    funds = 100;
  } else {
    funds = localStorage.getItem("score");
  }

	if(window.location.hash) {
		ss = window.location.hash = ss;
} else {
  // Fragment doesn't exist
}

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
	chart.render();


  var setDP = setInterval(function(){
		console.log({y: price});
		chart.options.data[0].dataPoints.push({y: price * 1});
		chart.render();
	}, 1000);



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
