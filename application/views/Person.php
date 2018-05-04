﻿<link href="~/Content/Search.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php require('template/menu.php') ?>
<br />
<div ng-app="myApp">
	<div class="row">
		<div class="container">
			<div class="col-lg-6" align="left">
				<h2>จัดการคนขับรถ</h2>
			</div>
			<div class="col-lg-6" align="right" style="padding:25px;">
				<form>
					<input type="text" ng-model='searchText' name="search" placeholder="Search" align="right">
				</form>
			</div>
		</div>
	</div>
	<br /><br />


	<div class="row ws-content" ng-controller="GETMessenger_join">
		<div ng-show="foo">
			<div class="row">
				<div class="container">
					{{myWelcome}}
					<div class="col-md-3 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<img src="https://cms.kapook.com/uploads/tag/1/thumb_991_5886cd3df28d4.jpg" class="img-responsive" width="300" height="300"><br />
					</div>
					<div class="col-md-9 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;" ng-repeat="descipt in myWelcome">
							<label for="sel1">ชื่อ-นามสกุล : {{descipt.name_surename}}</label><br /><br />
							<label for="sel1">เบอร์โทรศัพท์ : {{descipt.telnumber}}</label><br /><br />
							<label for="sel1">หมายเลขพนักงาน : {{descipt.employ_no}}</label><br /><br />
							<label for="sel1">ใบขับขี่เลขที่ : {{descipt.driver_license}}</label><br />
						</div>
						<div class="col-md-6 col-md-push-1 col-lg-5" style="margin-top:10px;margin-bottom:10px;padding:1px;">
							<label for="sel1">ชื่อในระบบ : knuing001</label><br /><br />
							<label for="sel1">ประเภทเจ้าของ Username : Truck Driver</label><br />
							<label for="sel1">ที่อยู่ : {{descipt.useraddress}}</label><br />
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="container">
			<div class="table-responsive-sm">
				<table class="table">
					<thead>
						<tr>
							<th>ชื่อ นามสกุล</th>
							<th>เบอร์โทรศัพท์</th>
							<th>ประเภทรถ</th>
							<th>หมายเลขทะเบียนรถ</th>
							<th>หมายเหตุ</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat='item in Messenger | filter:searchText'>
							<td>{{item.name_surename}}</td>
							<td>{{item.telnumber}}</td>
							<td>{{item.trucktype}}</td>
							<td>{{item.truckno}}</td>

							<td>
								<button type="button" class="btn btn-primary btn-sm" ng-click="openmessenger(item.noid)" ng-if="action === 'open'">ข้อมูลเฉพาะบุคคล</button>
								<button type="button" class="btn btn-danger btn-sm" ng-click="closemessenger()" ng-if="action === 'close'">ปิด</button>
							</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>



</div>