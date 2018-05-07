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
		<div ng-show="editformMessenger">	
	<div class="row">
		<div class="container">
		<h1>แก้ไขข้อมูลคนขับรถ</h1>
		<hr />
		<h3>ข้อมูลระบบ Log On</h3>
		<br />
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

	
	<br />
	<div class="row">
		<div class="container">
			<h3>ข้อมูลผู้ใช้ในระบบ ผู้ขับรถ</h3>
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
				<button type="reset" class="btn btn-warning" style="margin:5px;" font color="white">เคลียร์ข้อมูล</button>
			</div>
			<div class="col-lg-4"></div>
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
								<button type="button" class="btn btn-warning btn-sm" ng-click="editmessenger(item.id)" ng-if="action === 'open'">แก้ไข</button>
								<button type="button" class="close" aria-label="Close" ng-click="delmessenger(item.noid)" style="margin:5px;">
									<span aria-hidden="true">&times;</span>
								</button>
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
		$scope.editformMessenger = false;
		//console.log($scope.foo);
		$scope.action = 'open';
	}
	$scope.editmessenger = function () {
	$scope.editformMessenger = true;
	$scope.action = 'close';
	}

	$scope.delmessenger = function (noid) {
		console.log(noid);
		var txt;
		var r = confirm("คุณแน่ใจว่าจะลบรถคันนี้ !!");
		if (r == true) {
			$http.delete("http://119.59.122.157/tms/Messenger" + noid).then(function (response) {
			$scope.myWelcome = response.data;
			alert.txt = response.data;
			});
			//txt = "You pressed OK!";
		} else {
			alert.txt = "You pressed Cancel!";
		}
	}
	});
</script>
</body>
<html>