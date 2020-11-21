<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('/images/logo.png')); ?>">
    <title>Trang chủ</title>

    <link rel="stylesheet" href="<?php echo e(asset('/fontawesome/css/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lib/bootstrap4/bootstrap.min.css')); ?>">
</head>

<body>
    <header class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="/product/home.blade.php"><?php echo e(HTML::image("images/text-logo_03.png", "Text-logo")); ?></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                </li>
            </ul>
        </nav>
    </header>

    <script src="<?php echo e(URL::to('/lib/bootstrap4/jquery-3.2.1.slim.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('/lib/bootstrap4/popper.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('/lib/bootstrap4/bootstrap.min.js')); ?>"></script>
</body>

</html><?php /**PATH D:\Xampp\htdocs\manager-team\manager-descode\resources\views/product/home.blade.php ENDPATH**/ ?>