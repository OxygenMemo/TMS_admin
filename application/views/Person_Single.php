﻿<h2>ข้อมูลเฉพาะบุคคล​</h2>

<div class="row">
	<div class="container">
		<div class="col-md-3 col-md-push-1" style="border: 1px solid black;padding:10px;border-radius:5px;">
			<img src="https://cms.kapook.com/uploads/tag/1/thumb_991_5886cd3df28d4.jpg" class="img-responsive" width="300" height="300"><br />
		</div>
		<div class="col-md-9 col-md-push-1" style="margin-top:10px;margin-bottom:10px;" ng-app="myApp" ng-controller="GETMessenger_id">
			<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
				<label for="sel1">ชื่อ : คนึง</label><br /><br />
				<label for="sel1">นามสกุล : โรจน์เพียรธรรม</label><br /><br />
				<label for="sel1">เบอร์โทรศัพท์ : 0999999999</label><br /><br />
				<label for="sel1">หมายเลขพนักงาน : ST000011</label><br /><br />
				<label for="sel1">ใบขับขี่เลขที่ : 59001111</label><br />
			</div>
			<div class="col-md-6 col-md-push-1 col-lg-5" style="margin-top:10px;margin-bottom:10px;padding:1px;">
				<label for="sel1">ชื่อในระบบ : knuing001</label><br /><br />
				<label for="sel1">ประเภทเจ้าของ Username : Truck Driver</label><br />
				<label for="sel1">ที่อยู่ : 219 ถ.สุขุทวิท ต.แสนสุข เมือง อำเภอเมืองชลบุรี ชลบุรี 20130</label><br />
			</div>

		</div>
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" align="center">
			<button type="submit" class="btn btn-default" style="margin:5px;"> @Html.ActionLink("กลับไปยังหน้า รายชื่อในระบบทั้งหมด", "Person", "Admin_manage", new { @style = "color:#4d4d33;" })</button>
		</div>
		<div class="col-sm-4">
			<button type="button" class="btn btn-primary" style="margin:5px;">@Html.ActionLink("แก้ไขข้อมูล", "Person_Edit", "Admin_manage", new { @style = "color:white;" })</button>
		</div>
	</div>
</div>

<script>
	app.controller('GETMessenger_join', function ($scope, $http) {
		$scope.noid = {}
		$scope.TESTS = function To_Messenger_id(noid) {
			$scope.tid = noid;
			$http.get("http://119.59.122.157/tms/Messenger/" + $scope.tid).then(function (response) {
				$scope.myWelcome = response.data;
			});
		};
		$scope.isEditData1 = false;
		$scope.setAdddata1 = function () {
			if ($scope.isEditData1 === 'false') {
				$scope.isEditData1 = true;
			}
			if ($scope.isEditData1 === 'true') {
				$scope.isEditData1 = false;
			}
			else {
				$scope.isEditData1 = false;
			}
		};
	});
</script>

<div class="container" ng-app="myApp" ng-controller="GETMessenger_join" ng-init="TESTS()">
	{{myWelcome}}
</div>