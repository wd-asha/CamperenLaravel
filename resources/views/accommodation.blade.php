@extends('layouts.accommodation')
@section('title', 'Camperen | Accommodation')
@section('content')

<div class="slider">
    <div class="slide-empty">
        <img src="{{ asset('') }}images/main-rev-2.jpg" style="background: transparent" alt="">
    </div>
    <div class="slide_accomp">
        <div class="slide__text_accomp">
            <div class="slide__title">Take only memories,<br>leave only footprints</div>
            <a href="" class="booking__item-link_reverse">check availability</a>
        </div>
    </div>
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('images/Main-Video.mp4') }}" type="video/mp4">
    </video>
</div>

<div class="order_accomp">
    <form action="{{ route('show') }}" method="post" name="order-form" class="order__form">
        @csrf
        <div class="form-control">
            <div class="control__header">
                <img src="{{ asset('images/image14.svg') }}" alt="">
                <span>&ensp;CHECK IN</span>
            </div>
            <div class="control__input">
                <input
                    type="date"
                    name="datein"
                    id="datein"
                    value="{{ \Carbon\Carbon::parse($data['datein'] ?? now())->format('Y-m-d') }}"
                >
            </div>
        </div>
        <div class="form-control">
            <div class="control__header">
                <img src="{{ asset('images/image14.svg') }}" alt="">
                <span>&ensp;CHECK OUT</span>
            </div>
            <div class="control__input">
                <input
                    type="date"
                    name="dateout"
                    id="dateout"
                    value="{{ \Carbon\Carbon::parse($data['dateout'] ?? now())->format('Y-m-d') }}"
                >
            </div>
        </div>
        <div class="form-control">
            <div class="control__header">
                <img src="{{ asset('images/image15.svg') }}" alt="">
                <span>&ensp;GUESTS</span>
            </div>
            <div class="control__input">
                <select name="guest" id="guest">
                    <option value="1 guest" {{ ($data['guest'] ?? '') == '1 guest' ? 'selected' : '' }}>1 guest</option>
                    <option value="2 guests" {{ ($data['guest'] ?? '') == '2 guests' ? 'selected' : '' }}>2 guests</option>
                    <option value="3 guests" {{ ($data['guest'] ?? '') == '3 guests' ? 'selected' : '' }}>3 guests</option>
                    <option value="4 guests" {{ ($data['guest'] ?? '') == '4 guests' ? 'selected' : '' }}>4 guests</option>
                    <option value="5 guests" {{ ($data['guest'] ?? '') == '5 guests' ? 'selected' : '' }}>5 guests</option>
                    <option value="6 guests" {{ ($data['guest'] ?? '') == '6 guests' ? 'selected' : '' }}>6 guests</option>
                </select>
            </div>
        </div>
        <div class="form-control">
            <div class="control__header">
                <img src="{{ asset('images/image14.svg') }}" alt="">
                <span>&ensp;ACCOMMODATION</span>
            </div>
            <div class="control__input">
                <select name="accomm" id="accomm">
                    <option value="all" {{ ($data['accomm'] ?? '') == 'all' ? 'selected' : '' }}>all</option>
                    <option value="tent" {{ ($data['accomm'] ?? '') == 'tent' ? 'selected' : '' }}>tent</option>
                    <option value="trailer" {{ ($data['accomm'] ?? '') == 'trailer' ? 'selected' : '' }}>trailer</option>
                    <option value="cabin" {{ ($data['accomm'] ?? '') == 'cabin' ? 'selected' : '' }}>cabin</option>
                </select>
            </div>
        </div>
        <div class="form-control">
            <button type="submit" class="submit-btn">SHOW</button>
        </div>
    </form>
</div>


