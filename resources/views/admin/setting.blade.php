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
                                    <div class="col-md-6">
                                        <label>{{__('messages.Facebook ID')}}  <span style="color:red">*</span></label>
                                        <input type="text" id="facebook_id" name="facebook_id" required class="form-control" placeholder="{{__("messages.Enter").' '.__("messages.Facebook ID")}}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{__('messages.Instagram ID')}}  <span style="color:red">*</span></label>
                                        <input type="text" id="instagram_id" name="instagram_id" required class="form-control" placeholder="{{__("messages.Enter").' '.__("messages.Instagram ID")}}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{__('messages.Twitter ID')}}  <span style="color:red">*</span></label>
                                        <input type="text" id="twitter_id" name="twitter_id" required class="form-control" placeholder="{{__("messages.Enter").' '.__("messages.Twitter ID")}}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{__('messages.youtube')}}  <span style="color:red">*</span></label>
                                        <input type="text" id="youtube" name="youtube" required class="form-control" placeholder="{{__("messages.Enter").' '.__("messages.youtube")}}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{__('messages.Email')}}  <span style="color:red">*</span></label>
                                        <input type="text" id="email" name="email" required class="form-control" placeholder="{{__("messages.Enter").' '.__("messages.Email")}}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{__('messages.About')}}  <span style="color:red">*</span></label>
                                        <textarea id="about" name="about" required class="form-control" placeholder="{{__("messages.Enter").' '.__("messages.About")}}"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{__('messages.Favicon')}}  <span style="color:red">*</span></label>
                                        @if(isset($data->favicon))
                                            <img src="" />
                                            <input type="file" id="favicon" name="favicon" required class="form-control"/>
                                        @else
                                            <input required type="file" id="favicon" name="favicon" required class="form-control"/>
                                        @endif

                                    </div>
                                    <div class="col-md-6">
                                        <label>{{__('messages.About')}}  <span style="color:red">*</span></label>
                                        <textarea id="about" name="about" required class="form-control" placeholder="{{__("messages.Enter").' '.__("messages.About")}}"></textarea>
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
