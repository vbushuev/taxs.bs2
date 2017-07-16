<div class="row" data-id="{{$user->id}}">
    <div class="col-md-2">#{{$user->id}} {{$user->name}}</div>
    <div class="col-md-4" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$user->email}}<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li>@include('element.form.action',["title"=>"Change password","action"=>""])</li>
        </ul>
    </div>
    <div class="col-md-2">Rate: @include('element.form.creaser',["action1"=>"user.rate.decrease($user->id,$user->rate)","action2"=>"user.rate.increase($user->id,$user->rate)","value"=>$user->rate])</div>
    <div class="col-md-2">Views: @include('element.form.creaser',["action1"=>"user.views.decrease($user->id,$user->views)","action2"=>"user.views.increase($user->id,$user->views)","value"=>$user->views])</div>
    <div class="col-md-2 dropdown">
        Role: {{$user->role}}
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Set <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li>@include('element.form.action',["title"=>"admin","action"=>"user.set.admin($user->id)"])</li>
        </ul>
    </div>
    <!-- 'name', 'email', 'password', 'country', 'city','birthday', 'about', 'education', 'views','role' -->
</div>
