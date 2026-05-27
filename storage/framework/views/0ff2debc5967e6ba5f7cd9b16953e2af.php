<?php $__env->startSection('content'); ?>
<!-- Con giống -->
<div class="body">

    <div class="body__mainTitle d-flex align-items-center">
        <h2>Con giống</h2>
        <b>
            <div class="d-flex justify-content-center align-items-center ml-5" style="font-size: 26px;">
                <div id="clickDog" class="text-secondary activeColor mr-3">Chó</div>
                <div id="clickCat" class="text-secondary mr-3">Mèo</div>
            </div>
        </b>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/congiong.blade.php ENDPATH**/ ?>