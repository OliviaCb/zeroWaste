

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dodaj nowy przepis</h2>
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
    <form action="<?php echo e(route('recipes.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tytuł:</strong>
                    <input type="text" name="title" minlength="5" class="form-control" placeholder="Tytuł">
                </div>
            </div>   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zdjęcie: (powinno być kwadratowe do poprawnego wyświetlania)</strong>
                    <input type="file" name="photo" required class="form-control" placeholder="Zdjęcie">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Produkty:</strong>
                    <textarea class="form-control" minlength="5" style="height:50px" name="products"
                        placeholder="Produkty"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maszyny kuchenne:</strong>
                    <input type="text" name="food_processors" requiered minlength="5" class="form-control" placeholder="Maszyny kuchenne">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Opis przygotowania:</strong>
                    <input type="text" name="description" minlength="5" class="form-control" placeholder="Opis przygotowania">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Czas przygotowania w minutach:</strong>
                    <input type="number" name="time" required class="form-control" placeholder="Czas przygotowania w minutach">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Poziom trudności w skali od 1 do 5:</strong>
                    <input type="text" name="level" class="form-control" pattern= "[1-5]{1}" placeholder="Poziom trudności w skali od 1 do 5">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-dark">Zapisz</button>
            </div>
        </div>
        <br><br>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('recipes.index')); ?>" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\zeroWaste1\example\resources\views/recipes/create.blade.php ENDPATH**/ ?>