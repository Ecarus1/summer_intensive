@extends('main')

@section('title')
    Главная
@endsection


@section('link')
    <link rel="stylesheet" href="/css/home.css">
    <script src="/js/clock.js"></script>
@endsection


@section('content')
    <div class="box_information">
        <span class="big_n">Н</span><span class="smoll_word">а часах</span>
        <span id="clock"></span>
        <p class="text_final">А ТЫ ЕЩЁ НЕ ЗАСТРАХОВАЛСЯ!?</p>
    </div>

    <img class="img_meneger" src="https://catherineasquithgallery.com/uploads/posts/2021-02/1614511030_127-p-na-belom-fone-chelovek-146.png" alt="">
@endsection