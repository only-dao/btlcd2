<?php $__env->startSection('content'); ?>

<div class="post-slider">
    <i class="fa fa-chevron-left prev" aria-hidden="true"></i>
    <i class="fa fa-chevron-right next" aria-hidden="true"></i>

    <div class="post-wrapper">
        <div class="post">
            <img src="<?php echo e(asset('frontend/img/BG-1.jpg')); ?>" alt="">
        </div>
        <div class="post">
            <img src="<?php echo e(asset('frontend/img/BG-2.jpg')); ?>" alt="">
        </div>
        <div class="post">
            <img src="<?php echo e(asset('frontend/img/BG-3.jpg')); ?>" alt="">
        </div>
    </div>

</div>

<!-- Sản phẩm nổi bật -->
<div class="body">

    <div class="body__mainTitle">
        <h2>Sản phẩm nổi bật</h2>
    </div>

    <div class="post-slider2">
        <i class="fa fa-chevron-left prev2" aria-hidden="true"></i>
        <i class="fa fa-chevron-right next2" aria-hidden="true"></i>

        <div class="row">
            <div class="post-wrapper2">
                <?php $__currentLoopData = $sanphams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sanpham): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-2_5 col-md-4 col-6 post2">
                    <a href="<?php echo e(route('detail', ['id' => $sanpham->id_sanpham])); ?>">
                        <div class="product">
                            <div class="product__img">
                                <img src="<?php echo e($sanpham->anhsp); ?>" alt="">
                            </div>
                            <div class="product__sale">
                                <div>
                                    <?php if($sanpham->giamgia): ?>
                                        -<?php echo e($sanpham->giamgia); ?>%
                                    <?php else: ?> Mới
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="product__content">
                                <div class="product__title">
                                    <?php echo e($sanpham->tensp); ?>

                                </div>

                                <div class="product__pride-oldPride">
                                    <span class="Price">
                                        <bdi>
                                            <?php echo e(number_format($sanpham->giasp, 0, ',', '.')); ?>

                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>

                                <div class="product__pride-newPride">
                                    <span class="Price">
                                        <bdi>
                                            <?php echo e(number_format($sanpham->giakhuyenmai, 0, ',', '.')); ?>

                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>
</div>

<div class="banner">
    <div class="body__mainTitle">
        <h2>Dịch vụ của chúng tôi</h2>
    </div>

    <div class="banner-top banner-top-2 row">
        <div class="col-md-3 col-sm-6">
            <a href="#" class="banner-top-2-child" style="background-color: #5BAB7B;">
                <div class="text-white">GIAO HÀNG TẬN NƠI</div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="#" class="banner-top-2-child" style="background-color: #5C9CCA;">
                <div class="text-white" style="margin: 0 auto;">BUÔN SỈ SỐ LƯỢNG LỚN GIÁ TỐT</div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="#" class="banner-top-2-child" style="background-color: #C67B36;">
                <div class="text-white" style="margin: 0 auto;">CHÍNH SÁCH BẢO HÀNH LÊN TỚI 12 THÁNG</div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="#" class="banner-top-2-child" style="background-color: #AB5D58;">
                <div class="text-white">SẢN PHẨM ĐỘC QUYỀN</div>
            </a>
        </div>

    </div>
