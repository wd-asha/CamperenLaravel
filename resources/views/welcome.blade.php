@extends('layouts.app')
@section('title', 'Camperen | Main')
@section('content')

<div class="slider">
    <div class="slide-empty">
        <img src="{{ asset('images/main-rev-2.jpg') }}" alt="">
    </div>
    <div class="slide" id="slide1">
        <div class="arrow-left" id="arrLeft1">
            <img src="{{ asset('images/arrow-left.png') }}" alt="">
        </div>
        <img src="{{ asset('images/main-rev-2.jpg') }}" alt="">
        <div class="slide__text">
            <div class="slide__above-title pos hide">Choose a healthy environment</div>
            <div class="slide__title pos hide">You can travel and work from any destination</div>
            <a href="" class="slide__link pos hide">
                <img src="{{ asset('images/icon-video-main.png') }}" class="slide__link-img" alt="">
                watch the video
            </a>
        </div>
        <div class="arrow-right" id="arrRight1">
            <img src="{{ asset('images/arrow-right.png') }}" alt="">
        </div>
    </div>

    <div class="slide hide-slide" id="slide2">
        <div class="arrow-left" id="arrLeft2">
            <img src="{{ asset('images/arrow-left.png') }}" alt="">
        </div>
        <img src="{{ asset('images/main-rev-3.jpg') }}" alt="">
        <div class="slide__text">
            <div class="slide__above-title pos hide">Travel with your soul</div>
            <div class="slide__title pos hide">Experience earth’s magic with your soulmate</div>
            <a href="" class="slide__link pos hide">
                <img src="{{ asset('images/icon-video-main.png') }}" class="slide__link-img" alt="">
                watch the video
            </a>
        </div>
        <div class="arrow-right" id="arrRight2">
            <img src="{{ asset('images/arrow-right.png') }}" alt="">
        </div>
    </div>

    <div class="slide hide-slide" id="slide3">
        <div class="arrow-left" id="arrLeft3">
            <img src="{{ asset('images/arrow-left.png') }}" alt="">
        </div>
        <img src="{{ asset('images/main-rev-1.jpg') }}" alt="">
        <div class="slide__text">
            <div class="slide__above-title pos hide">Nature benefits you</div>
            <div class="slide__title pos hide">Experience everything nature has to offer</div>
            <a href="" class="slide__link pos hide">
                <img src="{{ asset('images/icon-video-main.png') }}" class="slide__link-img" alt="">
                watch the video
            </a>
        </div>
        <div class="arrow-right" id="arrRight3">
            <img src="{{ asset('images/arrow-right.png') }}" alt="">
        </div>
    </div>
</div>

