<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ประวัติขนส่ง</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<?= link_tag('application/css/Search.css'); ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<?php require('template/menu.php') ?>
<br />
<div ng-app="myApp" ng-controller="GETHistory">
	<div class="row">
		<div class="container">
			<div class="col-lg-6" align="left">
				<h2>ประวัติขนส่ง</h2>
			</div>
			<div class="col-lg-6" align="right" style="padding:25px;">
				<form>
					<input type="text" ng-model='searchText' name="search" placeholder="Search" align="right">
				</form>
			</div>
		</div>
	</div>
	<br /><br />

	<div>
		<div ng-show="his">
			<h3>ข้อมูลส่วนผู้ขับรถ</h3>
			<br />
			<div class="row">
				<div class="container">
					<div class="col-md-2 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<img src="https://cms.kapook.com/uploads/tag/1/thumb_991_5886cd3df28d4.jpg" class="img-responsive" width="300" height="300"><br />
					</div>
					<div class="col-md-10 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
							<label for="sel1">ชื่อคนขับรถ (Driver Name) : คนึง โรจน์เพียรธรรม</label><br /><br />
							<label for="sel1">หมายเลขทะเบียนรถ (car Registration) : บพ 9999</label><br />
						</div>
						<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
							<label for="sel1">สถานะ (Status) : รับการจ่ายงานจาก Admin สำเร็จแล้ว</label><br />
						</div>

					</div>
				</div>
			</div>

			<hr />

			<h3>ใบคำสั่งการจัดส่ง</h3>
			<br />

			<div class="row">
				<div class="container">
					<div class="col-md-2 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">

					</div>
					<div class="col-md-10 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
							<label for="sel1">หมายเลขการจัดส่ง (Delivery No) : T0132413E</label><br /><br />
							<label for="sel1">วันที่จัดส่ง (Delivery Date) : 20 มีนาคม 2561</label><br /><br />
							<label for="sel1">คลังสินค้าต้นทาง (Carco Station) : แหลมฉบัง</label><br />
						</div>
						<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
							<label for="sel1">หมายเลขใบสั่งซื้อ (Order No) : SHP11101110</label><br /><br />
							<label for="sel1">วันครบกำหนดการจัดส่ง (Due Date) : 20 เมษายน 2561</label><br /><br />
							<label for="sel1">จุดหมายปลายทาง (Destination Station) : BigC</label><br />
						</div>

					</div>
				</div>
			</div>

		</div>

		<br />
		<div class="row ws-content">
			<div class="container">
				<table class="table">
					<thead>
						<tr>
							<th>สถานะ</th>
							<th>หมายเลขการจัดส่ง</th>
							<th>คนขับรถ</th>
							<th>วันที่ส่ง</th>
							<!--th>หมายเหตุ</th-->
						</tr>
					</thead>
					<tbody>
						<tr>
						<tr ng-repeat='item in history | filter:searchText'>
							<td>{{item.shipmentstatus}}</td>
							<td>{{item.shipmentno}}</td>
							<td>{{item.name_surename}}</td>
							<td>{{item.deliverydate}}</td>
							<!--<td>
								<button type="button" class="btn btn-primary btn-sm" ng-click="openhistory()" ng-if="action === 'open'">รายละเอียดการจัดส่ง</button>
								<button type="button" class="btn btn-danger btn-sm" ng-click="closehistory()" ng-if="action === 'close'">ปิด</button>
							</td>-->
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('GETHistory', function ($scope, $http) {
	//get history
	$scope.action = 'open';
	$scope.noid = "";
	$http({
		method: "GET",
		url: "http://119.59.122.157/tms/history"
	}).then(function mySuccess(response) {
		$scope.history = response.data;
	}, function myError(response) {
		$scope.history = response.statusText;
	});
	$scope.openhistory = function () {
		$scope.his = true;
		// get history id
		//console.log($scope.his);
		$scope.action = 'close';
	}
	$scope.closehistory = function () {
		$scope.his = false;
		//console.log($scope.his);
		$scope.action = 'open';
	}
});
</script>
</body>
</html>
