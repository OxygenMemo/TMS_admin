﻿<h2>คำสั่งการขนส่ง</h2>
<br />
<hr />

<h3>ข้อมูลส่วนผู้ขับรถ</h3>
<br />
<form>
	<div class="row">
		<div class="container">
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">ชื่อคนขับรถ (Driver Name) : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
					<input type="text" class="form-control" value="คนึง โรจน์เพียรธรรม" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">หมายเลขทะเบียนรถ (car Registration) : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
					<select class="form-control" id="sel1">
						<option>Truck No...</option>
						<option>บพ 9999</option>
						<option>อก 8989</option>
					</select>
				</div>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">สถานะ (Status) : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></span>
					<input type="text" class="form-control" value="รอการจ่ายงาน" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">


			</div>
		</div>
	</div>

	<hr />

	<h3>ใบคำสั่งการจัดส่ง</h3>
	<br />
	<div class="row">
		<div class="container">
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">หมายเลขการจัดส่ง (Delivery No) : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></span>
					<select class="form-control" id="sel1">
						<option>Delivery No...</option>
						<option>T0132413E</option>
						<option>B1032564A</option>
					</select>
				</div>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">หมายเลขใบสั่งซื้อ (Order No) : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></span>
					<input type="text" class="form-control" value="SHP11101110" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">วันที่จัดส่ง (Delivery Date) : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
					<input type="date" value="2018-02-22" class="form-control" aria-describedby="basic-addon1">

				</div>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">วันครบกำหนดการจัดส่ง (Due Date) : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
					<input type="date" value="2018-02-22" class="form-control" aria-describedby="basic-addon1">

				</div>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">คลังสินค้าต้นทาง (Carco Station) : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></span>
					<select class="form-control" id="sel1">
						<option>Loading Station...</option>
						<option>แหลมฉบัง</option>
						<option>สนามบินอู่ตะเภา</option>
					</select>
				</div>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">จุดหมายปลายทาง (Destination Station) : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></span>
					<select class="form-control" id="sel1">
						<option>Destination...</option>
						<option>BigC</option>
						<option>Hitachi ระยอง</option>
						<option>อมตะนคร</option>
					</select>
				</div>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">


			</div>
		</div>
	</div>

	<br />
	<br />

	<div class="row">
		<div class="container">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<button type="submit" class="btn btn-default" style="margin-top:5px;">@Html.ActionLink("ตกลง", "Job_Management_Single", "Admin_manage")</button>
				<button type="reset" class="btn btn-default" style="margin-top:5px;" value="Reset">ยกเลิก</button>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
</form>