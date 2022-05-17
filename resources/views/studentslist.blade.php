<div class="card mb-3">
    <img src="https://live.staticflickr.com/65535/48768420643_8e63fbc64e_c.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of Students</h5>
        <p class="card-text">You can find here all the information related to the Students</p>


        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">CNE</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->cne }}</td>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->lastName }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->speciality }}</td>
                        <td>

                            <a href="{{ url('/edit/' . $student->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
