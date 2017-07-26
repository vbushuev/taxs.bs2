<div class="news">
    <div class="news-title">{{$news->title}}</div>
    <div class="news-text">{!!$news->text!!}</div>
    <div class="news-subscribe">{{$news->created_at}} {{$news->user_id}}</div>
</div>
