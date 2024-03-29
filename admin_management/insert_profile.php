<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="../css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../plugins/images/logo.png" style="width:200px" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!-- <span class="logo-text">
                            <img src="../plugins/images/logo-text.png" alt="homepage" />
                        </span> -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium"><?php  echo $_SESSION["ten"] ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Trang chủ</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="list_profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Danh sách giáo viên</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Danh sách phân lớp</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Quản lý tài khoản  </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="students.php"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Quản lý học sinh</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                        <a class="btn d-grid btn-danger sidebar-link waves-effect waves-dark sidebar-link text-white" href="index.php"
                                aria-expanded="false">
                                Đăng xuất
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Thêm giáo viên</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                           
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2">User Name</h4>
                                        <h5 class="text-white mt-2">info@myadmin.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                               
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <form class="form-horizontal form-material" method = "POST">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Mã giáo viên </label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name ="idGV" type="text" placeholder = "GV_T_01"
                                                class="form-control p-0 border-0"> 
                                        </div>
                                        <?php 
                                         $tb = "";
                                         $check = $_POST["ten"];
                                        
                                         if(empty($check)&& isset($_POST["submit"]) && isset($_POST["submit"])){
                                             $tb = '<span style = "color: red"> * Vui lòng nhập Mã giáo viên !</span>';
                                         }
                                        echo $tb ?>

                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Họ và tên </label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name ="ten" type="text" placeholder = "Nguyễn Văn A"
                                                class="form-control p-0 border-0"> 
                                        </div>
                                        <?php 
                                         $tb = "";
                                         $check = $_POST["ten"];
                                        
                                         if(empty($check)&& isset($_POST["submit"]) && isset($_POST["submit"])){
                                             $tb = '<span style = "color: red"> * Vui lòng nhập Họ và tên !</span>';
                                         }
                                        echo $tb ?>

                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Địa chỉ</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name ="diachi" type="text" placeholder = "Đông Anh"
                                                class="form-control p-0 border-0"> 
                                        </div>
                                        <?php 
                                         $tb = "";
                                         $check = $_POST["diachi"];
                                         if(empty($check)&& isset($_POST["submit"])){
                                             $tb = '<span style = "color: red; padding-top: 5px"> * Vui lòng nhập Địa Chỉ !</span>';
                                         }
                                        echo $tb ?>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Ngày sinh</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name ="ngaysinh" type="date" placeholder = "25/09/2002"
                                                class="form-control p-0 border-0"> 
                                        </div>
                                        <?php 
                                         $tb = "";
                                         $check = $_POST["ngaysinh"];
                                         if(empty($check)&& isset($_POST["submit"])){
                                             $tb = '<span style = "color: red; padding-top: 5px"> * Vui lòng chọn Ngày Sinh !</span>';
                                         }
                                        echo $tb ?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Giới tính</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select name= "gioitinh" class="form-select shadow-none p-0 border-0 form-control-line">
                                                <option value = "Nam">Nam</option>
                                                <option value = "Nữ">Nữ</option>
                                                <option value = "Khác">Khác</option>
                                            </select>
                                        </div>
                                        <?php 
                                         $tb = "";
                                         $check = $_POST["ngaysinh"];
                                         if(empty($check)&& isset($_POST["submit"])){
                                             $tb = '<span style = "color: red; padding-top: 5px"> * Vui lòng chọn Ngày Sinh !</span>';
                                         }
                                        echo $tb ?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Căn cước công dân</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name ="cccd" type="text" placeholder = "123456789012"
                                                class="form-control p-0 border-0">
                                        </div>
                                        <?php 
                                         $tb = "";
                                         $check = $_POST["cccd"];
                                         if(empty($check)&& isset($_POST["submit"])){
                                             $tb = '<span style = "color: red; padding-top: 5px"> * Vui lòng nhập Căn cước công dân !</span>';
                                         }
                                        echo $tb ?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name ="email" type="email" placeholder="....@admin.com"
                                                class="form-control p-0 border-0" name="example-email"
                                                id="example-email">
                                        </div>
                                        <?php 
                                         $tb = "";
                                         $check = $_POST["email"];
                                         if(empty($check)&& isset($_POST["submit"])){
                                             $tb = '<span style = "color: red; padding-top: 5px"> * Vui lòng nhập Email !</span>';
                                         }
                                        echo $tb ?>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Số điện thoại</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name ="sdt" type="text" placeholder = "0123456789" class="form-control p-0 border-0">
                                        </div>
                                        <?php 
                                         $tb = "";
                                         $check = $_POST["sdt"];
                                         if(empty($check) && isset($_POST["submit"])){
                                             $tb = '<span style = "color: red; padding-top: 5px"> * Vui lòng nhập Số điện thoại !</span>';
                                         }
                                        echo $tb ?>
                                        
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Môn dạy</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select name= "mon" class="form-select shadow-none p-0 border-0 form-control-line">
                                                <option value = "1">Toán</option>
                                                <option value = "2">Văn</option>
                                                <option value = "3">Anh</option>
                                                <option value = "4">Lý</option>
                                                <option value = "5">Hóa</option>
                                                <option value = "6">Sinh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button type="submit" name = "submit" class="btn btn-success">Cập nhật</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- PHP logic -->
            <!-- ============================================================== -->
            <!-- PhP logic start -->
            <?php 
            
            require_once 'conn.php';

                // if ($conn->connect_error) {
                // echo "false";}
                // else {
                //     echo "true";
                // }
                $idGV = $_POST["idGV"];
                $ten = $_POST["ten"];
                $diachi = $_POST["diachi"];
                $ngaysinh = $_POST["ngaysinh"];
                $gioitinh = $_POST["gioitinh"];
                $cccd = $_POST["cccd"];
                $email = $_POST["email"];
                $sdt = $_POST["sdt"];
                $mon = $_POST["mon"];

                if(!empty($ten) && !empty($diachi) && !empty($ngaysinh) && !empty( $cccd) && !empty($sdt) && !empty( $email) && !empty($mon) && isset($_POST["submit"])){
                    $sql = "INSERT INTO `giaovien`(`idGV`, `idMonHoc`, `HoTen`, `NgaySinh`, `GioiTinh`, `CCCD`, `SDT`, `Email`, `DiaChi`) VALUES ('$idGV', '$mon', '$ten','$ngaysinh','$gioitinh','$cccd', '$sdt',  
                     '$email','$diachi')";
                    $sql_acc = "INSERT INTO `accountgv`(`id_gv`, `account`, `password`) VALUES ('$idGV','$ten','123456')";
                    if ($conn->query($sql) === TRUE) {
                        $thongbao = "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    if ($conn->query($sql_acc) === TRUE) {
                        $thongbao = "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
            ?>
            <!-- PhP logic end -->
            <!-- ============================================================== -->
            <!-- End PHP logic -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.js"></script>
</body>

</html>