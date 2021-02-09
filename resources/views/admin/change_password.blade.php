@extends('admin.index')
@section('title')
    {{__('messages.Change password')}}
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{__('messages.Change password')}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{__('messages.Change password')}}</li>
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
                        <strong class="card-title">{{__('messages.Change password')}}</strong>
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
                                <form action="{{route('update_password')}}" method="post" novalidate="novalidate"
                                      enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.Enter Current Password')}}
                                            <span class="reqfield">*</span>
                                        </label>
                                        <input type="password" id="cpwd"
                                               placeholder="{{__('messages.Enter Current Password')}}"
                                               class="form-control" name="cpwd" required=""
                                               onchange="check_current_pwd(this.value)">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.Enter New Password')}}
                                            <span class="reqfield">*</span>
                                        </label>
                                        <input type="password" id="npwd"
                                               placeholder="{{__('messages.Enter New Password')}}" class="form-control"
                                               name="npwd" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">
                                            {{__('messages.Re-enter New Password')}}
                                            <span class="reqfield">*</span>
                                        </label>
                                        <input type="password" id="rpwd"
                                               placeholder="{{__('messages.Re-enter New Password')}}"
                                               class="form-control" name="rpwd" onchange="change_check_both(this.value)"
                                               required="">
                                    </div>
                                    <div class="form-group">

                                        @if(Session::get("is_demo")==1)
                                            <button type="button"
                                                    onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')"
                                                    class="btn btn-lg btn-info btn-block">
                                                {{__('messages.Update')}}
                                            </button>
                                        @else
                                            <button id="payment-button" type="submit"
                                                    class="btn btn-lg btn-info btn-block">
                                                {{__('messages.Update')}}
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
    <script type="text/javascript">
        function change_check_both(val) {
            var npwd = $("#npwd").val();
            if (npwd != val) {
                alert("{{__('messages.New password and Re enter password must be same')}}");
                $("#npwd").val("");
                $("#rpwd").val("");
            }
        }

        function check_current_pwd(val) {
            $.ajax({
                url: $("#url_lang").val() + "/same_pwd" + "/" + val,
                method: "get",
                success: function (data) {
                    if (data == 0) {
                        alert("{{__('messages.Please Enter Correct Password')}}");
                        $("#cpwd").val("");
                    }
                }
            });
        }
    </script>
@stop
