<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('/images/logo.png')); ?>">
    <title>Trang chủ</title>


    <link rel="stylesheet" href="<?php echo e(asset('/lib/OwlCarousel/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/lib/OwlCarousel/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/fontawesome/css/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/lib/bootstrap4/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/home/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/responsive/homeRes.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/event/homeEvent.css')); ?>">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark nav-bg">
            <a class="navbar-brand" href="<?php echo e(URL::to('/product/home')); ?>">
                <img class="img-logo" src="<?php echo e(asset('/images/logo.png')); ?>" alt="logo">
                <img src="<?php echo e(asset('images/text-logo_03.png')); ?>" alt="text-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link link-color" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-color" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-color" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-color" href="#">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-color" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
            <!-- The Modal -->
            <button type="button" class="btn btn-nav-modal" data-toggle="modal" data-target="#myModal">
                <i class="fas fa-search"></i>
            </button>
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tìm kiếm sản phẩm</h4>
                        </div>
                        <div class="modal-body">
                            <input type="text" placeholder="Tìm kiếm...">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-nav-icon">
                <a href="facebook.com"><i class="fab fa-facebook"></i></a>
                <a href="youtube.com"><i class="fab fa-youtube"></i></a>
            </div>
        </nav>
    </header>
    <main class="container">
        <section class="home-owl-banner">
            <div class="owl-carousel owl-theme" id="owl-banner">
                <div><img src="<?php echo e(asset('/images/banner.jpg')); ?>" alt="banner-owl"></div>
                <div><img src="<?php echo e(asset('/images/banner.jpg')); ?>" alt="banner-owl"></div>
                <div><img src="<?php echo e(asset('/images/banner.jpg')); ?>" alt="banner-owl"></div>
                <div><img src="<?php echo e(asset('/images/banner.jpg')); ?>" alt="banner-owl"></div>
            </div>
        </section>
        <section class="box-content-home">
            <h1>DESCODE TEAM - đội ngũ thiết kế Nổi tiếng tại Việt Nam</h1>
            <p>Được thành lập năm 2020,<b>DESCODE TEAM</b> nỗ lực không ngừng, hàng nghìn khách hàng đã lựa chọn làm
                dịch vụ tốt
                nhất. <b>DESCODE TEAM</b> - Đội ngũ hàng đầu trong linh vực thiết kế và lập trình. Với đội ngũ
                chuyên
                gia có tư duy
                tốt
                yêu công việc, luôn phục vụ khách hàng tận tình chu đấo. Vì thế <b>DESCODE TEAM</b> ngày càng nâng
                cao
                chất lượng
                nhằm phục vụ khách hàng và đối tác tốt hơn.</p>
            <p>Các dịch vụ Marketing online của <b>DESCODE TEAM</b> đang cung cấp bao gồm: Thiết kế Web, Thiết kế
                banner, Thiết
                kế logo, thiết kế poster. Tư vấn quảng cáo google, facebook. </p>
        </section>
        <section class="box-service-home">
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="box-img-service">
                        <img class="service-img-home" src="<?php echo e(asset('/images/service1.jpg')); ?>" alt="service-1">
                        <span>Môi trường làm việc chuyên nghiệp</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="box-img-service">
                        <img class="service-img-home" src="<?php echo e(asset('/images/service2.jpg')); ?>" alt="service-2">
                        <span>Đội ngũ chăm sóc khách hàng chuyên nghiệp</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="box-img-service">
                        <img class="service-img-home" src="<?php echo e(asset('/images/service3.jpg')); ?>" alt="service-3">
                        <span>MARKETING online toàn cầu</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="box-img-service">
                        <img class="service-img-home" src="<?php echo e(asset('/images/service4.jpg')); ?>" alt="service-4">
                        <span>GIá thành hợp với sản phẩm</span>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="box-title-customer">
                <img src="<?php echo e(asset('/images/title-customer.jpg')); ?>" alt="title-customer">
                <span>Đối tác</span>
            </div>
            <div class="owl-carousel owl-theme" id="owl-products">
                <div><img src="<?php echo e(asset('/images/partner.jpg')); ?>" alt="partner-owl"></div>
                <div><img src="<?php echo e(asset('/images/partner.jpg')); ?>" alt="partner-owl"></div>
                <div><img src="<?php echo e(asset('/images/partner.jpg')); ?>" alt="partner-owl"></div>
                <div><img src="<?php echo e(asset('/images/partner.jpg')); ?>" alt="partner-owl"></div>
            </div>
        </section>
        <section>
            <div class="box-title-products">
                <img src="<?php echo e(asset('/images/title-customer.jpg')); ?>" alt="title-customer">
                <span>Sản phẩm</span>
            </div>
            <div class="box-body-products">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <a class="link-products" href="#">
                            <i class="fab fa-weebly"></i> Sản phẩm <b><i>Website</i></b>
                        </a>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <a class="link-products" href="#">
                            <i class="fas fa-pen"></i> Sản phẩm <b><i>thiết kế</i></b>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="box-about-home">
            <div class="box-title-about">
                <img src="<?php echo e(asset('/images/product.jpg')); ?>" alt="title-customer">
                <span>Về chúng tôi</span>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="card-about">
                        <img src="<?php echo e(asset('/images/me.jpg')); ?>" alt="">
                        <div class="body">
                            <h3>Lê Quang</h3>
                            <p>Chuyên viên lập trình</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="card-about">
                        <img src="<?php echo e(asset('/images/me1.jpg')); ?>" alt="">
                        <div class="body">
                            <h3>Nguyễn Công Mạnh</h3>
                            <p>Chuyên viên maketing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="card-about">
                        <img src="<?php echo e(asset('/images/me2.jpg')); ?>" alt="">
                        <div class="body">
                            <h3>Nguyễn Huy Thái</h3>
                            <p>Chuyên viên thiết kế</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="card-about">
                        <img src="<?php echo e(asset('/images/me3.jpg')); ?>" alt="">
                        <div class="body">
                            <h3>Vũ Trung Kiên</h3>
                            <p>Chuyên viên giám sát và CSKH</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container-fluid">
        <div class="box-footer-home">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <a class="navbar-brand" href="<?php echo e(URL::to('/product/home')); ?>">
                        <img class="img-logo" src="<?php echo e(asset('/images/logo.png')); ?>" alt="logo">
                        <img src="<?php echo e(asset('images/text-logo_03.png')); ?>" alt="text-logo">
                    </a>
                    <div class="footer-contact-home">
                        <h4>Liên hệ với team DESCODE TEAM</h4>
                        <div class="gird-column">
                            <div class="footer-contact">
                                <i class="fas fa-blender-phone"></i>
                                <p><span>Hotline:</span>019.000.000</p>
                            </div>
                            <div class="footer-contact">
                                <i class="fas fa-phone-volume"></i>
                                <p><span>Phone:</span>0858.529.591</p>
                            </div>
                            <div class="footer-contact">
                                <i class="fab fa-facebook-f"></i>
                                <p><span>Fanpage:</span>DESCODE Team</p>
                            </div>
                            <div class="footer-contact">
                                <i class="fas fa-envelope-open"></i>
                                <p><span>Mail:</span>descodeteam@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about-footer-home">
                        <h3>Chúng tôi chuyên:</h3>
                        <div class="gird-column-end">
                            <p><a href="<?php echo e(URL::to('/')); ?>"><i class="far fa-hand-point-right"></i> Thiết kế
                                    website</a></p>
                            <p><a href="<?php echo e(URL::to('/')); ?>"><i class="far fa-hand-point-right"></i> Thiết kế logo</a>
                            </p>
                            <p><a href="<?php echo e(URL::to('/')); ?>"><i class="far fa-hand-point-right"></i> Thiết kế
                                    banner</a></p>
                            <p><a href="<?php echo e(URL::to('/')); ?>"><i class="far fa-hand-point-right"></i> Thiết kế
                                    website</a></p>
                            <p><a href="<?php echo e(URL::to('/')); ?>"><i class="far fa-hand-point-right"></i> Thiết kế logo</a>
                            </p>
                            <p><a href="<?php echo e(URL::to('/')); ?>"><i class="far fa-hand-point-right"></i> Thiết kế
                                    banner</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end-home">
            <span><b>&#169;</b> Copyright 2007.Designed by <b>DESCODE</b> - <b>&#174;</b> Bản quyền thiết kế website
                thuộc về <b>DESCODE</b>.</span>
        </div>
    </footer>

    <script src="<?php echo e(URL::to('/lib/OwlCarousel/jquery.min.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#owl-banner").owlCarousel();
            $("#owl-products").owlCarousel();
        });
    </script>
    <script src="<?php echo e(URL::to('/lib/OwlCarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('/lib/bootstrap4/popper.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('/lib/bootstrap4/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('/js/app.js')); ?>"></script>
</body>

</html><?php /**PATH D:\Xampp\htdocs\manager-team\manager-descode\resources\views//product/home.blade.php ENDPATH**/ ?>