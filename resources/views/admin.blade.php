@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="row-blocks row-blocks-3">
                        <li><a href="#">Total users:<span class="number" id="totalUsers">{{$total or -1}}</span></a></li><!--
                    --><li><a href="#">#:<span class="number" id="totalUsers">{{Auth::user()->id}}</span></a></li><!--
                    --><li class="text-right"><a href="#">{{Auth::user()->name}}</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        @foreach ($users as $user)
                            @include('element.user.row',["user"=>$user])
                        @endforeach
                    </div>
                </div>
                <!-- <div class="panel-footer">

                </div> -->
            </div>
        </div>
    </div>
</div>
<script>
    var user={
        set:{
            admin:function(id){user.send(id,{role:"admin"});}
        },
        rate:{
            increase:function(id,r){user.send(id,{rate:r+1});},
            decrease:function(id,r){user.send(id,{rate:r-1});},
        },
        views:{
            increase:function(id,r){user.send(id,{views:r+1});},
            decrease:function(id,r){user.send(id,{views:r-1});},
        },
        send:function(id,d){
            var req = $.extend({},d);
            $.ajax({
                url:"/user/"+id+"/update",
                type:"post",
                dataType:"json",
                data:req,
                success:function(d){
                    document.location.reload()
                }
            });
        }
    };
</script>
@endsection
