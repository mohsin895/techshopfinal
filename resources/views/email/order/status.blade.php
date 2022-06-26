<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order Update Status Email</title>
  </head>
  <body>
    <table>
      <tr>
        <td>Email:{{$user->email}}</td>
</tr>
      <tr>
      
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Your Order Status:{{$status}}
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Order Id::#{{$order['order_id']}}
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Message:{{$orderStatus['user_comment']}}
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Thanks & Regrads</td>
      </tr>
      <tr>
        <td>{{$gs->website_name}}</td>
      </tr>
    </table>
  </body>
</html>
