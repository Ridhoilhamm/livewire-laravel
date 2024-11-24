<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session()->has('message'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <!-- START FORM -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <form>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Employe</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" wire:model="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">

                </label>
                <div class="col-sm-10">
                    @if ($updateData == false)
                        <button type="button" class="btn btn-primary" name="submit"
                            wire:click="store()">SIMPAN</button>
                    @else
                        <button type="button" class="btn btn-primary" name="submit"
                            wire:click="update()">UPDATE</button>
                    @endif
                    <button type="button" class="btn btn-secondary" name="submit" wire:click="clear()">CLEAR</button>
                </div>
            </div>

        </form>
    </div>
    <!-- AKHIR FORM -->

    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h1>Data Pegawai</h1>
        <div>
            <input type="text" class="form-control mb-3 w-25" placeholder="Search" wire:model.live="search">
        </div>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-3">email</th>
                    <th class="col-md-3">Alamat</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataEmployee as $data)
                    <tr>
                        <td>{{ $dataEmployee->currentPage() * $perPage - $perPage + $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->alamat }}</td>


                        <td>
                            <!-- Gunakan flex untuk membuatnya horizontal -->
                            <a wire:click="edit({{ $data->id }})"class="text-decoration-none me-2">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a wire:click="delete_konfirmasi({{ $data->id }})"class="text-decoration-none"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-trash3-fill"></i>
                            </a>
                        </td>
                @endforeach
                </tr>
            </tbody>
            {{ $dataEmployee->links() }}
        </table>
    </div>

    <!-- AKHIR DATA -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 Apakah Anda Yakin Menghapus Data?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cencel</button>
                    <button type="button" class="btn btn-primary" wire:click="delete()" data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>

    </div>
