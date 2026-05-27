<?php $__env->startSection('content'); ?>

<style>
        .checkoutCard {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        .checkout_order {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        .checkmark_content {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      .checkmark {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card_order {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
</style>

<div class="body">
    <div class="checkoutCard">
        <div class="card_order">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
            <h1 class="checkout_order">Đặt hàng thành công</h1> 
            <p class="checkmark_content">Chúng tôi đang trên đường giao đến bạn<br/>hãy để ý đơn hàng!</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/thongbaodathang.blade.php ENDPATH**/ ?>