@extends('layouts.single')
@section('title', 'Camperen | Single')
@section('content')

<div class="slider__single">
    <video autoplay muted loop>
        <source src="{{ asset('images/Kamp-video.mp4') }}" type="video/mp4">
    </video>
</div>

<div class="container__single">
    <div class="single">
        <div class="single__caption">
            <div class="single__caption_title">{{ $category->title }}</div>
            <div class="single__caption_subtitle">
                <span>{{ $category->subtitle }} | </span>
                <span>{{ $category->persons }} persons | </span>
                <span>{{ $category->sqr }}m<sup>2</sup></span>
            </div>
            <div class="single__caption_text">
                <p>{{ $category->description }}</p>
            </div>
        </div>
        <div class="single__content">
            <div class="single__content_amenities">

                <div class="amenities__item_100">
                    <div class="single__content_availability">
                        <div class="amenities__title">Availability</div>
                        <div id="calendar"></div>
                    </div>
                </div>

                <div class="amenities__title">Amenities</div>
                <div class="amenities__item">
                    <div class="amenities__subtitle">Bedrooms & Bedding</div>
                    <div class="amenities__service">
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image52.svg') }}" alt="" class="img-st">
                            <span>Gas stove</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image35.svg') }}" alt="">
                            <span>Double-bed</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image37.svg') }}" alt="">
                            <span>Bedding</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image49.svg') }}" alt="">
                            <span>Crib (on request)</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image50.svg') }}" alt="">
                            <span>Single bed</span>
                        </div>
                    </div>
                </div>
                <div class="amenities__item">
                    <div class="amenities__subtitle">Kitchen</div>
                    <div class="amenities__service">
                        <div class="amenities__service_item">
                            <img src="{{ asset('') }}images/image36.svg" alt="" class="img-st">
                            <span>Fridge</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image51.svg') }}" alt="">
                            <span>Sing</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image40.svg') }}" alt="">
                            <span>Air Condition</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image53.svg') }}" alt="">
                            <span>Kettle</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image54.svg') }}" alt="">
                            <span>Complete plates & cutlery</span>
                        </div>
                    </div>
                </div>
                <div class="amenities__item">
                    <div class="amenities__subtitle">Bathroom</div>
                    <div class="amenities__service">
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image34.svg') }}" alt="">
                            <span>Private Toilet</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image29.svg') }}" alt="">
                            <span>Shower</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image55.svg') }}" alt="">
                            <span>Bathroom sink</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image56.svg') }}" alt="">
                            <span>Bathroom linen</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image57.svg') }}" alt="">
                            <span>Hair dryer</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image58.svg') }}" alt="">
                            <span>Essentials</span>
                        </div>
                    </div>
                </div>
                <div class="amenities__item">
                    <div class="amenities__subtitle">Outdoor Equipment</div>
                    <div class="amenities__service">
                        <div class="amenities__service_item">
                            <img src="{{ asset('') }}images/image33.svg" alt="">
                            <span>Sunshade</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image59.svg') }}" alt="">
                            <span>Garden table & chairs</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image60.svg') }}" alt="">
                            <span>Sunlounger</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image61.svg') }}" alt="">
                            <span>Barbeque equipment</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image62.svg') }}" alt="" class="img-st">
                            <span>Tools available</span>
                        </div>
                        <div class="amenities__service_item">
                            <img src="{{ asset('images/image63.svg') }}" alt="">
                            <span>Bicycle</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single__content_services">
            <form action="{{ route('checkNow', $category->id) }}" method="post">
                @csrf
                <div class="amenities__item_100">
                    <div class="single__content_reservation">
                        <div class="amenities__title">Your Reservation</div>
                        <div class="check-single">Check in</div>
                        <input type="date" id="checkin" name="checkin" value="@php echo date('Y-m-d') @endphp">
                        <div class="check-single">Check out</div>
                        <input type="date" id="checkout" name="checkout" value="@php echo date('Y-m-d') @endphp">
                    </div>
                </div>

                <div class="services__title">Extra Services</div>
                <div class="services">
                    <div class="service__item">
                        <input type="checkbox" name="late" id="late">
                        <label for="late">Late Checkout</label>
                    </div>
                    <div class="service__price">$<span>10</span></div>

                    <div class="service__item">
                        <input type="checkbox" name="cleaning" id="cleaning">
                        <label for="cleaning">Cleaning Fee</label>
                    </div>
                    <div class="service__price">$<span>20</span></div>

                    <div class="service__item">
                        <input type="checkbox" name="washer" id="washer">
                        <label for="washer">Washer</label>
                    </div>
                    <div class="service__price">$<span>3</span></div>

                    <div class="service__item">
                        <input type="checkbox" name="pet" id="pet">
                        <label for="pet">Pet</label>
                    </div>
                    <div class="service__price">Free</div>

                    <div class="service__item">
                        <input type="checkbox" name="fridge" id="fridge">
                        <label for="fridge">Fridge Rental</label>
                    </div>
                    <div class="service__price">$<span>3</span></div>

                    <div class="service__item">
                        <input type="checkbox" name="security" id="security">
                        <label for="security">Security Deposit</label>
                    </div>
                    <div class="service__price">$<span>5</span></div>

                    <div class="service__item">
                        <input type="checkbox" name="linen" id="linen">
                        <label for="linen">Bedroom Linen </label>
                    </div>
                    <div class="service__price">$<span>10</span></div>

                    <div class="your__price_left">Your Price</div>
                    <div class="your__price_right">$<span id="yourPrice">62</span>
                        <input type="hidden" name="totalPrice" id="totalPrice">
                    </div>
                </div>
                @guest <a href="#popup" class="booking-link">Login</a> @endguest
                @auth <button type="submit" class="booking-link">book now</button> @endauth
            </form>
                <div class="services__title">Indonesia Weather</div>
                <div class="weather">
                    <div class="weather__left">
                        <div class="weather__temp">
                            <img src="{{ asset('') }}images/cloud.svg" alt=""> 24&deg;C</div>
                        <p>Humidity: 75%</p>
                        <p>Wind: 2.82 m/s</p>
                    </div>
                    <div class="weather__right">
                        <p>Fri <img src="{{ asset('images/rain.svg') }}" alt=""> 28°C</p>
                        <p>Sat <img src="{{ asset('images/rain.svg') }}" alt=""> 29°C</p>
                        <p>Sun <img src="{{ asset('images/rain.svg') }}" alt=""> 29°C</p>
                        <p>Mon <img src="{{ asset('images/rain.svg') }}" alt=""> 27°C</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="info-box">
            <div class="info-box_rules">
                <div class="amenities__title">Campsite rules</div>
                <div class="rules">
                    <div class="rule">
                        1. Campsite is opened for vehicle and reception is opened always from 8:00 till 20:00
                    </div>
                    <div class="rule">
                        2. The earliest check in time is 08:00 and latest check out time is 11:30.
                    </div>
                    <div class="rule">
                        3. All roads in the camp site must remain free.
                    </div>
                    <div class="rule">
                        4. Emptying chemical toilets is allowed only on designated place.
                    </div>
                    <div class="rule">
                        5. Guests should keep their pitch area clear and tidy.
                    </div>
                    <div class="rule">
                        6. Quiet hours are from 14:00 till 16:t00 afternoon and from 22:00 till 7:00.
                    </div>
                    <div class="rule">
                        7. Use of electric stoves, and heating is not allowed and can result in power shut down.
                    </div>
                    <div class="rule">
                        8. Smoking inside caravan/rented tents/cabins is strictly forbidden.
                    </div>
                </div>
            </div>
            <div class="info-box_image">
                <img src="/media/images/{{ $category->image }}" alt="">
            </div>
        </div>

        <div class="campground">
            <div class="campground__list">
                <div class="campground__title">Campground map</div>
                <div class="campground_item">
                    <img src="{{ asset('images/image64.svg') }}" alt="">
                    <span>Reception, Info Centar</span>
                </div>
                <div class="campground_item">
                    <img src="{{ asset('images/image65.svg') }}" alt="">
                    <span>Restrooms</span>
                </div>
                <div class="campground_item">
                    <img src="{{ asset('images/image66.svg') }}" alt="">
                    <span>First aid / Ambulance</span>
                </div>
                <div class="campground_item">
                    <img src="{{ asset('images/image56.svg') }}" alt="">
                    <span>Sanitary facilities</span>
                </div>
                <div class="campground_item">
                    <img src="{{ asset('images/image57.svg') }}" alt="">
                    <span>Car Parking</span>
                </div>
                <div class="campground_item">
                    <img src="{{ asset('images/image54.svg') }}" alt="">
                    <span>Restaurant, Cafe</span>
                </div>
                <div class="campground_item">
                    <img src="{{ asset('images/image59.svg') }}" alt="">
                    <span>Sitting area</span>
                </div>
                <div class="campground_item">
                    <img src="{{ asset('images/image39.svg') }}" alt="">
                    <span>Fire place / barbeque</span>
                </div>
                <div class="campground_item">
                    <img src="{{ asset('images/image38.svg') }}" alt="">
                    <span>Available tent site (up to 20 sites)</span>
                </div>
                <div class="campground_item">
                    <img src="{{ asset('images/image46.svg') }}" alt="">
                    <span>Washing and drying machines</span>
                </div>

            </div>
            <div class="campground__image">
                <img src="{{ asset('images/map.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>

@endsection

