<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Save Recipe')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Save Recipe')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class=""><a href="<?php echo e(url('recipe')); ?>"><?php echo e(__('messages.Recipe')); ?></a></li>
               <li class="active"><?php echo e(__('messages.Save Recipe')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row" style="display:flex;justify-content:center">
         <div class="col-md-12">
            <div class="card">
               <?php if(Session::get("message")): ?>
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger"><?php echo e(__('messages.Error')); ?></span>
                                            <?php echo e(Session::get("message")); ?>

                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                 <span aria-hidden="true">×</span>
                                            </button>
                                    </div>
                                 <?php endif; ?>

               <div class="card-body">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link <?=$step==1?"active show":"" ?>" id="step1-tab" data-toggle="tab" href="#step1" role="tab" aria-controls="step1" aria-selected="false"><?php echo e(__('messages.Basic Information')); ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?=$step==2?"active show":"" ?>" id="step2-tab" data-toggle="tab" href="#step2" role="tab" aria-controls="step2" aria-selected="false"><?php echo e(__('messages.Ingredient Info')); ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?=$step==3?"active show":"" ?> " id="step3-tab" data-toggle="tab" href="#step3" role="tab" aria-controls="step3" aria-selected="true"><?php echo e(__('messages.Nutrition Info')); ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?=$step==4?"active show":"" ?> " id="step4-tab" data-toggle="tab" href="#step4" role="tab" aria-controls="step4" aria-selected="true"><?php echo e(__('messages.Step By Step')); ?></a>
                     </li>
                  </ul>
                  <div class="tab-content pl-3 p-1" id="myTabContent">
                     <div class="tab-pane <?=$step==1?"active show":"" ?>" id="step1" role="tabpanel" aria-labelledby="step1-tab">
                        <h3 style="margin-top:15px;margin-bottom:15px"><?php echo e(__('messages.Basic Information')); ?></h3>
                        <form action="<?php echo e(url('Saverecipestep1')); ?>" method="post" enctype="multipart/form-data" >
                           <?php echo e(csrf_field()); ?>

                           <input type="hidden" name="recipe_id" id="recipe_id" value="<?php echo e($recipe_id); ?>"/>
                           <div class="form-row">
                              <div class="col-md-8">
                                 <label><?php echo e(__('messages.Recipe Name')); ?><span style="color:red">*</span></label>
                                 <input type="text" required name="name" value="<?= isset($data->name)?$data->name:"" ?>" id="name" class="form-control" required placeholder="<?php echo e(__('messages.Enter Recipe Name')); ?>"/>
                              </div>
                              <div class="col-md-4">
                                 <label><?php echo e(__('messages.Cateogry')); ?><span style="color:red">*</span></label>                                
                                 <select name="category" required id="selectcategory" class="form-control">
                                    <option value=""><?php echo e(__('messages.Select Category')); ?></option>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($cat->id); ?>" <?= isset($data->category_id)&&$cat->id==$data->category_id?'selected="selected"':"" ?>><?php echo e($cat->name); ?></option> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                 </select>
                              </div>
                           </div>
                           <div class="form-row" style="margin-top:15px">
                              <div class="col-md-4">
                                 <label><?php echo e(__('messages.Total Time')); ?><span style="color:red">*</span></label>
                                 <input type="text" required  value="<?= isset($data->total_time)?$data->total_time:"" ?>" name="total_time" id="total_time" class="form-control" required placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Total Time')); ?>"/>
                              </div>
                              <div class="col-md-4">
                                 <label><?php echo e(__('messages.Prep Time')); ?><span style="color:red">*</span></label>
                                 <input type="text" required name="prep_time" value="<?= isset($data->prep_time)?$data->prep_time:"" ?>" id="prep_time" class="form-control" required placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Prep Time')); ?>"/>
                              </div>
                              <div class="col-md-4">
                                 <label><?php echo e(__('messages.Cook Time')); ?><span style="color:red">*</span></label>
                                 <input type="text" required name="cook_time" value="<?= isset($data->cook_time)?$data->cook_time:"" ?>" id="cook_time" class="form-control" required placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Cook Time')); ?>"/>
                              </div>
                           </div>
                            <div class="form-row">
                                 <label><?php echo e(__('messages.serving')); ?><span style="color:red">*</span></label>
                                 <input type="text" required name="serving" value="<?= isset($data->serving)?$data->serving:"" ?>" id="serving" class="form-control" required placeholder="<?php echo e(__('messages.Enter').' '.__('messages.serving')); ?>"/>
                              </div>
                            <div class="form-row">
                                 <label><?php echo e(__('messages.Description')); ?><span style="color:red">*</span></label>
                                 
                                 <textarea id="description" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Description')); ?>" class="form-control" name="description" required="" autocomplete="off"><?= isset($data->description)?$data->description:"" ?></textarea>
                                
                              </div>
                           <div class="form-row ">
                              <div class="col-md-6">
                                 <label><?php echo e(__('messages.Image')); ?><span style="color:red">*</span></label>
                                 <div id="uploaded_image">
                                             <div class="upload-btn-wrapper">
                                                <button class="btn imgcatlog">
                                                   <?php if(isset($data->image)): ?>
                                                      <img src="<?php echo e(asset('public/upload/recipe').'/'.$data->image); ?>" style="width:150px;margin-top:15px;margin-bottom:10px" alt="..." class="img-thumbnail imgsize" id="basic_img" >
                                                   <?php else: ?>
                                                      <img src="<?php echo e(asset('public/img/imgplaceholder.jpg')); ?>" style="width:150px;margin-top:15px;margin-bottom:10px" alt="..." class="img-thumbnail imgsize" id="basic_img" >
                                                   <?php endif; ?>
                                                
                                                </button>
                                                   <?php if(isset($data->image)): ?>
                                                       <input type="file"  name="upload_image" id="upload_image" />
                                                   <?php else: ?>
                                                       <input type="file" required name="upload_image" id="upload_image" />
                                                   <?php endif; ?>
                                               
                                             </div>
                                          </div>
                                 
                                
                              </div>
                           </div>
                           <div class="form-row" style="float:right" >
                               <?php if(Session::get("is_demo")==1): ?>
                                  <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                    <?php echo e(__('messages.Save')); ?>  
                                  </button>
                                <?php else: ?>
                              <button  type="submit" class="btn btn-primary"><?php echo e(__('messages.Save')); ?> </button>
                              <?php endif; ?>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane fade <?=$step==2?"active show":"" ?>" id="step2" role="tabpanel" aria-labelledby="step2-tab">
                        <h3 style="margin-top:15px;margin-bottom:15px"><?php echo e(__('messages.Ingredient Info')); ?></h3>
                        <form action="<?php echo e(url('Saverecipestep2')); ?>" method="post">
                              <?php echo e(csrf_field()); ?>

                             <input type="hidden" name="recipe_id" id="recipe_id" value="<?php echo e($recipe_id); ?>"/>
                        
                        <table class="table table-striped cmr1" id="sortable">
                           <thead>
                              <tr class="tdnew">
                                 <td></td>
                                 <td><?php echo e(__('messages.Name')); ?></td>
                                 <td><?php echo e(__('messages.weight')); ?></td>
                                 <td></td>
                              </tr>
                           </thead>
                           <tbody id="lstable">
                              <?php $i=1;?>
                              <?php if(isset($data)&&isset($data->Ingredientinfodata)&&count($data->Ingredientinfodata)!=0): ?>
                              <?php $__currentLoopData = $data->Ingredientinfodata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr id="ing_<?php echo e($i); ?>">
                                 <td><i class="ti-layout-grid4-alt"></i></td>
                                 <td data-id="<?php echo e($i); ?>">
                                    <input type="text" required id="label_<?php echo e($i); ?>" required value="<?= isset($ing->name)?$ing->name:"" ?>" name="ing_name[]" placeholder="" class="form-control">
                                 </td>
                                 <td>
                                    <input type="text" id="price_<?php echo e($i); ?>" required name="ing_weight[]" value="<?= isset($ing->weight)?$ing->weight:"" ?>" placeholder="" class="form-control">
                                 </td>
                                 <td>
                                    <button class="btn btn-danger" onclick="removerow(<?php echo e($i); ?>,'ing_')"><i class="fa fa-trash f-s-25"></i></button>
                                 </td>
                              </tr>
                              <?php $i++;?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php else: ?>
                                 <tr id="ing_1">
                                 <td><i class="ti-layout-grid4-alt"></i></td>
                                 <td data-id="1">
                                    <input type="text" required id="label_1" required name="ing_name[]" placeholder="" class="form-control">
                                 </td>
                                 <td>
                                    <input type="text" id="price_1" required name="ing_weight[]" placeholder="" class="form-control">
                                 </td>
                                 <td>
                                    <button class="btn btn-danger" onclick="removerow(1,'ing_')"><i class="fa fa-trash f-s-25"></i></button>
                                 </td>
                              </tr>
                              <?php endif; ?>
                              <input type="hidden" name="totalrow" id="totalrow" value="<?php echo e($i); ?>">
                           </tbody>
                        </table>
                        <button type="button" class="btn btn-outline-secondary fleft" onclick="addoptionrow()">Add New Row</button>
                         <div class="form-row" style="float:right" >
                            <?php if(Session::get("is_demo")==1): ?>
                                  <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                    <?php echo e(__('messages.Save')); ?>  
                                  </button>
                                <?php else: ?>
                              <button  type="submit"  class="btn btn-primary"><?php echo e(__('messages.Save')); ?></button>
                              <?php endif; ?>
                         </div>
                         </form>
                     </div>
                     <div class="tab-pane fade <?=$step==3?"active show":"" ?>" id="step3" role="tabpanel" aria-labelledby="step3-tab">
                        <h3 style="margin-top:15px;margin-bottom:15px"><?php echo e(__('messages.Nutrition Info')); ?></h3>
                        <form action="<?php echo e(url('Saverecipestep3')); ?>" method="post">
                              <?php echo e(csrf_field()); ?>

                             <input type="hidden" name="recipe_id" id="recipe_id" value="<?php echo e($recipe_id); ?>"/>
                        
                       <table class="table table-striped cmr1" id="sortttable1">
                           <thead>
                              <tr class="tdnew">
                                 <td></td>
                                 <td><?php echo e(__('messages.Name')); ?></td>
                                 <td><?php echo e(__('messages.Value')); ?></td>
                                 <td></td>
                              </tr>
                           </thead>
                           <tbody id="lstablenutri">
                              <?php $i=1;?>
                              <?php if(isset($data->NutritionInfodata)&&count($data->NutritionInfodata)!=0): ?>
                                 <?php $__currentLoopData = $data->NutritionInfodata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="nutri_<?php echo e($i); ?>">
                                          <td><i class="ti-layout-grid4-alt"></i></td>
                                          <td data-id="<?php echo e($i); ?>">
                                             <input type="text" value="<?= isset($dn->name)?$dn->name:"" ?>" required id="name_<?php echo e($i); ?>" name="nutri_name[]" placeholder="" class="form-control">
                                          </td>
                                          <td>
                                             <input type="text" id="value_<?php echo e($i); ?>" value="<?= isset($dn->value)?$dn->value:"" ?>" name="nutri_value[]" placeholder="" class="form-control">
                                          </td>
                                          <td>
                                             <button class="btn btn-danger"  onclick="removerow('<?php echo e($i); ?>,''nutri_')"><i class="fa fa-trash f-s-25"></i></button>
                                          </td>
                                    </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php else: ?>
                              <tr id="nutri_1">
                                 <td><i class="ti-layout-grid4-alt"></i></td>
                                 <td data-id="1">
                                    <input type="text" required id="name_1" name="nutri_name[]" placeholder="" class="form-control">
                                 </td>
                                 <td>
                                    <input type="text" id="value_1" name="nutri_value[]" placeholder="" class="form-control">
                                 </td>
                                 <td>
                                    <button class="btn btn-danger" onclick="removerow(1,'nutri_')"><i class="fa fa-trash f-s-25"></i></button>
                                 </td>
                              </tr>
                              <?php endif; ?>
                              <input type="hidden" name="totalrownutri" id="totalrownutri" value="<?php echo e($i); ?>">
                           </tbody>
                        </table>
                        <button type="button" class="btn btn-outline-secondary fleft" onclick="addnutrirow()">Add New Row</button>
                        <div class="form-row" style="float:right" >
                            <?php if(Session::get("is_demo")==1): ?>
                                  <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                    <?php echo e(__('messages.Save')); ?>  
                                  </button>
                                <?php else: ?>
                              <button  type="submit"  class="btn btn-primary"><?php echo e(__('messages.Save')); ?></button>
                              <?php endif; ?>
                         </div>
                      </form>
                     </div>
                     <div class="tab-pane fade <?=$step==4?"active show":"" ?>" id="step4" role="tabpanel" aria-labelledby="step4-tab">
                        <h3 style="margin-top:15px;margin-bottom:15px"><?php echo e(__('messages.Step By Step')); ?></h3>
                        <div class="col-md-12">
                           <form id="formstep" method="post" enctype="multipart/form-data" action="<?php echo e(url('Saverecipestep4')); ?>">
                              <?php echo e(csrf_field()); ?>

                               <input type="hidden" name="recipe_id" id="recipe_id" value="<?php echo e($recipe_id); ?>"/>
                           <table class="table table-striped cmr1" id="steptable1">
                           <thead>
                              <tr class="tdnew">
                                 <td><?php echo e(__('messages.Step')); ?></td>
                                 <td><?php echo e(__('messages.Detail')); ?></td>                                 
                                 <td><?php echo e(__('messages.Remove')); ?></td>
                              </tr>
                           </thead>
                           <tbody id="lstablestep">
                              <?php $i=1;?>
                              <?php if(isset($data->RecipeStepdata)&&count($data->RecipeStepdata)!=0): ?>
                              <?php $__currentLoopData = $data->RecipeStepdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $i++;?>
                                <tr id="step_<?php echo e($i); ?>">
                                 <td><i class="ti-layout-grid4-alt"></i></td>
                                 <td data-id="<?php echo e($i); ?>">
                                    <video width="400" controls>
                                      <source src="<?php echo e(asset('public/upload/video').'/'.$dr->video); ?>" id="video_here<?php echo e($i); ?>" >
                                    </video>
                                    <input type="hidden" name="image_real[]" value="<?php echo e($dr->video); ?>" id="video_here<?php echo e($i); ?>"/>
                                    <input type="hidden" name="thumbreal[]" id="thumbreal<?php echo e($i); ?>" value="<?php echo e($dr->thumbnail); ?>">
                                    <input type="hidden" name="thumbimgdata[]" id="thumbimgdata<?php echo e($i); ?>" value="">
                                   <textarea class="form-control" style="margin-bottom:15px;margin-top:10px" id="stepdesc"  name="stepdetail[]"><?=isset($dr->description)?$dr->description:"" ?></textarea>
                                   <input type="file"  id="files<?php echo e($i); ?>" class="file_multi_video form-control" name="files[]" onchange="uploadalt('<?php echo e($i); ?>')" accept="video/*" placeholder="" >
                                   
                                 </td>
                                 
                                 <td>
                                    <button class="btn btn-danger" onclick="removerow('<?php echo e($i); ?>','step_')"><i class="fa fa-trash f-s-25"></i></button>
                                 </td>
                              </tr>

                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php else: ?>
                                <tr id="step_1">
                                 <td><i class="ti-layout-grid4-alt"></i></td>
                                 <td data-id="1">
                                    <video width="400" controls>
                                      <source src="#" id="video_here1" >
                                    </video>
                                    <input type="hidden" name="image_real[]" value=""/> <!-- file_multi_video --> 
                                     <input type="hidden" name="thumbreal[]" id="thumbreal<?php echo e($i); ?>">
                                    <input type="hidden" name="thumbimgdata[]" id="thumbimgdata<?php echo e($i); ?>">
                                   <textarea class="form-control" style="margin-bottom:15px;margin-top:10px" id="stepdesc" name="stepdetail[]"></textarea>
                                   <input type="file" required id="files1" class="form-control" name="files[]" onchange="uploadalt('1')" accept="video/*" placeholder="" >
                                   <input type="hidden" name="image_real1" value=""/>
                                 </td>
                                 
                                 <td>
                                    <button class="btn btn-danger" onclick="removerow(1,'step_')"><i class="fa fa-trash f-s-25"></i></button>
                                 </td>
                              </tr>
                              <?php endif; ?>
                             
                              <input type="hidden" name="totalstep" id="totalstep" value="<?php echo e($i); ?>">
                           </tbody>
                        </table>
                        <button type="button" class="btn btn-outline-secondary fleft" onclick="addsteprow()">Add New Row</button>
                        <div class="form-row" style="float:right" >
                            <?php if(Session::get("is_demo")==1): ?>
                                  <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                    <?php echo e(__('messages.Save')); ?>  
                                  </button>
                                <?php else: ?>
                              <button  type="submit"  class="btn btn-primary"><?php echo e(__('messages.Save')); ?></button>
                              <?php endif; ?>
                         </div>
                         </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- .animated -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\recipeking\resources\views/admin/recipe/add.blade.php ENDPATH**/ ?>