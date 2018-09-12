<div class="form-group <?php echo e($errors->has('animal_id') ? 'has-error' : ''); ?>">
    <label for="animal_id" class="col-md-4 control-label"><?php echo e('Animal Name'); ?></label>
    <div class="col-md-6">
        <select class="form-control" required name="animal_id">
        <option selected disabled>-- Select Cow Name -- </option>
            <?php $__currentLoopData = $animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($animal->id); ?>"><?php echo e($animal->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        
        <?php echo $errors->first('animal_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('amount') ? 'has-error' : ''); ?>">
    <label for="amount" class="col-md-4 control-label"><?php echo e('Amount'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="amount" type="text" id="amount" value="<?php echo e(isset($production->amount) ? $production->amount : ''); ?>" required>
        <?php echo $errors->first('amount', '<p class="help-block">:message</p>'); ?>

    </div>
</div>
    <div class="form-group <?php echo e($errors->has('MilkingSession') ? 'has-error' : ''); ?>">
    <label for="MilkingSession" class="col-md-4 control-label"><?php echo e('Milking Session'); ?></label>
    <div class="col-md-6">
       <select name="MilkingSession" required class="form-control">
           <option selected disabled>-- Select Milking Session -- </option>
           <option>Morning</option>
           <option>Afternoon</option>
       </select>
        <?php echo $errors->first('MilkingSession', '<p class="help-block">:message</p>'); ?>

    </div>
</div>
  <div class="form-group">
    <div class="col-md-6">
        <input class="form-control" name="user_id" type="hidden" id="user_id" value="<?php echo e(Auth::user()->id); ?>" >
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Create'); ?>">
    </div>
</div>

