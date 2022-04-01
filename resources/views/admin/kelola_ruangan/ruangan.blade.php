@extends('admin.index')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kelola Inventaris</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelola Ruangan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- Jquery Datatable --}}
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">

                                <button type="button" class="btn btn-outline-primary mb-4" data-bs-toggle="modal"
                                    data-bs-target="#tambahRuangan">
                                    <svg class="bi" width="1em" height="1em" fill="currentColor">
                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#plus-circle" />
                                    </svg>
                                    Tambah Data Ruangan
                                </button>

                                <!-- Modal Tambah -->
                                <div class="modal fade" id="tambahRuangan" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    Tambah Data Ruangan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body table-responsive">

                                                <form method="post" action="/ruangan/store" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="nama_ruangan" class="form-label fw-bold">Nama
                                                            Ruangan</label>
                                                        <input type="text"
                                                            class="form-control @error('nama_ruangan') is-invalid @enderror"
                                                            id="nama_ruangan" name="nama_ruangan">
                                                        @error('nama_ruangan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="keterangan"
                                                            class="form-label fw-bold">Keterangan</label>
                                                        <select class="form-select" name="keterangan" id="keterangan">
                                                            <option>Dapat dipinjam</option>
                                                            <option>Tidak dapat dipinjam</option>
                                                        </select>
                                                        @error('keterangan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="status" class="form-label fw-bold">Status</label>
                                                        <div class="dropdown">
                                                            <select class="form-select" name="status" id="status">
                                                                <option>Ada</option>
                                                                <option>Sedang Dipinjam</option>
                                                            </select>
                                                        </div>

                                                        @error('status')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal Tambah --}}

                                <div class="row">
                                    <table class="table" id="table1">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Ruangan</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ruangan as $item)
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}.</td>
                                                    <td>{{ $item->nama_ruangan }}</td>
                                                    <td>{{ $item->keterangan }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                            aria-label="Basic outlined example">

                                                            {{-- Button Edit --}}
                                                            <button type="button" class="btn btn-outline-success btn-sm"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editRuangan-{{ $item->id }}">
                                                                <svg class="bi" width="1em" height="1em"
                                                                    fill="currentColor">
                                                                    <use
                                                                        xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#pencil-square" />
                                                                </svg>
                                                            </button>
                                                            {{-- End Button Edit --}}

                                                            <!-- Modal Edit -->
                                                            <div class="modal fade" id="editRuangan-{{ $item->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div
                                                                    class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">
                                                                                Edit Data Ruangan</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body table-responsive">
                                                                            <form method="post"
                                                                                action="/ruangan/update/{{ $item->id }}"
                                                                                enctype="multipart/form-data">
                                                                                @method('PATCH')
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                    <label for="nama_ruangan"
                                                                                        class="form-label fw-bold">Nama
                                                                                        Ruangan</label>
                                                                                    <input type="text"
                                                                                        class="form-control @error('nama_ruangan') is-invalid @enderror"
                                                                                        id="nama_ruangan"
                                                                                        name="nama_ruangan"
                                                                                        value="{{ $item->nama_ruangan }}">
                                                                                    @error('nama_ruangan')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>

                                                                                <div class="mb-3">
                                                                                    <label for="keterangan"
                                                                                        class="form-label fw-bold">Keterangan
                                                                                    </label>
                                                                                    <select class="form-select"
                                                                                        name="keterangan" id="keterangan">
                                                                                        <option
                                                                                            {{ $item->keterangan === 'Dapat dipinjam' ? 'selected' : '' }}>
                                                                                            Dapat dipinjam</option>
                                                                                        <option
                                                                                            {{ $item->keterangan === 'Tidak dapat dipinjam' ? 'selected' : '' }}>
                                                                                            Tidak dapat dipinjam</option>
                                                                                    </select>
                                                                                    @error('keterangan')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>

                                                                                <div class="mb-3">
                                                                                    <label for="status"
                                                                                        class="form-label fw-bold">Status</label>
                                                                                    <div class="dropdown">
                                                                                        <select class="form-select"
                                                                                            name="status" id="status">
                                                                                            <option
                                                                                                {{ $item->status === 'Ada' ? 'selected' : '' }}>
                                                                                                Ada</option>
                                                                                            <option
                                                                                                {{ $item->status === 'Sedang Dipinjam' ? 'selected' : '' }}>
                                                                                                Sedang Dipinjam</option>
                                                                                        </select>
                                                                                    </div>

                                                                                    @error('status')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Edit</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- End Modal Edit --}}

                                                            {{-- Button Hapus --}}
                                                            <form method="POST"
                                                                action="/ruangan/destroy/{{ $item->id }}">
                                                                @csrf
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit"
                                                                    class="btn btn-outline-danger btn-sm show_confirm"
                                                                    data-toggle="tooltip" title='Delete'>
                                                                    <svg class="bi" width="1em" height="1em"
                                                                        fill="currentColor">
                                                                        <use
                                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#trash-fill" />
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                            {{-- End Button Hapus --}}

                                                            {{-- Button Detail --}}
                                                            <form method="POST" action="daftar-aset/{{ $item->id }}">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-outline-success btn-sm">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                                        <path
                                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                            {{-- End Button Detail --}}

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Basic Tables end -->
    </div>


    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
    <script>
        // Jquery Datatable
        let jquery_datatable = $("#table1").DataTable()
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Yakin hapus data?`,
                    text: "Jika Anda menghapus ini, data akan hilang selamanya.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
