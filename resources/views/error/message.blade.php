@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('flash_message_error'))
<!-- <div class="alert alert-danger alert-block">
	<button type="button" class="btn close" id="closePrescription" data-dismiss="alert">×</button>
    <strong>{{ session('flash_message_error') }}</strong>
</div> -->

<div class="alert alert-danger" role="alert" style="color:red">
  <strong style="color:white">{{ session('flash_message_error') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif


@if(Session::has('flash_message_forget'))
<!-- <div class="alert alert-danger alert-block">
	<button type="button" class="btn close" id="closePrescription" data-dismiss="alert">×</button>
    <strong>{{ session('flash_message_error') }}</strong>
</div> -->

<div class="alert alert-danger" role="alert" style="color:red">
  <strong style="color:red"><a href="">{{ session('flash_message_forget') }}</a></strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif


@if(Session::has('flash_message_success'))
<div class="alert alert-success ">
	<button type="button" class="btn close" data-dismiss="alert">×</button>
        <strong>{{ session('flash_message_success') }}</strong>
</div>

@endif
