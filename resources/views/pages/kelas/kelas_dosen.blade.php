@extends('app')
@section('subheader')
<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-gray-900 fw-bold my-1 fs-3">View User Details</h1>
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                <li class="breadcrumb-item text-gray-600">
                    <a href="index.html" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item text-gray-600">User Management</li>
                <li class="breadcrumb-item text-gray-600">Users</li>
                <li class="breadcrumb-item text-gray-500">View User</li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
    <div class="content flex-row-fluid" id="kt_content">
        <div class="d-flex flex-column flex-lg-row">
            <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                <div class="card card-flush">
                    <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                        style="background-image:url('{{ asset('assets/media/svg/shapes/top-green.png') }}"
                        data-bs-theme="light">
                        <h3 class="card-title align-items-start flex-column text-white pt-15">
                            <span class="fw-bold fs-2x mb-3">
                                {{ $kelas->nama_kelas }} - {{ $kelas->matakuliah->nama_mk }}
                            </span>
                            <div class="fs-4 text-white">
                                <span class="opacity-75">
                                    {{ $kelas->tingkat }} - {{ $kelas->jurusan }}
                                </span>
                            </div>
                        </h3>
                    </div>
                    <div class="card-body mt-n20 mb-10">
                        <div class="mt-n20 position-relative">
                            <div class="row g-3 g-lg-6">
                                <div class="col-6">
                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                        <div class="symbol symbol-30px me-5 mb-8">
                                            <span class="symbol-label">
                                                <i class="ki-duotone ki-flask fs-1 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="m-0">
                                            <span
                                                class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $kelas->materi->count() }}</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Materi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                        <div class="symbol symbol-30px me-5 mb-8">
                                            <span class="symbol-label">
                                                <i class="ki-duotone ki-people fs-1 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <div class="m-0">
                                            <span
                                                class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $kelas->mahasiswa->count() }}</span>
                                            <span class="text-gray-500 fw-semibold fs-6">Mahasiswa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5 mb-xl-8">
                    <div class="card-header border-0">
                        <div class="card-title">
                            <h3 class="fw-bold m-0">Connected Accounts</h3>
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                            <div class="d-flex flex-stack flex-grow-1">
                                <div class="fw-semibold">
                                    <div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our
                                        <a href="#" class="me-1">privacy policy</a>and
                                        <a href="#">terms of use</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="d-flex flex-stack">
                                <div class="d-flex">
                                    <img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6"
                                        alt="" />
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Google</a>
                                        <div class="fs-6 fw-semibold text-muted">Plan properly your workflow</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" name="google" type="checkbox" value="1"
                                            id="kt_modal_connected_accounts_google" checked="checked" />
                                        <span class="form-check-label fw-semibold text-muted"
                                            for="kt_modal_connected_accounts_google"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="d-flex flex-stack">
                                <div class="d-flex">
                                    <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Github</a>
                                        <div class="fs-6 fw-semibold text-muted">Keep eye on on your Repositories</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" name="github" type="checkbox" value="1"
                                            id="kt_modal_connected_accounts_github" checked="checked" />
                                        <span class="form-check-label fw-semibold text-muted"
                                            for="kt_modal_connected_accounts_github"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="d-flex flex-stack">
                                <div class="d-flex">
                                    <img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6"
                                        alt="" />
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-bold">Slack</a>
                                        <div class="fs-6 fw-semibold text-muted">Integrate Projects Discussions</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <label
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" name="slack" type="checkbox" value="1"
                                            id="kt_modal_connected_accounts_slack" />
                                        <span class="form-check-label fw-semibold text-muted"
                                            for="kt_modal_connected_accounts_slack"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-0 d-flex justify-content-center pt-0">
                        <button class="btn btn-sm btn-light-primary">Save Changes</button>
                    </div>
                </div>
            </div>
            <div class="flex-lg-row-fluid ms-lg-15">
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                            href="#kt_user_view_materi">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                            href="#kt_user_view_mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                            href="#kt_user_view_penilaian">penilaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_user_view_pengaturan">Pengaturan</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click"
                            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-2 me-0"></i></a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6"
                            data-kt-menu="true">
                            <div class="menu-item px-5">
                                <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
                            </div>
                            <div class="menu-item px-5">
                                <a href="#" class="menu-link px-5">Create invoice</a>
                            </div>
                            <div class="menu-item px-5">
                                <a href="#" class="menu-link flex-stack px-5">Create payments
                                    <span class="ms-2" data-bs-toggle="tooltip"
                                        title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-5">Apps</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-5">Billing</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-5">Statements</a>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input w-30px h-20px" type="checkbox"
                                                    value="" name="notifications" checked="checked"
                                                    id="kt_user_menu_notifications" />
                                                <span class="form-check-label text-muted fs-6"
                                                    for="kt_user_menu_notifications">Notifications</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-3"></div>
                            <div class="menu-item px-5">
                                <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
                            </div>
                            <div class="menu-item px-5">
                                <a href="#" class="menu-link px-5">Reports</a>
                            </div>
                            <div class="menu-item px-5 my-1">
                                <a href="#" class="menu-link px-5">Account Settings</a>
                            </div>
                            <div class="menu-item px-5">
                                <a href="#" class="menu-link text-danger px-5">Delete customer</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_user_view_materi" role="tabpanel">
                        <div class="card card-flush mb-6 mb-xl-9">
                            <div class="card-header mt-6">
                                <div class="card-title flex-column">
                                    <h2 class="mb-1">
                                        Materi Pembelajaran
                                    </h2>
                                    <div class="fs-6 fw-semibold text-muted">
                                        Total Materi: {{ $kelas->materi->count() }}
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <a href="{{ route("dosen.materi.create", $kelas->kode_kelas) }}" class="btn btn-light-primary btn-sm">
                                        <i class="ki-duotone ki-plus fs-3">
                                        </i>Tambah Materi
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-9 pt-4">
                                @foreach (  $kelas->materi as $materi )
                                <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6 mb-5">
                                    <div class="d-flex flex-column py-2">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/media/books.png') }}" alt="" width="80px"
                                                class="me-4">
                                            <div>
                                                <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-800">
                                                    {{ $materi->judul }}
                                                </a>
                                                <div class="fs-6 fw-semibold text-gray-500">
                                                    {{ $materi->deskripsi }}
                                                </div>
                                                <small class="mt-2">
                                                    <span class="text-muted fs-6">Tanggal Publish:</span>
                                                    <span class="text-primary fs-6 fw-bold">{{ $materi->created_at->diffForHumans() }}</span>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-7"></div>
                                        <div class="text-end">
                                            <button class="btn btn-sm btn-light btn-active-light-primary">Pelajari Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_user_view_mahasiswa" role="tabpanel">
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <h2>Profile</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-5">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed gy-5"
                                        id="kt_table_users_login_session">
                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>Email</td>
                                                <td>smith@kpmg.com</td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
                                                        <i class="ki-duotone ki-pencil fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>******</td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
                                                        <i class="ki-duotone ki-pencil fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Role</td>
                                                <td>Administrator</td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
                                                        <i class="ki-duotone ki-pencil fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <div class="card-header border-0">
                                <div class="card-title flex-column">
                                    <h2 class="mb-1">Two Step Authentication</h2>
                                    <div class="fs-6 fw-semibold text-muted">Keep your account extra secure with a second
                                        authentication step.</div>
                                </div>
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-light-primary btn-sm"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-fingerprint-scanning fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>Add Authentication Step</button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_add_auth_app">Use authenticator app</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_add_one_time_password">Enable one-time
                                                password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pb-5">
                                <div class="d-flex flex-stack">
                                    <div class="d-flex flex-column">
                                        <span>SMS</span>
                                        <span class="text-muted fs-6">+61 412 345 678</span>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <button type="button"
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                            <i class="ki-duotone ki-pencil fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                            id="kt_users_delete_two_step">
                                            <i class="ki-duotone ki-trash fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-5"></div>
                                <div class="text-gray-600">If you lose your mobile device or security key, you can
                                    <a href='#' class="me-1">generate a backup code</a>to sign in to your account.
                                </div>
                            </div>
                        </div>
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <div class="card-header border-0">
                                <div class="card-title flex-column">
                                    <h2>Email Notifications</h2>
                                    <div class="fs-6 fw-semibold text-muted">Choose what messages you’d like to receive for
                                        each of your accounts.</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="form" id="kt_users_email_notification_form">
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="email_notification_0"
                                                type="checkbox" value="0" id="kt_modal_update_email_notification_0"
                                                checked='checked' />
                                            <label class="form-check-label" for="kt_modal_update_email_notification_0">
                                                <div class="fw-bold">Successful Payments</div>
                                                <div class="text-gray-600">Receive a notification for every successful
                                                    payment.</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="email_notification_1"
                                                type="checkbox" value="1"
                                                id="kt_modal_update_email_notification_1" />
                                            <label class="form-check-label" for="kt_modal_update_email_notification_1">
                                                <div class="fw-bold">Payouts</div>
                                                <div class="text-gray-600">Receive a notification for every initiated
                                                    payout.</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="email_notification_2"
                                                type="checkbox" value="2"
                                                id="kt_modal_update_email_notification_2" />
                                            <label class="form-check-label" for="kt_modal_update_email_notification_2">
                                                <div class="fw-bold">Application fees</div>
                                                <div class="text-gray-600">Receive a notification each time you collect a
                                                    fee from an account.</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="email_notification_3"
                                                type="checkbox" value="3" id="kt_modal_update_email_notification_3"
                                                checked='checked' />
                                            <label class="form-check-label" for="kt_modal_update_email_notification_3">
                                                <div class="fw-bold">Disputes</div>
                                                <div class="text-gray-600">Receive a notification if a payment is disputed
                                                    by a customer and for dispute resolutions.</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="email_notification_4"
                                                type="checkbox" value="4" id="kt_modal_update_email_notification_4"
                                                checked='checked' />
                                            <label class="form-check-label" for="kt_modal_update_email_notification_4">
                                                <div class="fw-bold">Payment reviews</div>
                                                <div class="text-gray-600">Receive a notification if a payment is marked as
                                                    an elevated risk.</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="email_notification_5"
                                                type="checkbox" value="5"
                                                id="kt_modal_update_email_notification_5" />
                                            <label class="form-check-label" for="kt_modal_update_email_notification_5">
                                                <div class="fw-bold">Mentions</div>
                                                <div class="text-gray-600">Receive a notification if a teammate mentions
                                                    you in a note.</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="email_notification_6"
                                                type="checkbox" value="6"
                                                id="kt_modal_update_email_notification_6" />
                                            <label class="form-check-label" for="kt_modal_update_email_notification_6">
                                                <div class="fw-bold">Invoice Mispayments</div>
                                                <div class="text-gray-600">Receive a notification if a customer sends an
                                                    incorrect amount to pay their invoice.</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="email_notification_7"
                                                type="checkbox" value="7"
                                                id="kt_modal_update_email_notification_7" />
                                            <label class="form-check-label" for="kt_modal_update_email_notification_7">
                                                <div class="fw-bold">Webhooks</div>
                                                <div class="text-gray-600">Receive notifications about consistently failing
                                                    webhook endpoints.</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                    <div class="d-flex">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="email_notification_8"
                                                type="checkbox" value="8"
                                                id="kt_modal_update_email_notification_8" />
                                            <label class="form-check-label" for="kt_modal_update_email_notification_8">
                                                <div class="fw-bold">Trial</div>
                                                <div class="text-gray-600">Receive helpful tips when you try out our
                                                    products.</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center mt-12">
                                        <button type="button" class="btn btn-light me-5"
                                            id="kt_users_email_notification_cancel">Cancel</button>
                                        <button type="button" class="btn btn-primary"
                                            id="kt_users_email_notification_submit">
                                            <span class="indicator-label">Save</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_user_view_pengaturan" role="tabpanel">
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <h2>Login Sessions</h2>
                                </div>
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-sm btn-flex btn-light-primary"
                                        id="kt_modal_sign_out_sesions">
                                        <i class="ki-duotone ki-entrance-right fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Sign out all sessions</button>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-5">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed gy-5"
                                        id="kt_table_users_login_session">
                                        <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                            <tr class="text-start text-muted text-uppercase gs-0">
                                                <th class="min-w-100px">Location</th>
                                                <th>Device</th>
                                                <th>IP Address</th>
                                                <th class="min-w-125px">Time</th>
                                                <th class="min-w-70px">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>Australia</td>
                                                <td>Chome - Windows</td>
                                                <td>207.31.33.69</td>
                                                <td>23 seconds ago</td>
                                                <td>Current session</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>Safari - iOS</td>
                                                <td>207.20.36.104</td>
                                                <td>3 days ago</td>
                                                <td>
                                                    <a href="#" data-kt-users-sign-out="single_user">Sign out</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>Chrome - Windows</td>
                                                <td>207.16.13.339</td>
                                                <td>last week</td>
                                                <td>Expired</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
