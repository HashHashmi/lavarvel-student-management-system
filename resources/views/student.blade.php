<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <title>Student Managment System</title>
</head>

<body>
    @include('navbar')
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-8">
                        @include('studentslist')
                    </section>
                </div>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row mt-5">
                <div class="col-lg-6">
                    @include('studentslist')
                </div>
                <div class="col-lg-6">

                    <div class="card mb-3">
                        <img src="https://27mi124bz6zg1hqy6n192jkb-wpengine.netdna-ssl.com/wp-content/uploads/2020/05/Top-12-Pioneers-in-Education-scaled.jpg   "
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter the information for new students here</h5>
                            <form action="/store" method="post">
                                @csrf

                                <div class="form-group">
                                    <label>CNE</label>
                                    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                                </div>

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="firstName" type="text" class="form-control"
                                        placeholder="Enter your First Name">
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="lastName" type="text" class="form-control"
                                        placeholder="Enter your Last Name">
                                </div>

                                <div class="form-group">
                                    <label>Age</label>
                                    <input name="age" type="text" class="form-control" placeholder="Enter your Age">
                                </div>

                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input name="speciality" type="text" class="form-control"
                                        placeholder="Enter your Speciality">
                                </div>

                                <input type="submit" class="btn btn-info" value="Create">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include('studentslist')
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row mt-5">
                <div class="col-lg-6">
                    @include('studentslist')
                </div>
                <div class="col-lg-6">
                    <form action="/update/{{ $student->id }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>CNE</label>
                            <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"
                                placeholder="Enter cne">
                        </div>

                        <div class="form-group">
                            <label>First Name</label>
                            <input value="{{ $student->firstName }}" name="firstName" type="text"
                                class="form-control" placeholder="Enter your First Name">
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input value="{{ $student->lastName }}" name="lastName" type="text" class="form-control"
                                placeholder="Enter your Last Name">
                        </div>

                        <div class="form-group">
                            <label>Age</label>
                            <input value="{{ $student->age }}" name="age" type="text" class="form-control"
                                placeholder="Enter your Age">
                        </div>

                        <div class="form-group">
                            <label>Speciality</label>
                            <input value="{{ $student->speciality }}" name="speciality" type="text"
                                class="form-control" placeholder="Enter your Speciality">
                        </div>

                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                </div>
            </div>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
