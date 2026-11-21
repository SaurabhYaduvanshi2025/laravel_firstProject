<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Form Validation Practice</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h2>Student Registration</h2>

    <!-- 'novalidate' lagaya hai taaki browser ki jagah Laravel validation test ho sake -->
    <form action="{{ route('student.submit') }}" method="POST" novalidate>
        @csrf

        <!-- 1. Text Input -->
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name">
            @error('name') <span class="error-text">{{ $message }}</span> @enderror
        </div>

        <!-- 2. Email Input -->
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email">
            @error('email') <span class="error-text">{{ $message }}</span> @enderror
        </div>

        <!-- 3. Radio Buttons (Single Selection) -->
        <div class="form-group">
            <label>Gender</label>
            <div class="inline-group">
                <label><input type="radio" name="gender" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }}> Male</label>
                <label><input type="radio" name="gender" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}> Female</label>
                <label><input type="radio" name="gender" value="Other" {{ old('gender') == 'Other' ? 'checked' : '' }}> Other</label>
            </div>
            @error('gender') <span class="error-text">{{ $message }}</span> @enderror
        </div>

        <!-- 4. Checkboxes (Multiple Selection - Dhyan dein: name="skills[]" array hai) -->
        <div class="form-group">
            <label>Technical Skills</label>
            <div class="inline-group">
                <label><input type="checkbox" name="skills[]" value="PHP" {{ is_array(old('skills')) && in_array('PHP', old('skills')) ? 'checked' : '' }}> PHP</label>
                <label><input type="checkbox" name="skills[]" value="Laravel" {{ is_array(old('skills')) && in_array('Laravel', old('skills')) ? 'checked' : '' }}> Laravel</label>
                <label><input type="checkbox" name="skills[]" value="React" {{ is_array(old('skills')) && in_array('React', old('skills')) ? 'checked' : '' }}> React</label>
            </div>
            @error('skills') <span class="error-text">{{ $message }}</span> @enderror
        </div>

        <!-- 5. Dropdown (Select) -->
        <div class="form-group">
            <label for="course">Select Course</label>
            <select id="course" name="course">
                <option value="">-- Choose a Course --</option>
                <option value="Laravel Basics" {{ old('course') == 'Laravel Basics' ? 'selected' : '' }}>Laravel Basics</option>
                <option value="Full Stack React & PHP" {{ old('course') == 'Full Stack React & PHP' ? 'selected' : '' }}>Full Stack React & PHP</option>
                <option value="MERN Stack" {{ old('course') == 'MERN Stack' ? 'selected' : '' }}>MERN Stack</option>
            </select>
            @error('course') <span class="error-text">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Submit Data</button>
    </form>

    <!-- Output Section -->
    @if(isset($submittedData))
        <div class="output-box">
            <h3>Submitted Output:</h3>
            <p><strong>Name:</strong> {{ $submittedData['name'] }}</p>
            <p><strong>Email:</strong> {{ $submittedData['email'] }}</p>
            <p><strong>Gender:</strong> {{ $submittedData['gender'] }}</p>
            <!-- implode() array ko comma-separated string mein badalta hai -->
            <p><strong>Skills:</strong> {{ implode(', ', $submittedData['skills']) }}</p>
            <p><strong>Course:</strong> {{ $submittedData['course'] }}</p>
        </div>
    @endif
</div>

</body>
</html>