@include('common.header')
<!-- <h1>Home Page</h1> -->
<p>Welcome to Home</p>

<x-message-banner msg="User Login Successfully"/>
<x-message-banner msg="User Signup Successfully"/>
<br>
<x-message-banner msg="Password Does Not have" Match class="error"/>


<style>

  .success{
    background-color: lightgreen;
    color: green;
    padding:3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;
  }
  .error{
    background-color: red;
    color: green;
    padding:3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;

  }


</style>



<!-- @includeif('common.inner', ['page'=>"This is Home page"])x`x -->