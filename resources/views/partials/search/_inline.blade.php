<!--begin::Search-->
<div
    id="kt_header_search"
    class="header-search d-flex align-items-center w-lg-250px"
    data-kt-search-keypress="true"
    data-kt-search-min-length="2"
    data-kt-search-enter="enter"
    data-kt-search-layout="menu"
    data-kt-search-responsive="lg"
    data-kt-menu-trigger="auto"
    data-kt-menu-permanent="true"
    data-kt-menu-placement="bottom-end"
        >
            <!--begin::Tablet and mobile search toggle-->
        <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
            <div class="d-flex btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-active-bg-light w-30px h-30px w-lg-40px h-lg-40px">
                                    <i class="ki-duotone ki-magnifier fs-1 text-gray-700 fs-2"><span class="path1"></span><span class="path2"></span></i>                            </div>
        </div>
        <!--end::Tablet and mobile search toggle-->
@include("partials/search/partials/_form-inline")
    <!--begin::Menu-->
    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
        <!--begin::Wrapper-->
        <div data-kt-search-element="wrapper">
@include("partials/search/partials/_results")
@include("partials/search/partials/_main")
@include("partials/search/partials/_empty")
        </div>
        <!--end::Wrapper-->
@include("partials/search/partials/_advanced-options")
@include("partials/search/partials/_preferences")
    </div>
    <!--end::Menu-->
</div>
<!--end::Search-->