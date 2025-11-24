@extends('layouts.app')
@section('title', 'Camperen | Kids')
@section('content')

<div class="slider">
    <div class="slide-empty">
        <img src="{{ asset('images/kids-01.jpg') }}" alt="">
    </div>
    <div class="slide">
        <div class="slide__image">
            <img src="{{ asset('images/kids-01.jpg') }}" alt="">
            <div class="overlay__kids"></div>
        </div>
        <div class="slide__text">
            <div class="slide__title_kids pos hide">Best Summer<br>camp for kids</div>
            <a href="" class="slide__link pos hide">
                <a href="" class="booking__item-link_kids">check availability</a>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="blogs__title"> Experience</div>
    <div class="blogs__caption">An amazing camping experience for new</div>
    <div class="blogs">
        <div class="blog">
            <div class="blog__image">
                <img src="{{ asset('images/kids-02.jpg') }}" alt="">
            </div>
            <div class="blog__title_kids">Ages 4–7</div>
            <div class="blog__text">Quisque posuere, nulla rhoncus finibus malesuada, massa justo vehicula tortor, aliquam pellentesque eros enim ac nulla. Proin gravida iaculis mi a suscipit</div>
            <a href="" class="blog__link">Register for camp</a>
        </div>
        <div class="blog">
            <div class="blog__image">
                <img src="{{ asset('images/kids-03.jpg') }}" alt="">
            </div>
            <div class="blog__title_kids">Ages 8–10</div>
            <div class="blog__text">Praesent molestie lorem massa. Sed quis pulvinar odio. Praesent eget ipsum pulvinar, efficitur est molestie, laoreet ex. Phasellus ac faucibus felis. Integer vitae</div>
            <a href="" class="blog__link">Register for camp</a>
        </div>
        <div class="blog">
            <div class="blog__image">
                <img src="{{ asset('images/kids-04.jpg') }}" alt="">
            </div>
            <div class="blog__title_kids">Ages 11–15</div>
            <div class="blog__text">Duis auctor convallis mauris, ut viverra massa sodales eget. Sed tristique nisl erat, mollis volutpat sem venenatis quis. Nullam vitae odio sagittis, placerat sem</div>
            <a href="" class="blog__link">Register for camp</a>
        </div>
    </div>
</div>

<section class="parallax__box">
    <div id="parallax__slide1" class="parallax__slide">
        <img src="{{ asset('images/p1.jpg') }}" alt="">
        <div class="slide__content">
            <h3>young<br>scouts</h3>
            <a href="" class="booking__item-link_kids">check availability</a>
        </div>
    </div>
    <div id="parallax__slide2" class="parallax__slide">
        <img src="{{ asset('images/p2.jpg') }}" alt="">
        <div class="slide__content">
            <h3>Daily<br>Activities</h3>
            <a href="" class="booking__item-link_kids">check availability</a>
        </div>
    </div>
    <div id="parallax__slide3" class="parallax__slide">
        <img src="{{ asset('images/p3.jpg') }}" alt="">
        <div class="slide__content">
            <h3>Night<br>Adventure</h3>
            <a href="" class="booking__item-link_kids">check availability</a>
        </div>
    </div>
</section>

<div class="container">
    <div class="activity">
        <div class="activity__left">
            <div class="activity__title">Activity</div>
            <div class="activity__caption">Learn about outdoor camping activities from sailing to canoeing, something new everyday</div>
            <div class="activity__bgimage">
                <img src="{{ asset('images/main-img-0.png') }}" alt="" class="activity__bgimage2">
            </div>
        </div>
        <div class="activity__middle">
            <div class="activity__item">
                <div class="activity__item-image">
                    <img src="{{ asset('images/image67.svg') }}" alt="" style="width: 60%">
                </div>
                <div class="activity__item-title">Adventure park</div>
                <div class="activity__item-text">
                    Nam dapibus imperdiet ligula non pulvinar. Maecenas ut ipsum sapien. Maecenas suscipit consectetur nisl. Vivamus a convallis dui. Mauris vitae mi facilisis, rutrum tortor nec, pretium augue
                </div>
            </div>
            <div class="activity__item">
                <div class="activity__item-image">
                    <img src="{{ asset('images/image69.svg') }}" alt="">
                </div>
                <div class="activity__item-title">Canoeing</div>
                <div class="activity__item-text">
                    Cras ultricies iaculis augue vitae sodales. Aliquam tempor pretium nibh sit amet dictum. Proin vel laoreet tortor. Cras sit amet velit malesuada, convallis mauris maximus, accumsan risus
                </div>
            </div>
        </div>
        <div class="activity__right">
            <div class="activity__item">
                <div class="activity__item-image">
                    <img src="{{ asset('images/image68.svg') }}" alt="" style="width: 80%">
                </div>
                <div class="activity__item-title">Sailing school</div>
                <div class="activity__item-text">
                    Nam elementum, velit eget accumsan suscipit, lorem orci ullamcorper odio, sed interdum libero dolor quis ante. Pellentesque blandit, magna eu fermentum tempus, dui velit ultrices tellus, eget gravida nulla nulla
                </div>
            </div>
            <div class="activity__item">
                <div class="activity__item-image">
                    <img src="{{ asset('images/image70.svg') }}" alt="">
                </div>
                <div class="activity__item-title">Hiking</div>
                <div class="activity__item-text">
                    Etiam et leo porttitor, laoreet leo quis, lobortis eros. Proin aliquet lectus diam, at imperdiet elit pretium nec. In euismod dui nisi, id vulputate eros lobortis
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
