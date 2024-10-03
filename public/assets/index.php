<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<center><img id="chart" src="" width="800" /></center>

</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	
	var obj = {};
	obj.options = JSON.stringify({
		"title":"",
		"subtitle":"",
		"xAxis":{"categories": [
						"Jan",
						"Feb",
						"Mar",
						"Apr",
						"May",
						"Jun",
						"Jul",
						"Aug",
						"Sep",
						"Oct",
						"Nov",
						"Dec"
					]},
		"series":[
					{
						"data": [1,3,2,4],
						"type": "line"
					},
					{
						"data": [5,3,4,2],
						"type":"line"
					}
				]
	});
	
	
	/*chart:{
			type: 'variablepie'
		},
		series:[{
			innerSize: '20%',
			zMin: 0,
			zMax: 1,
			data: [{name: 'p1',y: 1, z: 0.5},{name: 'p2',y: 1, z: 0.6}]
		}]*/
	
	obj.type = 'image/png';
	obj.width = '1600';
	obj.scale = '2';
	obj.async = true;
	
	var globalOptions = {lang:{numericSymbols: null, thousandsSep: "."}};
	obj.globaloptions = JSON.stringify(globalOptions);
	var tmp = null;
	//$.support.cors = true;
	
	$.ajax({
		async: false,
		type: 'post',
		dataType: 'text',
		url :'aire.test/',
		data: obj,
		//crossDomain:true,
		success: function (data) {
			console.log(data);
			tmp = data.replace(/.png/g,'');
			var url = "aite.test/"+tmp+".png";
			$("#chart").attr("src", url);
		}
	});
	
});   
</script>	