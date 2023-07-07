<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
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
      <span class="brand-text font-weight-light active">Quản Trị Website</span>
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
                <a href="/list_categories" class="nav-link ">
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
                <a href="/add_blog" class="nav-link ">
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
                <a href="/list_comment" class="nav-link active" >
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

               <div class="card-body p-0">
                    <table class="table table-striped projects">
                         <thead>
                              <tr>
                                   <th style="width: 1%">
                                        ID
                                   </th>
                                   <th style="width: 15%">
                                        Nội Dung
                                   </th>
                                   <th style="width: 15%">
                                        Họ tên
                                   </th>
                                   <th style="width: 15%">
                                        Email
                                   </th>
                                   <th style="width: 15%">
                                        Sản Phẩm
                                   </th>
                                   <th style="width: 15%">
                                        Ngày Bình Luận
                                   </th>
                                   <th style="width: 15%">
                                        Người Bình Luận
                                   </th>
                                   <th style="width: 15%">
                                   </th>
                              </tr>
                         </thead>
                         <?php foreach ($comment as $commentt) : ?>
                         <tbody>
                              <tr>
                                   <td>
                                   <?=$commentt->id?>   
                                   </td>
                                   <td>
                                       
                                        <small>
                                  <?=$commentt->comment_noidung?> 
                                        </small>
                                   </td>
                                   <td>
                                   <?=$commentt->hoten?>
                                   </td>
                                   <td>
                                        <small><?=$commentt->email?> </small>
                                   </td>
                                   <td class="project_progress">
                                       
                                   <?php foreach ($product as $pro ) : ?>
                                        <small value=""><?= ($pro->id === $commentt->product_id)? $pro->product_name:"" ?></small>
                                        <?php endforeach ?>
                                   </td>
                                   </td>
                                   <td class="project-state">
                                        <span class="badge badge-success"><?=$commentt->date?> </span>
                                   </td>
                                   <td class="project-state">
                                   <?php foreach ($user as $userr ) : ?>
                                        <small value=""><?= ($userr->id === $commentt->user_id)? $userr->user_name:"" ?></small>
                                        <?php endforeach ?>
                                   </td>
                                   <td class="project-actions text-right">
                                       
                                      
                                        <a class="btn btn-danger btn-sm" href="/delete_comment?id=<?=$commentt->id?>   " onclick="return confirm('Bạn có muốn xóa không ?')">
                                             <i class="fas fa-trash">
                                             </i>
                                             Delete
                                        </a>
                                   </td>
                              </tr>

                         </tbody>
                         <?php endforeach ?>
                    </table>
               </div>
          </div>
          <!-- /.content-wrapper -->

          <!-- Control Sidebar -->
          <?php
          include("footer_admin.php");
          ?>