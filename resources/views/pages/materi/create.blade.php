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
        <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Thumbnail</h2>
                        </div>
                    </div>
                    <div class="card-body text-center pt-0">
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                            data-kt-image-input="true" style="background-image: url('{{ asset("assets/media/svg/files/blank-image.svg") }}');" >
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ganti foto">
                                <i class="ki-duotone ki-pencil fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="file" name="foto" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Batalkan foto">
                                <i class="ki-duotone ki-cross fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus Foto">
                                <i class="ki-duotone ki-cross fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                        <div class="text-muted fs-7">
                            set foto dari materi yang akan dibuat. hanya menerima file dengan format .png, .jpg, .jpeg
                        </div>
                    </div>
                </div>
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Status</h2>
                        </div>
                        <div class="card-toolbar">
                            <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true" name="status" required>
                            <option value="published" selected="selected">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                        <div class="text-muted fs-7">
                            set status dari materi yang akan dibuat.
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Informasi Materi</h2>
                        </div>
                    </div>
                    <input type="hidden" name="kode_kelas" value="{{ $kode_kelas }}">
                    <div class="card-body pt-0">
                        <div class="mb-10 fv-row">
                            <label class="required form-label">Judul</label>
                            <input type="text" name="judul" class="form-control mb-2"
                                placeholder="Judul Materi" value="{{ old('judul') }}" required />
                        </div>
                        <div>
                            <label class="required form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi Materi" required rows="5">{{ old('deskripsi') }}</textarea>
                            <div class="text-muted fs-7">
                                Deskripsi materi digunakan untuk memberikan informasi singkat tentang materi yang akan
                                dibuat.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Materi</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">

                        <div class="mb-10">
                            <label class="form-label">Isi Materi</label>
                            <div id="quill_isi_materi" class="min-h-400px mb-2">
                                {!! old('isi_materi') !!}
                            </div>
                            <input type="hidden" name="isi_materi" id="isi_materi">
                            <div class="text-muted fs-7">
                                Isi materi digunakan untuk memberikan informasi lengkap tentang materi yang akan dibuat.
                            </div>
                        </div>
                        <div class="mb-10">
                            <label class="form-label">Materi File</label>
                            <div class="fv-row">
                                <div class="dropzone" id="materi_file">
                                    <div class="dz-message needsclick">
                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop file disini atau klik untuk
                                                upload</h3>
                                            <span class="fs-7 fw-semibold text-gray-500">Upload hingga 10 file | 
                                                <span class="text-danger">
                                                    Harus menyertakan minimal 1 file berformat PDF

                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel"
                        class="btn btn-light me-5">Cancel</a>
                    <button type="submit" id="submit" class="btn btn-primary">
                        <span class="indicator-label">Simpan Perubahan</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        var quill = new Quill('#quill_isi_materi', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Ketikkan Materi Disini...',
            theme: 'snow' // or 'bubble'
        });
        $('#isi_materi').val(quill.root.innerHTML);
        $('quill_isi_materi').on('change', function() {
            $('#isi_materi').val(quill.root.innerHTML);
        });
        
    </script>

    <script>

        var myDropzone = new Dropzone("#materi_file", {
            url: "{{ route('dosen.materi.store') }}",
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            autoProcessQueue: false,
            acceptedFiles: "application/pdf",
            parallelUploads: 10,
            uploadMultiple: true,
            enctype: "multipart/form-data",
            method: "POST",
            params: {
                _token: "{{ csrf_token() }}",
            },
            accept: function(file, done) {
                done();
            },
            init: function() {
                var submitButton = document.querySelector("#submit");

                submitButton.addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });

                this.on("sending", function(file, xhr, formData) {
                    var foto = document.querySelector('input[name="foto"]').value;
                    var kode_kelas = document.querySelector('input[name="kode_kelas"]').value;
                    var judul = document.querySelector('input[name="judul"]').value;
                    var deskripsi = document.querySelector('textarea[name="deskripsi"]').value;
                    var isi_materi = document.querySelector('input[name="isi_materi"]').value;  
                    var status = document.querySelector('select[name="status"]').value;
                    formData.append("foto", foto);
                    formData.append("kode_kelas", kode_kelas);
                    formData.append("judul", judul);
                    formData.append("deskripsi", deskripsi);
                    formData.append("isi_materi", isi_materi);
                    formData.append("status", status);
                });

                this.on("success", function(file, response) {
                    // window.location.href = response.redirect;
                    console.log(response);
                    Swal.fire({
                        text: response.message,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then(function() {
                        // window.location.href = response.redirect;
                    });
                });

                this.on("error", function(file, response) {
                    // alert(response);
                    console.log(response);
                    Swal.fire({
                        text: response.message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                });
            }
        });

    </script>
@endsection
