@extends("layouts.master")
@section("content")
    @foreach($x as $action)

        <div class="col-xl-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center">{{$action->newsname}}</h4>
                        <h5 class="card-title">{{$action->title}}</h5>
                    </div>
                    @foreach(unserialize($action->img) as $image)
                    <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
                        <iframe class="img-thumbnail" style="width: 100%" src="{{asset($image)}}" allowfullscreen=""></iframe>
                    </div>
                    @endforeach
                    <div class="card-body">
                        <p class="card-text">{{$action->news}}</p>
                    </div>
                   <a href="{{url("/delete?id=".$action->id)}}"> <button type="submit" class="btn btn-danger mr-1 mb-1 waves-effect waves-light" style="">حذف</button></a>

                </div>
            </div>
        </div>


    @endforeach



@endsection
