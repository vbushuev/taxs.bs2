<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <label for="{{$name}}" class="col-md-12 control-label">{{$title}}</label>

    <div class="col-md-12 input-group check">
        @if($type=='password')
            <input id="{{$name}}" type="password" class="form-control" name="{{$name}}" required value="{{$value}}">
        @elsif($type=='date')
            <input id="{{$name}}" type="date" class="form-control" name="{{$name}}" required value="{{$value}}">
        @elsif($type=='text')
            <textarea id="{{$name}}" class="form-control" name="{{$name}}" required>
                {{$value}}
            </textarea>
        @elsif($type=='select')
            <select id="{{$name}}"class="form-control" name="{{$name}}" required>

            </select>
        @else
            <input id="{{$name}}" type="text" class="form-control" name="{{$name}}" required value="{{$value}}">
        @endif
        @if ($errors->has('{{$name}}'))
            <span class="help-block">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>
