

<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/jakis.css')); ?>" />

    <link href="twest" rel="stylesheet">
</head>
</div>

<header class="page-header gradient" style="padding-top:120px" >
    <div class="container">
        <div class="container position-relative">
         <div class="row align-items-center justify-content-center">
                <div class="col-md-5">
                    <h2>Strona ZeroWaste</h2>
                    <p>
                      W dzisiejszych czasach ludzie marnują dużo żywności. Celem tej strony jest
                      rozwiązanie tego problemu. Ta aplikacja internetowa ma na celu pomóc ludziom
                      ugotować coś lub stworzyć danie z niczego, tak aby produkty żywnościowe nie marnowały się.
                      Ma to na celu ułatwić ludziom przygotować posiłek bez marnowania czasu na zastawianie się
                      co z dostępnych w lodówce produktów mogą przygotować. Problem z marnowaniem żywności
                      jest głośno poruszany od kilku lat, a nasz projekt może przyczynić się do tego, aby przynajmniej
                      trochę ten problem zniwelować. Jest skierowany do wszystkich ludzi, ponieważ tematem
                      przewodnim jest baza przepisów kulinarnych, a temat zero waste jest jedynie dodatkiem, do
                      którego zachęcamy naszych użytkowników, lecz nie zmuszamy.
                    </p>
                    <!-- <button type="button" class="btn btn-dark btn-lg">Przeglądaj przepisy</button> -->

                  <a  href="<?php echo e(route('register')); ?>"class="btn btn-dark btn-lg">Dołącz do nas</a>
                </div>
                <div class="col-md-5"><img src="<?php echo e(asset('uploads/recipes/Chef_Monochromatic.png')); ?>" alt="" srcset=""></div>

            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#fff" fill-opacity="1" d="M0,224L48,197.3C96,171,192,117,288,96C384,75,480,85,576,90.7C672,96,768,96,864,101.3C960,107,1056,117,1152,106.7C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</header>

<body>
    <div class="bc-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!-- slider 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-julie-aagaard-2097090.jpg')); ?>" alt="First slide"></div>
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-daria-shevtsova-704569.jpg')); ?>" alt="First slide"></div>
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-william-choquette-2641886.jpg')); ?>" alt="First slide"></div>
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-daria-shevtsova-1580466.jpg')); ?>" alt="First slide"></div>

                    </div>

                </div>

                <!-- koniec slider 1 -->

                <!-- slider 2 -->
                <div class="carousel-item">
                    <div class="row" class="zdjecia-slider">
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-julie-aagaard-2097090.jpg')); ?>" alt="First slide"></div>
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-daria-shevtsova-704569.jpg')); ?>" alt="First slide"></div>
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-william-choquette-2641886.jpg')); ?>" alt="First slide"></div>
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-daria-shevtsova-1580466.jpg')); ?>" alt="First slide"></div>

                    </div>
                </div>
                <!-- koniec slider 2 -->
                <div class="carousel-item">
                    <div class="row" class="zdjecia-slider">
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-julie-aagaard-2097090.jpg')); ?>" alt="First slide"></div>
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-daria-shevtsova-704569.jpg')); ?>" alt="First slide"></div>
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-william-choquette-2641886.jpg')); ?>" alt="First slide"></div>
                        <div class="col-3"><img class="d-block w-100 zdjecia-slider" src="<?php echo e(asset('uploads/recipes/pexels-daria-shevtsova-1580466.jpg')); ?>" alt="First slide"></div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Poprzedni</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Następny</span>
            </a>
        </div>
        </div>
        <section class="feature gradient">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,288L48,288C96,288,192,288,288,256C384,224,480,160,576,117.3C672,75,768,53,864,58.7C960,64,1056,96,1152,90.7C1248,85,1344,43,1392,21.3L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6"><img src="<?php echo e(asset('uploads/recipes/Chef_Two Color.png')); ?>" alt="" srcset=""></div>

                    <div class="col-md-6">
                        <h1 class="my-3">Nasza misja to:</h1>
                        <!--<p>Dlaczego powstała ta strona</p>-->
                        <ul>
                            <li>Zbudowanie potężnej bazy z przepisami kulinarnymi</li>
                            <li>Zapobieganie marnowania żywności</li>
                            <li>Zaoszczędzenie czasu naszych użytkowników</li>
                            <li>Odpowiedź na pytanie <B>"A CO BY TU DZISIAJ UGOTOWAĆ"</B></li>
                        </ul>
                    </div>

                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,288L48,288C96,288,192,288,288,256C384,224,480,160,576,117.3C672,75,768,53,864,58.7C960,64,1056,96,1152,90.7C1248,85,1344,43,1392,21.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </section>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bukow\Documents\GitHub\zeroWaste\example\resources\views/pages/about.blade.php ENDPATH**/ ?>