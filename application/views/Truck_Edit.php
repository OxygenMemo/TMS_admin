﻿<h2>แก้ไขข้อมูลรถ</h2>

<h3>ข้อมูลรถ</h3>
<form action="multiupload.php" method="post" enctype="multipart/form-data">
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

@section Scripts {
	@Scripts.Render("~/bundles/jqueryval")
}