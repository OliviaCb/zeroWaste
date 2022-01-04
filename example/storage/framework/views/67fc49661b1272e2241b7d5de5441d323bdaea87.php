

<?php $__env->startSection('content'); ?>

<div class="row">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h1>Przepisy</h1>
           </div>
           <div class="pull-right">
               <center><a class="btn btn-warning" href="<?php echo e(route('users.create')); ?>" title="Dodaj przepis">Dodaj nowy przepis</a></center><br>
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
         <!-- <th scope="col">Hasło</th> -->
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
       <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>

         <!-- <td>
           <img src="<?php echo e(asset('uploads/users/'.$user->photo)); ?>" width="200px" height = "200px" alt="">
         </td> -->
         <td><?php echo e($user->name); ?></td>
         <!-- <td>TODO</td> -->
         <!-- <td><?php echo e($user->password); ?></td> -->
         <td><?php echo e($user->email); ?></td>
         <td><?php echo e($user->firstname); ?></td>
         <td><?php echo e($user->surname); ?></td>
         <td><?php echo e($user->birthday); ?></td>
         <td>
           <?php if($user->gender=='male'): ?>
             Mężczyzna
           <?php endif; ?>
           <?php if($user->gender=='female'): ?>
             Kobieta
           <?php endif; ?>
           <?php if($user->gender=='other'): ?>
             Inna
           <?php endif; ?>
         </td>
         <td>
           <?php if($user->role=='admin'): ?>
             Administrator
           <?php endif; ?>
           <?php if($user->role!='admin'): ?>
             Użytkownik
           <?php endif; ?>
         </td>
         <td>
      <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST">

                        <a href="<?php echo e(route('users.show', $user->id)); ?>" title="wyświetl" class="btn btn-success">Wyświetl</a>
                        <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->role=='admin' or Auth::user()->name==$user->owner): ?>
                        <a href="<?php echo e(route('users.edit', $user->id)); ?>" title="edytuj" class="btn btn-primary">Edytuj</a>

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\zeroWaste1\example\resources\views/users/search.blade.php ENDPATH**/ ?>