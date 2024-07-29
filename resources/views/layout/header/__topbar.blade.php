<!--begin::Topbar-->
<div class="d-flex align-items-center flex-shrink-0">
@include("partials/search/_inline")
    <!--begin::Activities-->
    <div class="d-flex align-items-center ms-3 ms-lg-4">
        <!--begin::Drawer toggle-->
        <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-active-bg-light w-30px h-30px w-lg-40px h-lg-40px" id="kt_activities_toggle">
            <i class="ki-duotone ki-chart-simple fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>        </div>
        <!--end::Drawer toggle-->
    </div>
    <!--end::Activities-->
    <!--begin::Theme mode-->
    <div class="d-flex align-items-center ms-3 ms-lg-4">
@include("partials/theme-mode/_main")
    </div>
    <!--end::Theme mode-->
    <!--begin::User-->
    <div class="d-flex align-items-center ms-3 ms-lg-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu- wrapper-->
        <!--begin::User icon(remove this button to use user avatar as menu toggle)-->
        <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-active-bg-light w-30px h-30px w-lg-40px h-lg-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-user fs-1"><span class="path1"></span><span class="path2"></span></i>        </div>
        <!--end::User icon-->
@include("partials/menus/_user-account-menu")
        <!--end::Menu wrapper-->
    </div>
    <!--end::User -->
    <!--begin::Chat-->
    <div class="d-flex align-items-center ms-3 ms-lg-4">
        <!--begin::Drawer wrapper-->
        <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-active-bg-light w-30px h-30px w-lg-40px h-lg-40px fw-bold position-relative" id="kt_drawer_chat_toggle">
            3
            <!--begin::Bullet-->
            <span class="d-none bullet bullet-dot bg-danger h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span>
            <!--end::Bullet-->
        </div>
        <!--end::Drawer wrapper-->
    </div>
    <!--end::Chat-->
    <!--begin::Sidebar Toggler-->
        <!--end::Sidebar Toggler-->
</div>
<!--end::Topbar-->