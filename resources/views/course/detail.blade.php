
<x-layouts.app title="Course Details">

    <h1>Course Details</h1>

    <p>
        <strong>ID:</strong>
        {{ $course->id }}
    </p>

    <p>
        <strong>Name:</strong>
        {{ $course->name }}
    </p>

    <p>
        <strong>Description:</strong>
        {{ $course->description ?? 'No description provided' }}
    </p>

    <p>
        <strong>Duration:</strong>
        {{ $course->duration }} weeks
    </p>

    <p>
        <strong>Fee:</strong>
        Rs. {{ $course->fee }}
    </p>

    <p>
        <strong>Difficulty:</strong>
        {{ $course->difficulty }}
    </p>

    <p>
        <strong>Active:</strong>
        {{ $course->is_active ? 'Yes' : 'No' }}
    </p>

    <br>

    <a href="{{ route('courses.edit', $course) }}" class="btn">
        Edit Course
    </a>

    <br><br>

    <a href="{{ route('courses.index') }}" class="btn">
        Back to Courses
    </a>

</x-layouts.app>
