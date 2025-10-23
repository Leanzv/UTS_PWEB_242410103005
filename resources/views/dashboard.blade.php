@extends('layouts.app')

@section('title', 'Dashboard - Kedai Sedulur')

@section('content')
<div class="container py-5">
    <!-- Welcome Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow cafe-bg text-white">
                <div class="card-body p-4">
                    <h1 class="display-5 fw-bold">
                        <i class="bi bi-person-circle"></i> Selamat Datang, {{ $username }}!
                    </h1>
                    <p class="lead mb-0">Kelola menu Kedai Sedular dengan cepat dan praktis</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Statistics Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow card-hover">
                <div class="card-body text-center">
                    <div class="display-4 text-primary mb-2">
                        <i class="bi bi-cup-hot"></i>
                    </div>
                    <h3 class="fw-bold">18</h3>
                    <p class="text-muted mb-0">Total Menu</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow card-hover">
                <div class="card-body text-center">
                    <div class="display-4 text-success mb-2">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <h3 class="fw-bold">14</h3>
                    <p class="text-muted mb-0">Menu Tersedia</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow card-hover">
                <div class="card-body text-center">
                    <div class="display-4 text-warning mb-2">
                        <i class="bi bi-grid-3x3-gap"></i>
                    </div>
                    <h3 class="fw-bold">3</h3>
                    <p class="text-muted mb-0">Kategori</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow card-hover">
                <div class="card-body text-center">
                    <div class="display-4 text-danger mb-2">
                        <i class="bi bi-x-circle"></i>
                    </div>
                    <h3 class="fw-bold">4</h3>
                    <p class="text-muted mb-0">Stok Habis</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Info Section -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-info-circle text-info"></i> Tentang Sistem
                    </h5>
                    <p>Sistem Kedai Sedulur membantu untuk mengelola menu cafe dengan fitur:</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success"></i> Pengelolaan menu lengkap</li>
                        <li><i class="bi bi-check-circle text-success"></i> Kategori menu terorganisir</li>
                        <li><i class="bi bi-check-circle text-success"></i> Monitoring stok produk</li>
                        <li><i class="bi bi-check-circle text-success"></i> Tampilan responsif</li>
                        <li><i class="bi bi-check-circle text-success"></i> Profile Akun</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-calendar-event text-primary"></i> Aktivitas Terkini
                    </h5>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item border-0 px-0">
                            <small class="text-muted">Hari ini</small>
                            <p class="mb-0">Login berhasil sebagai {{ $username }}!</p>
                        </div>
                        <div class="list-group-item border-0 px-0">
                            <small class="text-muted">Kemarin</small>
                            <p class="mb-0">Update menu Passion Fruit: Stok habis</p>
                        </div>
                        <div class="list-group-item border-0 px-0">
                            <small class="text-muted">2 hari lalu</small>
                            <p class="mb-0">Menambahkan menu baru: Taro Milk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection