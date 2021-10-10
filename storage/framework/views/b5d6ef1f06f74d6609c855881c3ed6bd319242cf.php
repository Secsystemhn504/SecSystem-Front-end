<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Inicio</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-warning card-outline">
                <div class="card-header">
                  <h5 class="m-0">Bienvenido</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Al sistema de servicios Empresariales Colon podras llevar control de informacion de la empresa esperamos sea de tu agrado.
                  </p>
                  <div class="inicio-logo" align="center">
                    <img src= "vendor/adminlte/dist/img/secsysteminicio.jpg"style="width:240px;">
                  </div>
                </div>
              </div>
              <div class="card card-warning card-outline">
                <div class="card-header">
                  <h5 class="m-0">Explora el Menu</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">Aqui podras ver todos los formularios y reportes de informacion que se ingresara este esta ubicado al lado izquierdo de tu pantalla.</p>
                </div>
              </div>
            <!-- /.col-md-6 -->
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>console.log('Hi!');</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto\resources\views/admin/index.blade.php ENDPATH**/ ?>