<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>จัดการรถบรรทุก</title>
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
<br/>
<div ng-app="myApp">
    <div ng-controller="TruckInfo" ng-init="init()">
        <div class="row">
            <div class="container">
                <div class="col-lg-6" align="left">
                    <h2>จัดการรถบรรทุก</h2><br/>
                    <a href="<?= base_url() ?>index.php/TMS_admin/gpsdevice" class="btn btn-info" role="button">ตาราง
                        GPS device</a>
                    <button type="button" class="btn btn-info" text color="white" ng-click="openData()"
                            ng-if="action === 'open'">+&nbsp;เพิ่มข้อมูลรถ
                    </button>
                    <button type="button" class="btn btn-danger" text color="white" ng-click="closeData()"
                            ng-if="action === 'close'">ปิด
                    </button>
                </div>
                <div class="col-lg-6" align="right" style="padding:25px;">
                    <form>
                        <input type="text" ng-model='searchText' placeholder="Search" align="right">
                    </form>
                </div>
            </div>
        </div>
        <div ng-show="truckInsert">
            <div class="row ws-content">
                <div class="container">
                    <h3>เพิ่มข้อมูลรถ</h3>
                    <div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
                        <label for="sel1">ทะเบียนรถ : </label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-list" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="เลขที่" aria-describedby="basic-addon1" ng-model="dataq.truckno">
                        </div>
                        <br/>
                        <label for="sel1">จังหวัด : </label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="จังหวัด" aria-describedby="basic-addon1" ng-model="dataq.province">
                        </div>
                        <br/>
                        <label for="sel1">gpsdevice : </label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="gpsdevice" aria-describedby="basic-addon1" ng-model="dataq.gpsdevice">
                        </div>
                        <br/>
                    </div>
                    <div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
                        <label for="sel1">น้ำหนักตัวรถ (ตัน) : </label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="น้ำหนักตัวรถ (ตัน)" aria-describedby="basic-addon1" ng-model="dataq.weight">
                        </div>
                        <br/>
                        <label for="sel1">ประเภทรถ : </label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="ประเภทรถ" aria-describedby="basic-addon1" ng-model="dataq.trucktype">
                        </div>
                        <br/>
                        <label for="sel1">รูปภาพ : </label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-picture" aria-hidden="true"></span></span>
                            <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
                        </div>
                        <br/>
                        <div class="row" id="image_preview"></div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4" align="center">
                        <button type="submit" class="btn btn-success" style="margin:5px;" ng-click="SaveInserttruck();">ตกลง</button>
                        <button type="reset" class="btn btn-warning" style="margin:5px;" font color="white">เคลียร์ข้อมูล</button>
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>
        </div>
        <div ng-show="truckEdit" ng-repeat="item in TRUCKDATAS">
            <div class="row ws-content">
                <div class="container">
                    <h3>แก้ไขข้อมูลรถ</h3>
					<div >
						<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
							<label for="sel1">ทะเบียนรถ : </label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-list" aria-hidden="true"></span></span>
								<input type="text" class="form-control" placeholder="เลขที่" aria-describedby="basic-addon1" ng-model="item.truckno">
								<input type="hidden" class="form-control"  aria-describedby="basic-addon1" ng-model="item.id" >
							</div>
							<br/>
							<label for="sel1">จังหวัด : </label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></span>
								<input type="text" class="form-control" placeholder="จังหวัด"aria-describedby="basic-addon1" ng-model="item.province">
							</div>
							<br/>
							<label for="sel1">gpsdevice : </label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
								<input type="text" class="form-control" placeholder="gpsdevice" aria-describedby="basic-addon1" ng-model="item.gpsdevice">
							</div>
							<br/>
						</div>
						<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
							<label for="sel1">น้ำหนักตัวรถ (ตัน) : </label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span></span>
								<input type="text" class="form-control" placeholder="น้ำหนักตัวรถ (ตัน)" aria-describedby="basic-addon1" ng-model="item.weight">
							</div>
							<br/>
							<label for="sel1">ประเภทรถ : </label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span></span>
								<input type="text" class="form-control" placeholder="ประเภทรถ" aria-describedby="basic-addon1" ng-model="item.trucktype">
							</div>
							<br/>
							<label for="sel1">รูปภาพ : </label>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-picture" aria-hidden="true"></span></span>
								<input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
							</div>
							<br/>
							<div class="row" id="image_preview">
							
							</div>
						</div>
					</div>
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4" align="center">
                        <button type="button" class="btn btn-success" ng-click="SaveEdittruck(item)">ตกลง</button>
                        <button type="reset" class="btn btn-warning" style="margin:5px;" font color="white">เคลียร์ข้อมูล</button>
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>
        </div>
        <div ng-show="truckDetails">
            <div class="container" ng-repeat="item in TRUCKMASID">
                <h2>ข้อมูลเฉพาะคันรถ</h2>
                <br>
                <div class="media" style="border: 1px solid black;padding:10px;border-radius:5px;">
                    <div class="col-sm-3">
                        <!--{{item.truckpic}}-->
                        <img srcset="http://www.isuzu-truck.com/wp-content/uploads/2017/09/ISUZU-FVZ.jpg"
                             sizes="min-width: 400px;"
                             style="max-width:80%;max-height:40%;box-sizing:border-box;padding: 1em;">
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-2" style="">
                            </div>
                            <div class="col-sm-5" style="">

                                <h4>
                                    ทะเบียนรถ :<i>{{item.truckno}}</i><br/><br/>
                                    จังหวัด :<i>{{item.province}}</i>
                                </h4>
                            </div>
                            <div class="col-sm-5" style="">
                                <h4>
                                    GPS Device :<i>{{item.gpsdevice}}</i><br/><br/>
                                </h4>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-sm-2" style="">
                            </div>
                            <div class="col-sm-5" style="">
                                น้ำหนักตัวรถ (ตัน) : {{item.weight}}
                            </div>
                            <div class="col-sm-5" style="">
                                <p>ประเภทของรถ : {{item.trucktype}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

            </div>
        </div>
        <br/>
        <div class="row">
            <div class="container">
                <table class="table">
                    <!--method post-->
                    <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ทะเบียนรถ</th>
                        <th>ประเภทของรถ</th>
                        <th>gpsdevice</th>
                        <th>หมายเหตุ</th>
                    </tr>
                    </thead>
                    <tbody ng-repeat="item in truck | filter:searchText" style="padding-top:5px;">
                    <tr>
                        <td>{{item.id}}</td>
                        <td>{{item.truckno}}</td>
                        <td>{{item.trucktype}}</td>
                        <td>{{item.gpsdevice}}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" ng-click="OpenRowOftruck(item.id)"
                                    ng-if="action === 'open'">รายละเอียดตัวรถ
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" ng-click="CloseRowOftruck()"
                                    ng-if="action === 'close'">ปิด
                            </button>
                            <button type="button" class="btn btn-warning btn-sm" ng-click="EditRowOftruck(item.id)"
                                    ng-if="action === 'open'">แก้ไข
                            </button>
                            <button type="button" class="close" aria-label="Close" ng-click="DelRowOftruckmas(item.id)"
                                    style="margin:5px;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
<script>
    var app = angular.module('myApp', []);
    app.controller('TruckInfo', function ($scope, $http,$parse) {
        $scope.data = "";
		$scope.dataq = {};
        $scope.init = () => {

            $scope.getName();
        }
        $http({
            method: "GET",
            url: "http://119.59.122.157/tms/truck_mas"
        }).then(function mySuccess(response) {
            $scope.truck = response.data;
        }, function myError(response) {
            $scope.truck = response.statusText;
        });
        $scope.getName = () =>
        {
            $http.get("http://119.59.122.157/tms/get_name_surename")
                .then(function (response) {
                    $scope.NAMESURNAME = response.data;
                });
        }
        $scope.action = 'open';
        $scope.id = "";
        $scope.openData = function () {
            $scope.truckInsert = true;
            $scope.action = 'close';
        }
        $scope.closeData = function () {
            $scope.truckInsert = false;
            $scope.truckEdit = false;
            $scope.truckDetails = false;
            $scope.action = 'open';
        }
        $scope.SaveInserttruck = function () {
            console.log($scope.dataq);
            $http.post("http://119.59.122.157/tms/insert_truck_mas", $scope.dataq,{headers: {'Content-Type': 'application/json'} }).then(function (response) {
                $scope.d= response.data;
                console.log($scope.d);
				$http({
				method: "GET",
				url: "http://119.59.122.157/tms/truck_mas"
				}).then(function mySuccess(response) {
					$scope.truck = response.data;
				}, function myError(response) {
					$scope.truck = response.statusText;
				});
            });
			$scope.dataq = {};
            $scope.truckInsert = false;
			$scope.truckEdit = false;
            $scope.truckDetails = false;
            $scope.action = 'open';
        }
		$scope.SaveEdittruck = function (item) {
            console.log(item);
            $http.put("http://119.59.122.157/tms/update_truck_mas",item,{headers: {'Content-Type': 'application/json'} }).then(function (response) {
                $scope.d= response.data;
                console.log($scope.d);
				$http({
				method: "GET",
				url: "http://119.59.122.157/tms/truck_mas"
				}).then(function mySuccess(response) {
					$scope.truck = response.data;
				}, function myError(response) {
					$scope.truck = response.statusText;
				});
            });
			
            $scope.truckInsert = false;
			$scope.truckEdit = false;
            $scope.truckDetails = false;
            $scope.action = 'open';
        }

        $scope.OpenRowOftruck = function (id) {
            console.log(id);
            $http.get("http://119.59.122.157/tms/get_truck_mas_id" + id).then(function (response) {
                $scope.TRUCKMASID = response.data;
            });
            $scope.truckDetails = true;
            $scope.action = 'close';
        }
        $scope.CloseRowOftruck = function () {
            $scope.truckInsert = false;
            $scope.truckEdit = false;
            $scope.truckDetails = false;
            $scope.action = 'open';
        }
        $scope.EditRowOftruck = function (id) {
            console.log(id);
            $scope.truckEdit = true;
            $scope.action = 'close';
			$http.get("http://119.59.122.157/tms/get_truck_mas_id" + id).then(function (response) {
                $scope.TRUCKDATAS = response.data;
            });
        }
        $scope.DelRowOftruckmas = function (id) {
            console.log(id);
            var txt;
            var r = confirm("คุณแน่ใจว่าจะลบรถคันนี้ !!");
            if (r == true) {
                txt = "You pressed OK!";
				$http.delete("http://119.59.122.157/tms/delete_truck/" + id).then(function (response) {
                $scope.TRUCKDEL = response.data;
				$http({
					method: "GET",
					url: "http://119.59.122.157/tms/truck_mas"
				}).then(function mySuccess(response) {
					$scope.truck = response.data;
				}, function myError(response) {
					$scope.truck = response.statusText;
				});
            	});
            } else {
                txt = "You pressed Cancel!";
            }
        }
    });

    function preview_images() {
        var total_file = document.getElementById("images").files.length;
        for (var i = 0; i < total_file; i++) {
            $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
        }
    }
</script>
</body>
</html>
