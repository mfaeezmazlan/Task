<html>
	<head>
		<link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    	<link href="starter-template.css" rel="stylesheet">
	</head>
	<body>
			<nav class="navbar navbar-inverse navbar-fixed-top">
	      	<div class="container">
	        	<div class="navbar-header">
	          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            	<span class="sr-only">Toggle navigation</span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
	          		</button>
	          		<a class="navbar-brand" href="#">Memo</a>
	        	</div>
		        <div id="navbar" class="collapse navbar-collapse">
			          <ul class="nav navbar-nav">
				            <li class="active"><a href="#">Home</a></li>
				            <li><a href="#about">About</a></li>
				            <li><a href="#contact">Contact</a></li>
			          </ul>
		        </div><!--/.nav-collapse -->
	      	</div>
	    	</nav>

	    <div class="container">

	      <div class="starter-template">
	        <h1><b>TASK</b></h1>
	        <p class="lead">Use this task management at will</p>
	      </div>
			<div class="row">
				<div class="col-xs-12">
					<div class="col-xs-4">
						<div class="well">
							<input type="text" class="form-control" id="inName" placeholder="Enter taskname" />
							<input type="text" class="form-control" id="inDetails" placeholder="Enter details" />
							<button class="btn btn-success form-control" id="btnSave">Create new task <i class="fa fa-plus"></i></button>
						</div>
					</div>
					<div class="col-xs-8" id="tableToRefresh">
					</div>
				</div>
			</div>
		</div>

		<script src="assets/jquery-3.1.1.min.js"></script>
		<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script>
			function getCurrentDate(){
				var currentdate = new Date();
				var datetime = "\nLast Sync: " + currentdate.getDay() + "/"+currentdate.getMonth() 
				+ "/" + currentdate.getFullYear() + " @ " 
				+ currentdate.getHours() + ":" 
				+ currentdate.getMinutes() + ":" + currentdate.getSeconds();

				return datetime;
			}


			function loadlink(){
			    $('#tableToRefresh').load('viewRecord.php',function () {
			         // $(this).unwrap();
			         console.log("Successfully refresh view"+ getCurrentDate());
			    });
			}

			loadlink(); // This will run on page load
			// setInterval(function(){
			//     loadlink() // this will run after every 5 seconds
			// }, 5000);

			function editRecord(id){
				var inNamePos = $("#tRow_"+id+" td:nth-child(2)"); 
				var tempName = inNamePos.text();
				inNamePos.html("<input type='text' value='"+tempName+"' />");
				// alert(tempName);
			}

			function deleteRecord(id){
				$.post("delRec.php",{id: id},function(data){
					console.log(data);
					loadlink();
				})
			}

			$("#btnSave").click(function(){
				var name = $("#inName").val();
				var detail = $("#inDetails").val();
				$.post("saveRec.php",{inName: name, inDetail: detail}, function(data){
					console.log(data);
					$("#inName").val("");
					$("#inDetails").val("");
					loadlink();
				});
			});

		</script>
	</body>
</html>