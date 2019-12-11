@extends("layout")
@section("content")
<div class="list-group">
    @foreach($medias as $item)
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-2">{{$account}}</h5>
            <small>{{\Carbon\Carbon::parse($item['createdTime'])->diffForHumans()}}</small>
        </div>
        <div class="d-flex w-100 justify-content-around">
            <img src="{{$item['imageThumbnailUrl']}}" class="img-fluid">
            <p class="mb-1 ml-3">{{$item['caption']}} <br><i class="fas fa-comments"></i><small
                    class="ml-1">{{$item['commentsCount']}}</small> <i class="fas fa-heart ml-2"></i><small
                    class="ml-1">{{$item['LikesCount']}}</small></p>
        </div>
    </a>
    @endforeach
</div>
</div>
@endsection
