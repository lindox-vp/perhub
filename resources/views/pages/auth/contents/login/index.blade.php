@extends('pages.auth.index')

@section('content')
<div class="align-self-center ml-auto mr-auto s-none">
    <img src="{{ asset('assets/img/bg-auth-1.png') }}" height="550" alt="">
</div>
{{-- <div class="border-left px-2"></div> --}}
<div class="align-self-center ml-auto mr-auto">
<!-- Login form -->
    <form class="login-form" action="index.html">
        <div class="card mb-0 border-0 shadow-none">
            <div class="card-body">
                <div class="mb-3">
                    {{-- <h5 class="mb-0">Login to your account</h5> --}}
                    {{-- <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i> --}}
                    <div class="shield-content">                            
                        <img src="{{ asset('assets/img/logo-dishub.png') }}" height="90" alt="">
                    </div>
                </div>

                <div class="form-group text-center text-muted content-divider">
                    <span class="px-2 border font-weight-light">Kridensial Anda</span>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-right">
                    <input type="text" class="form-control font-size-sm form-control-lg font-weight-light" required placeholder="Surel: Contoh_surel@gmail.com">
                    <div class="form-control-feedback">
                        <i class="icon-mention text-muted"></i>
                    </div>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-right">
                    <input type="password" class="form-control font-size-sm form-control-lg font-weight-light" required placeholder="Sandi: Contoh_sandi">
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-right">
                    <input type="password" class="form-control font-size-sm form-control-lg font-weight-light" required placeholder="Sandi: Contoh_sandi">
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                </div>

                <div class="form-group d-flex align-items-center">
                    <div class="form-check mb-0">
                        <label class="form-check-label font-weight-light">
                            <input type="checkbox" name="remember" class="form-input-styled" data-fouc>
                            Lihat kata sandi
                        </label>
                    </div>

                    {{-- <a href="login_password_recover.html" class="ml-auto">Forgot password?</a> --}}
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase font-weight-bold shadow-sm">Masuk</button>
                </div>

                <div class="form-group text-center text-muted content-divider">
                    <span class="px-2 border font-weight-light">Tidak punya akun ?</span>
                </div>

                <div class="form-group">
                    <a href="#" class="btn bg-orange-600 btn-block text-uppercase font-weight-bold shadow-sm">Daftar</a>
                </div>

                <span class="form-text text-center text-muted font-weight-light">Dengan melanjutkan, Anda mengonfirmasi bahwa Anda telah membaca <a href="#">Syarat &amp; Ketentuan</a> dan <a href="#">Kebijakan Cookie</a> kami</span>
            </div>
        </div>
    </form>
    <!-- /login form -->
</div>
@endsection

@push('first-css')
    <style>
        .shield {
            height: 80px;
            width: 80px;
            border: 1px solid #ccc;
            border-radius: 50% 50% 50% 50% / 12% 12% 88% 88%;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
            margin-left: auto;
            margin-right: auto;
            background-color: #eee; 
            opacity: 0.4;
        }

        .shield-content {
            text-align: center;
            -ms-flex-item-align: center !important;
            align-self: center !important;
            opacity: 0.7;
        }
    </style>
@endpush

@push('first-js')
    <script src="{{ asset('assets/limitless-assets/global/js/plugins/forms/styling/uniform.min.js') }}"></script>
    
@endpush

@push('second-js')
    <script src="{{ asset('assets/limitless-assets/global/js/demo_pages/login.js') }}"></script>

@endpush