<style>
.navbar {
    background-color: #1e1f21;
    border-color: #1e1f21;
}
.navbar-default .navbar-brand {
    color: #white;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
    color: #5E5E5E;
}
/* link */
.navbar-default .navbar-nav > li > a {
    color: #001077;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
    color: #333;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
    color: #555;
    background-color: #E7E7E7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
    color: #555;
    background-color: #D5D5D5;
}
/* caret */
.navbar-default .navbar-nav > .dropdown > a .caret {
    border-top-color: #777;
    border-bottom-color: #777;
}
.navbar-default .navbar-nav > .dropdown > a:hover .caret,
.navbar-default .navbar-nav > .dropdown > a:focus .caret {
    border-top-color: #333;
    border-bottom-color: #333;
}
.navbar-default .navbar-nav > .open > a .caret,
.navbar-default .navbar-nav > .open > a:hover .caret,
.navbar-default .navbar-nav > .open > a:focus .caret {
    border-top-color: #555;
    border-bottom-color: #555;
}
/* mobile version */
.navbar-default .navbar-toggle {
    border-color: #DDD;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
    background-color: #DDD;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #CCC;
}
@media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        color: #777;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #333;
    }
}
</style>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">TMS ADMIN</a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
        </div>
        <div class="collapse navbar-collapse ng-scope" id="menu" data-ng-controller="logOut">
            <ul class="nav navbar-nav">
            <li><a href="<?= base_url() ?>index.php/TMS_admin/home" style="text-color:white;">จัดการกระจายแผนงานขนส่ง</a></li>
            <li><a href="<?= base_url() ?>index.php/TMS_admin/Person" style="text-color:white;">จัดการคนขับรถ</a></li>
            <li><a href="<?= base_url() ?>index.php/TMS_admin/Truck_information" style="text-color:white;">จัดการรถบรรทุก</a></li>
            <li><a href="<?= base_url() ?>index.php/TMS_admin/History" style="text-color:white;">ประวัติขนส่ง</a></li>
            <li><a href="http://119.59.122.157:8082" style="text-color:white;">Tracking</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <?php
                if (empty($_SESSION['login'])) {
                    ?>

                    <li><a href="<?= base_url() ?>index.php/TMS_admin/login"><i class="fa fa-share"></i> กรุณา log In !</a></li>
                    <?php
                } else {
                    ?>
                    <li> <a href="#">ยินดีต้อนรับ : <b><?php echo $_SESSION['username']; ?></b></a></li>

                    <li><a href="<?= base_url() ?>index.php/TMS_admin/logout" style="text-color:white;">logout</a></li>
                    <?php
                }
                ?>

            </ul>
        </div>
    </div>
</nav>