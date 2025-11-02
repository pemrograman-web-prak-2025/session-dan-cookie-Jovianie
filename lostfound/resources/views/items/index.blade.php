@extends('layout')

@section('title', 'Daftar Laporan')

@section('content')
    <div class="top-actions">
        <h2>Daftar Laporan</h2>
        <a href="{{ route('items.create') }}" class="btn">+ Tambah Laporan</a>
    </div>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    @if($items->isEmpty())
        <div class="card">
            <p style="text-align: center; color: #999;">Belum ada laporan barang hilang atau ditemukan.</p>
        </div>
    @else
        <div class="item-grid">
            @foreach($items as $item)
                <div class="card">
                    <div class="item-header">
                        <h3 class="item-title">{{ $item->nama_barang }}</h3>
                        <span class="badge badge-{{ $item->status }}">{{ ucfirst($item->status) }}</span>
                    </div>
                    
                    <div class="item-info">
                        <strong>Kategori:</strong> {{ ucfirst($item->kategori) }}
                    </div>
                    
                    <div class="item-info">
                        <strong>Deskripsi:</strong> {{ Str::limit($item->deskripsi, 80) }}
                    </div>
                    
                    <div class="item-info">
                        <strong>Lokasi:</strong> {{ $item->lokasi }}
                    </div>
                    
                    <div class="item-info">
                        <strong>Tanggal:</strong> {{ date('d/m/Y', strtotime($item->tanggal)) }}
                    </div>
                    
                    <div class="item-info">
                        <strong>Pelapor:</strong> {{ $item->nama_pelapor }}
                    </div>
                    
                    <div class="item-info">
                        <strong>Kontak:</strong> {{ $item->kontak }}
                    </div>

                    <div class="actions">
                        <a href="{{ route('items.edit', $item) }}" class="btn btn-sm">Edit</a>
                        <form action="{{ route('items.destroy', $item) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection