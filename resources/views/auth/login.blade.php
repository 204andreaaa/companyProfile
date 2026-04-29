<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - Bach Multi Global</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8f9fa;
        }

        .login-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 15px;
        }

        .login-card {
            width: 100%;
            max-width: 430px;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, .08);
            overflow: hidden;
            border: none;
        }

        .login-header {
            text-align: center;
            padding: 30px 25px 20px;
            background: #ffffff;
            border-bottom: 1px solid #f1f1f1;
        }

        .login-header h3 {
            font-weight: 700;
            color: #2d3436;
            margin-bottom: 6px;
        }

        .login-header p {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 0;
        }

        .login-body {
            padding: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
        }

        .form-control {
            height: 48px;
            border-radius: 10px;
            border: 1px solid #dcdcdc;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #6c757d;
        }

        .input-group-text {
            background: #fff;
            border-radius: 10px 0 0 10px;
            border-right: none;
        }

        .btn-login {
            height: 48px;
            border-radius: 10px;
            font-weight: 600;
            background: #343a40;
            border: none;
        }

        .btn-login:hover {
            background: #212529;
        }

        .alert-danger {
            border-radius: 10px;
            font-size: 14px;
        }

        @media (max-width: 576px) {
            .login-body {
                padding: 24px;
            }

            .login-header {
                padding: 25px 20px 18px;
            }
        }
    </style>
</head>
<body>

    <div class="login-section">

        <div class="login-card">

            <div class="login-header">
                <h3>Admin Login</h3>
                <p>Masuk untuk mengakses dashboard admin</p>
            </div>

            <div class="login-body">

                @if ($errors->any())
                    <div class="alert alert-danger mb-3">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 btn-login">
                        Login
                    </button>

                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
