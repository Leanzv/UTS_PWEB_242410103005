@extends('layouts.app')

@section('title', 'Pengelolaan Menu - Kedai Sedulur')

@section('content')
<div class="container py-5">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow cafe-bg text-white">
                <div class="card-body">
                    <h2 class="fw-bold mb-2">
                        <i class="bi bi-list-ul"></i> Pengelolaan Menu Cafe
                    </h2>
                    <p class="mb-0">Kelola semua menu yang tersedia di Kedai Sedulur, {{ $username }}!</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Filter Kategori -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-primary fs-6">Semua Menu ({{ count($menus) }})</span>
                        <span class="badge bg-success fs-6">Kopi (7)</span>
                        <span class="badge bg-info fs-6">Non-Kopi (7)</span>
                        <span class="badge bg-warning fs-6">Squash (4)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tabel Menu -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Menu</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menus as $menu)
                                <tr>
                                    <td>{{ $menu['id'] }}</td>
                                    <td class="fw-bold">{{ $menu['nama'] }}</td>
                                    <td>
                                        @if($menu['kategori'] == 'Kopi')
                                            <span class="badge bg-success">{{ $menu['kategori'] }}</span>
                                        @elseif($menu['kategori'] == 'Non-Kopi')
                                            <span class="badge bg-info">{{ $menu['kategori'] }}</span>
                                        @else
                                            <span class="badge bg-warning">{{ $menu['kategori'] }}</span>
                                        @endif
                                    </td>
                                    <td>Rp {{ number_format($menu['harga'], 0, ',', '.') }}</td>
                                    <td>
                                        @if($menu['stok'] == 'Tersedia')
                                            <span class="badge bg-success">
                                                <i class="bi bi-check-circle"></i> Tersedia
                                            </span>
                                        @else
                                            <span class="badge bg-danger">
                                                <i class="bi bi-x-circle"></i> Habis
                                            </span>
                                        @endif
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
    
    <!-- Card View (Alternative Display) -->
    <div class="row mt-5">
        <div class="col-12 mb-3">
            <h4 class="fw-bold">
                <i class="bi bi-grid"></i> Tampilan Card
            </h4>
        </div>
        
        @foreach($menus as $menu)
        <div class="col-md-4 col-sm-6 mb-4 fade-stagger">
            <div class="card border-0 shadow card-hover h-100 card-anim">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h5 class="fw-bold mb-0">{{ $menu['nama'] }}</h5>
                        @if($menu['stok'] == 'Tersedia')
                            <span class="badge bg-success">Tersedia</span>
                        @else
                            <span class="badge bg-danger">Habis</span>
                        @endif
                    </div>
                    
                    <p class="text-muted small mb-2">
                        <i class="bi bi-tag"></i> {{ $menu['kategori'] }}
                    </p>

                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="text-primary fw-bold mb-0">
                            Rp {{ number_format($menu['harga'], 0, ',', '.') }}
                        </h4>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
