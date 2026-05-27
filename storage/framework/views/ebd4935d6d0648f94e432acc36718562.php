<?php $__env->startSection('admin_content'); ?>

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
        <th>Ngày giao</th>
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
          <td class="d-none d-xl-table-cell"><div class="badge bg-secondary"><?php echo e($order->phuongthucthanhtoan); ?></div></td>
        <?php elseif($order->phuongthucthanhtoan == "VNPAY"): ?>
          <td class="d-none d-xl-table-cell"><div class="badge bg-primary"><?php echo e($order->phuongthucthanhtoan); ?></div></td>
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
            <span class="badge bg-primary"><?php echo e($order->trangthai); ?></span>
          <?php elseif($order->trangthai == 'chờ lấy hàng'): ?>
            <span class="badge bg-warning"><?php echo e($order->trangthai); ?></span>
          <?php elseif($order->trangthai == 'đang giao hàng'): ?>
            <span class="badge bg-success"><?php echo e($order->trangthai); ?></span>
          <?php elseif($order->trangthai == 'giao thành công'): ?>
            <span class="badge bg-success"><?php echo e($order->trangthai); ?></span>
          <?php else: ?>
            <span class="badge bg-danger"><?php echo e($order->trangthai); ?></span>
          <?php endif; ?>
        </td>
        <td class="d-none d-md-table-cell"><?php echo e($order->diachigiaohang); ?></td>
        <td class="d-none d-md-table-cell"><a href="<?php echo e(route('orders.edit', ['orders' => $order->id_dathang])); ?>" class="btn btn-primary">Edit</a></td>
      </tr>
      <tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

</div>

<ul class="pagination">
  <li class="page-item <?php if($orders->currentPage() === 1): ?> disabled <?php endif; ?>">
      <a class="page-link" href="<?php echo e($orders->previousPageUrl()); ?>">Previous</a>
  </li>
  <?php for($i = 1; $i <= $orders->lastPage(); $i++): ?>
      <li class="page-item <?php if($orders->currentPage() === $i): ?> active <?php endif; ?>">
          <a class="page-link" href="<?php echo e($orders->url($i)); ?>"><?php echo e($i); ?></a>
      </li>
  <?php endfor; ?>
  <li class="page-item <?php if($orders->currentPage() === $orders->lastPage()): ?> disabled <?php endif; ?>">
      <a class="page-link" href="<?php echo e($orders->nextPageUrl()); ?>">Next</a>
  </li>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>