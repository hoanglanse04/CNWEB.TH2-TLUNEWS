<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
  data-sidebar-image="none">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>&#x110;&#x103;ng nh&#x1EAD;Tin tức</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png" />
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="../../assets/css/line-awesome.min.css" />
  <link rel="stylesheet" href="../../assets/css/material.css" />
  <link rel="stylesheet" href="../../assets/css/line-awesome.min.css" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="../../assets/plugins/toastr/toatr.css" />

</head>

<body class="">

  <div b-ho2uat4v6r="" class="header d-block position-relative">
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
  <!-- Main Wrapper -->
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

              <div class="ol-xl-2 col-lg-2 col-md-2">

                <button id="btn-filter" class="mx-1 mb-2 btn btn-primary btn-sm"> <i class="fa-solid fa-magnifying-glass "></i> </button>
                <button id="btn-refresh" class="mx-1 mb-2 bg-secondary text-white btn btn-outline-secondary2 btn-sm"> <i class="fa-solid fa-arrow-rotate-left "></i> </button>



              </div>

            </div>
          </div>
          <div class="table-responsive">
            <table id="content_table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">ID</th>
                  <th class="text-start">Nhan đề</th>
                  <th class="text-start">Nội dung</th>
                  <th class="text-center">Hình ảnh</th>
                  <th class="text-center">Ngày tạo</th>
                  <th class="text-center">Danh mục</th>
                  <th class="text-center">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <!-- Ví dụ dòng dữ liệu -->
                <tr>
                  <td class="text-center">1</td>
                  <td class="text-start">Bài viết mẫu</td>
                  <td class="text-start">Đây là nội dung bài viết mẫu.</td>
                  <td class="text-center">
                    <img src="path/to/image.jpg" alt="Hình ảnh" style="width: 50px; height: auto;">
                  </td>
                  <td class="text-center">2024-12-05 10:00:00</td>
                  <td class="text-center">Danh mục A</td>
                  <td style="" class="text-center">
                    <!-- Sửa -->
                    <a class="edit-flower btn btn-secondary btn-sm text-white" href="#" data-bs-toggle="modal" data-bs-target="#modalEditFlower" data-id="6" data-name="Hoa Dạ " data-description="Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè. Dạ yến thảo được trồng ở chậu treo nơi cửa sổ hay ban công, dáng hoa mềm mại, sắc màu đa dạng nên được yêu thích vô cùng." data-images="../images/hoa-da-yen-thao.webp,../images/hoa-da-yen-thao-1.webp">
                      Sửa
                    </a>
                    <!-- Xóa -->
                    <form method="POST" action="../Controller/FlowerController.php" style="display:inline;">
                      <input type="hidden" name="action" value="delete">
                      <input type="hidden" name="id" value="6">
                      <button class="btn btn-warning btn-sm" type="submit" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                    </form>
                  </td>
                </tr>
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

  <!-- /Main Wrapper -->
  <script src="../../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/const.js"></script>
  <script src="../../assets/js/uc-helpers.js"></script>
  <script src="../../assets/js/toast.js"></script>
  <script src="../../assets/plugins/toastr/toastr.js"></script>



  <script>
    $(document).ready(function() {

    })
  </script>

</body>

</html>