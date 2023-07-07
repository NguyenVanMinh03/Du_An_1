<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
    

      <!-- Messages Dropdown Menu -->
   
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/tongquan_admin" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Quản Trị Website</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản Trị Danh Mục              
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="/add_categories" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Categories </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/list_categories" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Categories</p>
                </a>
              </li>
            
              
             
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản Trị Sản Phẩm              
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="/add_product" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/list_product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Product</p>
                </a>
              </li>
            
              
             
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản Trị User             
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="/dangky" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/list_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List User</p>
                </a>
              </li>
            
              
             
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản Trị Blog              
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="/add_blog" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/list_blog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Blog</p>
                </a>
              </li>
            
              
             
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản Trị Comment              
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                
              <li class="nav-item">
                <a href="/list_comment" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Comment</p>
                </a>
              </li>
            
              
             
            </ul>
            
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản Trị Đơn Hàng             
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="/list_oder" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Oder </p>
                </a>
              </li>
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Trị Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sản Phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                   <input type="hidden" name="id" class="form-control" id="exampleInputTieude1" placeholder="Tieude" value="<?=$product->id?>">
                    <label for="exampleInputTieude1">Tên Sản Phẩm</label>
                    <input type="Tieude" name="product_name" class="form-control" id="exampleInputTieude1" placeholder="Tieude" value="<?=$product->product_name?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNoidung1">Giá</label>
                    <input type="Noidung" name="price" class="form-control" id="exampleInputNoidung1" placeholder="Gía" value="<?=$product->price?>">
                  </div>
                  <div class="form-group">
                    <label >Giá Khuyến Mãi</label>
                    <input type="Noidung" name="price_km" class="form-control" id="exampleInputNoidung1" placeholder="giá Khuyến Mãi" value="<?=$product->price_km?>">
                  </div>
                  <img width="10%" src="../img/<?=$product->hinhanh?>" alt="">
                  <div class="form-group">
                    <label for="exampleInputFile">Hình Ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="hinhanh">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTieude1">Thương Hiệu</label>
                    <input type="Tieude" name="thuonghieu" class="form-control" id="exampleInputTieude1" placeholder="Thương Hiệu" value="<?=$product->thuonghieu?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTieude1">Mã Sản Phẩm</label>
                    <input type="Tieude" name="masp" class="form-control" id="exampleInputTieude1" placeholder="Mã Sản Phẩm" value="<?=$product->masp?>">
                  </div>
                  <div class="form-group">
                    <label>Tình Trạng</label>
                    <select class="form-control" name="tinhtrang">
                      <option >Còn Hàng </option>
                      <option >Hết Hàng </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Danh Mục</label>
                    <select class="form-control" name="cate_id">
                    <?php foreach ($category as $cate): ?>
                                        <option value="<?= $cate->id ?>" <?=($cate->id === $product->cate_id) ? 'selected' : '' ?>>
                                             <?= $cate->cate_name ?>
                                        </option>
                                   <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Mô Tả Sản Phẩm</label>
                    <textarea class="form-control" name="detail" rows="3" placeholder="Enter ..." value=""><?=$product->detail?></textarea>
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->

  </div>
  <!-- /.content-wrapper -->
  <?php
include("footer_admin.php");
  ?>