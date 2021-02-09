<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Recipe')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><?php echo e(__('messages.Recipe')); ?></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><?php echo e(__('messages.Recipe')); ?></li>
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
                            <?php if(Session::get("message")): ?>
                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                    <span class="badge badge-pill badge-success"><?php echo e(__('messages.Success')); ?></span>
                                    <?php echo e(Session::get("message")); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div style="margin-bottom:10px">
                                <a href="<?php echo e(url('saverecipe/0/1')); ?>"
                                   class="btn btn-primary"><?php echo e(__('messages.Add Recipe')); ?></a>
                            </div>
                            <table id="recipe_table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('messages.Id')); ?></th>
                                    <th><?php echo e(__('messages.Category')); ?></th>
                                    <th><?php echo e(__('messages.Recipe Name')); ?></th>
                                    <th><?php echo e(__('messages.Image')); ?></th>
                                    <th><?php echo e(__('messages.Create Name')); ?></th>
                                    <th><?php echo e(__('messages.Status')); ?></th>
                                    <th><?php echo e(__('messages.Action')); ?></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\recipeking\resources\views/admin/recipe/default.blade.php ENDPATH**/ ?>