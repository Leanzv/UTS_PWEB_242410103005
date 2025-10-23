<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kedai Sedulur')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }
        
        .content-wrapper {
            flex: 1;
        }
        
        .cafe-bg {
            background: linear-gradient(135deg, #6B4423 0%, #8B5A3C 100%);
        }
        
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        /* Animation utility classes */
        .fade-stagger { will-change: opacity, transform; }
        .reveal-on-scroll { will-change: opacity, transform; }
        .card-anim { transition: transform 220ms ease, box-shadow 220ms ease; }
    </style>
    
    @yield('styles')
</head>
<body>
    <x-navbar :username="$username ?? null" />
    
    <div class="content-wrapper">
        @yield('content')
    </div>
    
    <x-footer />
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/animasi.js"></script>
    
    @yield('scripts')
</body>
</html>