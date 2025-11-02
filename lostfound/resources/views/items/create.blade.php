@extends('layout')

@section('title', 'Tambah Laporan')

@section('content')
    <h2>Tambah Laporan Baru</h2>

    <div class="card">
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}" required>
                @error('nama_barang')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select id="kategori" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <option value="hilang" {{ old('kategori') == 'hilang' ? 'selected' : '' }}>Barang Hilang</option>
                    <option value="ditemukan" {{ old('kategori') == 'ditemukan' ? 'selected' : '' }}>Barang Ditemukan</option>
                </select>
                @error('kategori')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" required>
                @error('lokasi')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                @error('tanggal')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" required>
                @error('nama_pelapor')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="kontak">Kontak (No. HP/Email)</label>
                <input type="text" id="kontak" name="kontak" value="{{ old('kontak') }}" required>
                @error('kontak')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Simpan Laporan</button>
                <a href="{{ route('items.index') }}" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection