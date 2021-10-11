@extends('website.layouts.app')

@section('content')


<!-- Login Add Section Begin -->
<section class="cart-total-page spad pt-4">
    <div class="container">
        <form action="{{ route('website.register') }}" class="checkout-form" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h3>Register</h3>
                    @include('flash-message')
                </div>
                
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Name*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Email*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Password*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Confirm Password*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="password" name="confirm_password" value="{{ old('confirm_password') }}" placeholder="Confirm Password" required>
                            @error('confirm_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
            
        </form>
    </div>
</section>
<!-- Login Add Section End -->
@endsection
