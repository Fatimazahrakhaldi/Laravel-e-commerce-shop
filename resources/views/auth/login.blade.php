@extends('front.app')
@section('title', 'Login')
@section('content')
    <section class="padding-y bg-light">
        <div class="container">
            <!-- =========== COMPONENT LOGIN 1=========== -->
            <div class="card mx-auto" style="max-width: 500px;">
                <div class="card-body">
                    <h4 class="mb-4">Sign in</h4>
                    <form>
                        <div class="mb-3"> <label class="form-label">Email</label> <input name="lorem" class="form-control"
                                placeholder="ex. name@gmail.com" type="email"> </div>
                        <!-- col end.// -->
                        <div class="mb-3"> <label class="form-label">Password</label> <a class="float-end"
                                href="https://bootstrap-ecommerce.com/components.html#">Forgot?</a> <input
                                class="form-control" placeholder="******" type="password"> </div>
                        <!-- col end.// -->
                        <div class="mb-3"> <label class="form-check"> <input class="form-check-input" type="checkbox"
                                    value="" checked=""> <span class="form-check-label"> Remember </span> </label>
                        </div> <button class="btn w-100 btn-primary" type="button"> Sign in </button>
                    </form>
                    <!-- form end.// -->
                    <p class="text-divider my-4">New to shop?</p> <a href="{{ url('register') }}"
                        class="btn w-100 btn-light">Create new accaunt</a>
                </div>
                <!-- card-body end.// -->
            </div>
            <!-- card end.// -->
        </div>
    </section>
@stop