</div>


    <div class="dogfood active">
        <div class="row">
            <?php $__currentLoopData = $dogproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dogproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="<?php echo e(route('detail', ['id' => $dogproduct->id_sanpham])); ?>">
                    <div class="product">
                        <div class="product__img">
                            <img src="<?php echo e($dogproduct->anhsp); ?>" alt="">
                        </div>
                        <div class="product__sale">
                            <div>
                                <?php if($dogproduct->giamgia): ?>
                                    -<?php echo e($dogproduct->giamgia); ?>%
                                <?php else: ?> Mới
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($dogproduct->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($dogproduct->giasp, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($dogproduct->giakhuyenmai, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="dogstyle">
        <div class="row">
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="#">
                    <div class="product">
                        <div class="product__img">
                            <img src="/upload/abc.png" alt="">
                        </div>
                        <div class="product__sale">
                            <div>Mới</div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($sanpham->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        300000
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e($sanpham->giasp); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                        </div>

                    </div>

                </a>
            </div>
        </div>
    </div>

    <div class="dogequi">
        <div class="row">
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="#">
                    <div class="product">
                        <div class="product__img">
                            <img src="/upload/abc.png" alt="">
                        </div>
                        <div class="product__sale">
                            <div>Mới</div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($sanpham->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        300000
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e($sanpham->giasp); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                        </div>

                    </div>

                </a>
            </div>
            
        </div>
    </div>
</div>

<div class="banner">
    <div class="banner-top">
        <img src="<?php echo e(asset('frontend/img/BG-2.jpg')); ?>" />
    </div>
</div>


    <div class="catfood active">
        <div class="row">
            <?php $__currentLoopData = $catproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="<?php echo e(route('detail', ['id' => $catproduct->id_sanpham])); ?>">
                    <div class="product">
                        <div class="product__img">
                            <img src="<?php echo e($catproduct->anhsp); ?>" alt="">
                        </div>
                        <div class="product__sale">
                            <div>
                                <?php if($catproduct->giamgia): ?>
                                    -<?php echo e($catproduct->giamgia); ?>%
                                <?php else: ?> Mới
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($catproduct->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($catproduct->giasp, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($catproduct->giakhuyenmai, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="catstyle">
        <div class="row">
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="#">
                    <div class="product">
                        <div class="product__img">
                            <img src="/upload/abc.png" alt="">
                        </div>
                        <div class="product__sale">
                            <div>Mới</div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($sanpham->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        300000
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e($sanpham->giasp); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                        </div>

                    </div>

                </a>
            </div>

        </div>
    </div>

    <div class="catequi">
        <div class="row">
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="#">
                    <div class="product">
                        <div class="product__img">
                            <img src="/upload/abc.png" alt="">
                        </div>
                        <div class="product__sale">
                            <div>Mới</div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($sanpham->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        300000
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e($sanpham->giasp); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                        </div>

                    </div>

                </a>
            </div>
        </div>
    </div>
</div>

<div class="banner">

    <div class="row banner-top">
        <img class="col-md-4 col-sm-6" src="<?php echo e(asset('frontend/img/BG-1.jpg')); ?>" />
        <img class="col-md-4 col-sm-6" src="<?php echo e(asset('frontend/img/BG-2.jpg')); ?>" />
        <img class="col-md-4 col-sm-6" src="<?php echo e(asset('frontend/img/BG-3.jpg')); ?>" />
    </div>
</div>

<!-- form dưới cuối-->
<div class="body">

    <div class="body__mainTitle d-flex align-items-center">
        

    </div>

    <div class="dog active">
        <div class="row">
            <?php $__currentLoopData = $choGiongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $choGiong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="<?php echo e(route('detail', ['id' => $choGiong->id_sanpham])); ?>">
                    <div class="product">
                        <div class="product__img">
                            <img src="<?php echo e($choGiong->anhsp); ?>" alt="">
                        </div>
                        <div class="product__sale">
                            <div>
                                <?php if($choGiong->giamgia): ?>
                                    -<?php echo e($choGiong->giamgia); ?>%
                                <?php else: ?> Mới
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($choGiong->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($choGiong->giasp, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($choGiong->giakhuyenmai, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="cat">
        <div class="row">
            <?php $__currentLoopData = $meoGiongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meoGiong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="<?php echo e(route('detail', ['id' => $meoGiong->id_sanpham])); ?>">
                    <div class="product">
                        <div class="product__img">
                            <img src="<?php echo e($meoGiong->anhsp); ?>" alt="">
                        </div>
                        <div class="product__sale">
                            <div>
                                <?php if($meoGiong->giamgia): ?>
                                    -<?php echo e($meoGiong->giamgia); ?>%
                                <?php else: ?> Mới
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($meoGiong->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($meoGiong->giasp, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($meoGiong->giakhuyenmai, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>

<!-- Tất cả sản phẩm -->
<div class="body">

    <div class="body__mainTitle">
        <h2>TẤT CẢ SẢN PHẨM</h2>
    </div>

    <div>
        <div class="row">
            <?php $__currentLoopData = $alls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="<?php echo e(route('detail', ['id' => $all->id_sanpham])); ?>">
                    <div class="product">
                        <div class="product__img">
                            <img src="<?php echo e($all->anhsp); ?>" alt="">
                        </div>
                        <div class="product__sale">
                            <div>
                                <?php if($all->giamgia): ?>
                                    -<?php echo e($all->giamgia); ?>%
                                <?php else: ?> Mới
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($all->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($all->giasp, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($all->giakhuyenmai, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <center style="margin-top: 30px;">
            <a href="<?php echo e(route('viewAll')); ?>" class="btn text-white" style="background: #ff4500;">Xem thêm</a>
        </center>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/home.blade.php ENDPATH**/ ?>