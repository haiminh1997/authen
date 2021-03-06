@extends('admin.layouts.glance')
@section('title')
    Xóa banner
@endsection
@section('content')
    <h1> Xóa banner {{ $banner->id . ' : ' .$banner->name }}</h1>
    <div class="row">
        <div class="form-three widget-shadow">
            <form name="page" action="{{ url('admin/banners/'.$banner->id.'/delete') }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên banner</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control1" id="focusedinput" value="{{ $banner->name }}" placeholder="Tên banner">
                    </div>
                </div>
                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </div>
            </form>
        </div>
    </div>
@endsection

