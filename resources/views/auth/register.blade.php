@extends('auth.layout')
@section('content')
    <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
        <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
            <div class="d-flex flex-stack py-2">
                <div class="me-2">
                    <a href="{{ route('home') }}" class="btn btn-icon bg-light rounded-circle">
                        <i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
                    </a>
                </div>
                <div class="m-0">
                    <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">
                        Sudah punya akun?
                    </span>
                    <a href="{{ route('dosen.login') }}" class="link-primary fw-bold fs-5"
                        data-kt-translate="sign-up-head-link">Login</a>
                </div>
            </div>
            <div class="py-20">
                <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form"
                    action="{{ route('dosen.registerProcess') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="text-start mb-10">
                        <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="sign-up-title">Buat Akun Dosen
                        </h1>
                        <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="general-desc">
                            Silahkan isi form berikut untuk membuat akun dosen
                        </div>
                    </div>
                    <div class="text-start mb-5">
                        <div class="image-input image-input-empty" data-kt-image-input="true"
                            style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                            <div class="image-input-wrapper w-125px h-125px"
                                style="background-image: url({{ asset("assets/media/svg/avatars/blank.svg") }})"></div>
                            <label
                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Ganti Foto">
                                <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <input type="file" name="foto" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <span
                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Batalkan Foto">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            <span
                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                title="Hapus Foto">
                                <i class="ki-outline ki-cross fs-3"></i>
                            </span>
                            
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <input class="form-control form-control-lg form-control-solid" type="number"
                            placeholder="NIDN / NIP" name="nidn" autocomplete="off" value="{{ old("nidn") }}"  required />
                        @error('nidn')
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                <div>
                                    - {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="fv-row mb-5">
                        <input class="form-control form-control-lg form-control-solid" type="text"
                            placeholder="Nama Lengkap" name="nama" autocomplete="off" value="{{ old("nama") }}"  required />
                        @error('nama')
                            <div class="fv-plugins message-container fv-plugins-message-container--enabled invalid-feedback">
                                <div>
                                    - {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="row fv-row mb-5">
                        <div class="col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" type="text"
                                placeholder="pangkat" name="pangkat" autocomplete="off" value="{{ old("pangkat") }}"  required />
                            @error('pangkat')
                                <div
                                    class="fv-plugins message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <div>
                                        - {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="col-xl-6">
                            <select name="jabatan" class="form-control form-control-lg form-control-solid">
                                <option value="" disabled selected>Jabatan</option>
                                <option @if (old('jabatan') == 'asisten ahli') selected @endif value="asisten ahli">Asisten Ahli</option>
                                <option @if (old('jabatan') == 'lektor') selected @endif value="lektor">Lektor</option>
                                <option @if (old('jabatan') == 'lektor kepala') selected @endif value="lektor kepala">Lektor Kepala</option>
                                <option @if (old('jabatan') == 'guru besar') selected @endif value="guru besar">Guru Besar</option>
                            </select>
                            @error('jabatan')
                                <div
                                    class="fv-plugins message-container fv-plugins-message-container--enabled invalid-feedback">
                                    <div>
                                        - {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <input class="form-control form-control-lg form-control-solid" type="text"
                            placeholder="Pendidilan Terakhir" name="pendidikan_terakhir" autocomplete="off" value="{{ old("pendidikan_terakhir") }}"  required />
                        @error('pendidikan_terakhir')
                            <div class="fv-plugins message-container fv-plugins-message-container--enabled invalid-feedback">
                                <div>
                                    - {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="fv-row mb-5">
                        <textarea class="form-control form-control-lg form-control-solid" type="text" placeholder="Alamat" name="alamat"
                            autocomplete="off" required>{{ old("alamat") }}</textarea>
                        @error('alamat')
                            <div class="fv-plugins message-container fv-plugins-message-container--enabled invalid-feedback">
                                <div>
                                    - {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="fv-row mb-5">
                        <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email"
                            name="email" autocomplete="off" data-kt-translate="sign-up-input-email" value="{{ old("email") }}"  required />
                        @error('email')
                            <div class="fv-plugins message-container fv-plugins-message-container--enabled invalid-feedback">
                                <div>
                                    - {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="fv-row mb-5" data-kt-password-meter="true">
                        <div class="mb-1">
                            <div class="position-relative mb-3">
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    placeholder="Password" name="password" autocomplete="off"
                                    data-kt-translate="sign-up-input-password" required/>
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="ki-duotone ki-eye-slash fs-2"></i>
                                    <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                </div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                </div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                </div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                        </div>
                        <div class="text-muted" data-kt-translate="sign-up-hint">Use 8 or more characters with
                            a mix of letters, numbers & symbols.</div>
                        @error('password')
                            <div class="fv-plugins message-container fv-plugins-message-container--enabled invalid-feedback">
                                <div>
                                    - {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex flex-stack">
                        <button id="kt_sign_up_submit" class="btn btn-primary" data-kt-translate="sign-up-submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <div class="d-flex align-items-center">
                            <div class="text-gray-500 fw-semibold fs-6 me-6">Or</div>
                            <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="p-4" />
                            </a>
                            <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                <img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg" class="p-4" />
                            </a>
                            <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light">
                                <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg"
                                    class="theme-light-show p-4" />
                                <img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg"
                                    class="theme-dark-show p-4" />
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
