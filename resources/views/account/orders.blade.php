{{-- аккаунт пользователя - заказы блюд --}}
@extends('layouts.account')
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
                <div class="order_yes">
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
            {{-- выводим информацию о заказах блюд пользователя --}}
            <div class="account-content">
                @if($orders->isNotEmpty())
                    <div class="orders-place">
                        <div class="orders-item orders-captions">
                            <span style="width:3%">ID</span>
                            <span style="width:19%">Category</span>
                            <span style="width:15%">Date In</span>
                            <span style="width:19%">Date Out</span>
                            <span style="width:12%">Total</span>
                            <span style="width:11%">Status</span>
                            <span style="width:20%">Created</span>
                            <span style="width:2%"></span>
                        </div>
                        @foreach($orders as $order)
                            <div class="orders-item">
                                <span style="width:3%">{{ $order->id }}</span>
                                <span style="width:19%">{{ $order->category->title }}</span>
                                <span style="width:15%">{{ $order->checkin }}</span>
                                <span style="width:19%">{{ $order->checkout }}</span>
                                <span style="width:12%">${{ $order->price}}</span>
                                <span style="width:11%">
                                    @if($order->status == true)
                                        @if($order->checked == false)
                                            <span style="color: red">booked</span>
                                            @else
                                            <span style="color: green">booked</span>
                                        @endif
                                    @elseif($order->status == false)
                                        <span style="color: gray">canceled</span>
                                    @endif
                                </span>
                                <span style="width:20%">{{ $order->created_at->format('d.m.Y') }}</span>
                                @if($order->status == 1)
                                    <a href="{{ route('account.canceled', $order->id) }}" style="width:2%" class="cancel-icon">&times;</a>
                                @else
                                    <span style="width:2%"></span>
                                    {{--<a href="{{ route('account.retro', $order->id) }}" style="width:2%" class="cancel-icon">&times;</a>--}}
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="orders-place bordered">
                        <a href="{{ route('accommodation') }}">Browse products</a>
                        <p>No order has been made yet</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
