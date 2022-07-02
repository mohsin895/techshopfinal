<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Giftcard Order Update Status</title>
  </head>
  <body>
    <table>
      <tr>
      
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Your Giftcard Order Status::{{$status}}
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Giftcard Name::{{$order->name}}
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Payment Type:{{$order->account_type}}
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr><td>Purchase Price:{{$order->purchase_price}}</td></tr>
      <tr><td>Message:{{$order->user_comment}}</td></tr>
      <tr>
        <td>Thanks & Regrads</td>
      </tr>
      <tr>
        <td>{{$gs->website_name}}</td>
      </tr>
    </table>
  </body>
</html>
