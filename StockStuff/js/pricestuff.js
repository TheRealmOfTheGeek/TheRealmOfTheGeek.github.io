setInterval(function(){

xmlHttp.onreadystatechange = function() {
		document.getElementById('af').innerHTML = "$" + funds;
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
				var ps = JSON.parse(xmlHttp.responseText);
				var pr = ps.query.results.quote.Ask + "";
        summary = ps.query.results.quote.Symbol;
        name = ps.query.results.quote.Name;
				price = pr;
				document.getElementById('pri').innerHTML = pr;
        document.getElementById('sumname').innerHTML =  name + " | " + summary;
				console.log('https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20(%22'+ss+'%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=');
}
xmlHttp.open('GET', 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20(%22'+ss+'%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=',true);
//xmlHttp.open('GET', sym,true);

xmlHttp.send(null);
}, 1000);
