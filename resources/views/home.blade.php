@include('common.header')
<!-- <h1>Home Page</h1> -->
<p>Welcome to Home</p>

<x-message-banner />

<style>

  .success{
    background-color: lightgreen;
    color: green;
    padding:3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;
  }

</style>



<!-- @includeif('common.inner', ['page'=>"This is Home page"])x`x -->