<div class="container">
<div class="booking_accomp">
    <div class="booking__item">
        <div class="booking__title">Booking</div>
        <div class="booking__caption">Book your dream<br>vacation now</div>
    </div>
    <div class="booking__item">
        <p>Velit massa. Donec est dui, aliquet non felis et, pellentesque fringilla quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
    </div>

    @foreach($categories as $category)
    <div class="booking__item">
        <div class="booking__item-image">
            <img src="/media/images/{{ $category->image }}" alt="">
        </div>
        <div class="booking__item-header">
            <div class="booking__item-title">{{ $category->title }}</div>
            <div class="booking__item-desc">{{ $category->persons }} persons | {{ $category->sqr }}m<sup>2</sup></div>
        </div>
        <div class="booking__item-text">
            {{ $category->description }}
        </div>
        <div class="booking__item-footer">
            <div class="booking__item-services">
                @if( $category->icons === 1)
                    <img src="{{ asset('images/image28.svg') }}" alt="">
                    <img src="{{ asset('images/image29.svg') }}" alt="">
                    <img src="{{ asset('images/image30.svg') }}" alt="">
                    <img src="{{ asset('images/image31.svg') }}" alt="">
                @endif
                @if( $category->icons === 2)
                    <img src="{{ asset('images/image33.svg') }}" alt="">
                    <img src="{{ asset('images/image34.svg') }}" alt="">
                    <img src="{{ asset('images/image35.svg') }}" alt="">
                    <img src="{{ asset('images/image36.svg') }}" alt="">
                @endif
                @if( $category->icons === 3)
                    <img src="{{ asset('images/image37.svg') }}" alt="">
                    <img src="{{ asset('images/image28.svg') }}" alt="">
                    <img src="{{ asset('images/image38.svg') }}" alt="">
                    <img src="{{ asset('images/image39.svg') }}" alt="">
                @endif
                @if( $category->icons === 4)
                    <img src="{{ asset('images/image40.svg') }}" alt="">
                    <img src="{{ asset('images/image41.svg') }}" alt="">
                    <img src="{{ asset('images/image35.svg') }}" alt="">
                    <img src="{{ asset('images/image42.svg') }}" alt="">
                @endif
                @if( $category->icons === 5)
                    <img src="{{ asset('images/image28.svg') }}" alt="">
                    <img src="{{ asset('images/image29.svg') }}" alt="">
                    <img src="{{ asset('images/image30.svg') }}" alt="">
                    <img src="{{ asset('images/image31.svg') }}" alt="">
                @endif
                @if( $category->icons === 6)
                    <img src="{{ asset('images/image33.svg') }}" alt="">
                    <img src="{{ asset('images/image34.svg') }}" alt="">
                    <img src="{{ asset('images/image35.svg') }}" alt="">
                    <img src="{{ asset('images/image36.svg') }}" alt="">
                @endif
                @if( $category->icons === 7)
                    <img src="{{ asset('images/image33.svg') }}" alt="">
                    <img src="{{ asset('images/image34.svg') }}" alt="">
                    <img src="{{ asset('images/image35.svg') }}" alt="">
                    <img src="{{ asset('images/image36.svg') }}" alt="">
                @endif
                @if( $category->icons === 8)
                    <img src="{{ asset('images/image37.svg') }}" alt="">
                    <img src="{{ asset('images/image28.svg') }}" alt="">
                    <img src="{{ asset('images/image38.svg') }}" alt="">
                    <img src="{{ asset('images/image39.svg') }}" alt="">
                @endif
                @if( $category->icons === 9)
                    <img src="{{ asset('images/image28.svg') }}" alt="">
                    <img src="{{ asset('images/image29.svg') }}" alt="">
                    <img src="{{ asset('images/image30.svg') }}" alt="">
                    <img src="{{ asset('images/image39.svg') }}" alt="">
                @endif
                @if( $category->icons === 10)
                    <img src="{{ asset('images/image33.svg') }}" alt="">
                    <img src="{{ asset('images/image34.svg') }}" alt="">
                    <img src="{{ asset('images/image35.svg') }}" alt="">
                    <img src="{{ asset('images/image36.svg') }}" alt="">
                @endif
                @if( $category->icons === 11)
                    <img src="{{ asset('images/image28.svg') }}" alt="">
                    <img src="{{ asset('images/image29.svg') }}" alt="">
                    <img src="{{ asset('images/image30.svg') }}" alt="">
                    <img src="{{ asset('images/image31.svg') }}" alt="">
                @endif
                @if( $category->icons === 12)
                    <img src="{{ asset('images/image37.svg') }}" alt="">
                    <img src="{{ asset('images/image28.svg') }}" alt="">
                    <img src="{{ asset('images/image38.svg') }}" alt="">
                    <img src="{{ asset('images/image39.svg') }}" alt="">
                @endif
            </div>
            <a href="{{ route('single', $category->id) }}" class="booking__item-link">check availability</a>
        </div>
    </div>
    @endforeach
</div>
</div>

@endsection
