<?php $__env->startSection('content'); ?>

<div class="body">
    <h1 class="h3 mb-3"><strong>Danh sách đơn hàng</strong></h1>

<div class="">
  <?php if(session()->has('success')): ?>
      <div class="alert alert-success mb-3">
          <?php echo e(session('success')); ?>

      </div>
  <?php endif; ?>
</div>

<div class="card flex-fill">

  <table class="table table-hover my-0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Phương thức tt</th>
        <th>Ngày đặt</th>
        <th>Ngày giao dự kiến</th>
        <th>Trạng thái</th>
        <th>Địa chỉ giao hàng</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($order->id_dathang); ?></td>

        <?php if($order->phuongthucthanhtoan == "COD"): ?>
          <td class="d-none d-xl-table-cell"><div class="badge bg-secondary text-white"><?php echo e($order->phuongthucthanhtoan); ?></div></td>
        <?php elseif($order->phuongthucthanhtoan == "VNPAY"): ?>
          <td class="d-none d-xl-table-cell"><div class="badge bg-primary text-white"><?php echo e($order->phuongthucthanhtoan); ?></div></td>
        <?php else: ?>
        <td class="d-none d-xl-table-cell"><?php echo e($order->phuongthucthanhtoan); ?></td>
        <?php endif; ?>

        <td class="d-none d-xl-table-cell"><?php echo e($order->ngaydathang); ?></td>
          <?php if($order->ngaygiaohang): ?>
            <td class="d-none d-xl-table-cell"><?php echo e(date('d/m/Y', strtotime($order->ngaygiaohang))); ?></td>
          <?php else: ?>
            <td></td>
          <?php endif; ?>
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
        <td class="d-none d-md-table-cell"><?php echo e($order->diachigiaohang); ?></td>
        <td class="d-none d-md-table-cell"><a href="<?php echo e(route('donhang.edit', ['id' => $order->id_dathang])); ?>" class="btn btn-primary">Xem đơn hàng</a></td>
      </tr>
      <tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/donhang.blade.php ENDPATH**/ ?>