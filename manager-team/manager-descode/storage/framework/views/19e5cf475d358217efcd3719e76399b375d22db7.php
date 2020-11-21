<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('/images/logo.png')); ?>">
    <title>Danh sách thành viên</title>

    <link rel="stylesheet" href="<?php echo e(asset('/fontawesome/css/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lib/bootstrap4/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/gird.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/styles.css')); ?>">
</head>

<body>
    <div class="container">
        <h3 class="list-title">Danh sách thành viên của team <i><b>DESCODE</b></i></h3>

        <button id="create-list" type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i> Create News</button>
        <!-- Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Create User</h5>
                    </div>
                    <div class="modal-body">
                        <label>Images: </label>
                        <input type="text" placeholder="Enter images...">
                        <label>Full Name: </label>
                        <input type="text" placeholder="Enter name...">
                        <label>Phone: </label>
                        <input type="text" placeholder="Enter phone...">
                        <label>Email: </label>
                        <input type="text" placeholder="Enter email...">
                        <label>Position Job: </label>
                        <input type="text" placeholder="Enter position job...">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i></button>
                        <button type="button" class="btn btn-primary"><i class="far fa-check-circle"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-find">
            <input id="inp-list-find" type="text" placeholder="Tìm kiếm tên...">
            <button id="btn-list-search" type="submit"><i class="fas fa-search"></i></button>
        </div>
        <table id="list-table">
            <tr>
                <th></th>
                <th>Hình ảnh</th>
                <th>Họ và tên</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Công việc</th>
                <th>Chức năng</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>


    <script src="<?php echo e(URL::to('/lib/bootstrap4/jquery-3.2.1.slim.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('/lib/bootstrap4/popper.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('/lib/bootstrap4/bootstrap.min.js')); ?>"></script>
</body>

</html><?php /**PATH D:\Xampp\htdocs\manager-team\manager-descode\resources\views/manager/list.blade.php ENDPATH**/ ?>