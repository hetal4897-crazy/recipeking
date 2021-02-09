@extends('admin.index')
@section('title')
    {{__('messages.Setting')}}
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{__('messages.Setting')}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{__('messages.Setting')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row rowset" style="display:flex;justify-content: center;">
            <div class="col-lg-11">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">{{__('messages.Setting')}}</strong>
                    </div>
                    <div class="card-body">
                        <div id="pay-invoice">
                            <div class="card-body">
                                @if(Session::get("message"))
                                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                        <span class="badge badge-pill badge-success">{{__('messages.Success')}}</span>
                                        {{Session::get("message")}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif
                                @if(Session::get("message1"))
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">{{__('messages.Error')}}</span>
                                        {{Session::get("message1")}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif
                                <form action="{{route('update_setting')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.Privacy Policy')}}
                                            <span style="color:red">*</span>
                                        </label>
                                        <textarea class="form-control" name="privacy_policy" id="privacy_policy"
                                                  required><?= isset($setting->privacy_policy) ? $setting->privacy_policy : ""?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class=" form-control-label">
                                            {{__('messages.Android Server Key')}}
                                        </label>
                                        <textarea required id="android_server_key" name="android_server_key"
                                                  class="form-control"
                                                  placeholder="{{__('messages.Android Server Key')}}"><?= isset($setting->android_server_key) ? $setting->android_server_key : ""?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="email" class=" form-control-label">
                                            {{__('messages.Iphone Server Key')}}
                                        </label>
                                        <textarea required id="ios_server_key" name="ios_server_key"
                                                  class="form-control" value=""
                                                  placeholder="{{__('messages.Iphone Server Key')}}"><?= isset($setting->ios_server_key) ? $setting->ios_server_key : ""?></textarea>

                                    </div>

                                    <div class="form-group">
                                        @if(Session::get("is_demo")=='1')
                                            <button type="button"
                                                    onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')"
                                                    class="btn  btn-primary">
                                                {{__('messages.Save')}}
                                            </button>
                                        @else
                                            <button id="payment-button" type="submit" class="btn  btn-primary">
                                                {{__('messages.Save')}}
                                            </button>
                                        @endif

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
    <script type="text/javascript">
        CKEDITOR.replace('privacy_policy');
    </script>
@stop
