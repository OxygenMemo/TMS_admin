<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>จัดการรถบรรทุก</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<?php require('template/menu.php') ?>

<form action="multiupload.php" method="post" enctype="multipart/form-data">
	<div class="row ws-content">
		<div class="container">
			<h2>แก้ไขข้อมูลรถ</h2>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
			<label for="sel1">ทะเบียนรถ : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="เลขที่" aria-describedby="basic-addon1">
						</div>
						<br />
						<label for="sel1">จังหวัด : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="จังหวัด" aria-describedby="basic-addon1">
						</div>
						<br />
						<label for="sel1">คนขับรถ : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="คนขับรถ" aria-describedby="basic-addon1"></input>
						</div>
						<br />
					</div>
					<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<label for="sel1">น้ำหนักตัวรถ (ตัน) : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="น้ำหนักตัวรถ (ตัน)" aria-describedby="basic-addon1">
						</div>
						<br />
						<label for="sel1">ประเภทรถ : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="ประเภทรถ" aria-describedby="basic-addon1">
						</div>
						<br />
						<label for="sel1">gpsdevice : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="gpsdevice" aria-describedby="basic-addon1">
						</div>
						<br />
						<label for="sel1">รูปภาพ : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></span>
							<input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple />
						</div><br />
						<div class="row" id="image_preview"></div>
					</div>

		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" align="center">
				<button type="submit" class="btn btn-success" style="margin:5px;"> @Html.ActionLink("ตกลง", "Truck_information_Single", "Admin_manage", new { @style = "color:white;" })</button>
				<button type="reset" class="btn btn-warning" style="margin:5px;" font color="white">เคลียร์ข้อมูล</button>
				<button type="button" class="btn btn-danger" style="margin:5px;" onclick="delbutton()">@Html.ActionLink("ลบรถคันนี้", "Truck_Edit", "Admin_manage", new { @style = "color:white;" })</button>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>
</form>
<script>
	function preview_images() {
		var total_file = document.getElementById("images").files.length;
		for (var i = 0; i < total_file; i++) {
			$('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
		}
	}
	function delbutton() {
	var txt;
	var r = confirm("คุณแน่ใจว่าจะลบรถคันนี้ !!");
	if (r == true) {
			txt = "You pressed OK!";
		} else {
			txt = "You pressed Cancel!";
		}
	document.getElementById("demo").innerHTML = txt;
	}
</script>
</body>
</html>