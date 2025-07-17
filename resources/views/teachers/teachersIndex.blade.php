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
        <h1>Teacher Create</h1>
        <a href="{{ Route("teachers.create") }}" class="btn btn-primary"></a>
        <div class="row">
            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">email</th>
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($teachers as $teacher)

                        <tr>
                            <th scope="row">{{ $teacher->id }}</th>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->surname }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->status }}</td>
                            <td>
                                <a href="" class="btn btn-danger">Del</a>
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-primary">SHow</a>
                            </td>

                        </tr>

                     @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>
