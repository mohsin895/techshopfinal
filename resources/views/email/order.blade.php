<html >
  
  <body >
  <table width="700px">
    <tr><td>&nbsp;</td><tr>
      <tr><td><img  src="<?php echo $message->embed(public_path().'/assets/images/setting/'.$gs->site_logo); ?>"><td><tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>{{$userDetails['name']}} </td></tr>
        <table width="700px" border="0" cellpading="0" cellspacing="0">
    
      <tr>
      <td>  </td>
      </tr>
     
      
      
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Thanks you for shopping with us. Your Order Details are as below"</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Order No:  {{$order_id}}</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <table width="95%" cellpading="5" cellspacing="5" bgcolor="#f7f4f4">
            <tr bgcolor="#cccccc">
              <td>Product Name </td>
              <td>Product Model</td>
            
              <td>Quantity</td>
              <td>Unit Price</td>
            </tr>
            @foreach($productDetails['orders'] as $product)
            <tr>
              <td>{{$product['product_name']}}</td>
              <td>{{$product['model_no']}}</td>
            
              <td>{{$product['quantity']}}</td>
              @php   $vat= ($product['price']*$gs->vat)/ 100 ; @endphp
              @if($gs->cart_page_vat==1)
              <td>{{$gs->currency}}&nbsp;&nbsp;{{$product['price']}}</td>
              @else 
              <td>{{$gs->currency}}&nbsp;&nbsp;{{$product['price'] + $vat}}</td>
              @endif
            </tr>

            @endforeach
            @if($gs->cart_page_vat==1)
            @if(!empty($productDetails['coupon_code']))
            <tr>
              <td colspan="3" align="right">Subtotal:</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['subtotal']}}</td>
            </tr>
            <tr>
              @if($productDetails['amount_type'] == 'fixed')
              <td colspan="3" align="right">Discount({{$productDetails['discount_amount']}} &nbsp;&nbsp;{{$gs->currency}} &nbsp;off):</td>
              @else
              <td colspan="3" align="right">Discount({{$productDetails['amount']}} % off):</td>
              @endif
              <td>{{$gs->currency}}&nbsp;&nbsp; -{{$productDetails['discount_amount']}}</td>
            </tr>
            @else
            <tr>
              <td colspan="3" align="right">Subtotal:</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['subtotal']}}</td>
            </tr>
            @endif
            <tr>
              <td colspan="3" align="right">Vat(%):</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['vat']}}</td>
            </tr>
            @else

            @if(!empty($productDetails['coupon_code']))
            <tr>
              <td colspan="3" align="right">Subtotal:</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['subtotal']}}</td>
            </tr>
            <tr>
              @if($productDetails['amount_type'] == 'fixed')
              <td colspan="3" align="right">Discount(off}}):</td>
              @else
              <td colspan="3" align="right">Discount({{$productDetails['amount']}} % off):</td>
              @endif
              <td>{{$gs->currency}}&nbsp;&nbsp; -{{$productDetails['discount_amount']}}</td>
            </tr>
            @else
            <tr>
              <td colspan="3" align="right">Subtotal:</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['subtotal']}}</td>
            </tr>
            @endif
        

            @endif
            <tr>
              <td colspan="3" align="right">Shipping Charge</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['shipping']}}</td>
            </tr>
            @if(!empty($productDetails['giftcard_amount']))
            <tr>
              <td colspan="3" align="right">Giftcard Balance</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; -{{$productDetails['giftcard_amount']}}</td>
            </tr>
            @endif
            
            <tr>
              <td colspan="3" align="right">Grand Total</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['grand_total'] - $productDetails['giftcard_amount']}}  </td>
            </tr>
          </table>
        </td>
      </tr>
            <tr>
              <td>
                <table width="100%">
                <tr>
                  <td width="50%">
                    <table>
                      <tr>
                        <td><strong>Bill TO :-</strong></td>
                      </tr>
                        <tr>
                          <td>{{$userDetails['name']}}</td>
                        </tr>
                        <tr>
                          <td>{{$userDetails['address1']}}</td>
                        </tr>
                        <tr>
                          <td>{{$userDetails['city']}}</td>
                        </tr>
                      
                        <tr>
                          <td>{{$userDetails['country']}}</td>
                        </tr>
                       
                        <tr>
                          <td>{{$userDetails['phone']}}</td>
                        </tr>

                    </table>
                  </td>

                  <td width="50%">
                    <table>
                      <tr>
                        <td><strong>Shipping TO :-</strong></td>
                      </tr>
                      <tr>
                          <td>{{$userDetails['name']}}</td>
                        </tr>
                        <tr>
                          <td>{{$userDetails['address1']}}</td>
                        </tr>
                        <tr>
                          <td>{{$userDetails['city']}}</td>
                        </tr>
                      
                        <tr>
                          <td>{{$userDetails['country']}}</td>
                        </tr>
                       
                        <tr>
                          <td>{{$userDetails['phone']}}</td>
                        </tr>

                    </table>
                  </td>
                </tr>
                </table>
              </td>
            </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>For any equiries, you can contact us at <a href="mailto:{{$gs->email1}}">{{$gs->email1}}</a>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Regards &nbsp;&nbsp; Team-{{$gs->site_title}}</td>
    </tr>

    

      
    </table>
    

    
    </table>
  </body>
</html>
