<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>Trang quản trị</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png" />
  <link rel="stylesheet" href="./admin_css/style_index.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="../../assets/css/line-awesome.min.css" />
  <link rel="stylesheet" href="../../assets/css/material.css" />
  <link rel="stylesheet" href="../../assets/css/line-awesome.min.css" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="../../assets/plugins/toastr/toatr.css" />
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
      <div class="card-header text-primary">
        Danh sách tin tức
      </div>
      <div class="card-body">

        <div class="text-end">
          <a href="dashboard.php?controller=admin&action=addNews" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Thêm bài viết</a>

        </div>
        <div id="grid" class="row">
          <div class="search_bm_request">
            <div class="row">
              <div class="my-3">
                <div class="d-flex flex-row justify-content-center align-items-center">

                  <div class="">

                  </div>
                </div>


              </div>


            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 5%;">ID</th>
                  <th style="width: 15%;">Danh mục</th>
                  <th style="width: 15%;">Tiêu đề</th>
                  <th style="width: 35%;">Nội dung</th>
                  <th style="width: 15%;">Ngày tạo</th>
                  <th class="text-center" style="width: 15%;">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <?php

                if (!empty($news) && is_array($news)): ?>
                  <?php foreach ($news as $item): ?>
                    <tr>
                      <td style="width: 5%;"><?= htmlspecialchars($item['id']) ?></td>
                      <td style="width: 15%;"><?= htmlspecialchars($item['category_name']) ?></td>
                      <td style="width: 15%;"><?= htmlspecialchars($item['title']) ?></td>
                      <td style="width: 35%;" class="">
                        <?= htmlspecialchars(substr($item['content'], 0, 70)).'...' ?> <!-- Lấy 50 ký tự đầu tiên -->
                      </td>
                      <td style="width: 15%;"><?= htmlspecialchars($item['created_at']) ?></td>
                      <td style="width: 15%;" class="text-center ">
                        <a href="dashboard.php?controller=admin&action=editNews&id=<?= htmlspecialchars($item['id']) ?>" class="btn btn-info">Sửa</a>
                        <a href="dashboard.php?controller=admin&action=deleteNews&id=<?= htmlspecialchars($item['id']) ?>"
                          class="btn btn-warning"
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





</body>
<script src="../../assets/js/jquery-3.7.1.min.js"></script>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/const.js"></script>
<script src="../../assets/js/uc-helpers.js"></script>
<script src="../../assets/js/toast.js"></script>
<script src="../../assets/plugins/toastr/toastr.js"></script>

</html>