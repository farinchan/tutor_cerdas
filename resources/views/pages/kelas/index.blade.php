@extends('app')
@section('subheader')
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-gray-900 fw-bold my-1 fs-3">Kelas Saya</h1>
            </div>
            <div class="d-flex align-items-center py-2 py-md-1">
                <div class="me-3">
                    <a href="#" class="btn btn-light-primary fw-bold" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>Filter</a>
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_65a10adbb6164">
                        <div class="px-7 py-5">
                            <div class="fs-5 text-gray-900 fw-bold">Opsi Filter</div>
                        </div>
                        <div class="separator border-gray-200"></div>
                        <div class="px-7 py-5">
                            <div class="mb-10">
                                <label class="form-label fw-semibold">Mata Kuliah:</label>
                                <div>
                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true"
                                        data-close-on-select="false" data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_65a10adbb6164" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_1">Buat
                    Kelas</button>
                <div class="modal fade" tabindex="-1" id="kt_modal_1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Buat Kelas Baru</h3>
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                            </div>

                            <form action="{{ route('dosen.kelas.store') }}" method="POST">
                                @csrf

                                <div class="modal-body">
                                    <div class="row mb-5">
                                        <div class="col-lg-8">
                                            <label class="form-label fw-bold required">Mata Kuliah:</label>
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Mata Kuliah" name="matakuliah" value="{{ old('') }}" />
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label fw-bold required">SKS:</label>
                                            <input type="number" class="form-control form-control-solid" placeholder="SKS"
                                                name="sks" value="{{ old('sks') }}" />
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="mb-5 mt-5">
                                        <label class="form-label fw-bold required">Kode Kelas:</label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Kode Kelas" value="{{ $kode_kelas_new }}" readonly />
                                        <input type="hidden" name="kode_kelas" value="{{ $kode_kelas_new }}">
                                    </div>
                                    <div class="mb-5 mt-5">
                                        <label class="form-label fw-bold required">Nama Kelas:</label>
                                        <input type="text" class="form-control form-control-solid" name="nama_kelas"
                                            placeholder="Nama Kelas" value="{{ old('kode_kelas') }}" />
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label fw-bold required">Tingkat:</label>
                                        <select class="form-select form-select-solid" data-placeholder="Pilih Tingkat"
                                            name="tingkat" value="{{ old('tingkat') }}" required>
                                            <option>Pilih Tingkat</option>
                                            <option value="D3">Diploma 3</option>
                                            <option value="D4">Diploma 4</option>
                                            <option value="S1">Sarjana</option>
                                            <option value="S2">Magister</option>
                                            <option value="S3">Doktor</option>
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label fw-bold required">Jurusan:</label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Jurusan" name="jurusan" value="{{ old('jurusan') }}" required />
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Buat Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content flex-row-fluid" id="kt_content">
        <div class="row gy-0 gx-10">
            @foreach ($kelas as $row)
                <div class="col-xl-4 mb-xl-10">
                    <div class="card card-flush h-xl-100">
                        <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                            style="background-image:url('{{ asset('assets/media/svg/shapes/top-green.png') }}"
                            data-bs-theme="light">
                            <h3 class="card-title align-items-start flex-column text-white pt-15">
                                <span class="fw-bold fs-2x mb-3">
                                    {{ $row->nama_kelas }} - {{ $row->matakuliah->nama_mk }}
                                </span>
                                <div class="fs-4 text-white">
                                    <span class="opacity-75">
                                        {{ $row->tingkat }} - {{ $row->jurusan }}
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
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $row->materi->count() }}</span>
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
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $row->mahasiswa->count() }}</span>
                                                <span class="text-gray-500 fw-semibold fs-6">Mahasiswa</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light py-5 text-end">
                            <button type="button"  class="btn btn-light-primary fw-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" 
                            title="KLik untuk copy kode kelas" data-clipboard-text="{{ $row->kode_kelas }}">
                                <i class="ki-duotone ki-barcode fs-2x">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                </i>
                                {{ $row->kode_kelas }}
                            </button>
                            <a href="{{ route("dosen.kelas.show", $row->kode_kelas) }}" class="btn btn-light-primary fw-bold">
                                <i class="ki-duotone ki-book fs-2x">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
