
<x-layouts.app title="Student Details">

    <h1>Student Details</h1>

    <p>
        <strong>ID:</strong>
        {{ $student->id }}
    </p>

    <p>
        <strong>Name:</strong>
        {{ $student->name }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $student->email }}
    </p>

    <p>
        <strong>Phone:</strong>
        {{ $student->phone }}
    </p>

    <p>
        <strong>Address:</strong>
        {{ $student->address ?? 'Not provided' }}
    </p>

    <p>
        <strong>Date of Birth:</strong>
        {{ $student->date_of_birth?->format('Y-m-d') ?? 'Not provided' }}
    </p>

    <p>
        <strong>Age:</strong>
        {{ $student->age ?? 'Not available' }}
    </p>

    <br>

    <a href="{{ route('students.edit', $student) }}" class="btn">
        Edit Student
    </a>

    <br><br>

    <a href="{{ route('students.index') }}" class="btn">
        Back to Students
    </a>

</x-layouts.app>
