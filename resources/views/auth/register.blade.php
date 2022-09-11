@extends("layouts.auth")

@section('title')
<title>Create Account - SmartForce</title>
@endSection

@section("main")
<div class="container">
    <div class="row">
        <div class="col-12 p-2">
            <div class="text-center" style="max-width: 600px; margin: 0 auto;">
                <div class="text-center">
                    <a href="/">
                        <img src="/assets/images/logo.png" class="avatar avatar-small mb-4 d-block mx-auto" alt="hello">
                    </a>
                </div>
                <h6 class="fs-4">Apply to join the World's Leading Recruitment Agency</h6>
            </div>
            <div class="form-signin p-4 bg-white rounded shadow" style="max-width: 600px;">
                <sign-up></sign-up>
            </div>
        </div>
    </div>
</div>
@endSection