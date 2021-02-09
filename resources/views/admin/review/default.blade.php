@extends('admin.index')
@section('title')
    {{__('messages.Reviews')}}
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{__('messages.Reviews')}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{__('messages.Reviews')}}</li>
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
                            <table id="review_table" class="table table-striped table-bordered">
                                <thead>
                                        <tr>
                                            <th>{{__('messages.Id')}}</th>
                                            <th>{{__('messages.Recipe Name')}}</th>
                                            <th>{{__('messages.User Name')}}</th>
                                            <th>{{__('messages.Reviews')}}</th>
                                            <th>{{__('messages.Ratting')}}</th>
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
