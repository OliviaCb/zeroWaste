

<?php $__env->startSection('content'); ?>

<h1>Przepisy</h1>

<!--tutaj powstaje wyswietlanie przepisów-->

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tytuł</th>
      <th scope="col">Zdjęcie</th>
      <th scope="col">Składniki</th>
      <th scope="col">Urządzenia kuchenne</th>
      <th scope="col">Opis przygotowania</th>
      <th scope="col">Czas przygotowania</th>
      <th scope="col">Trudność przygotowania</th>
      <th scope="col">Sprawdź przepis</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($recipe->recipe_id); ?></th>
      <td><?php echo e($recipe->title); ?></td>
      <td><?php echo e($recipe->photo); ?></td>
      <td><?php echo e($recipe->products); ?></td>
      <td><?php echo e($recipe->food_processors); ?></td>
      <td><?php echo e($recipe->description); ?></td>
      <td><?php echo e($recipe->time); ?> min</td>
      <td><?php echo e($recipe->level); ?>/5</td>
      <!--<td><a href=\'show.php?id=<?php echo e($recipe->recipe_id); ?>' class="btn btn-secondary">Sprawdź</a></td>-->
      <td><a href=\show class="btn btn-secondary">Sprawdź</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<!--zakończenie wyświetlania przepisów-->
<!--
<?php if(count($recipes)>1): ?>
<?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="well">
    <h3><?php echo e($recipe->title); ?></h3>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>

<?php endif; ?>-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bukow\Documents\GitHub\zeroWaste\example\resources\views/recipes/recipes.blade.php ENDPATH**/ ?>