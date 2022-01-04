

<?php $__env->startSection('content'); ?>

                     <form role="search" class="search-form" type="get" action="<?php echo e(url('/usersearch')); ?>">
                      <label>
                      <input style="margin-left:10px" class="form-control" name="query" type="serach" placeholder="Wyszukaj użytkownika po nazwie">
                    </label>
                    <button style="margin-left:10px" class="btn btn-outline-secondary" type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                        </button>
                    </form>

<div class="row">
       <div class="col-lg-12 margin-tb">
           <div class="pull-left">
               <h1>Użytkownicy</h1>
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
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <?php if(Auth::user()->role=='admin'): ?>
                        <a href="<?php echo e(route('users.edit', $user->id)); ?>" title="edytuj" class="btn btn-primary">Edytuj</a>

                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>

                                    <button type="submit" title="delete" title="usuń" class="btn btn-danger">Usuń</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\zeroWaste1\example\resources\views/users/users.blade.php ENDPATH**/ ?>