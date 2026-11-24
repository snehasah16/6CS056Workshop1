
<x-layouts.app title="Edit Student">

    <h1>Edit Student</h1>

    <x-students.form
        :student="$student"
        :action="route('students.update', $student)"
        method="PUT"
    />

</x-layouts.app>
