<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Form Practice</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h2>Student Registration</h2>

    <form action="{{ route('student.submit') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="course">Select Course</label>
            <select id="course" name="course">
                <option value="Laravel Basics">Laravel Basics</option>
                <option value="Full Stack React & PHP">Full Stack React & PHP</option>
                <option value="MERN Stack">MERN Stack</option>
            </select>
        </div>

        <button type="submit">Submit Data</button>
    </form>

    <!-- Output Section: Sirf tab dikhega jab form submit hoga -->
    @if(isset($submittedData))
        <div class="output-box">
            <h3>Submitted Output:</h3>
            <p><strong>Name:</strong> {{ $submittedData['name'] }}</p>
            <p><strong>Email:</strong> {{ $submittedData['email'] }}</p>
            <p><strong>Course:</strong> {{ $submittedData['course'] }}</p>
        </div>
    @endif
</div>

</body>
</html>