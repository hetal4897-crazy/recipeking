@extends('admin.index')
@section('title')
    {{__('messages.Save Chef')}}
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{__('messages.Save Chef')}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{__('messages.Save Chef')}}</li>
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
                        <strong class="card-title">{{__('messages.Save Chef')}}</strong>
                    </div>
                    <div class="card-body">
                        <div id="pay-invoice">
                            <div class="card-body">
                                @if(Session::get("message"))
                                    <div class="sufee-alert alert with-close alert-{{Session::get("alert")}} alert-dismissible fade show"><span class="badge badge-pill badge-{{Session::get("alert")}}">{{Session::get("tag")}}</span>
                                        {{Session::get("message")}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif
                                <form action="{{route('update_chef')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" id="id" value="{{$id}}"/>
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.Name')}} <span class="req_span">*</span>
                                        </label>
                                        <input type="text" required value="{{isset($data->name)?$data->name:""}}" id="name" name="name" class="form-control" placeholder="{{__('messages.Enter Chef Name')}}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.Email')}} <span class="req_span">*</span>
                                        </label>
                                        <input type="email" required value="{{isset($data->email)?$data->email:""}}" id="email" name="email" class="form-control" placeholder="{{__('messages.Enter Chef Email')}}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.Phone')}} <span class="req_span">*</span>
                                        </label>
                                        <input type="text" required value="{{isset($data->phone_no)?$data->phone_no:""}}" id="phone" name="phone" class="form-control" placeholder="{{__('messages.Enter Chef Phone')}}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.address')}} <span class="req_span">*</span>
                                        </label>
                                        <textarea required name="address" id="address" class="form-control" placeholder="{{__("messages.Enter Chef Address")}}">{{isset($data->address)?$data->address:""}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.about')}} <span class="req_span">*</span>
                                        </label>
                                        <textarea required name="about" id="about" class="form-control" placeholder="{{__('messages.Enter Chef About')}}" >{{isset($data->about_us)?$data->about_us:""}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.Profile Picture')}} <span class="req_span">*</span>
                                        </label>
                                        @if(isset($data->image))
                                            <img src="{{asset('public/upload/chef').'/'.$data->image}}"/>
                                            <input type="file"  id="image" name="image" class="form-control"  />
                                        @else
                                            <input type="file" required id="image" name="image" class="form-control"  />
                                        @endif
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
@stop

