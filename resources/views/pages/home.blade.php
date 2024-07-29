@extends('app')

@section('subheader')
    <!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class=" container-xxl  py-5">
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <div class="col-xl-8">
                    @include('partials/widgets-2/engage/_widget-2')
                </div>
                <div class="col-xl-4">
                    @include('partials/widgets-2/mixed/_widget-16')
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
@endsection

@section('content')
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row gy-0 gx-10">
            <!--begin::Col-->
            {{-- <div class="col-xl-8">
                @include('partials/widgets-2/general/_widget-1')
                @include('partials/widgets-2/charts/_widget-1')
            </div> --}}
            <!--end::Col-->
            <!--begin::Col-->
            {{-- <div class="col-xl-4">
                @include('partials/widgets-2/lists/_widget-5')
                @include('partials/widgets-2/lists/_widget-4')
            </div> --}}
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
@endsection
