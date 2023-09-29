<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
</head>

<body>

    <div class="container bg-light w-50">

        <div class="row mt-5">
            <div class="col  mt-1 text-center">

                <form action="../employee.html">
                    <div class="row mt-4">
                        <div class="heading">
                            <h1>
                                Login
                            </h1>
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="col col-9 mt-3">
                            <input type="text" class="form-control" name="email" id="uemail" placeholder="Email"
                                required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col col-9 mt-3 text-center">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                                required>
                        </div>
                    </div>
                    <div class="row w-100 justify-content-center">
                        <div class="col col-9 mt-3 mb-3 text-center">
                            <input type="submit" value="Log in" class="btn btn-primary w-75 "><br>
                            <small>Don't have an account? <a href="./registerworker.php">Register</a></small>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
</body>

</html>