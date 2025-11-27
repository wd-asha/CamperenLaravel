<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>

<div class="mobile" id="mobile">
    <div class="mobile__close" id="mobileClose">
        <a href="">+</a>
    </div>
    <div class="mobile__menu">
        <a href="{{ route('about') }}" class="mobile__menu_link">About Us</a>
        <a href="{{ route('accommodation') }}" class="mobile__menu_link">Accommodation</a>
        <a href="{{ route('contacts') }}" class="mobile__menu_link">Contacts</a>
        <a href="{{ route('kids') }}" class="mobile__menu_link">Kids</a>
        <a href="{{ route('blog') }}" class="mobile__menu_link">Blog</a>
    </div>
</div>

<div class="overlay"></div>
{{-- Всплывающее окно регистрации, авторизации, смены пароля --}}
<div class="popup" id="popup">
    <a href="#header" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            {{-- закрыть окно --}}
            <a href="#header" class="popup__close">X</a>
            <!-- Tabs -->
            <div class="popup__titles">
                <div class="popup__title title-active" id="loginTab">Login</div>
                <div class="popup__title" id="registerTab">Register</div>
                <div class="popup__title" id="resetPasswordTab">Reset&nbsp;Password</div>
            </div>
            <!-- Tab Авторизации -->
            <div class="popup__text_login display-block" id="popupTextLogin">
                <form action="{{ route('login') }}" class="login-form" method="post">
                    @csrf
                    <input class="email-input" id="email_login" name="email"
                           placeholder="Email" value="{{ old('email') }}" required autofocus>
                    <input type="password" class="pass-input" id="passwordLogin"
                           name="password" placeholder="Password" required autocomplete="password">
                    <button type="submit" name="submit" class="contacts__link">Login</button>
                </form>
            </div>
            <!-- конец tab авторизации -->
            {{-- Tab сброса пароля --}}
            <div class="popup__text_reset" id="popupTextReset">
                <form action="" class="login-form">
                    <label for="emailInputLogin"></label>
                    <input class="email-input" id="emailInputReset" placeholder="Email">
                    <p class="personal-data">Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
                    <button type="submit" name="submit" class="contacts__link">Reset Password</button>
                </form>
            </div>
            {{-- конец tab сброса пароля --}}
            <!-- Tab Регистрации -->
            <div class="popup__text_register" id="popupTextRegister">
                <form action="{{ route('register') }}" class="login-form" method="POST">
                    @csrf
                    <input class="name-input" id="name" name="name"
                           placeholder="Name" value="{{ old('name') }}" required autofocus>
                    <input class="email-input" id="email_register" name="email"
                           placeholder="Email" value="{{ old('email') }}" required>
                    <input type="password" class="pass-input" id="password"
                           name="password" placeholder="Password" required autocomplete="new-password">
                    <input type="password" class="pass-input" id="password_confirmation"
                           name="password_confirmation" placeholder="Repeat Password" required>
                    <p class="personal-data">Your personal data will be used to support your experience throughout this website...</p>
                    <button type="submit" class="contacts__link">Register</button>
                </form>
            </div>
            {{-- конец tab регистации --}}
        </div>
    </div>
</div>

<div class="bg-header">
    <div class="container">
        <div class="header" id="header">
            <a href="{{ route('welcome') }}" class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 59.6 68.9" style="enable-background:new 0 0 59.6 68.9;" xml:space="preserve">
<g transform="translate(-358.49 -13696.639)">
    <g transform="translate(0)">
        <g transform="translate(9.714 12.465)">
            <path class="st0" d="M378.6,13714.9c-0.6,1.9-6.2,10-10.6,11.8h0.6c1.4,0,2.5,1.1,2.5,2.5c0,1.4-1.1,2.5-2.5,2.5 c8.7,0,10-13.7,10-13.7"></path>
        </g>
        <path d="M378.3,13744.2h-4.4l-1.9-5c0,0,13.7-17.5,16.2-24.3c2.5,6.9,16.2,24.3,16.2,24.3l-1.9,5h-14.3
			v-16.8"></path>
        <path d="M403.7,13738.2c0,0,3.6,4.2,5.1,6"></path>
        <path d="M372.5,13738.6c0,0-3.2,3.8-4.5,5.4"></path>
    </g>
