<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    // Display all courses
    public function index()
    {
        $courses = Course::all();

        return view('course.list', [
            'courses' => $courses
        ]);
    }

    // Show create course form
    public function create()
    {
        return view('course.create');
    }

    // Store a new course
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $course = Course::create($validated);

        return redirect()
            ->route('courses.index')
            ->with('success', "Course {$course->name} created successfully!");
    }

    // Display one course
    public function show(Course $course)
    {
        return view('course.detail', [
            'course' => $course
        ]);
    }

    // Show edit course form
    public function edit(Course $course)
    {
        return view('course.edit', [
            'course' => $course
        ]);
    }

    // Update an existing course
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate($this->rules());

        $course->update($validated);

        return redirect()
            ->route('courses.show', $course)
            ->with('success', 'Course updated successfully!');
    }

    // Delete a course
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully!');
    }

    // Centralized validation rules
    private function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'duration' => 'required|integer|min:1',
            'fee' => 'required|numeric|min:0',
            'difficulty' => [
                'required',
                Rule::in(['Easy', 'Medium', 'Hard'])
            ],
            'is_active' => 'required|boolean',
        ];
    }
}
