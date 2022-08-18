@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<section id="contact">
    <div class="card col-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="contact-title">Submit Your Message</h1>

        <form action="{{route('user.contact.email')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email (Required)</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Phone (Required)</label>
                <input type="text" class="form-control" id="email" required name="phone" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject (Required)</label>
                <input type="text" class="form-control" id="subject" name="subject" value="" required>
            </div>
            <!-- <div class="form-group">
                    <label for="department" class="form-label">Department</label>
                    <select class="form-control" id="department" name="department">
                        <option value="General">General</option>
                        <option value="Customer Service">Customer Service</option>
                        <option value="PCB Support">PCB Support</option>
                        <option value="Sourcing Support">Sourcing Support</option>
                        <option value="Technical Support">Technical Support</option>
                    </select>
                </div> -->
            <div class="form-group">
                <label for="body" class="form-label">Your message (Required)</label>
                <textarea class="form-control" id="body" rows="6" name="body" required></textarea>
            </div>
            <div class="form-group text-center mt-4">
                <button type="submit" class="btn sign-button btn-block">Submit</button>
            </div>
        </form>
    </div>
</section>


@include('layout.front.footer');

@endsection