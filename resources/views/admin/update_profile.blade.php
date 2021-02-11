@extends('admin.index')
@section('title')
    {{__('messages.Update Profile')}}
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{__('messages.Update Profile')}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{__('messages.Update Profile')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row rowset" style="display:flex;justify-content: center;">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">{{__('messages.Update Profile')}}</strong>
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
                                <form action="{{route('update_profile')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.Name')}}
                                            <span style="color:red">*</span>
                                        </label>
                                        <input type="text" id="name" placeholder="{{__('messages.Name')}}"
                                               class="form-control" required name="name" value="{{Auth::user()->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class=" form-control-label">
                                            {{__('messages.Email')}}
                                        </label>
                                        <input type="text" required id="email" name="email"
                                               placeholder="{{__('messages.Email')}}" class="form-control"
                                               value="{{Auth::user()->email}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="file" class=" form-control-label">
                                            {{__('messages.Profile Picture')}}
                                        </label>
                                        <img src="{{asset('public/upload/profile/'.Auth::user()->profile_pic)}}"
                                             class="imgsize1"/>
                                        <div>
                                            <input type="file" id="file" name="image" class="form-control-file">
                                        </div>
                                    </div>
                                    <div>
                                        @if(Session::get("is_demo")=='1')
                                            <button type="button"
                                                    onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')"
                                                    class="btn btn-lg btn-info btn-block">
                                                {{__('messages.Save')}}
                                            </button>
                                        @else
                                            <button id="payment-button" type="submit"
                                                    class="btn btn-lg btn-info btn-block">
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
