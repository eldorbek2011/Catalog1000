<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Teachers</title>
</head>

<body>

    <div class="container py-5">
        <div class="row">
            <div class="col-7">
                <form method="post" action="{{  Route('teachers.create')  }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name">
                    </div>
                    <div class="mb-3">
                        <label for="Surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="Surname" name="Surname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
                    </div>
                    <select class="form-select" aria-label="Default select example">
                            <option value="Status" id="Status" name="Status">Status</option>
                            <option value="1">Activ</option>
                            <option value="0">NO Activ</option>
                        </select>
                    <div class="mb-3 ">
                        <label for="form-check-label">Phone</label> <br>
                        <input type="numper" class="form-control" id="phone" name="Phone"> <br>
                    </div>
                    <div class="mb-3 ">
                        <label for="form-check-label">Address</label> <br>
                        <input type="text" class="form-control" id="Address" name="Address"> <br>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>
