@include('common.header')
<h1>Home Page</h1>
<p>Welcome to Home</p>

@includeif('common.inner', ['page'=>"This is Home page"])