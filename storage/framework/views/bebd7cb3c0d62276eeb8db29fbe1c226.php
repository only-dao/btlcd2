<?php $__env->startSection('admin_content'); ?>
<h1 class="h3 mb-3"><strong>Thêm danh mục</strong></h1>

    <div class="err">
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>

    <form method="POST" action="<?php echo e(route('danhmuc.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="danhmuc" class="form-label">Tên danh mục:</label>
            <input type="text" class="form-control" id="danhmuc" name="ten_danhmuc" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Gửi</button>
        &nbsp;<a class="btn btn-secondary" href="<?php echo e(URL::to('/admin/danhmuc')); ?>">Hủy</a>
    </form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/admin/danhmucs/create.blade.php ENDPATH**/ ?>