</g>
                    <line x1="49.3" y1="40.5" x2="49.3" y2="19.8"></line>
                    <g>
                        <g transform="translate(5.3 1.069)">
                            <path d="M49,22.9l-2.6-1.3l-1.9-1.2"></path>
                            <path d="M49,26.1l-2.6-1.3l-1.9-1.2"></path>
                            <path d="M49,29.3l-2.6-1.3l-1.9-1.2"></path>
                            <path d="M49,32.4l-2.6-1.3l-1.9-1.2"></path>
                        </g>
                        <g transform="translate(5.3 1.069)">
                            <path d="M43.5,20.4l-1.9,1.2l-2.6,1.3"></path>
                            <path d="M43.5,23.5l-1.9,1.2l-2.6,1.3"></path>
                            <path d="M43.5,26.7l-1.9,1.2l-2.6,1.3"></path>
                            <path d="M43.5,29.9l-1.9,1.2l-2.6,1.3"></path>
                        </g>
                    </g>
                    <path d="M11.3,26c-0.8-2.1,0.1-4.4,2.1-5.4c-2.8-0.6-5.6,1.2-6.2,4s1.2,5.6,4,6.2c2,0.4,4-0.3,5.2-2
	C14.3,29.3,12.1,28.1,11.3,26z"></path>
                    <path d="M58.2,40.6c0,0-3.3-0.7-7.1-1.3s-8.2-1-8.2-1"></path>
                    <path d="M1,40.6c0,0,3.3-0.7,7.2-1.3s8.3-1,8.3-1"></path>
                    <polygon points="0.8,17.7 0.8,51.2 29.8,67.9 58.8,51.2 58.8,17.7 29.8,0.9 "></polygon>
                    <path d="M8.4,55.5c2.3-1.4,4.1-1.8,5.5-1.8c2.5,0.1,3.1,1.8,5.3,1.8c2.3,0,3.2-1.8,5.4-1.8c2.2,0,2.9,1.7,5.2,1.8
	c2.3,0,3.2-1.7,5.6-1.7c2.3,0,3.1,1.7,5.4,1.7c2.2,0,2.8-1.6,5.3-1.7c1.3,0,3,0.4,5.3,1.7"></path>
                    <path d="M16.5,60c2.8,0,3.9-1.8,6.7-1.8c2.7,0,3.7,1.7,6.5,1.8c2.8,0,4-1.7,6.9-1.7c2.9,0,3.9,1.7,6.7,1.7"></path>
                    <line x1="29.8" y1="18.3" x2="29.8" y2="15.2"></line>
</svg>
            </a>
            <nav class="nav">
                <div class="nav__left">
                    <a href="{{ route('about') }}" class="nav__item">About Us</a><a href="{{ route('accommodation') }}" class="nav__item">Accommodation</a><a href="{{ route('contacts') }}" class="nav__item">Contacts</a><a href="{{ route('kids') }}" class="nav__item">Kids</a><a href="{{ route('blog') }}" class="nav__item">Blog</a>

                    <div class="burger" id="burger">
                        <span></span><span></span><span></span>
                    </div>

                </div>
                <div class="nav__right">
                    @guest <a href="#popup" class="nav__item">Sign in</a> @endguest
                    @auth <a href="{{ route('account') }}" class="nav__item">Account</a> @endauth
                </div>
            </nav>
        </div>
    </div>
</div>

@yield('content')

<div class="bg-footer">
    <div class="container">
        <footer class="footer">
            <div class="footer__item">
                <div class="footer__item-title">This is Kamperen</div>
                <p>Kamperen is equipped with everythig required for an amazing campground business website. Set up camp now</p>
            </div>
            <div class="footer__item">
                <div class="footer__item-title">Contacts</div>
                <p>A: Via Venti Settembre, Ireland</p>
                <a href="">P: +31 555 777 83</a>
                <p>App: Telegram, WhatsApp</p>
                <a href="">E: kamperen@qode.com</a>
            </div>
            <div class="footer__item">
                <div class="footer__item-title">Links</div>
                <a href="">About As</a>
                <a href="">Camp Accommodation</a>
                <a href="">Nearby Activities</a>
                <a href="">Booking</a>
                <a href="">Contact Us</a>
            </div>
            <div class="footer__item">
                <div class="footer__item-title">Newsletter</div>
                <p>Sign up for our newsletter and get updated about our latest promotions</p>
                <form action="{{ route('subscribe') }}" method="post" name="newsLetter">
                    @csrf
                    <input type="email" name="email" placeholder="You Email">
                    @if (Auth::check()) {
                        <button class="submit-link" type="submit">
                            <img src="{{ asset('images/arrow.png') }}" alt="">
                        </button>
                    @else
                        {{--Пользователь не вошел в систему--}}
                    @endif

                </form>
            </div>
        </footer>
    </div>
</div>

<div class="copy-right">
    <a href="https://wd-asha.ru">wd-asha</a>
</div>

<script  src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/burger.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>

<!-- GSAP core -->
<script src="{{ asset('js/gsap.min.js') }}"></script>
<!-- ScrollTrigger -->
<script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('js/activity-anim.js') }}"></script>

