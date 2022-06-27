<header class="section-header border-bottom">
    <nav class="navbar navbar-expand-xl navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('frontend/images/logo_h&f.png') }}"
                    height="40" class="logo"> </a>
            <div class="d-flex align-items-center">
                <div class="d-xl-none me-2">
                    <a href="{{ url('profile/account') }}" class="btn btn-light"> <i class="fa fa-user"></i> </a>
                    <a href="https://bootstrap-ecommerce.com/components.html" class="btn btn-light"> <i
                            class="fa fa-heart"></i> </a> <a href="https://bootstrap-ecommerce.com/components.html"
                        class="btn btn-light"> Cart (2)</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main5"
                    aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar_main5">
                @include('front.partials.nav')
                <form class="me-3">
                    <div class="input-group"> <input type="text" class="form-control" placeholder="Search">
                        <button class="btn-icon btn-light btn"> <i class="fa fa-search"></i> </button>
                    </div>
                </form>
                <!-- form end.// -->
                <div class="widgets-wrap d-none d-xl-flex">
                    <div class="widget-header ms-2">
                        <a href="#"
                            class="icon icon-sm rounded-circle bg-gray-200" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                            <li> <a class="dropdown-item" href="{{ url('profile/account') }}">Profile</a> </li>
                            <li> <a class="dropdown-item" href="{{ url('profile/setting') }}">Account Settings</a> </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="#">Sign Out</a> </li>
                        </ul>
                    </div>
                    <div class="widget-header ms-2">
                        <a href="https://bootstrap-ecommerce.com/components.html#"
                            class="icon icon-sm rounded-circle bg-gray-200"> <i class="fa fa-heart"></i> </a>
                    </div>
                    <div class="widget-header ms-2">
                        <div class="dropdown">
                            <a href="#"
                                class="icon icon-sm rounded-circle bg-gray-200" data-bs-toggle="dropdown">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="notify">0</span>
                            </a>
                            <div class="dropdown-menu p-3 dropdown-menu-end" style="min-width:300px;">
                                <div class="itemside mb-3">
                                    <div class="aside"><img src="{{ asset('frontend/images/manteau.jpg') }}"
                                            class="img-sm rounded border"></div>
                                    <div class="info"> <a href="https://bootstrap-ecommerce.com/components.html#"
                                            class="title">Canon Cmera EOS</a> <small class="text-muted">Blue Size: M
                                            QTY: 1</small>
                                        <div class="price text-muted">$9.50</div>
                                        <!-- price .// -->
                                    </div>
                                    <div class="flex-grow-0 ms-2"> <a
                                            href="https://bootstrap-ecommerce.com/components.html#"
                                            class="btn btn-sm btn-light float-end"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="itemside mb-3">
                                    <div class="aside"><img src="{{ asset('frontend/images/manteau.jpg') }}"
                                            class="img-sm rounded border"></div>
                                    <div class="info"> <a href="https://bootstrap-ecommerce.com/components.html#"
                                            class="title">Name of item nice iteme</a> <small class="text-muted">Blue
                                            Size: M QTY: 1</small>
                                        <div class="price text-muted">$9.50</div>
                                        <!-- price .// -->
                                    </div>
                                    <div class="flex-grow-0 ms-2"> <a
                                            href="https://bootstrap-ecommerce.com/components.html#"
                                            class="btn btn-sm btn-light float-end"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="itemside mb-3">
                                    <div class="aside"><img src="{{ asset('frontend/images/manteau.jpg') }}"
                                            class="img-sm rounded border"></div>
                                    <div class="info"> <a href="https://bootstrap-ecommerce.com/components.html#"
                                            class="title">Name of item nice iteme</a> <small class="text-muted">Blue
                                            Size: M QTY: 1</small>
                                        <div class="price text-muted">$9.50</div>
                                        <!-- price .// -->
                                    </div>
                                    <div class="flex-grow-0 ms-2"> <a
                                            href="https://bootstrap-ecommerce.com/components.html#"
                                            class="btn btn-sm btn-light float-end"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="my-3"> Subtotal: <strong class="float-end price">$944.99</strong> </div>
                                <a href="{{ url('cart') }}" class="btn btn-primary text-white w-100"> Checkout </a>
                            </div>
                            <!-- drowpdown-menu.// -->
                        </div>
                        <!-- dropdown.// -->
                    </div>
                </div>
            </div>
            <!-- collapse end.// -->
        </div>
        <!-- container end.// -->
    </nav>
    <!-- navbar end.// -->
</header>
