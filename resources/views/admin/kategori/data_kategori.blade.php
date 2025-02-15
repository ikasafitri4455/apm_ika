@extends('layoutsadmin.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 3000); // Hide the success alert after 3 seconds
    </script>
@endif

<div class="col-md-12">
   <div class="p-4 mt-4 me-5">
    <div class="card">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Data Kategori </h3>
            <a href="tambah_kategori" class="btn btn-light btn-round">Tambah kategori</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama kategori</th>
                        <th>Deskripsi</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($kategoris as $kategori)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $kategori->nama_kategori }}</td>
                                <td>{{ $kategori->deskripsi }}</td>
                                <td>
                                    <a href="/edit_kategori/{{$kategori->id}}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="javascript:void(0);" class="btn btn-danger"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Hapus"
                                        onclick="confirmDeletion({{ $kategori->id }});">
                                        <i class="fa fa-close color-danger">Hapus</i>
                                    </a>

                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                    <script>
                                        function confirmDeletion(id) {
                                            Swal.fire({
                                                title: "Data ini akan dihapus dan tidak bisa dikembalikan!",
                                                text: 'Apakah Anda yakin?',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Ya, hapus!',
                                                cancelButtonText: 'Batal'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // Kirim request DELETE
                                                    fetch(`/destroy_kategori/${id}`, {
                                                        method: 'DELETE',
                                                        headers: {
                                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                        }
                                                    })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        if (data.success) {
                                                            Swal.fire({
                                                                icon: 'success',
                                                                title: 'Berhasil!',
                                                                text: data.message,
                                                                showConfirmButton: false,
                                                                timer: 2000
                                                            });
                                                            setTimeout(() => {
                                                                location.reload(); // Refresh halaman tabel kategori
                                                            }, 2000);
                                                        } else {
                                                            Swal.fire({
                                                                icon: 'error',
                                                                title: 'Gagal!',
                                                                text: 'Terjadi kesalahan saat menghapus data.',
                                                                showConfirmButton: false,
                                                                timer: 2000
                                                            });
                                                        }
                                                    })
                                                    .catch(error => {
                                                        console.error('Terjadi kesalahan:', error);
                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Error!',
                                                            text: 'Terjadi kesalahan pada server.',
                                                            showConfirmButton: false,
                                                            timer: 2000
                                                        });
                                                    });
                                                }
                                            });
                                        }
                                    </script>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   </div>
</div>

@endsection