<div class="order">
    <form action="{{ route('show') }}" method="post" name="order-form" class="order__form">
        @csrf
        <div class="form-control">
            <div class="control__header">
                <span>&ensp;CHECK IN</span>
            </div>
            <div class="control__input">
                <input type="date" name="datein" id="datein" value="@php echo date('Y-m-d') @endphp">
            </div>
        </div>
        <div class="form-control">
            <div class="control__header">
                <span>&ensp;CHECK OUT</span>
            </div>
            <div class="control__input">
                <input type="date" name="dateout" id="dateout" value="@php echo date('Y-m-d') @endphp">
            </div>
        </div>
        <div class="form-control">
            <div class="control__header">
                <span>&ensp;GUESTS</span>
            </div>
            <div class="control__input">
                <select name="guest" id="guest">
                    <option value="1 guest">1 guest</option>
                    <option value="2 guests">2 guests</option>
                    <option value="3 guests">3 guests</option>
                    <option value="4 guests">4 guests</option>
                    <option value="5 guests">5 guests</option>
                    <option value="6 guests">6 guests</option>
                </select>
            </div>
        </div>
        <div class="form-control">
            <div class="control__header">
                <span>&ensp;ACCOMMODATION</span>
            </div>
            <div class="control__input">
                <select name="accomm" id="accomm">
                    <option value="all">all</option>
                    <option value="tent">tent</option>
                    <option value="trailer">trailer</option>
                    <option value="cabin">cabin</option>

                </select>
            </div>
        </div>
        <div class="form-control">
            <button type="submit" class="submit-btn">SHOW</button>
        </div>
    </form>
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
        <div class="about__title">About</div>
        <div class="about_caption">Welcome to Wonderer<br>Camping Ground</div>
        <div class="about__text">
            At lectus urna duis convallis convallis tellus id interdum. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit. Non tellus orci ac auctor augue mauris augue. Felis donec et odio pellentesque diam volutpat. Sit amet risus nullam eget felis. Quam vulputate dignissim suspendisse in est ante
        </div>
        <div class="about__items">
            <div class="about__item">
                <div class="about__image">
                    <img src="{{ asset('images/image17.svg') }}" alt="">
                </div>
                <p>30 camper sites</p>
            </div>
            <div class="about__item">
                <div class="about__image">
                    <img src="{{ asset('images/image18.svg') }}" alt="">
                </div>
                <p>25 caravan sites</p>
            </div>
            <div class="about__item">
                <div class="about__image">
                    <img src="{{ asset('images/image19.svg') }}" alt="">
                </div>
                <p>50 tent sites</p>
            </div>
            <div class="about__item">
                <div class="about__image">
                    <img src="{{ asset('images/image20.svg') }}" alt="">
                </div>
                <p>10 glamp sites</p>
            </div>
            <div class="about__item">
                <div class="about__image">
                    <img src="{{ asset('images/image21.svg') }}" alt="">
                </div>
                <p>10 cabin houses</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-accommodation">
    <div class="container">
        <div class="accommodation">
            <div class="accommodation__item">
                <div class="accommodation__image">
                    <img src="images/accommodation1.jpg" alt="">
                </div>
                <div class="accommodation__title">
                    Camping area for tents
                </div>
                <div class="accommodation__text">
                    Ultrices eros in cursus turpis massa tincidunt dui ut ornare. Interdum varius sit amet mattis. Commodo viverra maecenas accumsan
                </div>
            </div>
            <div class="accommodation__item">
                <div class="accommodation__image">
                    <img src="images/accommodation2.jpg" alt="">
                </div>
                <div class="accommodation__title">
                    Trailers and RV spots
                </div>
                <div class="accommodation__text">
                    Suspendisse potenti nullam ac tortor. Lorem dolor sed viverra ipsum nunc. Tellus mauris a diam maecenas sed enim actincidunt
                </div>
            </div>
            <div class="accommodation__item">
                <div class="accommodation__image">
                    <img src="images/accommodation3.jpg" alt="">
                </div>
                <div class="accommodation__title">
                    Cabins and glamping
                </div>
                <div class="accommodation__text">
                    Laoreet suspendisse interdum consectetur libero id faucibus nisl. Aliquam vestibulum morbi blandit cursus risus at ultrices
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="activity">
        <div class="activity__left">
            <div class="activity__title">Activity</div>
            <div class="activity__caption">Change the way you travel, be closer to nature. Take a second to appreciate everyday beauty</div>
            <div class="activity__bgimage">
                <img src="images/main-img-0.png" alt="" class="activity__bgimage2">
            </div>
        </div>
        <div class="activity__middle">
            <div class="activity__item">
                <div class="activity__item-image">
                    <img src="images/image23.svg" alt="">
                </div>
                <div class="activity__item-title">Wild Life</div>
                <div class="activity__item-text">
                    Etiam dignissim diam quis enim lobortis scelerisque fermentum. In iaculis nunc sed augue pharetra massa massa ultricies miquis
                </div>
            </div>
            <div class="activity__item">
                <div class="activity__item-image">
                    <img src="images/image24.svg" alt="">
                </div>
                <div class="activity__item-title">Canoeing</div>
                <div class="activity__item-text">
                    Urna molestie at elementum eu facilisis sed. Lacus luctus accumsan tortor posuere ac ut. Odio aenean sed adipiscing diam donec
                </div>
            </div>
        </div>
        <div class="activity__right">
            <div class="activity__item">
                <div class="activity__item-image">
                    <img src="images/image25.svg" alt="">
                </div>
                <div class="activity__item-title">Lake</div>
                <div class="activity__item-text">
                    Neque laoreet suspendisse interdum consectetur. Pellentesque tincidunt tortor aliquam nulla facilisi cras egestas sed sed risus pretium
                </div>
            </div>
            <div class="activity__item">
                <div class="activity__item-image">
                    <img src="images/image26.svg" alt="">
                </div>
                <div class="activity__item-title">Hiking</div>
                <div class="activity__item-text">
                    Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus egestas fringilla phasellus faucibus scelerisque eleifend
                </div>
            </div>
        </div>
    </div>
</div>

<div class="stunning">
    <img src="{{ asset('images/home-5.jpg') }}" alt="">
    <div class="stunning__content">
        <div class="stunning__text">Stunning<br>landscapes, fresh<br>air and peace</div>
        <a href="" class="stunning__link">view more</a>
    </div>
</div>

{{-- Категории на Главной --}}
<div class="container">
    <div class="booking">
        <div class="booking__item">
            <div class="booking__title">Booking</div>
            <div class="booking__caption">Book your dream<br>vacation now</div>
        </div>
        <div class="booking__item">
            <p>Malesuada fames ac turpis egestas integer. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Nibh sit amet commodo nulla facilisi. Interdum varius sit</p>
        </div>
        @foreach($categories as $category)
            @if($category->is_main)
                <div class="booking__item">
                    <div class="booking__item-image">
                        <img src="/media/images/{{ $category->image }}" alt="">
                    </div>
                    <div class="booking__item-header">
                        <div class="booking__item-title">{{ $category->title }}</div>
                        <div class="booking__item-desc">{{ $category->persons }} persons | {{ $category->sqr }} m<sup>2</sup></div>
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
            @endif
        @endforeach
    </div>
