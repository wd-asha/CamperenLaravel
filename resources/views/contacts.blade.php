@extends('layouts.app')
@section('title', 'Camperen | Contacts')
@section('content')

<div class="slider">
    <div class="slide-empty">
        <img src="{{ asset('images/aboutus-img6.jpg') }}" alt="">
    </div>
    <div class="slide">
        <div class="slide__about">
            <img src="{{ asset('images/contacts-img1.jpg') }}" alt="">
            <div class="overlay__kids"></div>
        </div>
        <div class="slide__text">
            <div class="slide__about_above-title">Refresh yourself with the perfect getaway</div>
            <div class="slide__about-title">How to camp<br>like a pro</div>
        </div>
    </div>
</div>

<div class="container">
    <div class="contacts">
        <div class="contacts__left">
            <div class="contacts__left_title">
                Feel free to write on info@camp.com
            </div>
            <div class="contacts__left_text">
                Praesent ante velit, suscipit et eleifend eu, dignissim at sem. Phasellus pharetra lobortis turpis. Morbi porta gravida orci, quis cursus purus consectetur. Our Service Centre is open Monday to Friday between the hours of 08:00 – 18:00
            </div>
            <div class="contacts__left_phones">
                <span class="contacts__span">Reception phone: +64 (0)50 745 6473</span><br>
                <span class="contacts__span">Reservations: +27 (0)13 735 4265</span><br>
                <span class="contacts__span">Lodge: + 51 (0)13 735 4265</span><br>
                <span class="contacts__span">Emergencies: + 235 62 182 0374</span>
            </div>
            <div class="contacts__left_social">
                Social/follow:
                <img src="{{ asset('images/facebook.png') }}" alt="">
                <img src="{{ asset('images/tripadvisor.png') }}" alt="">
                <img src="{{ asset('images/instagram.png') }}" alt="">
                <img src="{{ asset('images/twitter.png') }}" alt="">
            </div>
        </div>

        <div class="contacts__right">
            <div class="contacts__right_title">
                How can we help?
            </div>
            <div class="contacts__right_text">
                Mauris iaculis risus quis neque finibus, eget aliquam justo molestie. Nunc nisi elit, fermentum a egestas a, convallis quis lacus
            </div>
            <div class="contacts__form">
                <form action="" method="post" name="contacts_form">
                    <div class="contacts__form-control">
                        <textarea name="contacts_message" placeholder="Message"></textarea>
                    </div>
                    <div class="contacts__form-control">
                        <input type="text" name="contacts_user" placeholder="Name">
                        <input type="email" name="contacts_email" placeholder="Email">
                    </div>
                    <button type="submit" name="submit" class="contacts__link">send</button>
                </form>
            </div>
        </div>

        <div class="contacts__left">
            <div class="contacts__left_title">
                Public transport
            </div>
            <div class="contacts__left_text">
                <strong>Trains:</strong><br>
                Sed mollis neque a erat condimentum, ac ultricies lorem luctus. Cras elit neque, ultricies sollicitudin nulla et, volutpat iaculis odio. In ut semper tortor, vitae tempus magna
            </div>
            <div class="contacts__left_text">
                <strong>Buses:</strong><br>
                Maecenas tellus ex, suscipit quis lorem ut, ornare viverra erat. In mollis ut sem in dignissim. Nam egestas lectus ultricies ante auctor porta. Pellentesque mi libero, tincidunt vel sapien at, ultrices tempus risus. Nullam at auctor lectus
            </div>
        </div>

        <div class="contacts__right">
            <div class="contacts__right_title">
                Directions to campsite
            </div>
            <div class="contacts__right_text">
                In an area of ​​3.8 hectares are available areas of 80-100 square meters, of course separated by shrubs and trees that offer thick shade able to accommodate caravans, motorhomes, tents. In these areas there are also autonomous electricity and water supplies. Interdum et malesuada fames ac ante ipsum primis in faucibus
            </div>
            <div class="contacts__right_title">
                Payment methods
            </div>
            <div class="contacts__right_text">
                <img src="{{ asset('images/paypal.png') }}" alt="">
                <img src="{{ asset('images/mastercard.png') }}" alt="">
                <img src="{{ asset('images/visa.png') }}" alt="">
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('js/contacts.js') }}"></script>

@endsection
