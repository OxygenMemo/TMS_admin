<!DOCTYPE html>
<html lang="en">
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
</head>
<body>
    <?php require('template/menu.php') ?>
    <br/>
    <div class="row">
    <div class="container" ng-app="myApp" ng-controller="main" ng-init="init()">
    <h2>จัดการกระจายแผนงานขนส่ง</h2><hr />
    <form name="myform">
        <div class="row">
            <div class="container">
                <div class="col-md-4" style="margin-top:10px;margin-bottom:10px;">
                    <label for="sel1">Shipment No. : </label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input name="shipmentno" type="text" class="form-control" ng-model="data.shipmentno" aria-describedby="basic-addon1" >
                    </div>
                </div>
                <div class="col-md-4" style="margin-top:10px;margin-bottom:10px;">
                    <label for="sel1">ชื่อคนขับรถ (Driver) : </label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
                        <select  class="form-control" id="sel1" name="driver" ng-model="data.driver" >
                        <option value="เลือกรายการ">เลือกรายการ</option>
                        <option ng-repeat='dest in NAMESURNAME' value="{{dest.noid}}">{{dest.name_surename}}</option>
                    </select>
                        
                    </div>
                </div>
                <div class="col-md-4" style="margin-top:10px;margin-bottom:10px;">
                    <label for="sel1">หมายเลขทะเบียนรถ (Truck No.): </label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></span>
                        <select  class="form-control" id="sel1" name="truckno" ng-model="data.truckno" >
                        <option value="เลือกรายการ">เลือกรายการ</option>
                        <option ng-repeat='dest in TRUCKNUMBER' value="{{dest.id}}">{{dest.truckno}}</option>
                    </select>
                    </div>
                </div>
            </div>
        </div>
    <hr />
    <div class="row">
        <div class="container">
            <div class="col-md-3" style="margin-top:10px;margin-bottom:10px;">
                <label for="sel1">Delivery No. : </label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></span>
                    <select class="form-control" id="sel1" name="deliveryno" ng-model="data.deliveryno" >
                        <option>Delivery No...</option>
                        <option value="1">T0132413E</option>
                        <option value="2">B1032564A</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">

                <label for="sel1">Order No. : </label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></span>
                    <select class="form-control" id="sel1" name="orderno" ng-model="data.orderno">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

            </div>
    <div class="col-md-6 col-md-push-2" style="margin-top:10px;margin-bottom:10px;">
    <label for="sel1">วันนัดการจัดส่ง (Due Date) : </label>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
        <input type="date" value="2018-02-22" class="form-control" aria-describedby="basic-addon1" name="dduedate" ng-model="data.dduedate">
    </div>
    </div>
    <div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;" >
        <label for="sel1">คลังสินค้าต้นทาง (Loading Station) : </label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></span>
            <select class="form-control" id="sel1" name="loading" ng-model="data.loading" >
                    <option value="เลือกรายการ">เลือกรายการ</option>
                    <option ng-repeat='dest in LOADDESTS' value="{{dest.id}}">{{dest.stationname}}</option>
                
            </select>
        </div>
    </div>
    <div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;" >
        <label for="sel1">จุดหมายปลายทาง (Destination Station) : </label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></span>
            <select  class="form-control" id="sel1" ng-model="data.destination" >
                    <option value="เลือกรายการ">เลือกรายการ</option>
                    <option ng-repeat='dest in DESTS' value="{{dest.id}}">{{dest.destinationname}}</option>
                
            </select>
        </div>
    </div>
    </div>
    </div>
        <div class="row">
            <div class="container">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" align="center">
                    <button class="btn btn-info" style="margin:5px;" font color="white" ng-click="formvalidation()" ng-if="action === 'add'">เพิ่มข้อมูล</button>
                    <button class="btn btn-info" style="margin:5px;" font color="white" ng-click="savevalue()" ng-if="action === 'edit'">แก้ไขข้อมูล</button>
                    <button type="reset" class="btn btn-warning" style="margin:5px;" font color="white">เคลียร์ข้อมูล</button>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
        </form>
        <hr />
        <div class="row ws-content">
            <div class="container">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Shipment No.</th>
                                <th>Driver</th>
                                <th>Truck No.</th>
                                <th>Delivery No.</th>
                                <th>Order No.</th>
                                <th>Due Date</th>
                                <th>Loading Station</th>
                                <th>Destination Station</th>
                                <th>command</th>
                            </tr>
                        </thead>
                        <tbody ng-repeat="x in TEMDATAS" style="padding-top:5px;">
                            <tr>
                                <td>{{x.shipmentno}}</td>
                                <td>{{x.driver}}</td>
                                <td>{{x.truckno}}</td>
                                <td>{{x.deliveryno}}</td>
                                <td>{{x.orderno}}</td>
                                <td>{{x.duedate}}</td>
                                <td>{{x.loading}}</td>
                                <td>{{x.destination}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" text color="white" ng-click="editvalue(x)">แก้ไข</button>
                                    <button type="button" class="close" aria-label="Close" style="margin:5px;" ng-click="deletevalue(x)">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <button type="button" class="btn btn-success" style="margin-top:5px;" font color="white" ng-click="savedatas()">SAVE</button>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        </div>
        </div>
        <script>
            var app = angular.module('myApp', []);
            app.controller('main', function($scope, $http) {
                $scope.TEMDATAS = []
                $scope.action = "add";
                let olddata = undefined;
                $scope.init = () => {
                    $scope.getLoadDest();
                    $scope.getDest();
                    $scope.getName();
                    $scope.getTruckNumber();
                    
                }
                $scope.formvalidation= ()=>{
                    var form = document.forms["myform"]//["shipmentno"].value;
                    if (form['shipmentno'].value == "") {

                        
                    }else if (form['driver'].value == ""){
                        
                    }else if (form['truckno'].value == ""){
                        
                    }else if (form['deliveryno'].value == ""){
                        
                    }else if (form['orderno'].value == ""){
                        
                    }else if (form['dduedate'].value == ""){
                        
                    }else if (form['loading'].value == ""){
                        
                    }else{
                        $scope.addData();
                    }
                }
                $scope.addData = () => {
                    let data = {
                        shipmentno:$scope.data.shipmentno,
                        driver:$scope.data.driver,
                        truckno:$scope.data.truckno,
                        deliveryno:$scope.data.deliveryno,
                        orderno:$scope.data.orderno,
                        dduedate:$scope.data.dduedate,
                        loading:$scope.data.loading,
                        destination:$scope.data.destination
                        }
                    $scope.TEMDATAS.push(data);
                    $scope.data=undefined;
                }
                
                $scope.getLoadDest = () => {
                    $http.get("http://119.59.122.157/tms/loadingstation")
                    .then(function(response) {
                        $scope.LOADDESTS = response.data;
                        
                    });
                }
                $scope.getDest = () => {
                    $http.get("http://119.59.122.157/tms/destination")
                    .then(function(response) {
                        $scope.DESTS = response.data; 
                    });
                }
                $scope.getName = () => {
                    $http.get("http://119.59.122.157/tms/get_name_surename")
                    .then(function(response) {
                        $scope.NAMESURNAME = response.data; 
                    });
                }
                $scope.getTruckNumber = () => {
                    $http.get("http://119.59.122.157/tms/get_truckno")
                    .then(function(response) {
                        $scope.TRUCKNUMBER = response.data; 
                    });
                }
                $scope.deletevalue = (data)=>{
                    $scope.TEMDATAS.splice($scope.TEMDATAS.indexOf(data),1);
                }
                $scope.editvalue = (data) =>{
                    $scope.action = "edit";
                    let x = {
                        shipmentno:data.shipmentno,
                        driver:data.driver,
                        truckno:data.truckno,
                        deliveryno:data.deliveryno,
                        orderno:data.orderno,
                        dduedate:data.dduedate,
                        loading:data.loading,
                        destination:data.destination
                    }
                    olddata = {
                        shipmentno:data.shipmentno,
                        driver:data.driver,
                        truckno:data.truckno,
                        deliveryno:data.deliveryno,
                        orderno:data.orderno,
                        dduedate:data.dduedate,
                        loading:data.loading,
                        destination:data.destination
                    }
                    $scope.data = x;
                    //$scope.data=undefined;
                }
                $scope.savevalue = ()=>{
                    $scope.deletevalue(olddata);
                    $scope.addData($scope.data);
                    $scope.action='add';
                }
                $scope.savedatas = () =>{
                    $http.post("http://119.59.122.157/tms/post_deliveryplan", $scope.TEMDATAS,
                     {headers: {'Content-Type': 'application/json'} })
                    .then(function (response) {
                        $scope.d= response.data;
                        console.log($scope.d);                     
                    });
                    console.log($scope.TEMDATAS=[]);
                }
                
               //http://119.59.122.157/tms/loadingstation
               /*
                data.shipmentno
                data.driver
                data.truckno
                data.deliveryno
                data.orderno
                data.dduedate
                data.loading
                data.destination
                */
            });
        </script>
</body>
</html>
