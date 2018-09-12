<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-9">
        <div class="card">
            <div class="card-header">Show Role</div>
            <div class="card-body">

                <a class="btn btn-primary btn-sm" href="<?php echo e(route('roles.index')); ?>"> Back</a>
<br>
                <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <br>
                <strong>Name:</strong>
                <?php echo e($role->name); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong>
                <ol>
                <?php if(!empty($rolePermissions)): ?>
                    <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <li> <label class="label label-success"><?php echo e($v->name); ?>,</label></li>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>
                        </ol>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>