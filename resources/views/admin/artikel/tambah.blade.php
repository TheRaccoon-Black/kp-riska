@extends('admin.template.template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card card-primary">
            <button class="btn btn-lg btn-primary col-lg-6 p-3 mt-3"><h1>Tambah Artikel</h1></button>
            <div class="card-header mt-3">
                <h3 class="card-title">Tambah Artikel Baru</h3>
            </div>
            <form action="{{ route('admin.storeArtikel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <!-- Judul Artikel -->
                    <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul" required>
                    </div>

                    <div class="form-group">
                        <label for="user">Di Ambil Oleh</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Masukkan Nama Pengambil" required>
                    </div>

                    <!-- Deskripsi Artikel -->
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Artikel</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="3" required></textarea>
                    </div>

                    <!-- Upload File Artikel -->
                    <div class="form-group">
                        <label for="file">Upload Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="file" accept="image/*" required>
                                <label class="custom-file-label" for="file">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>

                    <!-- Tanggal Upload -->
                    <div class="form-group">
                        <label for="tgl_upload">Tanggal Upload</label>
                        <input type="date" class="form-control" id="tgl_upload" name="tgl_upload" required>
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option value="berita">Berita</option>
                            <option value="pengumuman">Pengumuman</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection