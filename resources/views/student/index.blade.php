<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-primary mb-3" href="{{ route('student.create') }}" role="button">Create Student</a>


    <table class="table  table-bordered border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>

                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nim }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>
