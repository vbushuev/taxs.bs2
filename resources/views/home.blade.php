@extends('layouts.app')

@section('content')
<!-- admin bar -->
<!-- header -->
<header class="header">
  <div class="container">
    <div class="item all">
      <p>Уже в системе <span id="totalUsers">{{$total or -1}}</span> чел.</p>
    </div>

    <div class="item num">
      <p>Ваш номер <span id="idUser">{{Auth::user()->id}}</span></p>
    </div>
    <div class="name">
      <p>{{Auth::user()->name}}</p>
    </div>
  </div>
</header>

  <!-- main -->
  <main class="main">
    <div class="container">
      <aside class="aside">
        <div class="top">
          <p>Анкетные данные</p>
          <span id="anketDataPercent">60%</span>
        </div>
        <div class="bot">
          <form id="myform">
            <input type="text" name="name" placeholder="Ф.И.О." required value="{{Auth::user()->name}}">
            <input type="text" name="city" placeholder="Город" required value="{{Auth::user()->city}}">
            <input type="text" name="deyat" placeholder="Род деятельности" required value="">
            <input type="text" name="edik" placeholder="Образование" required value="{{Auth::user()->education}}">
            <input type="text" name="about" placeholder="О себе" required value="{{Auth::user()->about}}">
            <input type="submit" value="Заполнить">
          </form>
        </div>
      </aside>
      <div class="content">
        <ul>
          <li>
            <a href="#">Номер в списке <span id="numberUser"></span></a>
          </li>
          <li>
            <a href="#">Количество просмотров <span id="views">{{Auth::user()->views}}</span></a>
          </li>
        </ul>
        <div class="circle">
          <div class="item">
            <p><span>%</span> Симпатий</p>
          </div>
          <div class="item">
            <div class="ct-chart"></div>
          </div>
        </div>
        <div class="button">
          <button type="submit">Отправить анкету</button>
        </div>
        <div class="textarea">
          <p style="display:block;float:left;width:30%">LIVE
            <span>Лента</span>
          </p>
          <!-- <textarea name="text"></textarea> -->
          <div class="newsfeed" style="display:block;float:right;width:66%">
              @foreach ($newses as $news)
                  @include('element.news',["news"=>$news])
              @endforeach
          </div>


        </div>
      </div>
    </div>
  </main>
@include('modal.anketa')

@endsection
