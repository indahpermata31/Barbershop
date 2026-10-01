<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Barbershop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --fa-primary: #4361ee;
            --fa-primary-dark: #3046c4;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background-color: #f7f8fc;
            display: flex;
            align-items: center;
        }

        .login-wrapper {
            width: 100%;
        }

        .login-card {
            border: none;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(67, 97, 238, 0.12);
        }

        .login-header {
            background: var(--fa-primary);
            padding: 2rem 1.5rem 1.75rem;
            color: #fff;
            text-align: center;
        }

        .login-header .brand-icon {
            width: 52px;
            height: 52px;
            margin: 0 auto 0.75rem;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .login-header h3 {
            font-weight: 700;
            margin-bottom: 0.2rem;
            font-size: 1.4rem;
        }

        .login-header p {
            font-size: 0.85rem;
            opacity: 0.85;
            margin-bottom: 0;
        }

        .card-body {
            background-color: #fff;
            padding: 2.25rem 2rem 2rem;
        }

        .form-label {
            font-weight: 600;
            color: #2b2b3d;
            font-size: 0.85rem;
            margin-bottom: 0.4rem;
        }

        .form-control {
            border-radius: 10px;
            padding: 0.65rem 0.9rem;
            border: 1px solid #e4e7f1;
            background-color: #f7f8fc;
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: var(--fa-primary);
            box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.15);
            background-color: #fff;
        }

        .btn-login {
            background: var(--fa-primary);
            border: none;
            border-radius: 10px;
            padding: 0.7rem;
            font-weight: 600;
            letter-spacing: 0.3px;
            color: #fff;
            transition: background 0.15s ease, transform 0.15s ease;
        }

        .btn-login:hover {
            background: var(--fa-primary-dark);
            transform: translateY(-1px);
            color: #fff;
        }

        .alert-danger {
            border-radius: 10px;
            font-size: 0.88rem;
        }

        .footer-text {
            text-align: center;
            font-size: 0.8rem;
            color: #8a8fa3;
            margin-top: 1.25rem;
        }
    </style>
</head>
<body>

<div class="container login-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card login-card">

                <div class="login-header">
                    <div class="brand-icon">✂️</div>
                    {{-- <div class="brand-icon">⚡</div> --}}
                    <h3>Barbershop</h3>
                    <p>Barbershop Admin Panel</p>
                </div>

                <div class="card-body">

                    @if(session('gagal'))
                        <div class="alert alert-danger">
                            {{ session('gagal') }}
                        </div>
                    @endif

                    <form action="/login" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="nama@email.com">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="••••••••">
                        </div>

                        <button class="btn btn-login w-100">
                            Sign In
                        </button>
                    </form>

                    <p class="footer-text">© {{ date('Y') }} Barbershop</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>