


<?php $__env->startSection('content'); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <div class="row" style="padding-top:120px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1> <?php echo e($user->name); ?></h1>
            </div>
        </div>
    </div>
    <!-- <dl class="row">
      <dt class="col-sm-3">Hasło</dt>
      <dd class="col-sm-9">todo</dd>
      <HR NOSHADE> -->

      <!-- <dt class="col-sm-3">Zdjęcie</dt>
      <dd class="col-sm-9"><img src="<?php echo e(asset('uploads/users/'.$user->photo)); ?>" width="300px" height = "300px" alt=""></dd>
      <HR NOSHADE> -->

      <dt class="col-sm-3">Adres E-mail</dt>
      <dd class="col-sm-9"><?php echo e($user->email); ?></dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Imię</dt>
      <dd class="col-sm-9"><?php echo e($user->firstname); ?></dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Nazwisko</dt>
      <dd class="col-sm-9"><?php echo e($user->surname); ?></dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Płeć</dt>
      <dd class="col-sm-9">
        <?php if($user->gender=='male'): ?>
                Mężczyzna
              <?php endif; ?>
              <?php if($user->gender=='female'): ?>
                Kobieta
              <?php endif; ?>
              <?php if($user->gender=='other'): ?>
                Inna
              <?php endif; ?>
      </dd>
      <HR NOSHADE>
      <dt class="col-sm-3 text-truncate">Data urodzenia</dt>
      <dd class="col-sm-9"><?php echo e($user->birthday); ?></dd>
      <HR NOSHADE>

      <dt class="col-sm-3 text-truncate">Rola</dt>
      <dd class="col-sm-9">
        <?php if($user->role=='admin'): ?>
          Administrator
        <?php endif; ?>
        <?php if($user->role!='admin'): ?>
          Użytkownik
        <?php endif; ?>
      </dd>
      <HR NOSHADE>
        <dt class="col-sm-3 text-truncate">Data utworzenia konta</dt>
        <dd class="col-sm-9"><?php echo e($user->created_at); ?></dd>
        <HR NOSHADE>
          <dt class="col-sm-3 text-truncate">Data modyfikacji konta</dt>
          <dd class="col-sm-9"><?php echo e($user->updated_at); ?></dd>
        </dl>
        </dl>
      </dd>
    </dl>
    <br><br>
    <div class="pull-right">
        <a class="btn btn-primary" href="<?php echo e(route('users.index')); ?>" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bukow\Documents\GitHub\zeroWaste\example\resources\views/users/show.blade.php ENDPATH**/ ?>