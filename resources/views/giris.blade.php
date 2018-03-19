<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="giris" method="post">
      @csrf
      <label for="">email</label>
      <input type="email" name="email" value="">
      <label for="">Şifre</label>
      <input type="password" name="password" value="">
      <input type="submit" name="kayit" value="Giriş Yap">

    </form>
  </body>
</html>
