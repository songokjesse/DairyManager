

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Animal: <b> <?php echo e($animal->name); ?> </b> | <a href="#">Gallary </a></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/animals')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/animals/' . $animal->id . '/edit')); ?>" title="Edit Animal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="<?php echo e(url('animals' . '/' . $animal->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Animal" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($animal->id); ?></td>
                                    </tr>
                                    <tr><th> Name </th><td> <?php echo e($animal->name); ?> </td></tr><tr><th> Breed </th><td> <?php echo e($animal->breed); ?> </td></tr><tr><th> Calves </th><td> <?php echo e($animal->calves); ?> </td></tr><tr><th>Last Calving Date </th><td> <?php echo e($animal->lastCalvingDate); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>