<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kedai Sedulur</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #6B4423 0%, #8B5A3C 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            overflow: hidden;
        }
        
        .login-header {
            background: linear-gradient(135deg, #6B4423 0%, #8B5A3C 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        .btn-cafe {
            background: linear-gradient(135deg, #6B4423 0%, #8B5A3C 100%);
            border: none;
            color: white;
            transition: transform 0.3s ease;
        }
        
        .btn-cafe:hover {
            transform: scale(1.05);
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="login-card">
                    <div class="login-header">
                        <i class="bi bi-cup-hot-fill" style="font-size: 3rem;"></i>
                        <h2 class="fw-bold mt-2">Kedai Sedulur</h2>
                        <p class="mb-0">Sistem Manajemen Menu Cafe</p>
                    </div>
                    
                    <div class="p-4">
                        <h4 class="text-center mb-4">Silahkan Login</h4>
                        
                        <form action="{{ route('login.process') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="username" class="form-label">
                                    <i class="bi bi-person"></i> Username
                                </label>
                                <input type="text" 
                                       class="form-control" 
                                       id="username" 
                                       name="username" 
                                       placeholder="Masukkan username"
                                       required
                                       autofocus>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label">
                                    <i class="bi bi-lock"></i> Password
                                </label>
                                <input type="password" 
                                       class="form-control" 
                                       id="password" 
                                       name="password" 
                                       placeholder="Masukkan password"
                                       required>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-cafe btn-lg">
                                    <i class="bi bi-box-arrow-in-right"></i> Login
                                </button>
                            </div>
                        </form>
                        
                        <!-- <div class="text-center mt-4">
                            <p class="text-muted small">
                                <i class="bi bi-info-circle"></i> 
                                Gunakan username apapun untuk login
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>