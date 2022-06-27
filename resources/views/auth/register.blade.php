@extends('front.app')
@section('title', 'Register')
@section('content')
    <section class="padding-y bg-light">
        <div class="container">
            <!-- ================ COMPONENT SIGNUP ================= -->
            <div class="card card mx-auto" style="max-width: 700px;">
                <article class="card-body">
                    <h4 class="mb-4">Create account</h4>
                    <form>
                        <div class="row gx-3">
                            <div class="col mb-4"> <label class="form-label">First name</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <!-- col end.// -->
                            <div class="col mb-4"> <label class="form-label">Last name</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <!-- col end.// -->
                        </div>
                        <!-- row end.// -->
                        <div class="row gx-3">
                            <div class="col-6 mb-3"> <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="example@mail.com">
                            </div>
                            <!-- col end.// -->
                            <div class="col-6 mb-3"> <label class="form-label">Phone</label>
                                <input type="text" class="form-control" placeholder="+2126545343340">
                            </div>
                            <!-- col end.// -->
                            <div class="col-6 mb-3"> <label class="form-label">Password</label>
                                <input class="form-control" type="password">
                            </div>
                            <!-- col end.// -->
                            <div class="col-6 mb-3"> <label class="form-label">Confirm password</label>
                                <input class="form-control" type="password">
                            </div>
                            <!-- col end.// -->
                            <div class="col-6 mb-3"> <label class="form-label">Birthday</label>
                                <input class="form-control" type="date">
                            </div>
                        </div>
                        <!-- row end.// -->
                        <div class="row mt-3 mb-4 align-items-center">
                            <div class="col-auto"> <button class="btn btn-primary" type="button">Register now</button>
                            </div>
                            <div class="col">
                                <label class="form-check me-auto">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label"> I agree with Terms and Conditions </span>
                                </label>
                            </div>
                        </div>
                    </form>
                    <!-- form end.// -->
                    <hr>
                    <p class="mb-0">Already have an account? <a href="{{ url('login') }}">Sign in</a></p>
                </article>
                <!-- card-body end .// -->
            </div>
            <!-- card end.// -->
            <!-- ============== COMPONENT SIGNUP END.// ============== -->
        </div>
    </section>
@stop
