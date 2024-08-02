@extends('auth.layout')
@section('content')
<div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
    <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
        <div class="d-flex flex-stack py-2">
            <div class="me-2"></div>
            <div class="m-0">
                <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="sign-in-head-desc">Belum Punya Akun?</span>
                <a href="{{ route("dosen.register") }}" class="link-primary fw-bold fs-5" data-kt-translate="sign-in-head-link">Daftar</a>
            </div>
        </div>
        <div class="py-20">
            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route("dosen.loginProcess") }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="text-start mb-10">
                        <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="sign-in-title">Login Dosen

                        </h1>
                        <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="general-desc">
                            Masukkan email dan password anda
                        </div>
                    </div>
                    <div class="fv-row mb-8">
                        <input type="text" placeholder="Email" name="email" autocomplete="off" data-kt-translate="sign-in-input-email" class="form-control form-control-solid" value="{{ old("email") }}" />
                        @error('email')
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                <div>
                                    - {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="fv-row mb-7">
                        <input type="text" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-in-input-password" class="form-control form-control-solid" />
                        @error('password')
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                <div>
                                    - {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                        <div></div>
                        <a href="#" class="link-primary" data-kt-translate="sign-in-forgot-password">Lupa Password ?</a>
                    </div>
                    <div class="d-flex flex-stack">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                            <span class="indicator-label" data-kt-translate="sign-in-submit">Sign In</span>
                            <span class="indicator-progress">
                                <span data-kt-translate="general-progress">Please wait...</span>
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <div class="d-flex align-items-center">
                            <div class="text-gray-500 fw-semibold fs-6 me-3 me-md-6" data-kt-translate="general-or">Or</div>
                            <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="p-4" />
                            </a>
                            <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                <img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg" class="p-4" />
                            </a>
                            <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light">
                                <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show p-4" />
                                <img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show p-4" />
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="m-0">
        </div>
    </div>
</div>
@endsection