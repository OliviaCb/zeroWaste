


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1> <?php echo e($recipe->title); ?></h1>
            </div>
        </div>
    </div>
    <dl class="row">
      <dt class="col-sm-3">Nazwa potrawy</dt>
      <dd class="col-sm-9"><?php echo e($recipe->title); ?></dd>
      <HR NOSHADE>

      <dt class="col-sm-3">Zdjęcie</dt>
      <dd class="col-sm-9"><img src="<?php echo e(asset('../public/uploads/recipes/'.$recipe->photo)); ?>" width="70px" height = "70px" alt=""></dd>
      <HR NOSHADE>

      <dt class="col-sm-3">Składniki</dt>
      <dd class="col-sm-9"><?php echo e($recipe->products); ?></dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Maszyny kuchenne</dt>
      <dd class="col-sm-9"><?php echo e($recipe->food_processors); ?></dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Czas przygotowania</dt>
      <dd class="col-sm-9"><?php echo e($recipe->time); ?> min</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Trudność przygotowania</dt>
      <dd class="col-sm-9"><?php echo e($recipe->level); ?>/5</dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Opisz przygotowania</dt>
      <dd class="col-sm-9"><?php echo e($recipe->description); ?></dd>
        </dl>
      </dd>
    </dl>
    <br><br>
    <div class="pull-right">
        <a class="btn btn-primary" href="<?php echo e(route('recipes.index')); ?>" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bukow\Documents\GitHub\zeroWaste\example\resources\views/recipes/show.blade.php ENDPATH**/ ?>