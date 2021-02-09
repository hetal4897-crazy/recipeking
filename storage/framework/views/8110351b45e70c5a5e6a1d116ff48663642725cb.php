<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Reviews')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><?php echo e(__('messages.Reviews')); ?></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><?php echo e(__('messages.Reviews')); ?></li>
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
                                            <th><?php echo e(__('messages.Id')); ?></th>
                                            <th><?php echo e(__('messages.Recipe Name')); ?></th>
                                            <th><?php echo e(__('messages.User Name')); ?></th>
                                            <th><?php echo e(__('messages.Reviews')); ?></th>
                                            <th><?php echo e(__('messages.Ratting')); ?></th>
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

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\recipeking\resources\views/admin/review/default.blade.php ENDPATH**/ ?>