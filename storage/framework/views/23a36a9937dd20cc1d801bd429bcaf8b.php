<?php $__env->startSection('content'); ?>
    <!--Main-->
    <div class="body" style="padding-top: 50px;">
        <a class="buy_continute" href="<?php echo e(URL::to('/')); ?>"><i class="fa fa-arrow-circle-left"></i> Trở lại mua hàng</a>
        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
            <?php echo e(session('success')); ?>

            </div> 
        <?php endif; ?>
            <div class="product_card mt-3">
                <div class="product__details-img mr-2">
                    <div class="big-img">
                        <img src="<?php echo e(asset($sanpham->anhsp)); ?>" alt="" id="zoom" style="visibility: visible;">
                    </div>
                    
                </div>
    
                <div class="product__details-info">
                    <h3 style="margin-top: unset; line-height: unset;"><?php echo e($sanpham->tensp); ?></h3>
                    <div class="short-des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam sit aliquid debitis voluptates ducimus, quasi iusto nam quaerat eius quidem.
    
                    </div><hr />
    
                    <div class="product__pride">
                        <div class="product__pride-oldPride" style="font-size: 20px; text-align: start;">
                            <span class="Price">
                                <bdi>
                                    <?php echo e(number_format($sanpham->giasp, 0, ',', '.')); ?>  
                                    <span class="currencySymbol">₫</span>
                                </bdi>
                            </span>
                        </div>
                        <div class="product__pride-newPride" style="font-size: 40px; text-align: start;">
                            <span class="Price">
                                <bdi><?php echo e(number_format($sanpham->giakhuyenmai, 0, ',', '.')); ?>  
                                    <span class="currencySymbol">₫</span>
                                </bdi>
                            </span>
                        </div>
    
                    </div>
    
                    <form action="" method="POST">
                        <!--
                            <div class="number">
                                <span>Số lượng</span>
                                <div class="number__count">
                                    <input type="number" value="1" min="1" max="10" name="quantity">
                                    <input type="hidden" name="id" value="<?php //echo $valueID['id_sanpham']; ?>">
                                </div>
                            </div>
                        -->
    
                        <div class="number">
                            <span>
                                Số lượng
                                <span class="number__count">
                                    <?php echo e($sanpham->soluong); ?>    
                                </span>
                            </span>
    
                        </div>
    
                        <div class="product__cart">
                            <a href="<?php echo e(route('add_to_cart', $sanpham->id_sanpham)); ?>" class="product__cart-add" name="add-to-cart">
                                Thêm vào giỏ hàng
                            </a>
                            <a href="<?php echo e(route('add_go_to_cart', $sanpham->id_sanpham)); ?>" class="product__cart-buy" name="buy-now">Mua ngay</a>
                        </div>
    
                    </form>
                </div>
            </div>
    
        <!--Mô tả sản phẩm-->
        <div class="body__mainTitle">
            <h2>MÔ TẢ SẢN PHẨM</h2>
        </div>
            <?php echo e($sanpham->mota); ?>    
        <hr />
    
        <!--Bình luận sản phẩm-->
        <div class="body__mainTitle">
            <h2>BÌNH LUẬN</h2>
        </div>
        <div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <img src="<?php echo e(asset('frontend/img/user.jpg')); ?>" width="45" height="45" style="border-radius: 50%;" />
                    <div class="pl-3">
                        <b>Nguyen van a</b>
                        <div style="line-height: 30px;">san pha mdung dc</div>
                        <div>22/01/2022</div>
                    </div>
                </div>
               
            </div>
    
            <hr />
        </div>
    
        <div class="d-flex justify-content-between align-items-center">
            <div>Nội dung</div>
            <div class="d-flex align-items-center">
                <input type="hidden" id="rating" name="rating" value="0" />
            </div>
        </div>
        <textarea name="content" class="form-control" style="outline: none; margin-bottom: 5px;"></textarea>
        <div>
    
            <input class="btn btn-maincolor" type="submit" value="Gửi" />
    
            <input data-val="true"
                   data-val-number="The field id_sp must be a number."
                   data-val-required="The id_sp field is required."
                   id="id_sp"
                   name="id_sp"
                   type="hidden"
                   value="0" />
    
        </div>
    <hr>
        <!-- Sản phẩm ngẫu nhiên -->
        <div class="body__mainTitle">
            <h2>CÓ THỂ BẠN CŨNG THÍCH</h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $randoms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $random): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="<?php echo e(route('detail', ['id' => $random->id_sanpham])); ?>">
                    <div class="product">
                        <div class="product__img">
                            <img src="<?php echo e(asset($random->anhsp)); ?>" alt="">
                        </div>
                        <div class="product__sale">
                            <div>
                                <?php if($random->giamgia): ?>
                                    -<?php echo e($random->giamgia); ?>%
                                <?php else: ?> Mới
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                <?php echo e($random->tensp); ?>

                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($random->giasp, 0, ',', '.')); ?>

                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        <?php echo e(number_format($random->giakhuyenmai, 0, ',', '.')); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/detail.blade.php ENDPATH**/ ?>