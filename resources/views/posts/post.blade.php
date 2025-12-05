{{-- ПОСТ --}}
{{-- Подключаем шаблон --}}
@extends('layouts.post')
@section('title', 'Camperen | Post')
@section('content')
    {{-- Контент сраницы --}}
    <div class="container">
        {{-- Изображение поста в шапке --}}
        <div class="post__header">
            <div class="post-image-wrapper">
                <img src="/media/images/{{ $post->image }}" alt="">
            </div>
            <div class="post__label">
                <div class="post__date">{{ $post->date }}</div>
            </div>
        </div>
        {{-- конец изображения --}}
        {{-- Контент поста --}}
        <div class="post">
            <div class="post__bred">{{ $post->tag }} | by {{ $post->author }}</div>
            <div class="post__title">{{ $post->title }}</div>
            <div class="post__text">
                Libero ac velit efficitur, et euismod purus euismod. Phasellus tempus leo a diam tincidunt, a scelerisque libero rutrum. Donec ultricies ante mi, vitae scelerisque risus cursus sed. Donec vitae lacinia augue. Morbi sollicitudin in odio sit amet placerat. Sed eget nisl tellus. Donec eget ultrices est. Nam rhoncus felis odio. Praesent elementum porta diam ac imperdiet. Etiam luctus aliquet tortor, malesuada tempor eros consectetur sed. Pellentesque dignissim libero mi, id laoreet est commodo eu. Aliquam quis accumsan purus. Maecenas turpis sem, convallis a enim ac, dapibus egestas nisl. Fusce ut nunc ut felis varius lacinia. Suspendisse facilisis vel sapien sed condimentum. Proin mattis sit amet orci eu egestas. Curabitur a pulvinar libero, quis semper metus. Mauris lacinia enim sed hendrerit consequat
            </div>
            <div class="post__text_cit">
                "Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque suscipit eget arcu ac venenatis. Vivamus quis lacus nec libero semper aliquet at consequat risus"
            </div>
            <div class="post__text">
                Phasellus rhoncus viverra erat, quis bibendum est maximus et. Nullam sit amet egestas nisi. Cras et dui scelerisque, pulvinar arcu et, commodo est. Proin a urna eget arcu dictum venenatis id accumsan nisl. Nunc ac elementum felis, at eleifend quam. Nam quis nunc at enim fermentum consectetur. Aenean sodales finibus congue. Fusce ut nunc ut felis varius lacinia. Suspendisse facilisis vel sapien sed condimentum. Proin mattis sit amet orci eu egestas. Curabitur a pulvinar libero, quis semper metus. Mauris lacinia enim sed hendrerit consequat
            </div>
            <div class="post__images">
                <img src="{{ asset('images/post-image4.jpg') }}" alt=""><img src="{{ asset('images/post-image3.jpg')}}" alt="">
            </div>
            <div class="post__subtitle">Way to see more nature and less people</div>
            <div class="post__text">
                Mattis neque diam, sit amet cursus nibh fermentum ut. Ut ullamcorper, dolor a ullamcorper placerat, nulla massa semper nibh, et aliquet nulla eros ut enim. Praesent non suscipit neque. Curabitur pretium sapien ac velit vehicula pellentesque. Phasellus tempus ex ligula, ut posuere urna fermentum sed. Donec ultrices suscipit justo. Curabitur tempus semper mi, in molestie elit. Aenean sed mattis libero, et feugiat erat. Quisque tincidunt vel dui ut ultricies. Nam mattis pellentesque justo. Lorem ipsum dolor sit amet, consectetur adipiscing
            </div>
            <div class="post__text">
                Curabitur eu sem id felis sollicitudin pellentesque. Cras sed leo augue. Vestibulum aliquet metus velit, quis vulputate ante suscipit eu. Aliquam in dictum lacus, id facilisis lacus. Pellentesque vitae varius lacus. Morbi porta turpis quis enim suscipit, et mattis nibh vulputate. Donec convallis vel lacus id gravida. Etiam sodales dignissim tellus, id hendrerit ligula ultrices sit amet. Cras commodo vitae ligula sed varius. Nullam semper felis quis quam rhoncus fermentum sit amet sit amet eros. t aliquam finibus mi, eget fringilla leo tempor id. Praesent mattis sodales
            </div>
        </div>
        {{-- конец поста --}}
        <!-- Автор -->
        <div class="author">
            <div class="author__image">
                <img src="{{ asset('images/author.jpg') }}" alt="">
            </div>
            <div class="author__content">
                <div class="author__name">Melissa Burton</div>
                <div class="author__text">In vulputate tristique ante vitae convallis. Praesent pharetra, ante vel rhoncus iaculis, tellus quam condimentum eros, at vehicula sapien diam sit amet tellus. Curabitur luctus quam ac arcu mattis, vel rhoncus orci euismod</div>
            </div>
        </div>
        <hr>
        {{-- конец автор --}}
        <!-- Комментарии -->
        <div class="comments">
            Comments
        </div>
        <div class="author">
            <div class="author__image">
                <img src="{{ asset('images/comment.jpg') }}" alt="">
            </div>
            <div class="author__content">
                <div class="author__name">Ernest Green</div>
                <div class="author__text">Curabitur vel nibh ullamcorper, sollicitudin nisi ut, faucibus diam. Proin nec maximus quam. Nunc aliquet eros tortor, vitae convallis nibh aliquet ut</div>
            </div>
        </div>
        <div class="comments">
            Leave a Reply
        </div>
        <div class="subcomments">
            Your email address will not be published. Required fields are marked *
        </div>
        <div class="comment__form">
            <div class="comment">
                <textarea name="comment" placeholder="Comment *"></textarea>
            </div>
            <div class="inputs">
                <input type="text" class="post-input" name="user_comment" id="user_comment" placeholder="Name *">
                <input type="text" class="post-input" name="email_comment" id="email_comment" placeholder="Email *">
            </div>
            <div class="check">
                <input type="checkbox" id="check">
                <label for="check">Save my name, email, and website in this browser for the next time I comment.</label>
            </div>
            <a href="" class="blog__link">Post Comment</a>
        </div>
        {{-- конец комментарии --}}
    </div>
    {{--конец контента страницы--}}
@endsection
{{-- закрыли подключаемый шаблон --}}
