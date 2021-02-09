
<?php $__env->startSection('title'); ?>
 <?php echo e(__('messages.Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?php echo e(__('messages.Dashboard')); ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><?php echo e(__('messages.Dashboard')); ?></li>
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
                                <div class="stat-text"><?php echo e(__('messages.Total Category')); ?></div>
                                <div class="stat-digit"><?=$cateogry?></div>
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
                                <div class="stat-text"><?php echo e(__('messages.Total Recipe')); ?></div>
                                <div class="stat-digit"><?=$recipe?></div>
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
                                <div class="stat-text"><?php echo e(__('messages.Number Of User')); ?></div>
                                <div class="stat-digit"><?=$totaluser?></div>
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
                                <div class="stat-text"><?php echo e(__('messages.Total Reviews')); ?></div>
                                <div class="stat-digit"><?=$review?></div>
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
               <i class="ti-book" aria-hidden="true"></i><?php echo e(__('messages.Today Recipe')); ?>

               <a class="btn btn-primary btn-flat m-b-30 m-t-30 elec textorder" href="<?php echo e(url('recipe')); ?>"><?php echo e(__('messages.Show All')); ?> </a>
            </h4>

            <div class="table-responsive dtdiv">
               <table id="latestrecipeTable" class="table table-striped dttablewidth">
                  <thead>
                     <tr>
                        <th><?php echo e(__('messages.Id')); ?></th>
                        <th><?php echo e(__('messages.Recipe Name')); ?></th>
                        <th><?php echo e(__('messages.Create Name')); ?></th>
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
               <i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo e(__('messages.latest review')); ?>

                <a class="btn btn-primary btn-flat m-b-30 m-t-30 elec textorder" href="<?php echo e(url('review')); ?>"><?php echo e(__('messages.Show All')); ?> </a>
            </h4>
            <div class="table-responsive dtdiv">
               <table id="lestestreview" class="table table-striped dttablewidth">
                  <thead>
                     <tr>
                        <th><?php echo e(__('messages.Id')); ?></th>
                        <th><?php echo e(__('messages.Recipe Name')); ?></th>
                        <th><?php echo e(__('messages.Create Name')); ?></th>
                        <th><?php echo e(__('messages.Ratting')); ?></th>
                     </tr>
                  </thead>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
         <!-- .content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/y31xhhiebz36/public_html/recipeking/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>