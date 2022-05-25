<!-- <a class="clear">{{ __('New Withdraw Notification(s).') }}</a>
		@if(count($datas) > 0)
		<a id="withdraw-notf-clear" data-href="{{ route('admin.withdraw-notf-clear') }}" class="clear" href="javascript:;">
			{{ __('Clear All') }}
		</a>
		<ul>
		@foreach($datas as $data)
			<li>
				<a href="{{ route('admin.withdraw.details',$data->withdraw_id) }}"> <i class="fas fa-newspaper"></i> {{ __('You Have a new Withdraw Message.') }}</a>
			</li>
		@endforeach

		</ul>

		@else 

		<a class="clear" href="javascript:;">
			{{ __('No New Withdraw Notifications.') }}
		</a>

		@endif -->