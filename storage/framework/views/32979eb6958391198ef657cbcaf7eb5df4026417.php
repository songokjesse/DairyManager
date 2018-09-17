<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="col-md-4 control-label"><?php echo e('Name'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($animal->name) ? $animal->name : ''); ?>" required>
        <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('Breed') ? 'has-error' : ''); ?>">
    <label for="Breed" class="col-md-4 control-label"><?php echo e('Breed'); ?></label>
    <div class="col-md-6">
        <select name="breed" class="form-control" id="Breed" >
    <?php $__currentLoopData = json_decode('{"friesian":"Friesian","ayrshire":"Ayrshire","guernsey":"Guernsey","jersey":"Jersey"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($animal->breed) && $animal->breed == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
        <?php echo $errors->first('Breed', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('calves') ? 'has-error' : ''); ?>">
    <label for="calves" class="col-md-4 control-label"><?php echo e('Calves'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="calves" type="number" id="calves" value="<?php echo e(isset($animal->calves) ? $animal->calves : ''); ?>" required>
        <?php echo $errors->first('calves', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('lastCalvingDate') ? 'has-error' : ''); ?>">
    <label for="calves" class="col-md-4 control-label"><?php echo e('Last Calving Date'); ?></label>
    <div class="col-md-6">
        <input class="form-control" id="datepicker" name="lastCalvingDate" value="<?php echo e(isset($animal->lastCalvingDate) ? $animal->lastCalvingDate : ''); ?>" required>
        <?php echo $errors->first('lastCalvingDate', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Create'); ?>">
    </div>
</div>
