<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    
    
    <?php $__env->startSection('fincontent'); ?>
	    <div class="form-group col-md-5">
            <label for="amount">Payment Amount </label>
            <input type="number" name="amount" id="amount" class="form-control" value="" onchange="update()">
        </div>

        <div class="form-group col-md-5">
            <label for="rate">Exchange Rate</label>
            <input type="number" step="0.01" class="form-control" id="rate" name="rate" value="1" onchange="update()">
        </div>

        <div class="form-group col-md-10">
            <label for="total">Total Amount Paid (GHS)</label>
            <input type="number" class="form-control" id="total" name="total" readonly>
       </div>
    <?php $__env->stopSection(); ?>

</html>
<?php /**PATH D:\Lavarel\started\resources\views/welcome.blade.php ENDPATH**/ ?>