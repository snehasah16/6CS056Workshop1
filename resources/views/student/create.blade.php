@php
    $student = new \App\Models\Student();
@endphp

<x-layouts.app title="Create Student">

    <h1>Create Student</h1>

    <x-students.form
        :student="$student"
        :action="route('students.store')"
        method="POST"
    />

</x-layouts.app>