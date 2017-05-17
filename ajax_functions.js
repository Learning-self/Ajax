/*获取XMLHTTPRequest对象*/
function getXMLHTTPRequest(){
	var req = false;
	try{
		// 火狐浏览器、谷歌等非IE浏览器
		req = new XMLHttpRequest();
	}catch(err){
		try{
			// IE
			req = new ActiveXObject('Msxml2.XMLHTTP');
		}catch(err){
			try{
				// 另一些IE
				req = new ActiveXObject('Microsoft.XMLHTTP');
			}catch(err){
				req = false;
			}
		}
	}
	return req;
}

/*与服务器进行通信*/
function getServerTime(){
	var thePage = 'servertime.php';
	myRand = parseInt(Math.random()*99999999999999);
	var theURL = thePage+"?rand="+myRand;
	myReq.open("GET",theURL,true);
	myReq.onreadystatechange = theHTTPResponse;
	myReq.send(null); 
}

/*处理服务器响应*/
function theHTTPResponse(){
	if (myReq.readyState == 4) {
		if(myReq.status == 200){
			var timeString = myReq.responseXML.getElementsByTagName('timestring')[0];
			document.getElementById('showtime').innerHTML = timeString.childNodes[0].nodeValue;
		}
	}else{
		document.getElementById('showtime').innerHTML = "<img src='ajax-loader.gif' />";
	}
}