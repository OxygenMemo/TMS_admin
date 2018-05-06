<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>จัดการคนขับรถ</title>
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
<div ng-app="myApp">
	<div class="row">
		<div class="container">
			<div class="col-lg-6" align="left">
				<h2>จัดการคนขับรถ</h2><br/>
				<a href="<?= base_url() ?>index.php/TMS_admin/Person_Insert" class="btn btn-info" role="button">เพิ่มคนขับรถ</a>
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
					
					<div class="col-md-3 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<img src="https://cms.kapook.com/uploads/tag/1/thumb_991_5886cd3df28d4.jpg" class="img-responsive" width="300" height="300"><br />
					</div>
					<div class="col-md-9 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;" ng-repeat="descipt in myWelcome">
							<label for="sel1">ชื่อ-นามสกุล : {{descipt.name_surename}}</label><br /><br />
							<label for="sel1">เบอร์โทรศัพท์ : {{descipt.telnumber}}</label><br /><br />
							<label for="sel1">ขับรถหมายเลขทะเบียน : {{descipt.truckno}}</label><br /><br />
							<label for="sel1">ที่อยู่ : {{descipt.useraddress}}</label><br />
							
						</div>
						<div class="col-md-6 col-md-push-1 col-lg-5" style="margin-top:10px;margin-bottom:10px;padding:1px;">
							<label for="sel1">ชื่อในระบบ : {{descipt.username}}</label><br /><br />
							<label for="sel1">หมายเลขพนักงาน : {{descipt.employ_no}}</label><br /><br />
							<label for="sel1">ใบขับขี่เลขที่ : {{descipt.driver_license}}</label><br />
							
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
<script>
    var app = angular.module('myApp', []);
    app.controller('GETMessenger_join', function ($scope, $http) {
		$http({
		method: "GET",
		url: "http://119.59.122.157/tms/Messenger_join"
	}).then(function mySuccess(response) {
		$scope.Messenger = response.data;
	}, function myError(response) {
		$scope.Messenger = response.statusText;
	});
	$scope.action = 'open';
	$scope.noid = "";
	$scope.openmessenger = function (noid) {
		//console.log(noid);
		$scope.foo = true;
		$http.get("http://119.59.122.157/tms/messenger_jjj" + noid).then(function (response) {
			$scope.myWelcome = response.data;
		});
		//console.log($scope.foo);
		$scope.action = 'close';
	}
	$scope.closemessenger = function () {
		$scope.foo = false;
		//console.log($scope.foo);
		$scope.action = 'open';
	}
	});
</script>
</body>
<html>