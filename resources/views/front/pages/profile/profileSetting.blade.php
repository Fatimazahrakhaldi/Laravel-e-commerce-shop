@extends('front.pages.profile')
@section('title', 'profile setting')

@section('sideBarRight')
<div class="col-lg-9">
    <article class="card">
        <div class="card-body">
            <form>
                <div class="row gx-3">
                    <div class="col-6 mb-3"> <label class="form-label">First name</label> <input
                            class="form-control" type="text" placeholder=""> </div>
                    <!-- col .// -->
                    <div class="col-6 mb-3"> <label class="form-label">Last name</label> <input
                            class="form-control" type="text" placeholder=""> </div>
                    <!-- col .// -->
                    <div class="col-lg-6 col-md-6 mb-3"> <label class="form-label">Email</label> <input
                            class="form-control" type="email" placeholder="example@mail.com"> </div>
                    <!-- col .// -->
                    <div class="col-lg-6 col-md-6 mb-3"> <label class="form-label">Phone</label> <input
                            class="form-control" type="tel" placeholder="+2126545343340"> </div>
                    <!-- col .// -->
                    <div class="col-lg-6 col-6 mb-3"> <label class="form-label">Birthday</label> <input
                            class="form-control" type="date"> </div>
                    <!-- col .// -->
                </div>
                <!-- row.// -->

                <!-- row.// --><br> <button class="btn btn-primary" type="submit">Save changes</button>
            </form>
            <hr class="my-4">
            <div class="row" style="max-width:920px">
                <div class="col-md">
                    <article class="box mb-3 bg-light"> <a class="btn float-end btn-light btn-sm"
                            href="https://bootstrap-ecommerce.com/components.html#">Change</a>
                        <p class="title mb-0">Password</p> <small class="text-muted d-block"
                            style="width:70%">You can reset or change your password by clicking here</small>
                    </article>
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- card-body .// -->
    </article>
    <!-- card .// -->
</div>
@endsection
