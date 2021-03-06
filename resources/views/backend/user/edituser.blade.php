@extends('backend.master.master') 
@section('user','class="active"') 
@section('title','edit user') 
@section('content')
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Thành viên</h1>
        </div>
    </div>
</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên - admin@gmail.com</div>
            <div class="panel-body">
                <form method="POST">
                    @csrf
                    <div class="row justify-content-center" style="margin-bottom:40px">
                        <div class="col-md-8 col-lg-8 col-lg-offset-2">
                            @if ($errors->has('user_email'))
                            <div class="alert bg-danger" role="alert">
                                <svg class="glyph stroked cancel">
                                                    <use xlink:href="#stroked-cancel"></use>
                                                </svg>{{$errors->first('email')}}<a href="#"
                                    class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            @endif
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="user_email" class="form-control" value="{{$user->user_email }}">
                            </div>
                            @if ($errors->has('user_password'))
                            <div class="alert bg-danger" role="alert">
                                <svg class="glyph stroked cancel">
                                                    <use xlink:href="#stroked-cancel"></use>
                                                </svg>{{$errors->first('user_password')}}<a href="#"
                                    class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            @endif
                            <div class="form-group">
                                <label>password</label>
                                <input type="text" name="user_password" class="form-control" value="">
                            </div>
                            @if ($errors->has('user_name'))
                            <div class="alert bg-danger" role="alert">
                                <svg class="glyph stroked cancel">
                                                    <use xlink:href="#stroked-cancel"></use>
                                                </svg>{{$errors->first('user_name')}}<a href="#"
                                    class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            @endif
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="full" name="user_name" class="form-control" value="{{ $user->user_name }}">
                            </div>
                            @if ($errors->has('user_address'))
                            <div class="alert bg-danger" role="alert">
                                <svg class="glyph stroked cancel">
                                                    <use xlink:href="#stroked-cancel"></use>
                                                </svg>{{$errors->first('user_address')}}<a href="#"
                                    class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            @endif
                            <div class="form-group">
                                <label>Address</label>
                                <input type="address" name="user_address" class="form-control" value="{{ $user->user_address }}">
                            </div>
                            @if ($errors->has('user_phone'))
                            <div class="alert bg-danger" role="alert">
                                <svg class="glyph stroked cancel">
                                                    <use xlink:href="#stroked-cancel"></use>
                                                </svg>{{$errors->first('user_phone')}}<a href="#"
                                    class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            @endif
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="phone" name="user_phone" class="form-control" value="{{ $user->user_phone }}">
                            </div>

                            <div class="form-group">
                                <label>Level</label>
                                <select name="user_level" class="form-control" value="">
                                           
                                                    <option  @if ($user->user_level==0) selected @endif value="0">admin</option>
                                                    <option @if ($user->user_level==1) selected @endif value="1">user</option>                           
                   
                                            </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                                <button type="submit" class="btn btn-success" value="">Sửa thành viên</button>
                                <button type="reset" class="btn btn-danger" value=""> hủy bỏ</button>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix">

                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<!--/.row-->
</div>

<!--end main-->


@stop