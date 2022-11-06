<div class="col-lg-3 d-none d-lg-block header-search">
    <a href="" class="text-decoration-none">
        <h1 class="m-0 display-5 font-weight-semi-bold">
            <img src="{{asset('/public/images/default-dark.svg')}}" alt="" style="width: 150px">
            {{-- <span class="text font-weight-bold border px-3 mr-1">IT-4M</span> --}}
        </h1>
    </a>
</div>
<div class="col-lg-6 col-6 arear-search text-left">
    <div>
        <div class="search" aria-expanded="false">
            <input type="search" class="input-search" placeholder="Search products...." value="">
            <button class="search-btn">
                <svg width="1.6rem" height="1.6rem" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M22 10C15.3726 10 10 15.3726 10 22C10 28.6274 15.3726 34 22 34C28.6274 34 34 28.6274 34 22C34 15.3726 28.6274 10 22 10ZM6 22C6 13.1634 13.1634 6 22 6C30.8366 6 38 13.1634 38 22C38 25.6974 36.7458 29.1019 34.6397 31.8113L43.3809 40.5565C43.7712 40.947 43.7712 41.5801 43.3807 41.9705L41.9665 43.3847C41.5759 43.7753 40.9426 43.7752 40.5521 43.3846L31.8113 34.6397C29.1019 36.7458 25.6974 38 22 38C13.1634 38 6 30.8366 6 22Z"></path></svg>
            </button>
        </div>
    </div>
</div>

<div class="col-lg-3 col-6 text-right "
    style=" position: relative;
            display: flex;
            align-items: center;
            justify-content: end;
    "
>
        <div class="btn-notify">
            <svg viewBox="3 2.5 14 14" x="0" y="0" class=" svg-icon icon-notification"><path d="m17 15.6-.6-1.2-.6-1.2v-7.3c0-.2 0-.4-.1-.6-.3-1.2-1.4-2.2-2.7-2.2h-1c-.3-.7-1.1-1.2-2.1-1.2s-1.8.5-2.1 1.3h-.8c-1.5 0-2.8 1.2-2.8 2.7v7.2l-1.2 2.5-.2.4h14.4zm-12.2-.8.1-.2.5-1v-.1-7.6c0-.8.7-1.5 1.5-1.5h6.1c.8 0 1.5.7 1.5 1.5v7.5.1l.6 1.2h-10.3z"></path><path d="m10 18c1 0 1.9-.6 2.3-1.4h-4.6c.4.9 1.3 1.4 2.3 1.4z"></path></svg>
        </div>

        <div class="container-notify">
            <div class="wrap-notify">
                <div class="content-notify">
                    <img class="img-notify" src="{{asset('/public/images/no-notify.png')}}" alt="">
                    <p class="notify-text">Log in to view notifications</p>
                </div>
            </div>
            <div class="auth-btn">
                <button class="btn-login btn-hover">Login</button>
                <button class="btn-signup btn-hover">Sign Up</button>
            </div>
        </div>
    <div class="btn-cart">
        <i class="icon-cart fas fa-shopping-cart text-primary"></i>
        <div class="cart-number">7</div>
    </div>

    <div class="btn-user">
        <img src="{{asset('/public/images/user.png')}}" class="img-user" alt="">
        <div class="header-user">
            <ul class="user-list">
                <li class="user-item">
                    <a href="#"> My Account</a>
                </li>
                <li class="user-item ">
                    <a href="#">My Purchase</a>
                </li>
                <li class="user-item separate">
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>


    <div class="wrap-cart">
        {{-- <div class="container">
            <img class="img-no-cart" src="{{asset('/public/images/no-cart.png')}}" alt="">
            <div class="text-des">No Products Yet</div>
        </div> --}}
        <div class="has-product">
            <div class="text-product">recently added products</div>
            <ul class="product-list">
                <li class="product-item">
                    <img class="product-img" src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983360411675900_iphone-14-pro-max-den-1.jpg" alt="">
                    <div class="product-infor">
                        <div class="product-name">iPhone 14 Pro Max 128GB</div>
                        <div class="product-price">₫33.000</div>
                    </div>
                </li>
                <li class="product-item">
                    <img class="product-img" src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983360411675900_iphone-14-pro-max-den-1.jpg" alt="">
                    <div class="product-infor">
                        <div class="product-name">iPhone 14 Pro Max 128GB</div>
                        <div class="product-price">₫33.000</div>
                    </div>
                </li>
                <li class="product-item">
                    <img class="product-img" src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983360411675900_iphone-14-pro-max-den-1.jpg" alt="">
                    <div class="product-infor">
                        <div class="product-name">iPhone 14 Pro Max 128GB iPhone 14 Pro Max 128GB</div>
                        <div class="product-price">₫33.000</div>
                    </div>
                </li>
                <li class="product-item">
                    <img class="product-img" src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983360411675900_iphone-14-pro-max-den-1.jpg" alt="">
                    <div class="product-infor">
                        <div class="product-name">iPhone 14 Pro Max 128GB iPhone 14 Pro Max 128GB</div>
                        <div class="product-price">₫33.000</div>
                    </div>
                </li>
                <li class="product-item">
                    <img class="product-img" src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983360411675900_iphone-14-pro-max-den-1.jpg" alt="">
                    <div class="product-infor">
                        <div class="product-name">iPhone 14 Pro Max 128GB iPhone 14 Pro Max 128GB</div>
                        <div class="product-price">₫33.000</div>
                    </div>
                </li>
                <li class="product-item">
                    <img class="product-img" src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983360411675900_iphone-14-pro-max-den-1.jpg" alt="">
                    <div class="product-infor">
                        <div class="product-name">iPhone 14 Pro Max 128GB</div>
                        <div class="product-price">₫33.000</div>
                    </div>
                </li>
                <li class="product-item">
                    <img class="product-img" src="https://fptshop.com.vn/Uploads/Originals/2022/9/9/637983360411675900_iphone-14-pro-max-den-1.jpg" alt="">
                    <div class="product-infor">
                        <div class="product-name">iPhone 14 Pro Max 128GB</div>
                        <div class="product-price">₫33.000</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
