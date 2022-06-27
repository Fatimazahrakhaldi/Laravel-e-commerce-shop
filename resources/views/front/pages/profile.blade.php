@extends('front.app')
@section('title', 'profile')

@section('content')
    <section class="padding-y bg-light">
        <div class="container">
            <!-- ========================= COMPONENT ACCOUNT 3 ========================= -->
            <div class="row">
                <aside class="col-lg-3">
                    <!-- COMPONENT MENU LIST -->
                    <div class="card p-3 h-100">
                        <nav class="nav flex-column nav-pills">
                            <a class="nav-link {{ request()->is('profile/account') || request()->is('profile/address') ? 'active' : '' }}"
                                href="{{ url('profile/account') }}">Account div</a>
                            <a class="nav-link {{ request()->is('profile/orderhistory') ? 'active' : '' }}"
                                href="{{ url('profile/orderhistory') }}">Orders history</a>
                            <a class="nav-link" href="https://bootstrap-ecommerce.com/components.html#">My wishlist</a>
                            <a class="nav-link" href="https://bootstrap-ecommerce.com/components.html#">Transactions</a>
                            <a class="nav-link {{ request()->is('profile/setting') ? 'active' : '' }}"
                                href="{{ url('profile/setting') }}">Profile setting</a>
                            <a class="nav-link" href="https://bootstrap-ecommerce.com/components.html#">Log
                                out</a>
                        </nav>
                    </div>
                    <!-- COMPONENT MENU LIST END .// -->
                </aside>
                @yield('sideBarRight')
            </div>
            <!-- row.// -->
            <!-- =============== COMPONENT ACCOUNT 3 END.// ================= -->
        </div>
    </section>
@endsection
