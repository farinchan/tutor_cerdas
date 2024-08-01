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
                <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="new-password-head-desc">Already a member ?</span>
                <a href="authentication/layouts/fancy/sign-in.html" class="link-primary fw-bold fs-5" data-kt-translate="new-password-head-link">Sign In</a>
            </div>
        </div>
        <div class="py-20">
            <form class="form w-100" novalidate="novalidate" id="kt_new_password_form" data-kt-redirect-url="authentication/layouts/fancy/sign-in.html" action="#">
                <div class="text-start mb-10">
                    <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="new-password-title">Setup New Password</h1>
                    <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="new-password-desc">Have you already reset the password ?</div>
                </div>
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <div class="mb-1">
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="new-password-input-password" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="ki-duotone ki-eye-slash fs-2"></i>
                                <i class="ki-duotone ki-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                    </div>
                    <div class="text-muted" data-kt-translate="new-password-hint">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                </div>
                <div class="fv-row mb-10">
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Confirm Password" name="confirm-password" autocomplete="off" data-kt-translate="new-password-confirm-password" />
                </div>
                <div class="d-flex flex-stack">
                    <button id="kt_new_password_submit" class="btn btn-primary" data-kt-translate="new-password-submit">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <div class="d-flex align-items-center">
                        <div class="text-gray-500 fw-semibold fs-6 me-6" data-kt-translate="general-or">Or</div>
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