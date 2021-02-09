<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Cateogry')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?php echo e(__('messages.Cateogry')); ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><?php echo e(__('messages.Cateogry')); ?></li>
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
                            		<a href="" class="btn btn-primary" data-toggle="modal" data-target="#smallmodal"><?php echo e(__('messages.Add Category')); ?></a>
                            	</div>
                            	
                                <table id="category" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('messages.Id')); ?></th>
                                            <th><?php echo e(__('messages.Name')); ?></th>
                                            <th><?php echo e(__('messages.Icon')); ?></th>
                                            <th><?php echo e(__('messages.Action')); ?></th>
                                        </tr>
                                    </thead>                                   
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
        <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel"><?php echo e(__('messages.Add Category')); ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo e(url('addcategory')); ?>" method="post" enctype="multipart/form-data"> 
                                <?php echo e(csrf_field()); ?>

                            <div class="modal-body">
                                <div class="form-row">
                                    <label><?php echo e(__('messages.Name')); ?><span style="color:red">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="<?php echo e(__('messages.Enter Category Name')); ?>"/>
                                </div>
                                <div class="form-row">
                                    <label><?php echo e(__('messages.Icon')); ?><span style="color:red">*</span></label>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*" required />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('messages.Cancel')); ?></button>
                                   <?php if(Session::get("is_demo")==1): ?>
                                  <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                    <?php echo e(__('messages.Save')); ?>  
                                  </button>
                                <?php else: ?>
                                <button type="submit" class="btn btn-primary"><?php echo e(__('messages.Save')); ?></button>
                                <?php endif; ?>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                 <div class="modal fade" id="editcategory" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel"><?php echo e(__('messages.Edit Category')); ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo e(url('updatecategory')); ?>" method="post" enctype="multipart/form-data"> 
                                <?php echo e(csrf_field()); ?>

                            <div class="modal-body">
                                <input type="hidden" name="id" id="id" />
                                <input type="hidden" name="real_img" id="real_img" />
                                <div class="form-row">
                                    <label><?php echo e(__('messages.Name')); ?><span style="color:red">*</span></label>
                                    <input type="text" name="name" id="editname" class="form-control" required placeholder="<?php echo e(__('messages.Enter Category Name')); ?>"/>
                                </div>
                                <div class="form-row">
                                    <label><?php echo e(__('messages.Icon')); ?><span style="color:red">*</span></label>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*" />
                                    <img src="" style="width:100px;margin-top:15px" id="editimg"/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('messages.Cancel')); ?></button>
                                 <?php if(Session::get("is_demo")==1): ?>
                                  <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                    <?php echo e(__('messages.Save')); ?>  
                                  </button>
                                <?php else: ?>
                                <button type="submit" class="btn btn-primary"><?php echo e(__('messages.Save')); ?></button>
                                <?php endif; ?>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/y31xhhiebz36/public_html/recipeking/resources/views/admin/category/default.blade.php ENDPATH**/ ?>