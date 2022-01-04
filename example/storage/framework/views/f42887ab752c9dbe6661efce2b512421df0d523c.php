

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edycja konta użytkownika</h2>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST" enctype="multipart/form-data" >
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwa użytkownika:</strong>
                    <input type="text"  required name="name" class="form-control" value="<?php echo e($user->name); ?>" placeholder="Nick użytkownika">
                </div>
            </div>   <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <div class="form-group">
                    <strong>Zdjęcie: (powinno być kwadratowe do poprawnego wyświetlania)</strong>
                    <input type="file" name="photo" class="form-control" placeholder="Zdjęcie">
                </div> -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hasło:</strong>
                    <input type="password"  required class="form-control" value="<?php echo e($user->password); ?>"style="height:50px" name="password"
                        placeholder="Hasło" ></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adres E-mail:</strong>
                    <input type="email" required name="email" class="form-control" value="<?php echo e($user->email); ?>" placeholder="Adres E-mail">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imię:</strong>
                    <input type="text"  required name="firstname" class="form-control"  value="<?php echo e($user->firstname); ?>" placeholder="Imię">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwisko:</strong>
                    <input type="text"  required name="surname" class="form-control" value="<?php echo e($user->surname); ?>" placeholder="Nazwisko">
                </div>
            </div>

                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data urodzenia:</strong>
                    <!-- <input type="date" name="birthday" class="form-control"  > -->
                    <input id="birthday" required type="date" min="<?php echo date('Y-m-d', strtotime('-150 year')); ?>" max="<?php echo date("Y-m-d"); ?>" value="<?php echo e($user->birthday); ?>" class="form-control <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="birthday" value="<?php echo e(old('birthday')); ?>" required autocomplete="birthday" autofocus>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="gender" required class="col-md-4 col-form-label text-md-right"><?php echo e(__('Płeć')); ?></label>
          <div class="form-check form-check-inline" >
              <?php if($user->gender=='male'): ?>
              <input class="form-check-input" checked type="radio" name="gender" value="male">
              <label class="form-check-label" for="male">Mężczyzna</label>
              <?php else: ?>
              <input class="form-check-input"type="radio" name="gender" value="male">
              <label class="form-check-label" for="male">Mężczyzna</label>
              <?php endif; ?>
          </div>
          <div class="form-check form-check-inline">
              <?php if($user->gender=='female'): ?>
              <input class="form-check-input" checked type="radio" name="gender" value="female">
              <label class="form-check-label" for="female">Kobieta</label>
              <?php else: ?>
              <input class="form-checask-input" type="radio" name="gender" value="female">
              <label class="form-check-label" for="female">Kobieta</label>
              <?php endif; ?>
          </div>
<div class="form-check form-check-inline">
              <?php if($user->gender=='other'): ?>
              <input class="form-check-input" checked  type="radio" name="gender" value="other">
              <label class="form-check-label" for="other">Inna</label>
              <?php else: ?>
              <input class="form-check-input" type="radio" name="gender" value="other">
              <label class="form-check-label" for="other">Inna</label>
              <?php endif; ?>
          </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="role" required class="col-md-4 col-form-label text-md-right"><?php echo e(__('Rola')); ?></label>
          <div class="form-check form-check-inline" >
              <?php if($user->role=='admin'): ?>
              <input class="form-check-input" checked type="radio" name="role" value="admin">
              <label class="form-check-label" for="admin">Administrator</label>
              <?php else: ?>
              <input class="form-check-input" type="radio" name="role" value="admin">
              <label class="form-check-label" for="admin">Administrator</label>
              <?php endif; ?>
          </div>
          <div class="form-check form-check-inline">
              <?php if($user->role!='admin'): ?>
              <input class="form-check-input" checked type="radio" name="role" value="user">
              <label class="form-check-label" for="user">Użytkownik</label>
              <?php else: ?>
              <input class="form-check-input" type="radio" name="role" value="user">
              <label class="form-check-label" for="user">Użytkownik</label>
              <?php endif; ?>
          </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
        <br><br>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('users.index')); ?>" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\zeroWaste1\example\resources\views/users/edit.blade.php ENDPATH**/ ?>