<?php $__env->startSection('content'); ?>
<div class="body">
    <h1 class="h3 mb-3 bg-light p-3"><strong>Đơn hàng đã đặt</strong></h1>

    <div class="err">
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>

    <?php $__currentLoopData = $showusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mb-3 bg-light p-3 my-3">
            <h4>Thông tin khách hàng</h4>
            <div class="d-flex">
                <div class="mr-4">
                    <div style="font-size: 18px;"><strong>Khách hàng:</strong> <?php echo e($showuser->hoten); ?></div>
                    <div style="font-size: 18px;"><strong>Email:</strong> <?php echo e($showuser->email); ?></div>
                </div>
                <div class="">
                    <div style="font-size: 18px;"><strong>Số điện thoại:</strong> <?php echo e($showuser->sdt); ?></div>
                    <div style="font-size: 18px;"><strong>Địa chỉ:</strong> <?php echo e($showuser->diachi); ?></div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="mb-3">
        <table class="table table-hover my-0">
            <tbody>
                <tr>
                    <th>ID đơn hàng</th>
                    <td><?php echo e($order->id_dathang); ?></td>
                </tr>
                <tr>
                    <th>Ngày đặt</th>
                    <td><?php echo e($order->ngaydathang); ?></td>
                </tr>
                <tr>
                    <th>Ngày giao</th>
                    <td>
                        <?php if($order->ngaygiaohang): ?>
                            <?php echo e(date('Y-m-d', strtotime($order->ngaygiaohang))); ?>

                        <?php else: ?>
                            <?php echo e(date('Y-m-d')); ?>

                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>Phương thức thanh toán</th>
                    <?php if($order->phuongthucthanhtoan == "COD"): ?>
                        <td class="d-none d-xl-table-cell"><div class="badge bg-secondary text-white"><?php echo e($order->phuongthucthanhtoan); ?></div></td>
                    <?php elseif($order->phuongthucthanhtoan == "VNPAY"): ?>
                        <td class="d-none d-xl-table-cell"><div class="badge bg-primary text-white"><?php echo e($order->phuongthucthanhtoan); ?></div></td>
                    <?php else: ?>
                    <td class="d-none d-xl-table-cell"><?php echo e($order->phuongthucthanhtoan); ?></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th>Địa chỉ giao hàng</th>
                    <td><?php echo e($order->diachigiaohang); ?></td>
                </tr>
                <tr>
                    <th>Trạng thái</th>
                    <td>
                        <?php if($order->trangthai == 'đang xử lý'): ?>
                        <span class="badge bg-primary text-white"><?php echo e($order->trangthai); ?></span>
                      <?php elseif($order->trangthai == 'chờ lấy hàng'): ?>
                        <span class="badge bg-warning text-white"><?php echo e($order->trangthai); ?></span>
                      <?php elseif($order->trangthai == 'đang giao hàng'): ?>
                        <span class="badge bg-success text-white"><?php echo e($order->trangthai); ?></span>
                      <?php elseif($order->trangthai == 'giao thành công'): ?>  
                        <span class="badge bg-success text-white"><?php echo e($order->trangthai); ?></span>
                      <?php else: ?>
                        <span class="badge bg-danger text-white"><?php echo e($order->trangthai); ?></span>
                      <?php endif; ?>    
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <div class="mb-3">
        <table class="table table-hover my-0">
            <thead>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá gốc</th>
                <th>Giảm giá</th>
                <th>Giá khuyến mại</th>
                <th>tổng tiền</th>
            </thead>
            <tbody>
                <?php
                    $totalPrice = 0; // Khởi tạo biến tổng tiền
                ?>
                <?php $__currentLoopData = $orderdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($orderdetail->tensp); ?></td>
                        <td><?php echo e($orderdetail->soluong); ?></td>
                        <td><?php echo e($orderdetail->giatien); ?></td>
                        <td><?php echo e($orderdetail->giamgia); ?>%</td>
                        <td><?php echo e($orderdetail->giakhuyenmai); ?></td>
                        <td><?php echo e($orderdetail->giakhuyenmai * $orderdetail->soluong); ?></td>
                    </tr>

                    <?php
                        $totalPrice += $orderdetail->giakhuyenmai * $orderdetail->soluong; // Cộng giá trị tổng tiền
                    ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>

    <h3 class="d-flex justify-content-end align-items-center">
        Tổng thanh toán &nbsp;<div class="text-danger" style="font-size: 40px;"><?php echo e(number_format($totalPrice, 0, ',', '.')); ?>đ</div>
    </h3>

    &nbsp;<a class="btn btn-secondary" href="<?php echo e(URL::to('/donhang')); ?>">Quay lại</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/donhangdetail.blade.php ENDPATH**/ ?>