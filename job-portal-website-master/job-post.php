<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobVia-Job post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script type="text/javascript">

    </script>
</head>

<body>
    <form action="../job-portal-website-master/job-list.html" class="bg-secondary" name="f1">
        <div class="container ">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="heading">
                        <h1 class="text-white">
                            Post Job
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6 mb-2 ">
                    <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="fname"
                        required>
                </div>
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lname" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-2">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required
                        minlength="10" maxlength="12">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="feild" placeholder="Type of job" name="feild" required>
                </div>
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="location" placeholder="Location" name="location"
                        required>
                </div>
            </div>
            <div class="row">
                <div class="form-outline">
                    <textarea name="description" id="description" cols="" rows="4" minlength="5" class="form-control"
                        placeholder="Job description" required></textarea>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 mt-3 mb-4">
                    <input type="submit" class="btn btn-primary w-100" id="registerbtn" value="Post" name="submit">
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