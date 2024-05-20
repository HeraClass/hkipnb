<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="resources/css/styles.css">
</head>

<body class="loading authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center m-auto">
                                <div class="auth-logo">
                                    <a href="#" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="assets/images/logo_politeknik_negeri_bali.png" alt="Logo" height="200">
                                        </span>
                                    </a>

                                    <a href="#" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="assets/images/logo_politeknik_negeri_bali.png" alt="Logo" height="200">
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">Masukkan username dan password Anda.</p>
                            </div>

                            <form>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input class="form-control" name="username" id="username" placeholder="Username" required="required" autofocus>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required="required">
                                        <div class="input-group-text">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit">Sign In</button>
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end page -->

    <footer class="footer footer-alt text-white">
        2023 - <script>document.write(new Date().getFullYear())</script> &copy; Politeknik Negeri Bali (PNB)
    </footer>

    <script src="path/to/your/scripts.js"></script>
</body>

</html>
