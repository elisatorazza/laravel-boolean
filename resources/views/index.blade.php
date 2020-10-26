<h1>Lista Studenti</h1>

@foreach ($students as $student)
    <ul>
        <li>{{$student->name}}</li>
        <li>{{$student->lastname}}</li>
        <li>{{$student->date_of_birth}}</li>

    </ul>
@endforeach
