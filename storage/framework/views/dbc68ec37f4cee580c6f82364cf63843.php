<?php $__env->startSection('content'); ?>
<!-- Tất cả sản phẩm -->
<div class="body">

    <div class="body__mainTitle">
        <h2>TẤT CẢ SẢN PHẨM</h2>
    </div>

    <div>
        <div class="row">
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
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?php if($sanphams->currentPage() === 1): ?> disabled <?php endif; ?>">
                    <a class="page-link" href="<?php echo e($sanphams->previousPageUrl()); ?>">Previous</a>
                </li>
                <?php for($i = 1; $i <= $sanphams->lastPage(); $i++): ?>
                    <li class="page-item <?php if($sanphams->currentPage() === $i): ?> active <?php endif; ?>">
                        <a class="page-link" href="<?php echo e($sanphams->url($i)); ?>"><?php echo e($i); ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php if($sanphams->currentPage() === $sanphams->lastPage()): ?> disabled <?php endif; ?>">
                    <a class="page-link" href="<?php echo e($sanphams->nextPageUrl()); ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/viewall.blade.php ENDPATH**/ ?>