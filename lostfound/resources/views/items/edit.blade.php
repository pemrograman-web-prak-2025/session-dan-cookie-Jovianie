@extends('layout')

@section('title', 'Edit Laporan')

@section('content')
    <h2>Edit Laporan</h2>

    <div class="card">
        <form action="{{ route('items.update', $item) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $item->nama_barang) }}" required>
                @error('nama_barang')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select id="kategori" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <option value="hilang" {{ old('kategori', $item->kategori) == 'hilang' ? 'selected' : '' }}>Barang Hilang</option>
                    <option value="ditemukan" {{ old('kategori', $item->kategori) == 'ditemukan' ? 'selected' : '' }}>Barang Ditemukan</option>
                </select>
                @error('kategori')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" required>{{ old('deskripsi', $item->deskripsi) }}</textarea>
                @error('deskripsi')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi', $item->lokasi) }}" required>
                @error('lokasi')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', $item->tanggal) }}" required>
                @error('tanggal')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor', $item->nama_pelapor) }}" required>
                @error('nama_pelapor')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="kontak">Kontak (No. HP/Email)</label>
                <input type="text" id="kontak" name="kontak" value="{{ old('kontak', $item->kontak) }}" required>
                @error('kontak')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="hilang" {{ old('status', $item->status) == 'hilang' ? 'selected' : '' }}>Hilang</option>
                    <option value="ditemukan" {{ old('status', $item->status) == 'ditemukan' ? 'selected' : '' }}>Ditemukan</option>
                    <option value="selesai" {{ old('status', $item->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
                @error('status')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Update Laporan</button>
                <a href="{{ route('items.index') }}" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection