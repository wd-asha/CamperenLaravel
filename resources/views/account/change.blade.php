{{-- аккаунт пользователя - изменить --}}
@extends('layouts.app')
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
            {{-- подключаем пункты меню аккаунта пользователя --}}
            @include('incs.account-links')
            {{-- выводим информацию о пользователе --}}
            {{-- все поля открыты для редактирования --}}
            <div class="account-content">
                <form method="post" action="{{ route('account.save') }}" class="change-form">
                    @csrf
                    {{-- имя пользователя --}}
                    <div class="change-form_item">
                        <label for="name">Name</label>
                        <input
                            class="account-input"
                            type="text"
                            placeholder="Your Name *"
                            value="{{ auth()->user()->name }}"
                            name="name"
                        >
                    </div>
                    {{-- адрес пользователя, он же адрес доставки --}}
                    <div class="change-form_item">
                        <label for="address">Address</label>
                        <input
                            class="account-input"
                            type="text"
                            placeholder="empty"
                            value="{{ old('address', auth()->user()->address) }}"
                            name="address"
                        >
                    </div>
                    {{-- почта пользователя, он же логин для входа --}}
                    <div class="change-form_item">
                        <label for="email">Email</label>
                        <input
                            class="account-input"
                            type="email"
                            placeholder="Your Email *"
                            value="{{ auth()->user()->email }}"
                            name="email"
                        >
                    </div>
                    {{-- телефон пользователя --}}
                    <div class="change-form_item">
                        <label for="address">Phone</label>
                        <input
                            class="account-input"
                            type="text"
                            placeholder="empty"
                            value="{{ old('phone', auth()->user()->phone) }}"
                            name="phone"
                        >
                    </div>
                    <div class="change-form_item">
                        <label class="labelBtn" for="btn">btn</label>
                        <button class="button-submit" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
