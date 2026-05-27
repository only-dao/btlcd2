<?php $__env->startSection('admin_content'); ?>

<h1 class="h3 mb-3"><strong>Danh sách danh mục</strong></h1>

<div class="">
  <?php if(session()->has('success')): ?>
      <div class="alert alert-success mb-3">
          <?php echo e(session('success')); ?>

      </div>
  <?php endif; ?>
</div>

<a class="btn btn-primary" href="<?php echo e(route('danhmuc.create')); ?>">Thêm danh mục</a>

  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>

    <tbody>
      <?php $__currentLoopData = $Danhmucs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $danhmuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($danhmuc->id_danhmuc); ?></td>
        <td><?php echo e($danhmuc->ten_danhmuc); ?></td>
        <td colspan="2">
          <a href="<?php echo e(route('danhmuc.edit', ['danhmuc' => $danhmuc])); ?>" class="btn btn-warning mb-2">Edit</a>
          <form method="post" action="<?php echo e(route('danhmuc.destroy', ['danhmuc' => $danhmuc])); ?>">
              <?php echo csrf_field(); ?>
              <?php echo method_field('delete'); ?>
              <input type="submit" class="btn btn-danger" value="Delete"
              onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/admin/danhmucs/index.blade.php ENDPATH**/ ?>