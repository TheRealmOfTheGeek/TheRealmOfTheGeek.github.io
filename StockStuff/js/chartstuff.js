window.onload = function () {
  if(localStorage.getItem("score") === null) {
    funds = 100;
  } else {
    funds = localStorage.getItem("score");
  }

  var c = document.createComment("The backend of this site is created by Kenton Vizdos.\nThe site uses Yahoo Finance and Chart.JS mainly for all of the data. \nYou can find me at TheROTG.com, KentonVizdos.com, or on Twitter, @kvizdos. \n\nNOTE: THIS SITE, A STOCK SITE, IS MENT TO BE 100% FREE. IF YOU SEE ANYTHING BEING SOLD, OR IF MONEY COSTS REAL MONEY, PLEASE REPORT IT TO ME VIA EMAIL: admin@therotg.com. ");
  document.body.appendChild(c);

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
