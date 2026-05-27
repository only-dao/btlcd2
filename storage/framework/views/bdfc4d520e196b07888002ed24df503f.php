<?php $__env->startSection('content'); ?>

<style>
.quantity-input {
    display: flex;
    align-items: center;
}

.quantity-btn {
    background-color: #ff4500;
    border: none;
    color: #fff;
    cursor: pointer;
    padding: 8px 15px; /* Giảm padding cho nút */
    transition: background-color 0.3s ease, color 0.3s ease;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    font-weight: bold;
    font-size: 14px;
}

.quantity-btn:hover {
    background-color: #ff5a1f;
}

/* Ẩn các nút mặc định của input number */
.quantity-field::-webkit-outer-spin-button,
.quantity-field::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.quantity-field:focus::-webkit-outer-spin-button,
.quantity-field:focus::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.quantity-field {
    width: 50px;
    text-align: center;
    padding: 8px 0px;
    outline: none;
    border: none;
    border-top: .px solid;
}

</style>

<div class="body">

    <?php if(session('success')): ?>
        <div class="alert alert-success mt-3">
        <?php echo e(session('success')); ?>

        </div> 
    <?php endif; ?>

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th>Ảnh sp</th>
            <th>Tên sp</th>
            <th>Giá gốc</th>
            <th>Giảm giá</th>
            <th>Giá khuyến mại</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
        </thead>
            <tbody>
            <?php $total = 0 ?>
            <?php if(session('cart')): ?>
                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $total += $details['giakhuyenmai'] * $details['quantity'] ?>

                    <tr data-id="<?php echo e($id); ?>">
                        <td><img src="<?php echo e(asset($details['anhsp'])); ?>" width="100" height="100" class="img-responsive"/></td>
                        <td>
                            <div><?php echo e($details['tensp']); ?></div>
                            <button class="btn btn-danger btn-sm cart_remove mt-2"><i class="fa fa-trash-o"></i> Xóa</button>
                        </td>  
                        <td data-th="Price"><?php echo e($details['giasp']); ?></td>
                        <td data-th="Price"><?php echo e($details['giamgia']); ?>%</td>
                        <td data-th="Subtotal" class="text-center"><?php echo e($details['giakhuyenmai']); ?>đ</td>

                        <td data-th="Quantity" class="quantity-input">
                            <button class="quantity-btn decreaseValue">-</button>
                            <input id="quantity" class="quantity-field quantity cart_update" type="number" min="1" max="999" value="<?php echo e($details['quantity']); ?>">
                            <button class="quantity-btn increaseValue">+</button>
                        </td>

                        <td data-th="" class="text-center"><?php echo e($details['giakhuyenmai'] * $details['quantity']); ?>đ</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
        <tfoot>

        <tr>
        <td colspan="7" class="text-right">
            <h3 class="d-flex justify-content-end align-items-center">
                Tổng thanh toán &nbsp;<div class="text-danger" style="font-size: 40px;"><?php echo e(number_format($total, 0, ',', '.')); ?>đ</div>
            </h3>
        </td>
        </tr>

        <tr>
        <td colspan="7" class="text-right">
        <a href="<?php echo e(url('/')); ?>" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Tiếp tục mua sắm</a>
        <button class="btn btn-success"><a class="text-white" href="<?php echo e(route('checkout')); ?>">Mua hàng</a></button>
        </td>
        </tr>

        </tfoot>
        </table>
</div>

<script type="text/javascript">


var decreaseValues = document.querySelectorAll('.decreaseValue');
decreaseValues.forEach(function(decreaseValue) {
    decreaseValue.addEventListener('click', function(e) {

        e.preventDefault();

        var quantitys = document.querySelectorAll('.quantity');
        quantitys.forEach(function(quantity) {

            var value = parseInt(quantity.value, 10);
            var min = parseInt(quantity.getAttribute('min'), 10); // Lấy giá trị min từ thuộc tính min của quantity

            // Nếu giá trị hiện tại không phải là giá trị tối thiểu
            if (!isNaN(min) && value > min) {
                value--; // Giảm giá trị
                quantity.value = value; // Cập nhật giá trị của input
            }
        })

        var ele = $(this);
        
        $.ajax({
            url: '<?php echo e(route('update_cart')); ?>',
            method: "patch",
            data: {
                _token: '<?php echo e(csrf_token()); ?>', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
            window.location.reload();
            }
        });

    });
});

var increaseValues = document.querySelectorAll('.increaseValue');
increaseValues.forEach(function(increaseValue) {
    increaseValue.addEventListener('click', function(e) {
    e.preventDefault();

    var quantitys1 = document.querySelectorAll('.quantity');
        quantitys1.forEach(function(quantity) {
            var value = parseInt(quantity.value, 10);
            value = isNaN(value) ? 1 : value;
            value++;
            quantity.value = value;
        })
    
    var ele1 = $(this);
    
    $.ajax({
        url: '<?php echo e(route('update_cart')); ?>',
        method: "patch",
        data: {
            _token: '<?php echo e(csrf_token()); ?>', 
            id: ele1.parents("tr").attr("data-id"), 
            quantity: ele1.parents("tr").find(".quantity").val()
        },
        success: function (response) {
        window.location.reload();
        }
    });
    });
});

var cart_updates = document.querySelectorAll('.cart_update');
    cart_updates.forEach(function(cart_update) {

        cart_update.addEventListener('change', function (e) {
        e.preventDefault();

        var value = parseInt(this.value, 10); // Lấy giá trị nhập vào
        var min = parseInt(this.getAttribute('min'), 10); // Lấy giá trị min
        var max = parseInt(this.getAttribute('max'), 10); // Lấy giá trị max

        // Kiểm tra nếu giá trị nhập vào nhỏ hơn min hoặc lớn hơn max
        if (isNaN(value) || value < min) {
            this.value = min; // Thiết lập giá trị là min
        } else if (value > max) {
            this.value = max; // Thiết lập giá trị là max
        }

        var ele = $(this);

        $.ajax({
            url: '<?php echo e(route('update_cart')); ?>',
            method: "patch",
            data: {
                _token: '<?php echo e(csrf_token()); ?>', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
            window.location.reload();
            }
        });
    });
})

var cart_removes = document.querySelectorAll('.cart_remove');
cart_removes.forEach(function(cart_remove) {
    cart_remove.addEventListener('click', function(e) {
        e.preventDefault();

        var ele3 = $(this);

        if(confirm("Bạn có thật sự muốn xóa?")) {
            $.ajax({
                url: '<?php echo e(route('remove_from_cart')); ?>',
                method: "DELETE",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>', 
                    id: ele3.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    })
})

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\chuyendetn1\baitaplon\btl\webdocau\resources\views/pages/cart.blade.php ENDPATH**/ ?>