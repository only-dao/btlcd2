@extends('layout')
@section('content')

<style>
    @media (max-width: 992px) {
    .body {
        width: unset;
        margin: 0 auto;
    }
}
</style>

<div class="post-slider">
    <div class="post-wrapper">
        <div class="post">
            <img src="{{ asset('frontend/img/BG-2.jpg')}}" alt="">
        </div>
    </div>

</div>

<div class="modal">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">

        <div class="modal-header">
            <button class="modal-close modal-toggle btn fa fa-times" style="outline: none;"></button>
            <h2 class="modal-heading">Xem thêm</h2>
        </div>

        <style>
            .form-horizontal .control-label {
                text-align: unset !important;
            }
        </style>

    </div>
</div>

<div class="body">
    <div class="container-fluid" style="padding: 0!important;">
        <div style="background-image: url('frontend/img/bg_7.jpg')" class="service-banner">
            <div class="boxservice">
                <h3 class="h1-title">
                    THIÊN ĐƯỜNG CỦA CẦN THỦ
                </h3>
                <p>Với mong muốn được trở thành điểm đến ưu thích của các dân chuyên nghiệp.</p>

                <button class="btn btn-danger mt-5 modal-toggle">Xem thêm!</button>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4" style="padding: 15px!important;">
            <div style="background-color: #2885BA" class="service-list__content-box">
                <img src="{{ asset('frontend/img/svmeo.jpg')}}" alt="">
                <h3 class="h1-title">
                    CHÍNH SÁCH ĐỔI TRẢ
                </h3>

                <p>
                    Quý khách có thể trả lại sản phẩm đã mua tại Shopcancau.vn trong vòng 7 ngày kể từ khi nhận hàng với đa số sản phẩm (trừ những sản phẩm có quy định khác) khi thỏa mãn các điều kiện sau:

Sản phẩm còn nguyên tem, mác hay niêm phong của nhà sản xuất

Sản phẩm còn đầy đủ phụ kiện, quà tặng khuyến mại
                </p>

            </div>
        </div>
        <div class="col-lg-4" style="padding: 15px!important;">
            <div style="background-color: #B56256" class="service-list__content-box">
                <img src="{{ asset('frontend/img/svmeo2.jpg')}}" alt="">
                <h3 class="h1-title">
                   CHÍNH SÁCH THANH TOÁN
                </h3>

                <p>
                     Quý khách có thể trực tiếp click vào từng sản phẩm,xem báo giá từng mẫu,màu sắc,kích cỡ....và tiến hành đặt mua bằng cách thêm số lượng sản phẩm vào từng mẫu và bấm nút MUA SẢN PHẨM - hệ thống sẽ tự động chuyển tới giỏ hàng.
                </p>

                <p>
                    Quý khách có thể tiến hành đặt mua thêm các sản phẩm khác,hoặc tiến hành thanh toán,hệ thống sẽ chuyển tới giao diện thanh toán,tại đây quý khách có thể điền thông tin như : Tên - Địa chỉ nhận hàng - Sđt để hoàn tất đơn hàng.
                </p>
            </div>
        </div>
        <div class="col-lg-4" style="padding: 15px!important;">
            <div style="background-color: #5C9CCA" class="service-list__content-box">
                <img src="{{ asset('frontend/img/svmeo3.jpg')}}" alt="">
                <h3 class="h1-title">
                    CHÍNH SÁCH BẢO HÀNH
                </h3>

                <p>
                   Tất cả các sản phầm của shop đều là sản phẩm chính hãng vậy nên sẽ được bảo hành trên tất cả các chi nhánh của shop và đối tác. Sau khi mua sau thời gian sử dụng khi có hỏng quý khách hoàn toàn có thể yên tâm và đến các chi nhánh trực tiếp của shop để được hỗ trợ bảo hành.
                </p>
            </div>
        </div>

    </div>

    <div class="service-text mb30">
        <div class="service-text__content">
            <h2 class="h2-title">
            </h2><h2 class="h2-title">Luôn có gắng tạo nên những dịch vụ tốt nhất để có thể trở thành điểm đến thường xuyên của các cần thủ!!!</h2>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <img class="banner-service" src="{{ asset('frontend/img/svbg.jpg')}}" alt="">

        </div>
    </div>
</div>
@endsection