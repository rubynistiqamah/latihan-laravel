<x-app>

    <x-slot:title>{{ $title }}</x-slot>


    <a class="btn btn-warning mb-3" href="{{ route('department.index') }}" role="button">Back To Department</a>

    <ul class="list-group">

        @foreach ($department->lecturers as $lecturer)
            <li class="list-group-item">{{ $loop->iteration }}. {{ $lecturer->name }}</li>
        @endforeach
    </ul>



</x-app>
