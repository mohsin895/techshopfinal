<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forgot Password Email</title>
  </head>
  <body>
    <table>
      <tr>
      <td>  Dear {{$name}}</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>.<br>
        Your account information is as below with new Password:
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Email: {{$email}}</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>New Password: {{$password}}</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Password: ****(as choosen by you)</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Thanks & Regrads</td>
      </tr>
      <tr>
        <td>{{$gs->site_title}}</td>
      </tr>
    </table>
  </body>
</html>
