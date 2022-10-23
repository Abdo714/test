@extends("layouts.master")
@section("content")
    <div class="row center">
        <div class="card-body center">
            <form class="form form-horizontal" action="addlogo" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-body">
                    <div class="row">


                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <span>اسم الجريده</span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="contact-info" class="form-control" name="newsname" placeholder="اسم الجريده">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <span>لوجو الجريده</span>
                                </div>
                                <div class="col-md-6">
                                    <input type="file" id="password" class="form-control" name="img[]" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-8 offset-md-4">

                        </div>
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">اضافه</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>





@endsection

