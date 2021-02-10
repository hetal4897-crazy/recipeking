@extends('admin.index')
@section('title')
    {{__('messages.Chef')}}
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{__('messages.Chef')}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{__('messages.Chef')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
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
                            <div style="margin-bottom:10px">
                                <a href="{{url('save_chef/0')}}"
                                   class="btn btn-primary">{{__('messages.Add Chef')}}</a>
                            </div>
                            <table id="chef_table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>{{__('messages.Id')}}</th>
                                    <th>{{__('messages.Image')}}</th>
                                    <th>{{__('messages.Name')}}</th>
                                    <th>{{__('messages.Email')}}</th>
                                    <th>{{__('messages.Phone')}}</th>
                                    <th>{{__('messages.address')}}</th>
                                    <th>{{__('messages.about')}}</th>
                                    <th>{{__('messages.Action')}}</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
