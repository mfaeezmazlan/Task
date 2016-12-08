<html>
	<head>
		<link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" href="starter-template.css">
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
	          		<a class="navbar-brand" href="index.php">TASK</a>
	        	</div>
		        <div id="navbar" class="collapse navbar-collapse">
			          <ul class="nav navbar-nav">
				            <li class="active"><a href="#">Home</a></li>
				            <li><a href="about.php">About</a></li>
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
					<h3>Create task</h3>
						<div class="well">
							<input type="text" class="form-control" id="inName" placeholder="Enter taskname" />
							<input type="text" class="form-control" id="inDetails" placeholder="Enter details" />
							<input type="text" class="form-control" id="inStartDate" placeholder="Start Date" />
							<input type="text" class="form-control" id="inEndDate" placeholder="End Date" />
							<button class="btn btn-success form-control" id="btnSave">Create new task <i class="fa fa-plus"></i></button>
						</div>
					</div>
					<div class="col-xs-8" id="tableToRefresh">
					</div>
				</div>
			</div>
		</div>


		<!-- MODAL DIALOG FOR EDITING START HERE -->

		<!-- Trigger the modal with a button -->
		<div id="editModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title"><i class="fa fa-pencil"></i> Edit task "<b id="editTaskName"></b>"</h4>
		      </div>
		      <div class="modal-body">
		        <div class="well">
		        	<input type="hidden" id="inEditID" />
					<input type="text" class="form-control" id="inEditName" placeholder="Enter taskname" />
					<input type="text" class="form-control" id="inEditDetails" placeholder="Enter details" />
					<button class="btn btn-success form-control" id="btnUpdateSave">Update task <i class="fa fa-plus"></i></button>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>

		<!-- MODAL DIALOG FOR EDITING END HERE -->

		<script src="assets/jquery-3.1.1.min.js"></script>
		<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</body>
</html>