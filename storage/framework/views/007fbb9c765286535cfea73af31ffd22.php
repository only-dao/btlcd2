<?php $__env->startSection('content'); ?>
    <!--Main-->
    <div class="login-form">
        <div class="height360">
            <div class="main">

                <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('login')); ?>" method="POST" class="form" id="form-2">
                   <?php echo csrf_field(); ?> 
                    <h3 class="heading">Đăng nhập</h3>
    
    
                    <div class="form-group">
                        <label for="Fullname" class="form-label">Nhập email</label>
                        <input type="email" name="email" class="form-control">
                        <span class="form-message"></span>
                    </div>
    
                    <div class="form-group">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" name="password" class="form-control">
                        <span class="form-message"></span>
                    </div>
    
                    
                    <button type="submit" class="form-submit" value="Login" name="login_submit">Đăng nhập</button>
    
                    <div class="dont-have-account">
                        Bạn chưa có tài khoản? <a class="account-register" href="<?php echo e(URL::to('register')); ?>">Đăng ký ngay</a>
                    </div>
                    <div class="dont-have-account">
                        Quên mật khẩu? <a class="account-register" href="#">Lấy lại mật khẩu</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/login.blade.php ENDPATH**/ ?>