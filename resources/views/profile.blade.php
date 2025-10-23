@extends('layouts.app')

@section('title', 'Profile - Kedai Sedulur')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow cafe-bg text-white">
                <div class="card-body">
                    <h2 class="fw-bold mb-2">
                        <i class="bi bi-person-circle"></i> Profile Pengguna
                    </h2>
                    <p class="mb-0">Informasi detail tentang akun anda</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" 
                             style="width: 120px; height: 120px; font-size: 3rem;">
                            <i class="bi bi-person-fill"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold mb-1">{{ $username }}</h4>
                    <p class="text-muted mb-3">Barista</p>
                    <span class="badge bg-success mb-3">
                        <i class="bi bi-circle-fill" style="font-size: 0.5rem;"></i> Online
                    </span>
                    <hr>
                    <div class="d-grid gap-2">
                        <a href="{{ route('dashboard', ['username' => $username]) }}" 
                           class="btn btn-outline-primary">
                            <i class="bi bi-house-door"></i> Dashboard
                        </a>
                        <a href="{{ route('login') }}" class="btn btn-outline-danger">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-4">
                        <i class="bi bi-person-badge text-primary"></i> Informasi Akun
                    </h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="text-muted small">Username</label>
                            <p class="fw-bold">{{ $username }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small">Role</label>
                            <p class="fw-bold">Barista</p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small">Email</label>
                            <p class="fw-bold">{{ strtolower($username) }}@kedaisedulur.com</p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small">Telepon</label>
                            <p class="fw-bold">+62 812-3456-7890</p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small">Tanggal Bergabung</label>
                            <p class="fw-bold">15 April 2025</p>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted small">Status</label>
                            <p class="fw-bold text-success">
                                <i class="bi bi-check-circle-fill"></i> Aktif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-4">
                        <i class="bi bi-graph-up text-success"></i> Statistik Aktivitas
                    </h5>
                    <div class="row text-center g-3">
                        <div class="col-md-4">
                            <div class="p-3 bg-light rounded">
                                <h3 class="fw-bold text-primary mb-0">127</h3>
                                <small class="text-muted">Total Login</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 bg-light rounded">
                                <h3 class="fw-bold text-success mb-0">39</h3>
                                <small class="text-muted">Menu Dikelola</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 bg-light rounded">
                                <h3 class="fw-bold text-warning mb-0">24</h3>
                                <small class="text-muted">Update Terakhir</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h5 class="fw-bold mb-4">
                        <i class="bi bi-clock-history text-info"></i> Aktivitas Terkini
                    </h5>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item border-0 px-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" 
                                         style="width: 40px; height: 40px;">
                                        <i class="bi bi-box-arrow-in-right"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold">Login Berhasil</p>
                                    <small class="text-muted">Hari ini, 09:30 WIB</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="list-group-item border-0 px-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" 
                                         style="width: 40px; height: 40px;">
                                        <i class="bi bi-eye"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold">Melihat Halaman Pengelolaan</p>
                                    <small class="text-muted">Hari ini, 09:25 WIB</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="list-group-item border-0 px-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center" 
                                         style="width: 40px; height: 40px;">
                                        <i class="bi bi-pencil-square"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold">Update Status Menu</p>
                                    <small class="text-muted">Kemarin, 15:45 WIB</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="list-group-item border-0 px-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" 
                                         style="width: 40px; height: 40px;">
                                        <i class="bi bi-plus-circle"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold">Menambah Menu Baru</p>
                                    <small class="text-muted">2 hari lalu, 14:20 WIB</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection