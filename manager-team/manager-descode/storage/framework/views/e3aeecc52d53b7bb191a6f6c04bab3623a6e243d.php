<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('/images/logo.png')); ?>"> 
    <title>Quản lí Team</title>

    <link rel="stylesheet" href="<?php echo e(asset('/css/gird.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/styles.css')); ?>">
    <!-- fontawesome -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/gird.css')); ?>">

    <script src="<?php echo e(asset('/js/app.js')); ?>" defer></script>
</head>
<body>
    <div class="bg-manager">
        <div class="container">
            <h1 class="title-manager">Danh mục</h1>
            <div class="gird-column">
                <div class="card">
                    <!-- <img src="<?php echo e(asset('/images/....')); ?>" alt="icon-..."> -->
                    <div class="card-body">
                        <h3 class="card-title">Danh sách thành viên</h3>
                        <a href="<?php echo e(url('manager/list')); ?>" class="btn-view-manager">Xem</a>
                    </div>
                </div>
                <div class="card">
                    <!-- <img src="<?php echo e(asset('/images/....')); ?>" alt="icon-..."> -->
                    <div class="card-body">
                        <h3 class="card-title">Quản lí dự án</h3>
                        <a href="#" class="btn-view-manager">Xem</a>
                    </div>
                </div>
                <div class="card">
                    <!-- <img src="<?php echo e(asset('/images/....')); ?>" alt="icon-..."> -->
                    <div class="card-body">
                        <h3 class="card-title">Dự án mới</h3>
                        <a href="#" class="btn-view-manager">Xem</a>
                    </div>
                </div>
                <div class="card">
                    <!-- <img src="<?php echo e(asset('/images/....')); ?>" alt="icon-..."> -->
                    <div class="card-body">
                        <h3 class="card-title">Doanh thu theo tuần</h3>
                        <a href="#" class="btn-view-manager">Xem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH D:\Xampp\htdocs\manager-team\manager-descode\resources\views/manager/managerPage.blade.php ENDPATH**/ ?>