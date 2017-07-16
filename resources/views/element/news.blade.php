<div class="row">
    <div class="col-md-12">
        <div class="news"></div>
        <h1 class="news-title">{{$news->title}}</h1>
        <p class="news-text">{!!$news->text!!}</p>
        <p class="news-subscribe">{{$news->created_at}} {{$news->user_id}}</p>

    </div>
</div>
