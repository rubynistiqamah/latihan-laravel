<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success" role="alert">

            {{ session('success') }}
        </div>
    @endif



    <table id="example"class="table  table-bordered border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lecturers as $lecturer)
                <tr>

                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <img src="{{ $lecturer->avatar ? asset('storage/' . $lecturer->avatar) : asset('images/no-profil.jpg') }}"
                            alt=""width="50">
                        {{ $lecturer->name }}
                    </td>
                    <td>{{ $lecturer->department->name }}</td>
                    <td>

                        <form method="POST" action="{{ route('lecturer.restore', $lecturer) }}"class="d-inline">

                            @csrf
                            @method('put')

                            <button type="submit" class="btn btn-warning"
                                onclick="return confirm('Restore this data?')">Restore</button>
                        </form>


                        <form method="POST" action="{{ route('lecturer.forceDelete', $lecturer) }}"class="d-inline">

                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Delete Permanent</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>
