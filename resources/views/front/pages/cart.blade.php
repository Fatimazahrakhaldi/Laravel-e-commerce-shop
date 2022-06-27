@extends('front.app')
@section('title', 'panier')

@section('content')
    @include('front.partials.breadcrumbs')
    <section class="padding-y bg-light">
        <div class="container">
            <!-- ====================== COMPONENT 2 CART+SUMMARY ====================== -->
            <div class="row">
                <div class="col-md-9">
                    <article class="card card-body mb-3">
                        <div class="row gy-3 align-items-center">
                            <div class="col-md-6">
                                <a href="https://bootstrap-ecommerce.com/components.html#"
                                    class="itemside align-items-center">
                                    <div class="aside">
                                        <img src="{{ asset('frontend/images/manteau.jpg') }}" height="72"
                                            width="72" class="img-thumbnail img-sm">
                                    </div>
                                    <div class="info">
                                        <p class="title">T-shirts with multiple colors, for men and lady </p>
                                        <span class="text-muted">Clothes</span>
                                    </div>
                                </a>
                            </div>
                            <!-- col.// -->
                            <div class="col-auto">
                                <div class="input-group input-spinner">
                                    <button class="btn btn-light" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999"
                                            viewBox="0 0 24 24">
                                            <path d="M19 13H5v-2h14v2z"></path>
                                        </svg>
                                    </button>
                                    <input type="number" class="form-control" value="1" min="1">
                                    <button class="btn btn-light" type="button"> <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="#999" viewBox="0 0 24 24">
                                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- input-group.// -->
                            </div>
                            <!-- col.// -->
                            <div class="col"> <strong class="price"> $180.00 </strong> </div>
                            <div class="col text-end">
                                <a href="https://bootstrap-ecommerce.com/components.html#"
                                    class="btn btn-icon btn-outline-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <!-- row.// -->
                    </article>
                    <!-- card .// -->
                    <article class="card card-body mb-3">
                        <div class="row gy-3 align-items-center">
                            <div class="col-md-6">
                                <a href="https://bootstrap-ecommerce.com/components.html#"
                                    class="itemside align-items-center">
                                    <div class="aside">
                                        <img src="{{ asset('frontend/images/manteau.jpg') }}" height="72"
                                            width="72" class="img-thumbnail img-sm">
                                    </div>
                                    <div class="info">
                                        <p class="title"> Backpack jeans for travel for men and lady </p>
                                        <span class="text-muted"> Accessories </span>
                                    </div>
                                </a>
                            </div>
                            <!-- col.// -->
                            <div class="col-auto">
                                <div class="input-group input-spinner">
                                    <button class="btn btn-light" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999"
                                            viewBox="0 0 24 24">
                                            <path d="M19 13H5v-2h14v2z"></path>
                                        </svg>
                                    </button>
                                    <input type="number" class="form-control" value="1" min="1">
                                    <button class="btn btn-light" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999"
                                            viewBox="0 0 24 24">
                                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- input-group.// -->
                            </div>
                            <!-- col.// -->
                            <div class="col"> <strong class="price"> $180.00 </strong> </div>
                            <div class="col text-end">
                                <a href="https://bootstrap-ecommerce.com/components.html#"
                                    class="btn btn-icon btn-outline-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <!-- row.// -->
                    </article>
                    <!-- card .// -->
                    <article class="card card-body mb-3">
                        <div class="row gy-3 align-items-center">
                            <div class="col-md-6">
                                <a href="https://bootstrap-ecommerce.com/components.html#"
                                    class="itemside align-items-center">
                                    <div class="aside"> <img src="{{ asset('frontend/images/manteau.jpg') }}"
                                            height="72" width="72" class="img-thumbnail img-sm"> </div>
                                    <div class="info">
                                        <p class="title">Jeans bag for hiking blue color </p> <span
                                            class="text-muted">Wears</span>
                                    </div>
                                </a>
                            </div>
                            <!-- col.// -->
                            <div class="col-auto">
                                <div class="input-group input-spinner"> <button class="btn btn-light" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="#999" viewBox="0 0 24 24">
                                            <path d="M19 13H5v-2h14v2z"></path>
                                        </svg>
                                    </button>
                                    <input type="number" class="form-control" value="2" min="1">
                                    <button class="btn btn-light" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="#999" viewBox="0 0 24 24">
                                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- input-group.// -->
                            </div>
                            <!-- col.// -->
                            <div class="col"> <strong class="price"> $180.00 </strong> </div>
                            <div class="col text-end">
                                <a href="https://bootstrap-ecommerce.com/components.html#"
                                    class="btn btn-icon btn-outline-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <!-- row.// -->
                    </article>
                    <!-- card .// -->
                    <div class="card">
                        <div class="card-body border-top">
                            <div class="icontext">
                                <div class="icon">
                                    <span class="icon-sm">
                                        <i class="me-2 text-muted fa-lg fa fa-truck"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <h6 class="title">Free Delivery within 1-2 weeks</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna al</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col.// -->
                <aside class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            {{-- <div class="input-group mb-3"> <input type="text" class="form-control"
                                    placeholder="Promo code">
                                <button class="btn btn-light text-primary">Apply</button>
                            </div> --}}
                            <dl class="dlist-align">
                                <dt>Total price:</dt>
                                <dd class="text-end"> $1403.97</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-end text-dark h5"> $1357.97 </dd>
                            </dl>
                            <hr>
                            <a href="{{ url('checkout') }}" class="btn btn-primary mb-2 w-100">Checkout</a>
                            <a href="#" class="btn btn-light w-100"> Back to shop </a>
                        </div>
                        <!-- card-body.// -->
                    </div>
                    <!-- card.// -->
                </aside>
                <!-- col.// -->
            </div>
            <!-- row.// -->
            <!-- =================== COMPONENT 2 CART+SUMMARY END .// ====================== -->
        </div>
    </section>
@endsection