<script>
    // Убедиться, что плагин зарегистрирован
    gsap.registerPlugin(ScrollTrigger);

    // Отложенный запуск, чтобы элемент точно в DOM (альтернатива: поместить скрипт в конец body — мы уже там)
    document.addEventListener('DOMContentLoaded', () => {
        gsap.utils.toArray('.booking__item').forEach(item => {
            gsap.fromTo(item,
                { opacity: 0, y: 50 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: item,
                        start: "top 75%",   // середина элемента достигает четвети экрана снизу
                        toggleActions: "play none none reverse",
                    }
                }
            );
        });

        /*gsap.from('.blog', {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            stagger: 0.25,
            scrollTrigger: {
                trigger: ".blogs",  // общий родитель
                start: "top 75%",
                toggleActions: "play none none reverse"
            }
        });*/

        gsap.set(".blog", { opacity: 0, y: 50 });

        ScrollTrigger.batch(".blog", {
            start: "top 80%",
            onEnter: (batch) => {
                gsap.to(batch, {
                    opacity: 1,
                    y: 0,
                    stagger: 0.25,
                    duration: 0.8,
                    ease: "power2.out"
                });
            },
            onLeaveBack: (batch) => {
                gsap.to(batch, {
                    opacity: 0,
                    y: 50,
                    stagger: 0.15,
                    duration: 0.6
                });
            }
        });




        gsap.fromTo(".about__item",
            {
                x: 80,
                opacity: 0
            },
            {
                x: 0,
                opacity: 1,
                duration: 0.6,
                ease: "power2.out",
                stagger: 0.25,
                scrollTrigger: {
                    trigger: ".about__items",
                    start: "top 75%",     // начало анимации
                    end: "bottom 25%",    // конец области
                    toggleActions: "play reverse play reverse",
                    // play — когда входит, reverse — когда выходит
                    scrub: false          // отключено, чтобы не зависело от скорости скролла
                }
            }
        );
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        gsap.registerPlugin(ScrollTrigger);

        const text1 = document.querySelector(".stunning__text1");
        // Разбивает текст на буквы, но сохраняет <br>
        text1.innerHTML = text1.innerHTML.replace(/([^<>\n])(?=(?:[^<>]|<br>)*$)/g, match => {
            return match.replace(/./g, "<span class='letter'>$&</span>");
        });

        const text2 = document.querySelector(".stunning__text2");
        if (!text2.innerHTML.includes('<span class="letter">')) {
            text2.innerHTML = text2.textContent.replace(/./g, "<span class='letter'>$&</span>");
        }

        const text3 = document.querySelector(".stunning__text3");
        // Разбивает текст на буквы, но сохраняет <br>
        text3.innerHTML = text3.innerHTML.replace(/([^<>\n])(?=(?:[^<>]|<br>)*$)/g, match => {
            return match.replace(/./g, "<span class='letter'>$&</span>");
        });

        gsap.fromTo(
            ".stunning__text1 .letter",
            { opacity: 0, y: -20 },
            {
                opacity: 1,
                y: 0,
                stagger: 0.05,
                duration: 0.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".stunning1",
                    start: "top 66%",
                    toggleActions: "play reverse play reverse",
                    // markers: true
                }
            }
        );
        gsap.fromTo(
            ".stunning__text2 .letter",
            { opacity: 0, y: -20 },
            {
                opacity: 1,
                y: 0,
                stagger: 0.05,
                duration: 0.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".stunning2",
                    start: "top 66%",
                    toggleActions: "play reverse play reverse",
                    // markers: true
                }
            }
        );
        gsap.fromTo(
            ".stunning__text3 .letter",
            { opacity: 0, y: -20 },
            {
                opacity: 1,
                y: 0,
                stagger: 0.05,
                duration: 0.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".stunning3",
                    start: "top 66%",
                    toggleActions: "play reverse play reverse",
                    // markers: true
                }
            }
        );
    });
</script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".infrastructure__item", {
        scrollTrigger: {
            trigger: ".infrastructure__items",
            start: "top 75%",
            toggleActions: "play reset play reset" // анимация повторяется при скролле вверх и вниз
        },
        opacity: 0,
        y: 50,
        x: 20,
        scale: 0.95,
        duration: 0.7,
        stagger: 0.2,
        ease: "power3.out"
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.utils.toArray('.booking__item').forEach(item => {
            gsap.fromTo(item,
                {opacity: 0, y: 50},
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: item,
                        start: "top 75%",   // середина элемента достигает четвети экрана снизу
                        toggleActions: "play none none reverse",
                    }
                }
            );
        });
    });
</script>



</body>
</html>
