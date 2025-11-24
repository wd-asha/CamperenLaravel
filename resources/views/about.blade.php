@extends('layouts.app')
@section('title', 'Camperen | About Us')
@section('content')

    <div class="slider">
        <div class="slide-empty">
            <img src="{{ asset('images/aboutus-img6.jpg') }}" alt="">
        </div>
        <div class="slide">
            <div class="slide__about">
                <img src="{{ asset('images/aboutus-img6.jpg') }}" alt="">
                <div class="overlay__kids"></div>
            </div>
            <div class="slide__text">
                <div class="slide__about_above-title">Connecting with nature</div>
                <div class="slide__about-title">Change The<br>way you think</div>
                <a href="" class="slide__link pos hide">
                    <a href="" class="about-link">check availability</a>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="zones">
            <div class="zone">
                <div class="zone__image">
                    <img src="images/aboutus-img2.jpg" alt="">
                </div>
                <div class="zone__content">
                    <div class="zone__title">Trailers / Zone A</div>
                    <div class="zone__subtitle">1-6 persons | 15m<sup>2</sup></div>
                    <div class="zone__text">Suspendisse sodales ligula lobortis porttitor eleifend. Aenean nisi ipsum, euismod at erat et, dapibus ultricies lectus. Sed eget leo hendrerit, aliquam risus sed, pretium nibh. Suspendisse vitae maximus ligula. Quisque id nibh bibendum, iaculis nisl</div>
                    <div class="zone__services">
                        <img src="images/image31.svg" alt="" style="width: 1.66rem">
                        <img src="images/image36.svg" alt="" style="width: 1rem">
                        <img src="images/image42.svg" alt="">
                        <img src="images/image28.svg" alt="">
                        <img src="images/image30.svg" alt="">
                        <img src="images/image35.svg" alt="">
                        <img src="images/image62.svg" alt="" style="width: .9rem">
                        <img src="images/image41.svg" alt="">
                        <img src="images/image71.svg" alt="">
                    </div>
                    <a href="" class="zone__link">check availability</a>
                </div>
            </div>

            <div class="zone">
                <div class="zone__image zone__image_noright">
                    <img src="images/aboutus-img3.jpg" alt="">
                </div>
                <div class="zone__content zone__content_right">
                    <div class="zone__title text__right">Lux Cabins / Zone C</div>
                    <div class="zone__subtitle text__right">2-6 persons | 22m<sup>2</sup></div>
                    <div class="zone__text text__right">Fusce eu efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum tristique libero ex, sit amet dignissim sapien tempus sed. Aliquam condimentum risus et ornare lobortis vivamus iaculis</div>
                    <div class="zone__services flex__right">
                        <img src="images/image73.svg" alt="" style="width: 1.66rem">
                        <img src="images/image39.svg" alt="" style="width: 1rem">
                        <img src="images/image35.svg" alt="" style="width: 1.66rem">
                        <img src="images/image42.svg" alt="">
                        <img src="images/image28.svg" alt="">
                        <img src="images/image41.svg" alt="">
                        <img src="images/image29.svg" alt="">
                        <img src="images/image33.svg" alt="">
                        <img src="images/image62.svg" alt="" style="width: .9rem">
                    </div>
                    <div class="link__right">
                        <a href="" class="zone__link link__right">check availability</a>
                    </div>
                </div>
                <div class="zone__image zone__image_right">
                    <img src="images/aboutus-img3.jpg" alt="">
                </div>
            </div>

            <div class="zone">
                <div class="zone__image">
                    <img src="images/aboutus-img4.jpg" alt="">
                </div>
                <div class="zone__content">
                    <div class="zone__title">RV Caravan / Zone B</div>
                    <div class="zone__subtitle">1-6 persons | 15m<sup>2</sup></div>
                    <div class="zone__text"> Integer a tempus dolor, ut vehicula diam. Suspendisse potenti. In quis tortor luctus orci sodales dictum vel egestas elit. Duis lobortis lectus vitae sapien tempus malesuada. Nullam non nibh eget massa sollicitudin placerat vitae maecenas lacinia nunc</div>
                    <div class="zone__services">
                        <img src="images/image74.svg" alt="" style="width: 2rem">
                        <img src="images/image50.svg" alt="" style="width: 1.33rem">
                        <img src="images/image59.svg" alt="" style="width: 1.66rem">
                        <img src="images/image66.svg" alt="">
                        <img src="images/image42.svg" alt="">
                        <img src="images/image41.svg" alt="">
                        <img src="images/image62.svg" alt="" style="width: .9rem">
                        <img src="images/image33.svg" alt="">
                        <img src="images/image75.svg" alt="" style="width: 1rem">
                    </div>
                    <a href="" class="zone__link">check availability</a>
                </div>
            </div>

            <div class="zone">
                <div class="zone__image zone__image_noright">
                    <img src="{{ asset('images/aboutus-img1.jpg') }}" alt="">
                </div>
                <div class="zone__content zone__content_right">
                    <div class="zone__title text__right">Campground price list</div>
                    <div class="price-list">
                        <p class="first">List</p><p>Low season</p><p>High season</p>
                        <p class="first">Zone A, per person</p><p>$15.00</p><p>$17.00</p>
                        <p class="first">Zone B, per person</p><p>$10.00</p><p>$13.00</p>
                        <p class="first">Child (6-12 years)</p><p>$7.00</p><p>$9.00</p>
                        <p class="first">Infants (0-5 years)</p><p>Gratis</p><p>Gratis</p>
                        <p class="first">Pet</p><p>Free </p><p>Free</p>
                        <p class="first">Electricity</p><p>$4.00</p><p>$4.00</p>
                        <p class="first">Internet connection</p><p>Free</p><p>Free</p>
                        <p class="first">Vehicle on the plot</p><p>$13</p><p>$13</p>
                    </div>

                </div>
                <div class="zone__image zone__image_right">
                    <img src="{{ asset('images/aboutus-img1.jpg') }}" alt="">
                </div>
            </div>

            <div class="zone">
                <div class="zone__image">
                    <img src="{{ asset('images/aboutus-img7.jpg') }}" alt="">
                </div>
                <div class="zone__content">
                    <div class="zone__title">Discover an Immersive</div>
                    <div class="zone__subtitle">Camping Experience</div>
                    <div class="zone__text">Quisque at massa faucibus, scelerisque mauris at, viverra mauris. Etiam luctus nisl eget odio interdum, id malesuada tellus dignissim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam nisl nisi, lobortis a ornare vel</div>
                    <div class="zone__text">Etiam massa ex, accumsan sed gravida vitae, mattis eget mi. Sed pulvinar risus nec dui pharetra, ut porta urna ullamcorper. Nunc imperdiet est vel lectus pulvinar dapibus. Aenean velit mi, consectetur non risus tempus</div>
                </div>
            </div>
        </div>
    </div>

    <div class="explore">
        <div class="explore__image">
            <img src="{{ asset('images/aboutus-img5.jpg') }}" alt="">
        </div>
        <div class="explore__text">
            <div class="explore__title">Explore nearby<br>activities</div>
            <a href="" class="booking__item-link_kids">read more</a>
        </div>
    </div>

@endsection
