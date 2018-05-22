<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มคนขับรถ</title>
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
<div class="row">
	<div class="container" ng-app="myApp" ng-controller="POSTRegister" ng-init="Registers()">
	<h1>เพิ่มคนขับรถ</h1>
	<hr />
	<h3>ข้อมูลระบบ Log On</h3>
	<br />
	<div class="row">
		<div class="container">
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">username : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></span>
					<input ng-model="Register.username" id="username" type="text" class="form-control" placeholder="Username">
				</div>
				<br>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">Password : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></span>
					<input ng-model="Register.password" id="password" type="text" class="form-control" placeholder="Password">
				</div>
				<br>
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">ประเภทเจ้าของ Username : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
					<select ng-model="Register.usertype" id="usertype" class="form-control">
						<option>กรุณาเลือกประเภท...</option>
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
					<input ng-model="Register.expiredate" id="expiredate" type="date" class="form-control">
				</div>
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
				<label for="sel1">ชื่อ-นามสกุล : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
					<input ng-model="Register.name_surename" id="name_surename" type="text" class="form-control" placeholder="ชื่อ">
				</div>

				<br />
				<label for="sel1">เบอร์โทรศัพท์ : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></span>
					<input ng-model="Register.telnumber" id="telnumber" type="text" class="form-control" placeholder="เบอร์โทรศัพท์">
				</div>
				<br />
				<label for="sel1">หมายเลขพนักงาน : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span></span>
					<input ng-model="Register.employ_no" id="employ_no" type="text" class="form-control" placeholder="หมายเลขพนักงาน">
				</div>
				<br />
				<label for="sel1">ใบขับขี่เลขที่ : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></span>
					<input ng-model="Register.driver_license" id="driver_license" type="text" class="form-control" placeholder="ใบขับขี่เลขที่">
				</div>
				<br />
			</div>
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">ที่อยู่ : </label>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></span>
					<textarea ng-model="Register.useraddress" id="useraddress" type="text" class="form-control" placeholder="ที่อยู่" rows="5"></textarea>
				</div>
				<br />
				<label for="sel1">รูปภาพ : </label>
				<div class="input-group">
					<input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple />
				</div>
				<br />
				<div class="row" id="image_preview"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<input ng-click="Registers()" type="submit" class="btn btn-success" value="ตกลง" />
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
</div>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('POSTRegister', function ($scope, $http) {
	$scope.Register = {};
	$scope.Registers = function () {
		
		console.dir($scope.Register);
		$http.post('http://119.59.122.157/tms/Register', $scope.Register).then(function successCallback(response) {
			alert(response.data.data.text);
			
		}, function errorCallback(err) {
			console.log(err);
		});
		$scope.Register = {};
	};
});
</script>
</body>
</html>
