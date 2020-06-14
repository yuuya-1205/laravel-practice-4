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
  <p>Login</p>
    <p>E-mail Adress：<input type="text" name="adress"></p>
    <p>Password:<input type="text" name="password"></p>
  <p><input type="submit" value="Login"></p>
</form>

@endsection
 

