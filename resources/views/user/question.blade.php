@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<section >
    <div class="card col-12 col-sm-12 col-md-12 col-lg-12" id="question">
        
        <div class="question-design">
        <label for="name" class="form-label question-fornt" style="    margin-left: 20px;
    margin-right: 20px;
    margin-right: 20px;
    margin-top: 20px;
    margin-bottom: 20px;">Ask a Question</lable>
            <div class="form-design">

        <form action="{{route('user.question',$products['slug'])}}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$products->id}}">
            <div class="form-group">
                <label for="name" class="form-label question-fornt">Product Name</label>
                <input type="text" class="form-control question-design-robotic" readonly name="name" value="{{$products->product_name}}">
            </div>
            
            <div class="form-group">
                <label for="body" class="form-label question-fornt">Your Question</label>
                <textarea class="form-control question-design-robotic" id="body" rows="6" name="question"></textarea>
            </div>
            <div class="form-group text-center mt-4">
                <button type="submit" class="btn btn-question form-control">Submit</button>
                <a href="{{url('/product/details',$products->slug)}}" type="button" class="btn btn-light back-button form-control">Back</a>
            </div>
        </form>
        <div>
        <div>
    </div>
</section>
@include('layout.front.footer');
@endsection