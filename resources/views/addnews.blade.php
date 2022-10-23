@extends("layouts.master")
@section("content")
<div class="row center">
    <div class="card-body center">
        <form class="form form-horizontal" action="addnews" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <span>التاريخ</span>
                            </div>
                            <div class="col-md-6">
                                <input type="date" id="first-name" class="form-control" name="date" placeholder="التاريخ">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <span>الجريده</span>
                            </div>
                            <div class="col-md-6">

                                <select class="form-control" id="basicSelect" name="newsname">
                                    @foreach($x as $action)
                                    <option value="{{$action->newsname}}">{{$action->newsname}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <span>العنوان</span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="contact-info" class="form-control" name="title" placeholder="العنوان">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <span>الخبر</span>
                            </div>
                            <div class="col-md-6">
                                <textarea type="text" id="password" class="form-control" name="news" placeholder="الخبر">

                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <span>صوره</span>
                            </div>
                            <div class="col-md-6">
                                <input type="file" id="img" class="form-control" name="img[]" multiple>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-8 offset-md-4">

                    </div>
                    <div class="col-md-6 offset-md-2">
                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">اضافه</button>
                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">التراجع</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<a href="view_report"><button type="" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">عرض التقرير</button></a>




@endsection

