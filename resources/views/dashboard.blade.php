@extends('layouts.account')
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
        <div class="about">
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
            </div>
        </div>
    </div>
@endsection
