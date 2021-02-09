@extends('admin.index')
@section('title')
    {{__('messages.Dashboard')}}
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{__('messages.Dashboard')}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{__('messages.Dashboard')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-layout-grid2  text-success border-success"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">{{__('messages.Total Category')}}</div>
                            <div class="stat-digit">{{$category}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-book  text-warning border-warning"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">{{__('messages.Total Recipe')}}</div>
                            <div class="stat-digit">{{$recipe}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">{{__('messages.Number Of User')}}</div>
                            <div class="stat-digit">{{$total_user}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-heart text-danger border-danger"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">{{__('messages.Total Reviews')}}</div>
                            <div class="stat-digit">{{$review}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 flt">
        <div class="row">
            <div class="col-md-12 col-xl-6 col-12 flat-r">
                <div class="card">
                    <div class="card-body">
                        <h4 class="orderh4">
                            <i class="ti-book" aria-hidden="true"></i>{{__('messages.Today Recipe')}}
                            <a class="btn btn-primary btn-flat m-b-30 m-t-30 elec textorder"
                               href="{{url('recipe')}}">{{__('messages.Show All')}} </a>
                        </h4>
                        <div class="table-responsive dtdiv">
                            <table id="latest_recipe_Table" class="table table-striped dttablewidth">
                                <thead>
                                <tr>
                                    <th>{{__('messages.Id')}}</th>
                                    <th>{{__('messages.Recipe Name')}}</th>
                                    <th>{{__('messages.Create Name')}}</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6 col-12 flat-r">
                <div class="card">
                    <div class="card-body">
                        <h4 class="orderh4">
                            <i class="fa fa-comments-o" aria-hidden="true"></i> {{__('messages.latest review')}}
                            <a class="btn btn-primary btn-flat m-b-30 m-t-30 elec textorder"
                               href="{{url('review')}}">{{__('messages.Show All')}} </a>
                        </h4>
                        <div class="table-responsive dtdiv">
                            <table id="least_review" class="table table-striped dttablewidth">
                                <thead>
                                <tr>
                                    <th>{{__('messages.Id')}}</th>
                                    <th>{{__('messages.Recipe Name')}}</th>
                                    <th>{{__('messages.Create Name')}}</th>
                                    <th>{{__('messages.Ratting')}}</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
