<nav class="sb-sidenav accordion sb-sidenav-dark" style="background-color: #343A40" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading text-white-50">Chức Năng Chính</div>
            <a class="nav-link collapsed text-white-50" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fa-brands fa-buffer"></i></div>
                Danh Mục
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admincat.create') }}">Thêm Danh Mục</a>
                    <a class="nav-link" href="{{ route('admincat.index') }}">Danh Sách Danh Mục</a>
                </nav>
            </div>
            <a class="nav-link collapsed text-white-50" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fa-brands fa-pix"></i></div>
                Sản Phẩm
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="#">Thêm Sản Phẩm</a>
                    <a class="nav-link" href="{{ route('adminpro.index') }}">Danh Sách Sản Phẩm</a>
                </nav>
            </div>
            <a class="nav-link collapsed text-white-50" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-business-time"></i></div>
                Đơn Hàng
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="#">Danh Sách Đơn Hàng</a>
                    <a class="nav-link" href="{{ route('adminThongke') }}">Thống Kê</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="sb-sidenav-footer" style="background-color: #343A40">
        <div class="small"></div>

    </div>
</nav>
