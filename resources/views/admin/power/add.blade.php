@extends('admin.main')
@section('content')
<div class="col-md-12" style=" width: 650px">
<form action="{{url('admin/power/store')}}" method="post">
    <div class="form-group">
        @if(count($errors)>0)
            <div class="mark">
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{$errors}}</p>
                @endif
            </div>
        @endif
            <div class="form-group">
                <label class="col-sm-3 control-label">权限列表：</label>
                <div class="col-sm-9">
                    <select class="form-control" style="width: 110px" name="">
                        @foreach($data as $d)
                            <option value="{{$d->priv_id}}">{{$d->_priv_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        <label class="col-sm-3 control-label">权限名称：</label>
        <div class="col-sm-9">
            <input type="text" name="priv_name" class="form-control" placeholder="请输入文本">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">权限控制器：</label>
        <div class="col-sm-9">
            <input type="text" name="priv_controller" class="form-control" placeholder="请输入文本">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">权限行为：</label>
        <div class="col-sm-9">
            <input type="text" name="priv_action" class="form-control" placeholder="请输入文本">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">权限层级：</label>
        <div class="col-sm-9">
            <input type="text" name="priv_level" class="form-control" placeholder="请输入文本">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">pid：</label>
        <div class="col-sm-9">
            <input type="text" name="priv_pid" class="form-control" placeholder="请输入文本">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">	权限描述：</label>
        <div class="col-sm-9">
            <p class="form-control-static"><textarea name="priv_desc" style="width: 435px; height: 50px"></textarea></p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">权限状态：</label>
        <div class="col-sm-9">
            <label class="radio-inline">
                <input type="radio" checked="" value="1" id="optionsRadios1" name="priv_status">启用</label>
            <label class="radio-inline">
                <input type="radio" value="0" id="optionsRadios2" name="priv_status">未启用</label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 col-sm-offset-3">
            <button class="btn btn-primary" type="submit">保存内容</button>
            <button class="btn btn-white" type="submit">取消</button>
        </div>
    </div>
</form>
</div>
@stop