<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Withdraw Status</title>
  </head>
  <body>
    <table>
      <tr>
      <td>  Dear </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Your withdraw is @if($status=='1')
                                    <div class="badge badge-light-success">Success</div>
                                    @elseif ($status=='2')
                                    <div class="badge badge-light-danger">Draft</div>
                                    @elseif ($status=='3')
                                    <div class="badge badge-light-danger">Cancel</div>
                                    @else
                                    <div class="badge badge-light-danger">new</div>
                                    @endif<br>
        Your account information is as below 
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
        <td>Account Number: {{$account_number}}</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Amount: {{$amount}}</td>
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
