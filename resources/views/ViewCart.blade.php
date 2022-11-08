
<link type="text/css" rel="stylesheet" href="{{asset('/public/css/cart.css')}}">

@extends('front.cart')

@section('content')
<div class="main">
    <div class="c-cart">
        <div class="container-view__cart">
            <div class="c-cart-wrap">
                <ol class="header-patch">
                    <li class="patch-items">
                        <a href="/finalWeb" class="home-link">Trang Chủ</a>
                    </li>
                    <li class="patch-items">
                        Giỏ hàng
                    </li>
                </ol>
                <div class="view-card">
                    <div class="card-title">Có 7 sản phẩm trong giỏ hàng</div>
                </div>
                <div class="view-card-body">
                    <div class="c-cart__block">
                        <div class="c-cart__product">
                            <div class="product-cart">
                                <div class="product-cart__img">
                                    <img src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983358740242127_iphone-14-pro-max-tim-1.jpg" alt="">
                                </div>
                                <div class="product-cart__infor">
                                    <div class="product-cart__inside">
                                        <a href="" class="product-cart__line">
                                            <h3 class="product-cart__name">iPhone 14 Pro Max 128GB</h3>
                                        </a>
                                        <div onclick="showDrop()" class="product-cart__line" style="display: flex">
                                            <div class="c-dropdown">
                                                <div class="c-dropdown-button">
                                                    Tím
                                                    <span class="arrow-select">
                                                        <svg style="width: 14px; height: 14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M182.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128z"/></svg>
                                                    </span>
                                                </div>
                                                <div class="c-dropdown-menu">
                                                        <div class="c-dropdown-menu__wrapper">
                                                            <a class="product-color" href="">Vàng</a>
                                                            <a class="product-color" href="">Đen</a>
                                                            <a class="product-color" href="">Bạc</a>
                                                            <a class="product-color" href="">Tím</a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart__quality">
                                        <div class="product-cart__quality__wrap">
                                            <button type="button" class="btn cs-btn js-btn-minus disabled">
                                                <svg style="width: 14px; height: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                                            </button>
                                            <input type="text" readonly class="cs-input-cart" value="1">
                                            <button type="button" class="btn cs-btn js-btn-plus">
                                                <span class="plus-text">+</span>
                                            </button>
                                        </div>
                                        <div class="product-cart__remove">
                                            <span>
                                                <svg style="width: 12px; height: 12px; fill: #939ca3; margin-right: 4px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"/></svg>
                                                <p style="margin: 0;">Xoá</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-cart__price">
                                        <div class="cs-price cs-price--main">33.990.000₫</div>
                                    </div>
                                    <div class="product-cart__combo"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-cart__block">
                        <div class="c-cart__product">
                            <div class="product-cart">
                                <div class="product-cart__img">
                                    <img src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983358740242127_iphone-14-pro-max-tim-1.jpg" alt="">
                                </div>
                                <div class="product-cart__infor">
                                    <div class="product-cart__inside">
                                        <a href="" class="product-cart__line">
                                            <h3 class="product-cart__name">iPhone 14 Pro Max 128GB</h3>
                                        </a>
                                        <div onclick="showDrop()" class="product-cart__line" style="display: flex">
                                            <div class="c-dropdown">
                                                <div class="c-dropdown-button">
                                                    Tím
                                                    <span class="arrow-select">
                                                        <svg style="width: 14px; height: 14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M182.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128z"/></svg>
                                                    </span>
                                                </div>
                                                <div class="c-dropdown-menu">
                                                        <div class="c-dropdown-menu__wrapper">
                                                            <a class="product-color" href="">Vàng</a>
                                                            <a class="product-color" href="">Đen</a>
                                                            <a class="product-color" href="">Bạc</a>
                                                            <a class="product-color" href="">Tím</a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="product-cart__quality">
                                        <div class="product-cart__quality__wrap">
                                            <button type="button" class="btn cs-btn js-btn-minus disabled">
                                                <svg style="width: 14px; height: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                                            </button>
                                            <input type="text" readonly class="cs-input-cart" value="1">
                                            <button type="button" class="btn cs-btn js-btn-plus">
                                              <span class="plus-text">+</span>
                                            </button>
                                        </div>
                                        <div class="product-cart__remove">
                                            <span>
                                                <svg style="width: 12px; height: 12px; fill: #939ca3; margin-right: 4px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"/></svg>
                                                <p style="margin: 0;">Xoá</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-cart__price">
                                        <div class="cs-price cs-price--main">33.990.000₫</div>
                                    </div>
                                    <div class="product-cart__combo"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-cart__block">
                        <div class="c-cart__product">
                            <div class="product-cart">
                                <div class="product-cart__img">
                                    <img src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983358740242127_iphone-14-pro-max-tim-1.jpg" alt="">
                                </div>
                                <div class="product-cart__infor">
                                    <div class="product-cart__inside">
                                        <a href="" class="product-cart__line">
                                            <h3 class="product-cart__name">iPhone 14 Pro Max 128GB</h3>
                                        </a>
                                        <div onclick="showDrop()" class="product-cart__line" style="display: flex">
                                            <div class="c-dropdown">
                                                <div class="c-dropdown-button">
                                                    Tím
                                                    <span class="arrow-select">
                                                        <svg style="width: 14px; height: 14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M182.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128z"/></svg>
                                                    </span>
                                                </div>
                                                <div class="c-dropdown-menu">
                                                        <div class="c-dropdown-menu__wrapper">
                                                            <a class="product-color" href="">Vàng</a>
                                                            <a class="product-color" href="">Đen</a>
                                                            <a class="product-color" href="">Bạc</a>
                                                            <a class="product-color" href="">Tím</a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="product-cart__quality">
                                        <div class="product-cart__quality__wrap">
                                            <button type="button" class="btn cs-btn js-btn-minus disabled">
                                                <svg style="width: 14px; height: 14px;fill: #939ca3;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                                            </button>
                                            <input type="text" readonly class="cs-input-cart" value="1">
                                            <button type="button" class="btn cs-btn js-btn-plus">
                                                <span class="plus-text">+</span>
                                            </button>
                                        </div>
                                        <div class="product-cart__remove">
                                            <span>
                                                <svg style="width: 12px;height: 12px; fill: #939ca3; margin-right: 4px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"/></svg>
                                                <p style="margin: 0">Xoá</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-cart__price">
                                        <div class="cs-price cs-price--main">33.990.000₫</div>
                                    </div>
                                    <div class="product-cart__combo"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-cart__block">
                        <div class="c-cart__product">
                            <div class="product-cart">
                                <div class="product-cart__img">
                                    <img src="https://fptshop.com.vn/Uploads/Originals/2022/7/29/637946871737901127_hp-pavilion-15-eg2059tu-i5-1240p-vang-1.jpg" alt="">
                                </div>
                                <div class="product-cart__infor">
                                    <div class="product-cart__inside">
                                        <a href="" class="product-cart__line">
                                            <h3 class="product-cart__name">Laptop HP Pavilion 15 eg2058TU i5 1240P/8GB/256GB/15.6"FHD/Win 11</h3>
                                        </a>
                                        <div onclick="showDrop()" class="product-cart__line" style="display: flex">
                                            <div class="c-dropdown">
                                                <div class="c-dropdown-button">
                                                    Tím
                                                    <span class="arrow-select">
                                                        <svg style="width: 14px; height: 14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M182.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128z"/></svg>
                                                    </span>
                                                </div>
                                                <div class="c-dropdown-menu">
                                                        <div class="c-dropdown-menu__wrapper">
                                                            <a class="product-color " href="">Vàng</a>
                                                            <a class="product-color " href="">Đen</a>
                                                            <a class="product-color " href="">Bạc</a>
                                                            <a class="product-color active" href="">Tím</a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="product-cart__quality">
                                        <div class="product-cart__quality__wrap">
                                            <button type="button" class="btn cs-btn js-btn-minus disabled">
                                                <svg style="width: 14px; height: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                                            </button>
                                            <input type="text" readonly class="cs-input-cart" value="1">
                                            <button type="button" class="btn cs-btn js-btn-plus">
                                              <span class="plus-text">+</span>
                                            </button>
                                        </div>
                                        <div class="product-cart__remove">
                                            <span>
                                                <svg class="trash-svg" style="width: 12px; height: 12px; fill: #939ca3; margin-right: 4px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"/></svg>
                                                <p style="margin: 0;">Xoá</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-cart__price">
                                        <div class="cs-price cs-price--main">33.990.000₫</div>
                                    </div>
                                    <div class="product-cart__combo"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
