<style>

#top {
	text-align: center;
}
#sym-search {
	width: 200px;
}
#sym-enter {
	width: 75px;
}
#lower-container {
	position: absolute;
  left: 50%;
  margin-left: -100px;
}
#stats {
	position: relative;
	width: 100%;
	top: 150px;
	display: inline-block;
	float: left;
	text-align: center;
}
#stats h3 {
	float: left;
	margin-left: 10px;

}
#stats h4 {
	margin-left: 10px;
}

#turbo-bid {
	width: 97%;
	text-align: center;
}
#bid-amnt {
	width: 97%;
}

#up {
	background-color: lime;
	width: 100px;
	height: 100px;
	border-radius: 100%;
	float: left;
	margin: 10px;
}
#down {
	background-color: red;
	width: 100px;
	height: 100px;
	border-radius: 100%;
	float: left;
	margin: 10px;
}
.good {
	background-color: green;
}
.bad {
	background-color: red;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.canvasjs.min.js"></script>
<script type="text/javascript" src="canvasjs.min.js"></script>
<script type="text/javascript" src="jquery.redirect.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script>
/* WARNING */
/* DO NOT TOUCH / CHANGE / MOVE / EDIT / DELETE ANY OF THESE VARIABLES. */;
var name,
		summary,
		chart,
		price,
		funds;
var ss = "AAPL";
var sym = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20(%22"+ss+"%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=";
var xmlHttp = new XMLHttpRequest();
</script>


	<div id="top">
		<h1 id="sumname">Loading..</h1>
		<h3 id="price">Current:<br><span id="pri">Loading..</span></h3>
		<h3 id="afs">Available Funds: <br><span id="af">Loading..</span></h3>
		<form onsubmit="searchSym()" action="#">
			<input id="sym-search" placeholder="Search Symbols / Currencies">
			<input id="sym-enter" type="submit">
		</form>
		<form onsubmit="addFunds()" action="#">
			<input id="add-funds" placeholder="Add Funds ($)">
			<input id="add-enter" type="submit">
		</form>
		<a href="https://finance.yahoo.com/currencies" target="_blank">Wanting to compare currencies? Check here for the names!</a>
		<br>
		<a href="https://finance.yahoo.com/commodities" target="_blank">Wanting to compare commodities? Check here for the names!</a>

	</div>


	<div id="cntn"></div>






</head>
<body>

<div id="chartContainer" style="width:99%; height:60vh"></div>

<div id="lower-container">
	<div id="bid">
		<select name="turbo-bid" id="turbo-bid">
			<option value="3">1 Seconds - TURBO</option>

		  <option value="30">30 Seconds - TURBO</option>
		  <option value="45">45 Seconds - TURBO</option>
		  <option value="60">60 Seconds - TURBO</option>
		  <option value="120">120 Seconds - TURBO</option>
			<option value="900">15 Minutes</option>
			<option value="1800">30 Minutes</option>
			<option value="2700">45 Minutes</option>
			<option value="3600">60 Minutes</option>

		</select><br>
		<select name="bid-amnt" id="bid-amnt">
		  <option value="25">$25</option>
		  <option value="50">$50</option>
		  <option value="100">$100</option>
			<option value="250">$250</option>
			<option value="500">$500</option>
			<option value="1000">$1000</option>
		</select><br>
		<div id="up">
			&nbsp;
		</div>
		<div id="down">
			&nbsp;
		</div>


	</div>


</div>
<BR>
<div id="stats">
	<div class="container">
	  <h2>Active Bids</h2>
	  <table class="table table-bordered" id="stat-table">
	    <thead>
	      <tr>
					<th>Placed At</th>
	        <th>Duration</th>
					<th>Time Left</th>
	        <th>Amount</th>
					<th>Back</th>
					<th>Up/Down</th>
					<th>Type</th>

	      </tr>
	    </thead>
	    <tbody>

	    </tbody>
	  </table>

		<h2>Bid History</h2>
	  <table class="table table-bordered" id="history-table">
	    <thead>
	      <tr>
					<th>Placed At</th>
	        <th>Duration</th>
					<th>Time Left</th>
	        <th>Amount</th>
					<th>Back</th>
					<th>Up/Down</th>
					<th>Type</th>

	      </tr>
	    </thead>
	    <tbody>

	    </tbody>
	  </table>
	</div>


</div>

</body>
<script src="js/fundstuff.js"></script>
<script src="js/pricestuff.js"></script>
<script src="js/chartstuff.js"></script>
<script src="js/bid.js"></script>
