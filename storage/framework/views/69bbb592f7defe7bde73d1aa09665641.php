<?php $__env->startSection('content'); ?>

<form class="body" action="<?php echo e(route('dathang')); ?>" method="POST" id="checkout" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <?php $__currentLoopData = $showusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $showuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key == 0): ?>
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

                <input type="hidden" name="id_kh" value="<?php echo e($showuser->id_kh); ?>">
                <input type="hidden" name="hoten" value="<?php echo e($showuser->hoten); ?>">
                <input type="hidden" name="email" value="<?php echo e($showuser->email); ?>">
                <input type="hidden" name="sdt" value="<?php echo e($showuser->sdt); ?>">
                <input type="hidden" name="diachigiaohang" value="<?php echo e($showuser->diachi); ?>">
                <input type="hidden" name="ngaydathang" value="">
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th>Ảnh sp</th>
            <th>Tên sp</th>
            <th>Giá gốc</th>
            <th>Giảm giá</th>
            <th>Giá khuyến mại</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
        </thead>
            <tbody>
            <?php $total = 0 ?>
            <?php if(session('cart')): ?>
                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $total += $details['giakhuyenmai'] * $details['quantity'] ?>

                    <tr data-id="<?php echo e($id); ?>">
                        <td><img src="<?php echo e(asset($details['anhsp'])); ?>" width="100" height="100" class="img-responsive"/></td>
                        <td>
                            <div><?php echo e($details['tensp']); ?></div>
                        </td>  
                        <td data-th="Price"><?php echo e($details['giasp']); ?></td>
                        <td data-th="Price"><?php echo e($details['giamgia']); ?>%</td>
                        <td data-th="Subtotal" class="text-center"><?php echo e($details['giakhuyenmai']); ?>đ</td>

                        <td data-th="Quantity" class="quantity-input">
                            <?php echo e($details['quantity']); ?>

                        </td>

                        <td data-th="" class="text-center"><?php echo e($details['giakhuyenmai'] * $details['quantity']); ?>đ</td>
                    </tr>

                    <input type="hidden" name="id_sanpham" value="<?php echo e($details['id_sanpham']); ?>">
                    <input type="hidden" name="tensp" value="<?php echo e($details['tensp']); ?>">
                    <input type="hidden" name="giatien" value="<?php echo e($details['giasp']); ?>">
                    <input type="hidden" name="giamgia" value="<?php echo e($details['giamgia']); ?>">
                    <input type="hidden" name="giakhuyenmai" value="<?php echo e($details['giakhuyenmai']); ?>">
                    <input type="hidden" name="soluong" value="<?php echo e($details['quantity']); ?>">

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>

        <tfoot>

            <tr>
                <td colspan="7" class="bg-light">
                    <div  class="d-flex justify-content-between">
                        <h4 class="pttt">Phương thức thanh toán</h4>
                        <div>
                            <div class="d-flex align-items-center p-2">
                                <input type="radio" id="cod" name="redirect" value="COD" checked>
                                <label for="cod" style="margin-bottom: 1px; margin-left: 5px; font-size: 20px;" class="paymentContent font-weight-bold text-xl p">
                                    Trả tiền khi nhận hàng (COD)
                                </label>
                            </div>

                            <div class="d-flex align-items-center p-2">
                                <input type="radio" id="vnpay" name="redirect" value="VNPAY">
                                <label for="vnpay" style="margin-bottom: 1px; margin-left: 5px; font-size: 20px;" class="paymentContent font-weight-bold text-xl p">
                                    Thanh toán online (VNPAY)
                                </label>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
            <td colspan="7" class="text-right">
                <h3 class="d-flex justify-content-end align-items-center">
                    Tổng thanh toán &nbsp;<div class="text-danger" style="font-size: 40px;"><?php echo e(number_format($total, 0, ',', '.')); ?>đ</div>
                    <input type="hidden" name="tongtien" value="<?php echo e($total); ?>">
                </h3>
            </td>
            </tr>

            <tr>
                <td colspan="7" class="text-right">
                    <a href="<?php echo e(url('/cart')); ?>" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Quay lại giỏ hàng</a>
                    <button type="submit" class="btn btn-success text-white">Đặt hàng</button>
                </td>
            </tr>

        </tfoot>
        </table>
</form>

<script>
    //cod
    $('#cod').click(function () {
        // $('#cod').attr('value', 'COD');
        $('#checkout').attr('action', "<?php echo e(route('dathang')); ?>");
    });

    //chuyen khoan vnpay
    $('#vnpay').click(function () {
        // $('#vnpay').attr('value', 'VNPAY');
        $('#checkout').attr('action', "<?php echo e(route('vnpay')); ?>");

    });

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/checkout.blade.php ENDPATH**/ ?>