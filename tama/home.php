<!DOCTYPE html>
<html>

<head>
	<title>INDEX</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/4c4e4140eb.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
		<a class="navbar-brand" href="#">  <img src="logo1.png" width="120" height="70" class="d-inline-block align-top" alt="">
  </a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active" class="text-danger">
					<a class="nav-link" href="#"><i class="fa fa-home fa-3x" aria-hidden="true"></i>Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active" class="text-success">
					<a class="nav-link" href="rekap.html"><i class="fa fa-archive fa-3x" aria-hidden="true"></i>Rekap</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container"><span class="float-md-right"><i class="fa fa-clock-o" aria-hidden="true"></i><st id="time">jam</st></span>
		<h2 class="text-primary mt-4">Put Your RFID Card to Your Scanner </h2>

		<div class="form-group">
			<label for="rfidnumber">RFID Tag Number</label>
			<input type="text" class="form-control" id="inputs" aria-describedby="rfidnumber" placeholder="RFID Number will shown here">
			<small id="rfidnumber" class="form-text text-muted">This System Automatically Record Your Abscence</small>
		</div>

		<div class="container mb-4">
			<h3>Class Information</h3>
			<div class="p-3 mb-2 bg-success text-white" id="tampilMessage">
				<!-- tampilan phpmu -->
				<b>Name</b> : Daniel Aditama <b>Course</b> : ERP Planning <b>Date/Time</b> : Mon,9-10-17/07:59:59 <b>Status</b>: Early
				<!-- kalo wes lewat status Late-->
			</div>
			<div class="alert" role="alert"></div>
		</div>
		<h2> Senin</h2>

		<table class="table table-striped table-responsive">
			<thead>
				<tr>
					<th>#</th>
					<th>Mata kuliah</th>
					<th>Jam mulai</th>
					<th>Jam berakhir</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>1</th>
					<td>Perencanaan Sumber Daya Perusahaan (ERP)</td>
					<td>08:00:00</td>
					<td>12:00:00</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Multimedia Bisnis</td>
					<td>12:00:00</td>
					<td>14:00:00</td>
				</tr>
			</tbody>
		</table>

	</div>
	<script src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="asset/js/data.js"></script>
  <script src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var timestamp = "<?=date('H:i:s');?>";

		function updateTime() {
			$('#time').html(Date(timestamp));
			timestamp++;
		}
		$(function() {
			setInterval(updateTime, 1000);
		});
	</script>
</body>

</html>