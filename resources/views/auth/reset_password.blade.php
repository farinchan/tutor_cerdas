@extends('auth.layout')
@section('content')
<div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
    <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
        <div class="d-flex flex-stack py-2">
            <div class="me-2">
                <a href="authentication/layouts/fancy/sign-in.html" class="btn btn-icon bg-light rounded-circle">
                    <i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
                </a>
            </div>
            <div class="m-0">
                <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="password-reset-head-desc">Already a member ?</span>
                <a href="authentication/layouts/fancy/sign-in.html" class="link-primary fw-bold fs-5" data-kt-translate="password-reset-head-link">Sign In</a>
            </div>
        </div>
        <div class="py-20">
            <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="authentication/layouts/fancy/new-password.html" action="#">
                <div class="text-start mb-10">
                    <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="password-reset-title">Forgot Password ?</h1>
                    <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="password-reset-desc">Enter your email to reset your password.</div>
                </div>
                <div class="fv-row mb-10">
                    <input class="form-control form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="password-reset-input-email" />
                </div>
                <div class="d-flex flex-stack">
                    <div class="m-0">
                        <button id="kt_password_reset_submit" class="btn btn-primary me-2" data-kt-translate="password-reset-submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <a href="authentication/layouts/fancy/sign-in.html" class="btn btn-lg btn-light-primary fw-bold" data-kt-translate="password-reset-cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="m-0">
            <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                <img data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3" src="assets/media/flags/united-states.svg" alt="" />
                <span data-kt-element="current-lang-name" class="me-2">English</span>
                <i class="ki-duotone ki-down fs-2 text-muted rotate-180 m-0"></i>
            </button>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true" id="kt_auth_lang_menu">
                <div class="menu-item px-3">
                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                        <span class="symbol symbol-20px me-4">
                            <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                        </span>
                        <span data-kt-element="lang-name">English</span>
                    </a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                        <span class="symbol symbol-20px me-4">
                            <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                        </span>
                        <span data-kt-element="lang-name">Spanish</span>
                    </a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                        <span class="symbol symbol-20px me-4">
                            <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                        </span>
                        <span data-kt-element="lang-name">German</span>
                    </a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                        <span class="symbol symbol-20px me-4">
                            <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                        </span>
                        <span data-kt-element="lang-name">Japanese</span>
                    </a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                        <span class="symbol symbol-20px me-4">
                            <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                        </span>
                        <span data-kt-element="lang-name">French</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection