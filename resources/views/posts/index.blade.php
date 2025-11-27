@extends('layouts.app')
@section('title', 'Camperen | Blog')
@section('content')

    <div class="slider">
        <div class="slide-empty">
            <img src="{{ asset('images/blog-slide1.jpg') }}" alt="">
        </div>
        <div class="slide">
            <div class="slide__about">
                <img src="{{ asset('images/blog-slide1.jpg') }}" alt="">
                <div class="overlay__kids"></div>
            </div>
            <div class="slide__text_posts">
                <div class="slide__posts-title">EXPERIENCE<br>FREEDOM</div>
                <div class="slide__posts_subtitle">Experience the true beauty of nature and create new memoires with family and friends</div>
                <a href="" class="slide__link">
                    <a href="" class="about-link">check availability</a>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="posts__header">
            <div class="posts__header_caption">
                <div class="posts__header_title">Blog</div>
                <div class="posts__header_subtitle">Latest News and Events</div>
            </div>
            <div class="posts__header_text">
                <p>Mauris congue sapien eros, tincidunt molestie lectus lacinia a. Pellentesque consectetur diam lorem, sit amet faucibus justo luctus eu. Aenean laoreet, ex a blandit porta, leo turpis pharetra mauris</p>
            </div>
        </div>
        <div class="blogs">
            @foreach($posts as $post )
                <div class="blog">
                    <div class="blog__image">
                        <div class="blog__date">{{ $post->date }}</div>
                        <img src="/media/images/{{ $post->image }}" alt="">
                    </div>
                    <div class="blog__bred">{{ $post->tag }} | by {{ $post->author }}</div>
                    <div class="blog__title">{{ $post->title }}</div>
                    <div class="blog__text">{{ $post->content }}...</div>
                    <a href="{{ route('post', $post->id) }}" class="blog__link">Read More</a>
                </div>
          @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tl = gsap.timeline();

            tl.fromTo('.slide__posts-title', {
                    x: -100,
                    opacity: 0
                },
                {
                    duration: .6,
                    x: 0,
                    opacity: 1,
                    ease: "power2.out"
                })

                .fromTo('.slide__posts_subtitle', {
                        x: -100,
                        opacity: 0
                    },
                    {
                        duration: 0.6,
                        x: 0,
                        opacity: 1,
                        ease: "power2.out"
                    }, "+=0.3")

                .fromTo('.about-link', {
                        opacity: 0
                    },
                    {
                        duration: 0.4,
                        opacity: 1,
                        ease: "power2.out"
                    }, "+=0.3");
        });
    </script>

@endsection
