<form action="{{route('statuses.store')}}" method="post">
    @include('shared._errors')
    {{csrf_field()}}
    <textarea class="form-control" placeholder="聊聊新鲜事...." name="content" rows="3">{{old('content')}}</textarea>
    <div class="text-right">
        <button class="btn btn-outline-primary" type="submit">发布</button>
    </div>
</form>