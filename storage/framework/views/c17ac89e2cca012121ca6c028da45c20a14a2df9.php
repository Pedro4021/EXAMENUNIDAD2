

<?php $__env->startSection('titulo'); ?>
Informacion Escolar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<a href="#" class="image featured"><img src="images/edificio 1.png" alt="" /></a>
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
<h3>Matricula: <?php echo e($informacion->matricula); ?></h3>
	
</p>
<p>
<h3>Grupo: <?php echo e($informacion->grupo); ?></h3>

	
</p>
<p>

<h3>Carrera: <?php echo e($informacion->carrera); ?></h3>
</p>
<p>
<h3>Cuatrimestre: <?php echo e($informacion->Cuatrimestre); ?></h3>

</p>
<p>
<h3>Turno: <?php echo e($informacion->turno); ?></h3>

</p>
<p>
<h3>Correo: <?php echo e($informacion->correo); ?></h3>
	
</p>


											
						

<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Toshiba\Desktop\ur\Nueva carpeta\blog\resources\views/blog/informacionescolar.blade.php ENDPATH**/ ?>