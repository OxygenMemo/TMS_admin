﻿<form>
	<h2>แก้ไขข้อมูลคนขับ</h2>

	<hr />
	<h3>ข้อมูลระบบ Log On</h3>
	<br />
	<div class="row">
		<div class="container">
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">ชื่อในระบบ : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></span>
					<input type="text" class="form-control" placeholder="knuing001" aria-describedby="basic-addon1">
				</div>
				<br>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">ประเภทเจ้าของ Username : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
					<select class="form-control" id="sel1">
						<option>messenger</option>
						<option>admin</option>
						<option>messenger</option>
						<option>tracking</option>
					</select>
				</div>
				<br>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">วันหมดอายุของ Username : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
					<!--input type="date" id="hyear" ng-model="inputhdate" class="form-control" aria-describedby="basic-addon1"-->
					<input placeholder="22/02/2561" type="text" id="datepicker" class="form-control" aria-describedby="basic-addon1" />
					<script>
						$(function () {
							$("#datepicker").datepicker();
						});
					</script>
				</div>
				<br>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">

				<br>
			</div>
		</div>
	</div>

	<hr /><!--เส้นแบ่งบรรทัด-->


	<h3>ข้อมูลผู้ใช้ในระบบ ผู้ขับรถ</h3>
	<br />
	<div class="row">
		<div class="container">

			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">ชื่อ : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
					<input type="text" class="form-control" placeholder="คนึง" aria-describedby="basic-addon1">
				</div>
				<br />
				<label for="sel1">นามสกุล : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span></span>
					<input type="text" class="form-control" placeholder="โรจน์เพียรธรรม" aria-describedby="basic-addon1">
				</div>
				<br />
				<label for="sel1">เบอร์โทรศัพท์ : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></span>
					<input type="text" class="form-control" placeholder="0999999999" aria-describedby="basic-addon1">
				</div>
				<br />
				<label for="sel1">หมายเลขพนักงาน : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span></span>
					<input type="text" class="form-control" placeholder="ST000011" aria-describedby="basic-addon1">
				</div>
				<br />
				<label for="sel1">ใบขับขี่เลขที่ : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></span>
					<input type="text" class="form-control" placeholder="59001111" aria-describedby="basic-addon1">
				</div>
				<br />
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">ที่อยู่ : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></span>
					<textarea type="text" class="form-control" placeholder="219 ถ.สุขุทวิท ต.แสนสุข เมือง อำเภอเมืองชลบุรี ชลบุรี 20130" aria-describedby="basic-addon1" rows="5"></textarea>
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
				<button type="submit" class="btn btn-success" style="margin:5px;"> @Html.ActionLink("ตกลง", "Person_Single", "Admin_manage", new { @style = "color:white;" })</button>
				<button type="reset" class="btn btn-warning" style="margin:5px;" font color="white">เคลียร์ข้อมูล</button>
				<button type="button" class="btn btn-danger" style="margin:5px;" onclick="delbutton()">@Html.ActionLink("ลบรายชื่อนี้", "Person_Edit", "Admin_manage", new { @style = "color:white;" })</button>
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
		var r = confirm("คุณแน่ใจว่าจะลบรายชื่อนี้ !!");
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