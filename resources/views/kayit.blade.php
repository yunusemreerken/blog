<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="kayit" method="post">
      @csrf
      <label for="">name:</label>
      <input type="text" name="name" value="">
      <label for="">email:</label>
      <input type="email" name="email" value="">
      <label for="">şifre:</label>
      <input type="password" name="password" value="">
      <input type="submit" name="kayit" value="Kayıt Ol">

    </form>
  </body>
</html>
