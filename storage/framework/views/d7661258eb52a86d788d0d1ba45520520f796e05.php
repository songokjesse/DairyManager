<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                   <a href="#">
                                       <div class="card text-white bg-success mb-3" style="max-width: 18rem;">

                                        <div class="card-header">Users</div>
                                        <div class="card-body">
                                            <h5 class="card-title">     <span><i class="fas fa-users fa-4x f-s-40 color-danger"></i></span></h5>
                                              </div>
                                    </div>
                                   </a>
                                </div>
                                <div class="col-sm">
                                    <a href="#">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                        <div class="card-header"> Animals</div>
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-chess-knight fa-4x"></i>

                                                </h5>
                                              </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-sm">
                                    <a href="#">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Production</div>
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-database fa-4x"></i>

                                            </h5>
                                            </div>
                                    </div>
                                    </a>
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