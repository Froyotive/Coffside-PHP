<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Coffside</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ecede8;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo-1.png" alt="Coffside Logo" width="80" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="images/login.png" alt="login" class="login-card-img" />
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <p class="login-card-description">Register your account</p>
                            <form action="#!">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Name</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Username</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Username" />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Phone Number</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Phone Number" />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email address/Username" />
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="***********" />
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button"
                                    value="Register" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>