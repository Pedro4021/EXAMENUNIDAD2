

<?php $__env->startSection('titulo'); ?>
Informacion Personal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div class="row gtr-150">
							<div class="col-8 col-12-narrower">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<header>
												<h3>Informacion:</h3>
											</header>
											
											<p>

											<h3>Nombre: <?php echo e($informacion->nombre); ?></h3>
</p>
<p>
<h3>Apellido Paterno: <?php echo e($informacion->apellido_paterno); ?></h3>
	
</p>
<p>
<h3>Apellido Materno: <?php echo e($informacion->apellido_materno); ?></h3>
	
</p>
<p>
<h3>Edad: <?php echo e($informacion->edad); ?></h3>
	
</p>
<p>
<h3>Correo: <?php echo e($informacion->correo); ?></h3>
	
</p>

											
										</section>
										

							</div>
							<div class="col-4 col-8-narrower imp-narrower">

								<!-- Content -->
									<article id="content">
										
										<a href="#" class="image featured"><img src="images/less.jpg" alt="" /></a>
										
							</div>
						</div>


		

		<?php $__env->stopSection(); ?>

<?php echo $__env->make('blog.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Toshiba\Desktop\ur\Nueva carpeta\blog\resources\views/blog/index.blade.php ENDPATH**/ ?>