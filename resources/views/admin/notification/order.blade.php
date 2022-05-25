<!-- 
<style>
  p {
    margin: 4px;
    font-size: 16px;
    font-weight: bolder;
    cursor: pointer;
  }
  .blue {
    color: blue;
  }
  .highlight {
    background: yellow;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>


<a class="clear">{{ __('New Order(s).') }}</a>
		@if(count($datas) > 0)
		<a id="order-notf-clear" data-href="{{ route('admin.order-notf-clear') }}" class="clear" href="javascript:;">
			{{ __('Clear All') }}
		</a>
		<ul>
		@foreach($datas as $data)
			<li>
				
			
				<a href="{{ route('admin.order.details',$data->order_id) }}" id="order-notf-status" data-href="{{ route('admin.order-notf-status') }}"> <i class="fas fa-newspaper"></i> @if($data->status=='0') <p class="blue " style="background: red;" >{{ __('You Have a new order.') }}</p>@else {{ __('You Have a new order.') }} @endif</a>
			</li>
		@endforeach

		</ul>

		@else 

		<a class="clear" href="javascript:;">
			{{ __('No New Notifications.') }}
		</a>
		
		@endif


		<script>
$( "p" ).click(function() {
  $( this ).toggleClass( "highlight" );
});
</script> -->