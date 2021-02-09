@extends('admin.index')
@section('title')
    {{__('messages.Category')}}
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{__('messages.Category')}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{__('messages.Category')}}</li>
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
                                <a href="" class="btn btn-primary" data-toggle="modal"
                                   data-target="#add_Category">{{__('messages.Add Category')}}</a>
                            </div>

                            <table id="category" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>{{__('messages.Id')}}</th>
                                    <th>{{__('messages.Name')}}</th>
                                    <th>{{__('messages.Icon')}}</th>
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
    <div class="modal fade" id="add_Category" tabindex="-1" role="dialog" aria-labelledby="small_modal_Label"
         aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="small_modal_Label">{{__('messages.Add Category')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('add_category')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-row">
                            <label>{{__('messages.Name')}}<span style="color:red">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" required
                                   placeholder="{{__('messages.Enter Category Name')}}"/>
                        </div>
                        <div class="form-row">
                            <label>{{__('messages.Icon')}}<span style="color:red">*</span></label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*" required/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{__('messages.Cancel')}}</button>
                        @if(Session::get("is_demo")==1)
                            <button type="button"
                                    onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')"
                                    class="btn btn-primary">
                                {{__('messages.Save')}}
                            </button>
                        @else
                            <button type="submit" class="btn btn-primary">{{__('messages.Save')}}</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="small_modal_Label"
         aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="small_modal_Label">{{__('messages.Edit Category')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('update_category')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id"/>
                        <input type="hidden" name="real_img" id="real_img"/>
                        <div class="form-row">
                            <label>{{__('messages.Name')}}<span style="color:red">*</span></label>
                            <input type="text" name="name" id="edit_name" class="form-control" required
                                   placeholder="{{__('messages.Enter Category Name')}}"/>
                        </div>
                        <div class="form-row">
                            <label>{{__('messages.Icon')}}<span style="color:red">*</span></label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*"/>
                            <img src="" style="width:100px;margin-top:15px" id="edit_img"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{__('messages.Cancel')}}</button>
                        @if(Session::get("is_demo")==1)
                            <button type="button"
                                    onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')"
                                    class="btn btn-primary">
                                {{__('messages.Save')}}
                            </button>
                        @else
                            <button type="submit" class="btn btn-primary">{{__('messages.Save')}}</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
