<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>จัดการคนขับรถ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<?php require('template/menu.php') ?>
<br />
<h3>เพิ่มข้อมูลรถ</h3>
<div class="row ws-content">
	<div class="container">

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
			<label for="sel1">น้ำหนักตัวรถ (ตัน) : </label>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span></span>
				<input type="text" class="form-control" placeholder="น้ำหนักตัวรถ (ตัน)" aria-describedby="basic-addon1">
			</div>
			<br />
		</div>
		<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
			<label for="sel1">ลักษณะยานพาหนะ : </label>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></span>
				<textarea type="text" class="form-control" placeholder="ลักษณะยานพาหนะ" aria-describedby="basic-addon1" rows="8"></textarea>
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
			<button type="submit" class="btn btn-success" style="margin:5px;"> @Html.ActionLink("ตกลง", "Truck_Insert_Complete", "Admin_manage", new { @style = "color:white;" })</button>
			<button type="reset" class="btn btn-warning" style="margin:5px;" font color="white">เคลียร์ข้อมูล</button>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</div>

<script>
	function preview_images() {
		var total_file = document.getElementById("images").files.length;
		for (var i = 0; i < total_file; i++) {
			$('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
		}
	}
</script>
</body>
</html>