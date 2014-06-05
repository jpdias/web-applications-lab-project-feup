<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header">
    Statistics
  </h2>
  <div class="col-md-12">
	<h3>Reserves and Requesitions by Month</h3>
	<canvas id="canvas1" height="300" width="900"></canvas>
  </div>
  <div class="col-md-12">

  <h3>Total Reserves and Requesitions</h3>
<center>
	<canvas id="canvas" height="300" width="300"></canvas></center>
  </div>
 
  <script src="../javascript/chart.js"></script>
  <script src="../javascript/tag.js"></script>
	<script>

		var pieData = [
		{
		value: {$requestSize},
		color:"#5CB85C",
		label : 'Requesitions',
        labelColor : 'white',
        labelFontSize : '20'
		},
		{
		value : {$reserveSize},
		color:"#428BCA",
		label : 'Reserves',
        labelColor : 'white',
        labelFontSize : '20'
		}
		];

		var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Pie(pieData);
		
			
		var allData = [];
			{foreach $allReq as $result}
	
				allData.push({$result});
			{/foreach}
		var allData2 = [];
			{foreach $allRes as $result}
				
				allData2.push({$result});
			{/foreach}
		var data = {
			labels : ["January","February","March","April","May","June","July", "August","September","October","November","December"],
			datasets : [
				{
					fillColor : "#428BCA",
					strokeColor : "#428BCA",
					data :  allData
				},
				{
					fillColor : "#5CB85C",
					strokeColor : "#5CB85C",
					data :  allData2
				},
			]
		}
		var bars  = new Chart(document.getElementById("canvas1").getContext("2d")).Bar(data);
	</script>
</div>