<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ประวัติขนส่ง</title>
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
<div ng-app="myApp" ng-controller="GETMessenger">
	<div class="container" >
	<h2>ข้อมูลเฉพาะคันรถ</h2>
		<br>
		<div class="media" style="border: 1px solid black;padding:10px;border-radius:5px;">
			<div class="col-sm-3">
				<img srcset="http://www.isuzu-truck.com/wp-content/uploads/2017/09/ISUZU-FVZ.jpg" sizes="min-width: 400px;" style="max-width:80%;max-height:40%;box-sizing:border-box;padding: 1em;">
			</div>
			<div class="col-sm-9">
				<div class="row">
					<div class="col-sm-2" style="">
					</div>
					<div class="col-sm-5" style="">

						<h4>
							ทะเบียนรถ :<i>ทบ 1302</i><br /><br />
							จังหวัด :<i>ชลบุรี</i>							
						</h4>
					</div>
					<div style="margin-top:20px;">
					<a href="<?= base_url() ?>index.php/TMS_admin/Truck_information" class="btn btn-success" role="button">กลับไปยังหน้า จัดการรถบรรทุก</a>
					</div>
				</div>
				<hr />

				<div class="row">
					<div class="col-sm-2" style="">
					</div>
					<div class="col-sm-5" style="">
						น้ำหนักตัวรถ (ตัน) : 5270 KG.
					</div>
					<div class="col-sm-5" style="">
						<p>ลักษณะยานพาหนะ : สีขาว</p>
					</div>
				</div>
			</div>
		</div>

		<br>

	</div>
</div>

</body>
</html>