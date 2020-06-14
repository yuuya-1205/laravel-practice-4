@extends('layout.index')


@section('content')

<a href="http://127.0.0.1:8001/login">login</a>
<a href="http://127.0.0.1:8001/register">register</a>

<style>
    .title {
      float: left;
      font-size: 20px;
    }

    a {
      float: right;
      padding: 10px;
    }

    
</style>



<form action="#" method="post">
  <p>Register</p>
    <p>Name：<input type="text" name="name"></p>
    <p>E-mail Adress:<input type="text" name="mailadress"></p>
  <p>Password：<input type="text" name="password"></p>
  <p>Confirm Password：<input type="text" name="confirmpassword"></p>
  <p><input type="submit" value="Register"></p>
</form>

@endsection
 

