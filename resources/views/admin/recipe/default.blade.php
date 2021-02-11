@extends('admin.index')
@section('title')
    {{__('messages.Recipe')}}
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{__('messages.Recipe')}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{__('messages.Recipe')}}</li>
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
                                <a href="{{url('save_recipe/0/1')}}"
                                   class="btn btn-primary">{{__('messages.Add Recipe')}}</a>
                            </div>
                            <table id="recipe_table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>{{__('messages.Id')}}</th>
                                    <th>{{__("messages.chef Name")}}</th>
                                    <th>{{__('messages.Category')}}</th>
                                    <th>{{__('messages.Recipe Name')}}</th>
                                    <th>{{__('messages.Image')}}</th>
                                    <th>{{__('messages.Create Name')}}</th>
                                    <th>{{__('messages.Status')}}</th>
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
