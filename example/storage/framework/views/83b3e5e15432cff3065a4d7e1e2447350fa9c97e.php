

<?php $__env->startSection('content'); ?>

<div class="row">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h1>Przepisy</h1>
           </div>
           <div class="pull-right">
               <center><a class="btn btn-warning" href="<?php echo e(route('users.create')); ?>" title="Dodaj przepis">Dodaj nowego użytkownika</a></center><br>
           </div>
       </div>
   </div>

   <?php if($message = Session::get('success')): ?>
       <div class="alert alert-success">
           <p><?php echo e($message); ?></p>
       </div>
   <?php endif; ?>

<table class="table table-bordered table-responsive-lg">
  <thead>
    <tr>
      <th scope="col">Nazwa użytkownika</th>
      <th scope="col">Hasło todo</th>
      <th scope="col">Adres E-Mail</th>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Data urodzenia</th>
      <th scope="col">Płeć</th>
      <th scope="col">Rola</th>
      <th width="240px">Akcja</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($user->title); ?></td>
      <td>
        <img src="<?php echo e(asset('uploads/users/'.$user->photo)); ?>" width="200px" height = "200px" alt="">
      </td>
      <td><?php echo e($user->products); ?></td>
      <td><?php echo e($user->food_processors); ?></td>
      <td><?php echo e($user->time); ?> min</td>
      <td><?php echo e($user->level); ?>/5</td>
      <td></td>
      <td></td>
      <td>
      <form action="<?php echo e(route('users.destroy', $user->user_id)); ?>" method="POST">

                        <a href="<?php echo e(route('users.show', $user->user_id)); ?>" title="wyświetl" class="btn btn-success">Wyświetl</a>

                        <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->role=='admin'): ?>
                        <a href="<?php echo e(route('users.edit', $user->user_id)); ?>" title="edytuj" class="btn btn-primary">Edytuj</a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" title="delete" title="usuń" class="btn btn-danger">Usuń</button>

                        </button>
                        <?php endif; ?>
                        <?php endif; ?>
                    </form>
                  </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php echo $users->links("pagination::bootstrap-4"); ?>-

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\zeroWaste1\example\resources\views/users/users.blade.php ENDPATH**/ ?>