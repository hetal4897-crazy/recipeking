@extends('admin.index')
@section('title')
{{__('messages.View Recipe')}}
@stop
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>{{__('messages.View Recipe')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class=""><a href="{{url('recipe')}}">{{__('messages.Recipe')}}</a></li>
               <li class="active">{{__('messages.View Recipe')}}</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row" style="display:flex;justify-content:center">
         <div class="col-md-9">
            <div class="card">
               <div class="card-body">
                  <div class="col-md-12">
                        <div class="col-md-4">
                            <img src="{{asset('public/upload/recipe').'/'.$data->image}}">
                        </div>
                        <div class="col-md-8">
                            <label><b>{{__('messages.Name')}}:-</b></label>{{$data->name}}</br>
                            <label><b>{{__('messages.Category')}}:-</b></label>{{$data->category_id}}</br>
                            <label><h4>{{__('messages.Prepation time')}}</h4></label>
                            <table class="table table-striped table-bordered">
                                  <tr>
                                    <th>{{__('messages.Total Time')}}</th>
                                    <th>{{__('messages.Prep Time')}}</th>
                                    <th>{{__('messages.Cook Time')}}</th>
                                  </tr>
                                  <tr>
                                    <td>{{$data->total_time}}</td>
                                    <td>{{$data->prep_time}}</td>
                                    <td>{{$data->cook_time}}</td>
                                  </tr>
                            </table>
                        </div>
                  </div>
                  <div class="col-md-12" style="margin-top:25px;">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{__('messages.Ingredient Info')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">{{__('messages.Nutrition Info')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">{{__('messages.Step By Step')}}</a>
                                    </li>
                     </ul>
                     <div class="tab-content pl-3 p-1" id="myTabContent">
                                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                         <table class="table table-striped table-bordered" style="margin-top:25px">
                                            <thead>
                                              <tr>
                                                 <th>{{__('messages.Name')}}</th>
                                                 <th>{{__('messages.weight')}}</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($data->Ingredientinfodata)&&count($data->Ingredientinfodata)!=0)
                                                @foreach($data->Ingredientinfodata as $dn)
                                                    <tr>
                                                      <td>{{$dn->name}}</td>
                                                      <td>{{$dn->weight}}</td>
                                                    </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                         </table>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <table class="table table-striped table-bordered" style="margin-top:25px">
                                            <thead>
                                              <tr>
                                                 <th>{{__('messages.Name')}}</th>
                                                 <th>{{__('messages.Value')}}</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($data->NutritionInfodata)&&count($data->NutritionInfodata)!=0)
                                                @foreach($data->NutritionInfodata as $dn)
                                                    <tr>
                                                      <td>{{$dn->name}}</td>
                                                      <td>{{$dn->value}}</td>
                                                    </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                         </table>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                         <table class="table table-striped table-bordered" style="margin-top:25px">
                                            <thead>
                                              <tr>
                                                 <th>{{__('messages.Video')}}</th>
                                                 <th>{{__('messages.Description')}}</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($data->RecipeStepdata)&&count($data->RecipeStepdata)!=0)
                                                @foreach($data->RecipeStepdata as $dn)
                                                    <tr>
                                                      <td><video width="200" controls>
                                      <source src="{{asset('public/upload/video').'/'.$dn->video}}" id="video_here" >
                                    </video></td>
                                                      <td>{{$dn->description}}</td>
                                                    </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                         </table>
                                    </div>
                                </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
