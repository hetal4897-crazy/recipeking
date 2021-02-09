<?php $__env->startSection('title'); ?>
 <?php echo e(__('messages.Change password')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Change password')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.Change password')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="row rowset" style="display:flex;justify-content: center;">
      <div class="col-lg-6">
         <div class="card">
            <div class="card-header">
               <strong class="card-title"><?php echo e(__('messages.Change password')); ?></strong>
            </div>
            <div class="card-body">
               <div id="pay-invoice">
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
                     <form action="<?php echo e(url('updatepassword')); ?>" method="post"  novalidate="novalidate" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>
                        <div class="form-group">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.Enter Current Password')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <input type="password" id="cpwd" placeholder="<?php echo e(__('messages.Enter Current Password')); ?>" class="form-control" name="cpwd" required="" onchange="checkcurrentpwdtest(this.value)" >
                        </div>
                        <div class="form-group">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.Enter New Password')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <input type="password" id="npwd" placeholder="<?php echo e(__('messages.Enter New Password')); ?>" class="form-control" name="npwd" required="" >
                        </div>
                        <div class="form-group">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.Re-enter New Password')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <input type="password" id="rpwd" placeholder="<?php echo e(__('messages.Re-enter New Password')); ?>" class="form-control" name="rpwd" onchange="changecheckboth(this.value)" required="">
                        </div>
                        <div class="form-group">

                            <?php if(Session::get("is_demo")==1): ?>
                                  <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-lg btn-info btn-block">
                                    <?php echo e(__('messages.Update')); ?>
                                  </button>
                                <?php else: ?>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <?php echo e(__('messages.Update')); ?>

                                     </button>
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
<script type="text/javascript">
function changecheckboth(val){
                      var npwd=$("#npwd").val();
                      if(npwd!=val){
                        alert("<?php echo e(__('messages.New password and Re enter password must be same')); ?>");
                        $("#npwd").val("");
                        $("#rpwd").val("");
                      }
                    }
function checkcurrentpwdtest(val){
                         $.ajax( {
                             url: $("#url_lang").val()+"/samepwd"+"/"+val,
                             method:"get",
                             success: function( data ) {
                                if(data==0){
                                    alert("<?php echo e(__('messages.Please Enter Correct Password')); ?>");
                                    $("#cpwd").val("");
                                }
                             }
                         });
                      }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\recipeking\resources\views/admin/change_password.blade.php ENDPATH**/ ?>
