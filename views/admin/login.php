<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>&#x110;&#x103;ng Nhập Tin tức</title>
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

<body class="account-page">
    <!-- Main Wrapper -->
    <div b-aa2numtnrx class="main-wrapper">
        <div b-aa2numtnrx class="account-content">



            <!-- Account Logo -->
            <div class="account-logo">
            </div>
            <!-- /Account Logo -->

            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Quản trị viên</h3>
                    <p class="account-subtitle" style="font-size: 16px">Trang tin tức VnExpress</p>

                    <!-- Account Form -->
                    <form id="login-form">
                        <div class="input-block mb-4">
                            <label class="col-form-label">T&#xEA;n &#x111;&#x103;ng nh&#x1EAD;p</label>
                            <input class="form-control" type="text" tabindex="1" id="username" name="username" />
                        </div>
                        <div class="input-block mb-4">
                            <div class="row align-items-center">
                                <div class="col">
                                    <label class="col-form-label">M&#x1EAD;t kh&#x1EA9;u</label>
                                </div>
                                <div class="col-auto">
                                    <a class="text-muted" href="#">
                                        Qu&#xEA;n m&#x1EAD;t kh&#x1EA9;u ?
                                    </a>
                                </div>
                            </div>
                            <div class="position-relative">
                                <input class="form-control" type="password" tabindex="2" id="password"
                                    name="password" />
                                <span class="fa-solid fa-eye-slash" id="toggle-password"></span>
                            </div>
                        </div>
                        <div class="input-block mb-4 text-center">
                            <button class="btn btn-primary account-btn" id="btn-loggin">&#x110;&#x103;ng
                                nh&#x1EAD;p</button>
                        </div>
                    </form>
                    <div class="text-end">
                        <a href="../../index.php">Người dùng</a>
                    </div>
                    <!-- /Account Form -->

                </div>
            </div>




        </div>
        <div class="btn-list d-none">
            <button type="button" class="btn btn-warning me-1 btn-wave" id="solidwarningToastBtn">Warning</button>
            <button type="button" class="btn btn-info me-1 btn-wave" id="solidinfoToastBtn">Info</button>
            <button type="button" class="btn btn-success me-1 btn-wave" id="solidsuccessToastBtn">Success</button>
            <button type="button" class="btn btn-danger me-1 btn-wave" id="soliddangerToastBtn">Danger</button>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="solid-warningToast" class="toast colored-toast bg-warning text-fixed-white" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-warning text-fixed-white">
                    <strong class="me-auto" id="solidwarningToastTitle">Thông báo</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="solidwarningToastContent">
                </div>
            </div>
            <div id="solid-infoToast" class="toast colored-toast bg-info text-fixed-white" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-info text-fixed-white">
                    <strong class="me-auto" id="solidinfoToastTitle">Thông tin</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="solidinfoToastContent">
                </div>
            </div>
            <div id="solid-successToast" class="toast colored-toast bg-success text-fixed-white" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-fixed-white">
                    <strong class="me-auto" id="solidsuccessToastTitle">Thành công</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="solidsuccessToastContent">
                </div>
            </div>
            <div id="solid-dangerToast" class="toast colored-toast bg-danger text-fixed-white" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-danger text-fixed-white">
                    <strong class="me-auto" id="soliddangerToastTitle">Lỗi</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="soliddangerToastContent">
                </div>
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
    $("#toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        if ($("#password").attr("type") == "password") {
            $("#password").attr("type", "text");
        } else {
            $("#password").attr("type", "password");
        }
    });
    </script>

    <script>
    $(document).ready(function() {

    })
    </script>

</body>

</html>