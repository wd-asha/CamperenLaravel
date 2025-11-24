@extends('layouts.app')
@section('title', 'Camperen | Account')
@section('content')

    <div class="slider">
        <div class="slide-empty">
            <img src="{{ asset('images/aboutus-img6.jpg') }}" alt="">
        </div>
        <div class="slide">
            <div class="slide__about">
                <img src="{{ asset('images/account-1.jpg') }}" alt="">
                <div class="overlay__kids"></div>
            </div>
            <div class="slide__text">
                <div class="slide__about-title">User Accounts</div>
                <div class="slide__about_above-title">Customers can check availability, preview and book accommodations</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="about" style="margin-top: 2rem;">
            @if(session('order_yes'))
                <div style="
                            font-size: 1rem;
                            line-height: 1.2rem;
                            color: white;
                            text-align: center;
                            padding: 1rem;
                            border: 1px solid white;
                            transform: translateY(-3rem);
                            background-color: darkgreen;
                            opacity: .66">
                    {{ session('order_yes') }}
                </div>
            @endif
            <div class="about__title">Account</div>
            <div class="about_caption">Welcome to Wonderer<br>Camping Ground</div>
            <div class="about__text">
                At lectus urna duis convallis convallis tellus id interdum. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit. Non tellus orci ac auctor augue mauris augue
            </div>
        </div>

        <div class="account">
            @include('incs.account-links')
            <div class="account-content">
                <p>Hello, {{ Auth::user()->name }}</p>
                <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details</p>
                {{--<form method="post" action="" class="change-form">
                    @csrf
                    <div class="change-form_item">
                        <label for="name">Name</label>
                        <input class="account-input readonly" type="text" placeholder="Your name *" value="{{ auth()->user()->name }}" name="name" readonly>
                    </div>
                    <div class="change-form_item">
                        <label for="address">Address</label>
                        <input class="account-input readonly" type="text" placeholder="Your Address" value="{{ auth()->user()->address }}" name="address" readonly>
                    </div>
                    <div class="change-form_item">
                        <label for="email">Email</label>
                        <input class="account-input readonly" type="email" placeholder="Your Email *" value="{{ auth()->user()->email }}" name="email" readonly>
                    </div>
                    <div class="change-form_item">
                        <label for="address">Phone</label>
                        <input class="account-input readonly" type="text" placeholder="Your Phone" value="{{ auth()->user()->phone }}" name="phone" readonly>
                    </div>
                </form>--}}
            </div>
        </div>
    </div>
@endsection
