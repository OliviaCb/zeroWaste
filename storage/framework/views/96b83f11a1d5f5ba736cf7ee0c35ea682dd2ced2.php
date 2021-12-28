

<?php $__env->startSection('content'); ?>

<h1>Przepisy</h1>
<?php if(count($recipes)>1): ?>
<?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="well">
    <h3><?php echo e($recipe->title); ?></h3>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>

<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Oliwia\rafal.borowczyk\example\resources\views/recipes/recipes.blade.php ENDPATH**/ ?>