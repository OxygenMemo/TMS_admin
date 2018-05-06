<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>GPS Device</title>
   
</head>
<body>
<?php require('template/menu.php') ?>
<div class="row">
    <div class="container" ng-app="myApp" ng-controller="GETGPS_DATA_devices">
		<h3>ตาราง GPS device</h3>
        <div><br />
        <a href="<?= base_url() ?>index.php/TMS_admin/truck_information" class="btn btn-info" role="button">กลับไปยังหน้าจัดการรถบรรทุก</a>
        </div><br />
			<table class="table">
			<!--method get-->
				<thead>
					<tr>
					<th>id</th>
					<th>description</th>
					<th>iconType</th>
					<th>name</th>
					<th>uniqueId</th>
					</tr>
			    </thead>
				<tbody ng-repeat="item in Messenger" style="padding-top:5px;">
					<tr>
					<td>{{item.id}}</td>
					<td>{{item.description}}</td>
					<td>{{item.iconType}}</td>
					<td>{{item.name}}</td>
					<td>{{item.uniqueId}}</td>
					</tr>
				</tbody>
			</table>
	</div>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('GETGPS_DATA_devices', function ($scope, $http) {
	$http({
		method: "GET",
		url: "http://119.59.122.157/tms/devices"
	}).then(function mySuccess(response) {
		$scope.Messenger = response.data;
	}, function myError(response) {
		$scope.Messenger = response.statusText;
	});
});
</script>
</body>
</html>