</div>
{{-- конец категории на главной --}}

<div class="stunning">
    <img src="{{ asset('images/home-6.jpg') }}" alt="">
    <div class="stunning__content">
        <div class="stunning__text">The great outdoors</div>
        <p class="slide__above-title" style="line-height: 1.3">Equipped with astounding layouts, <br>booking feature & all-round <br>accommodation lists & singles</p>
    </div>
</div>

<div class="bg-infrastructure">
    <div class="container">
        <div class="infrastructure__caption">
            <div class="infrastructure__check">Check</div>
            <div class="infrastructure__camp">Camp Infrastructure</div>
        </div>
        <div class="infrastructure__items">
            <div class="infrastructure__item">
                <div class="infrastructure__header">
                    <div class="infrastructure__header-image">
                        <img src="images/image43.svg" alt="">
                    </div>
                    <div class="infrastructure__title">Parking in the camp</div>
                </div>
                <div class="infrastructure__text">Ut convallis eget felis non tristique. Sed vel neque ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</div>
            </div>
            <div class="infrastructure__item">
                <div class="infrastructure__header">
                    <div class="infrastructure__header-image">
                        <img src="images/image44.svg" alt="">
                    </div>
                    <div class="infrastructure__title">Motorhome service</div>
                </div>
                <div class="infrastructure__text">Proin euismod libero ut sapien pulvinar aliquet. Nam purus lectus, rhoncus ac odio sit amet, tempus tristique velit.  Nam porttitor tincidunt lacus iaculis</div>
            </div>
            <div class="infrastructure__item">
                <div class="infrastructure__header">
                    <div class="infrastructure__header-image">
                        <img src="images/image45.svg" alt="">
                    </div>
                    <div class="infrastructure__title">Washing machines</div>
                </div>
                <div class="infrastructure__text">Phasellus augue lacus, malesuada quis dui at, volutpat ultrices arcu. Donec euismod fringilla interdum. Nulla at massa ac diam posuere ullamcorper vitae et mi</div>
            </div>
            <div class="infrastructure__item">
                <div class="infrastructure__header">
                    <div class="infrastructure__header-image">
                        <img src="images/image46.svg" alt="">
                    </div>
                    <div class="infrastructure__title">Sanitary facilities</div>
                </div>
                <div class="infrastructure__text"> Ut vel aliquet mauris. Proin in nunc at erat fermentum tincidunt vehicula nec leo. Donec ut facilisis dui. Nullam vulputate leo a urna porttitor eget</div>
            </div>
            <div class="infrastructure__item">
                <div class="infrastructure__header">
                    <div class="infrastructure__header-image">
                        <img src="images/image47.svg" alt="">
                    </div>
                    <div class="infrastructure__title">Fast Internet</div>
                </div>
                <div class="infrastructure__text">Maecenas nunc neque, lobortis ac fermentum vel, pharetra id velit. Pellentesque in dignissim lacus. Fusce id dictum orci, id mollis urna semper arcu luctus</div>
            </div>
            <div class="infrastructure__item">
                <div class="infrastructure__header">
                    <div class="infrastructure__header-image">
                        <img src="images/image48.svg" alt="">
                    </div>
                    <div class="infrastructure__title">Electrical cabinets</div>
                </div>
                <div class="infrastructure__text">Phasellus lacus lectus, pretium ut nulla eu, placerat dapibus libero. Nunc erat nunc, consequat a aliquet eu, condimentum ac lacus. Etiam urna magna</div>
            </div>
        </div>
    </div>
</div>

<div class="stunning">
    <img src="images/Home-3-parallax.jpg" alt="">
    <div class="stunning__content">
        <div class="stunning__text">Book Your Next Camping<br>in a Comfortable<br>Environment</div>
        <a href="" class="stunning__link">view more</a>
    </div>
</div>

<div class="container">
    <div class="blogs__title">Blog</div>
    <div class="blogs__caption">Latest News and Events</div>
    <div class="blogs">
        @foreach($posts as $post)
            @if($post->is_main == true)
                <div class="blog">
                    <div class="blog__image">
                        <div class="blog__date">{{ $post->date }}</div>
                        <img src="/media/images/{{ $post->image }}" alt="">
                    </div>
                    <div class="blog__bred">{{ $post->tag }} | by {{ $post->author }}</div>
                    <div class="blog__title">{{ $post->title }}</div>
                    <div class="blog__text">{{ $post->content }}</div>
                    <a href="{{ route('post', $post->id) }}" class="blog__link">Read More</a>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
