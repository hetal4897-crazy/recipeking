<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.View Recipe')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.View Recipe')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class=""><a href="<?php echo e(url('recipe')); ?>"><?php echo e(__('messages.Recipe')); ?></a></li>
               <li class="active"><?php echo e(__('messages.View Recipe')); ?></li>
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
                            <img src="<?php echo e(asset('public/upload/recipe').'/'.$data->image); ?>">
                        </div>
                        <div class="col-md-8">
                            <label><b><?php echo e(__('messages.Name')); ?>:-</b></label><?php echo e($data->name); ?></br>
                            <label><b><?php echo e(__('messages.Category')); ?>:-</b></label><?php echo e($data->category_id); ?></br>
                            <label><h4><?php echo e(__('messages.Prepation time')); ?></h4></label>
                            <table class="table table-striped table-bordered">
                                  <tr>
                                    <th><?php echo e(__('messages.Total Time')); ?></th>
                                    <th><?php echo e(__('messages.Prep Time')); ?></th>
                                    <th><?php echo e(__('messages.Cook Time')); ?></th>
                                  </tr>
                                  <tr>
                                    <td><?php echo e($data->total_time); ?></td>
                                    <td><?php echo e($data->prep_time); ?></td>
                                    <td><?php echo e($data->cook_time); ?></td>
                                  </tr>
                            </table>
                        </div>
                  </div>
                  <div class="col-md-12" style="margin-top:25px;">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php echo e(__('messages.Ingredient Info')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(__('messages.Nutrition Info')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?php echo e(__('messages.Step By Step')); ?></a>
                                    </li>
                     </ul>
                     <div class="tab-content pl-3 p-1" id="myTabContent">
                                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                         <table class="table table-striped table-bordered" style="margin-top:25px">
                                            <thead>
                                              <tr>
                                                 <th><?php echo e(__('messages.Name')); ?></th>
                                                 <th><?php echo e(__('messages.weight')); ?></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($data->Ingredientinfodata)&&count($data->Ingredientinfodata)!=0): ?>
                                                <?php $__currentLoopData = $data->Ingredientinfodata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                      <td><?php echo e($dn->name); ?></td>
                                                      <td><?php echo e($dn->weight); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </tbody>
                                         </table>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <table class="table table-striped table-bordered" style="margin-top:25px">
                                            <thead>
                                              <tr>
                                                 <th><?php echo e(__('messages.Name')); ?></th>
                                                 <th><?php echo e(__('messages.Value')); ?></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($data->NutritionInfodata)&&count($data->NutritionInfodata)!=0): ?>
                                                <?php $__currentLoopData = $data->NutritionInfodata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                      <td><?php echo e($dn->name); ?></td>
                                                      <td><?php echo e($dn->value); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </tbody>
                                         </table>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                         <table class="table table-striped table-bordered" style="margin-top:25px">
                                            <thead>
                                              <tr>
                                                 <th><?php echo e(__('messages.Video')); ?></th>
                                                 <th><?php echo e(__('messages.Description')); ?></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($data->RecipeStepdata)&&count($data->RecipeStepdata)!=0): ?>
                                                <?php $__currentLoopData = $data->RecipeStepdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                      <td><video width="200" controls>
                                      <source src="<?php echo e(asset('public/upload/video').'/'.$dn->video); ?>" id="video_here" >
                                    </video></td>
                                                      <td><?php echo e($dn->description); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\recipeking\resources\views/admin/recipe/view.blade.php ENDPATH**/ ?>