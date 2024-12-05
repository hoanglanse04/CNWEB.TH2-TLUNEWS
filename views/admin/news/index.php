<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>Trang quản trị</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicon.png" />
  <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../assets/plugins/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="../../../assets/plugins/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="../../../assets/css/line-awesome.min.css" />
  <link rel="stylesheet" href="../../../assets/css/material.css" />
  <link rel="stylesheet" href="../../../assets/css/line-awesome.min.css" />
  <link rel="stylesheet" href="../../../assets/css/style.css" />
  <link rel="stylesheet" href="../../../assets/plugins/toastr/toatr.css" />
</head>

<body>
  <div b-ho2uat4v6r="" class="header d-block position-relative" style="background-color: white !important;">
    <!-- Logo -->
    <div b-ho2uat4v6r="" class="header-left">
      <a b-ho2uat4v6r="" href="admin-dashboard.html" class="logo">
        <img b-ho2uat4v6r="" src="https://s1.vnecdn.net/vnexpress/restruct/i/v9533/v2_2019/pc/graphics/logo.svg" alt="Logo">
      </a>
      <a b-ho2uat4v6r="" href="admin-dashboard.html" class="logo collapse-logo">
        <img b-ho2uat4v6r="" src="https://s1.vnecdn.net/vnexpress/restruct/i/v9533/v2_2019/pc/graphics/logo.svg" alt="Logo">
      </a>
      <a b-ho2uat4v6r="" href="admin-dashboard.html" class="logo2">
        <img b-ho2uat4v6r="" src="https://s1.vnecdn.net/vnexpress/restruct/i/v9533/v2_2019/pc/graphics/logo.svg" width="100" height="100" alt="Logo">
      </a>
    </div>
    <!-- /Logo -->



    <!-- Header Title -->
    <div b-ho2uat4v6r="" class="page-title-box">
      <h3 b-ho2uat4v6r="">Trang tin tức VnExpress</h3>
    </div>
    <span class="page-title-box">Thứ năm, 5/12/2024</span>
    <!-- /Header Title -->


    <!-- Header Menu -->
    <ul b-ho2uat4v6r="" class="nav user-menu">


      <li class="nav-item dropdown has-arrow flag-nav">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="true">
          <span>Vietnam</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(10.4px, 42.4px, 0px);">
          <a class="dropdown-item language-change-vn">
            <img src="/img/flags/vn.png" alt="Flag" height="16"> Vietnam
          </a>
          <a class="dropdown-item language-change-en">
            <img src="/img/flags/us.png" alt="Flag" height="16"> English
          </a>
        </div>
      </li>



      <li b-ho2uat4v6r="" class="nav-item dropdown has-arrow main-drop">
        <a b-ho2uat4v6r="" href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
          <span b-ho2uat4v6r="" class="user-img">
            <span b-ho2uat4v6r="" class="status online"></span>
          </span>
          <span b-ho2uat4v6r="" id="user_name">nxbhongduc</span>
        </a>
        <div b-ho2uat4v6r="" class="dropdown-menu">
          <a b-ho2uat4v6r="" class="dropdown-item btn-logout">Đăng xuất</a>
        </div>
      </li>
    </ul>
    <!-- /Header Menu -->
    <!-- Mobile Menu -->
    <div b-ho2uat4v6r="" class="dropdown mobile-user-menu">
      <a b-ho2uat4v6r="" href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <i b-ho2uat4v6r="" class="fa-solid fa-ellipsis-vertical"></i>
      </a>
      <div b-ho2uat4v6r="" class="dropdown-menu dropdown-menu-right">
        <a b-ho2uat4v6r="" class="dropdown-item btn-logout">Đăng xuất</a>
      </div>
    </div>
    <!-- /Mobile Menu -->
  </div>



  <div class="container">
    <div class="card custom-card mt-2">
      <div class="card-header">
        Danh sách yêu cầu biên mục
      </div>
      <div class="card-body">


        <div id="grid" class="row">
          <div class="search_bm_request">
            <div class="row">
              <div class="col-xl-10 col-lg-10 col-md-10">

                <div class="search_bm_request text-center">
                  <div class="row d-flex flex-row justify-content-center">
                    <div class="ctrl_title title mb-2 col-md-3">
                      <div class="form-focus"> <input value="" id="txt_title" type="text" class=" rounded form-control form-control-sm floating "><label class="focus-label">Nhan đề </label></div>
                    </div>
                    <div class="ctrl_author author mb-2 col-md-3">
                      <div class="form-focus"> <input value="" id="txt_author" type="text" class="  rounded form-control form-control-sm floating "><label class="focus-label">Danh mục </label></div>
                    </div>

                  </div>
                </div>


              </div>

              <div class="col-xl-2 col-lg-2 col-md-2">

                <button id="btn-filter" class="mx-1 mb-2 btn btn-primary btn-sm"> <i class="fa-solid fa-magnifying-glass "></i> </button>
                <button id="btn-refresh" class="mx-1 mb-2 bg-secondary text-white btn btn-outline-secondary2 btn-sm"> <i class="fa-solid fa-arrow-rotate-left "></i> </button>



              </div>

            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>Danh mục</th>
                  <th>Ngày tạo</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                <?php

                if (!empty($news) && is_array($news)): ?>
                  <?php foreach ($news as $item): ?>
                    <tr>
                      <td><?= htmlspecialchars($item['id']) ?></td>
                      <td><?= htmlspecialchars($item['title']) ?></td>
                      <td><?= htmlspecialchars($item['category_name']) ?></td>
                      <td><?= htmlspecialchars($item['created_at']) ?></td>
                      <td>
                        <a href="dashboard.php?controller=admin&action=editNews&id=<?= htmlspecialchars($item['id']) ?>" class="btn btn-warning">Sửa</a>
                        <a href="dashboard.php?controller=admin&action=deleteNews&id=<?= htmlspecialchars($item['id']) ?>"
                          class="btn btn-danger"
                          onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?');">Xóa</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="5" class="text-center">Không có bài viết nào hoặc có lỗi khi truy xuất dữ liệu!</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>



        </div>



      </div>
    </div>

    <div class="d-flex flex-row justify-content-between align-items-center" style="border-bottom: 1px solid #e5e5e5;border-top: 1px solid #bdbdbd;">
      <p style="position: relative;top: 3px;"><a title="VnExpress - Báo tiếng Việt nhiều người xem nhất" href="https://vnexpress.net/" data-medium="Logo" class="logo_ft" onclick="trackingLogoHome('logo-footer', this.href)" data-itm-source="#vn_source=Home&amp;vn_campaign=Footer&amp;vn_medium=Logo&amp;vn_term=Desktop" data-itm-added="1">
          <span style="display: inline-block; vertical-align: top; margin:5px 8px 0 0; color: #222;">Báo điện tử</span>
          <img src="https://s1.vnecdn.net/vnexpress/restruct/i/v9533/v2_2019/pc/graphics/logo.svg" alt="VnExpress - Bao tieng Viet nhieu nguoi xem nhat"></a></p>
      <div class="right flexbox">
        <a href="https://vnexpress.net/dieu-khoan-su-dung" class="text-secondary" data-medium="Menu-DieuKhoanSuDung" title="Điều khoản sử dụng" data-itm-source="#vn_source=Home&amp;vn_campaign=Footer&amp;vn_medium=Menu-DieuKhoanSuDung&amp;vn_term=Desktop" data-itm-added="1">Điều khoản sử dụng | </a>
        <a class="text-secondary" href="https://vnexpress.net/chinh-sach-bao-mat" data-medium="Menu-ChinhSachBaoMat" title="Chính sách bảo mật" data-itm-source="#vn_source=Home&amp;vn_campaign=Footer&amp;vn_medium=Menu-ChinhSachBaoMat&amp;vn_term=Desktop" data-itm-added="1">Chính sách bảo mật | </a>
        <a class="text-secondary" href="https://vnexpress.net/chinh-sach-cookies" data-medium="Menu-Cookies" title="Cookies" data-itm-source="#vn_source=Home&amp;vn_campaign=Footer&amp;vn_medium=Menu-Cookies&amp;vn_term=Desktop" data-itm-added="1">Cookies | </a>
        <a class="text-secondary" href="/rss" data-medium="Menu-Rss" title="RSS" data-itm-source="#vn_source=Home&amp;vn_campaign=Footer&amp;vn_medium=Menu-Rss&amp;vn_term=Desktop" data-itm-added="1">RSS</a>
        <span class="text-secondary">Theo dõi VnExpress trên | </span>

      </div>
    </div>
  </div>

  <h2>Danh sách bài viết</h2>
  <a href="dashboard.php?controller=admin&action=addNews" class="btn btn-success">Thêm bài viết</a>

  <div class="search-bar">
    <input type="text" placeholder="Nhập tiêu đề" id="searchTitle">
    <button type="button">Tìm kiếm</button>
  </div>



  <footer>
    <p>
      <a href="https://vnexpress.net/" class="logo_ft">
        <img src="https://s1.vnecdn.net/vnexpress/restruct/i/v9533/v2_2019/pc/graphics/logo.svg" alt="Logo"> VnExpress
      </a>
    </p>
    <p>
      <a href="https://vnexpress.net/dieu-khoan-su-dung">Điều khoản sử dụng</a> |
      <a href="https://vnexpress.net/chinh-sach-bao-mat">Chính sách bảo mật</a> |
      <a href="https://vnexpress.net/chinh-sach-cookies">Cookies</a> |
      <a href="/rss">RSS</a>
    </p>
  </footer>

</body>
<script src="../../../assets/js/jquery-3.7.1.min.js"></script>
<script src="../../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../../assets/js/const.js"></script>
<script src="../../../assets/js/uc-helpers.js"></script>
<script src="../../../assets/js/toast.js"></script>
<script src="../../../assets/plugins/toastr/toastr.js"></script>

</html>