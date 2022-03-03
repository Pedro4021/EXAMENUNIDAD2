
<?php $__env->startSection('titulo'); ?>
<h1> SISTEMAS DE DE COMPUTADORAS  </h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<span class="image main"><img src="images/laptop-g100b33690_1280.jpg" alt="" /></span>
								<h2>¿Qué son los sistemas computacionales?</h2>
								<p>    Es un conjunto de dispositivos (Hardware) que interaccionan mediante conjunto de Instrucciones (Software) para logra un objetivo y personas (Usuario) que producen la información

								</p>
								
								
							
								
							<header class="major">
								<h2>TIPOS DE SISTEMAS COMPUTACIONALES </h2>
							</header>
							<ul class="features">
								<li>
									<span class="image"><img src="images/scentrai.jpeg"  /></span>
									<h3>SISTEMAS CENTRALIZADOS</h3>
									<footer class="major">
										<ul class="actions special">
											<li><a href="<?php echo e(route('centralizado')); ?>" class="button">Leer mas</a></li>
										</ul>
									</footer>
								</li>
								<li>
									<span class="image"><img src="images/sd.jpeg"  /></span>
									<h3>SISTEMAS DEDICADOS</h3>
									
									<footer class="major">
										<ul class="actions special">
											<li><a href="<?php echo e(route('dedicados')); ?>" class="button">leer mas </a></li>
										</ul>
									</footer>
								</li>
						

							</section>

					</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('boton'); ?>
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="<?php echo e(route('hola')); ?>" class="button">Volver</a></li>
							</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layout.templateCOPU', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Toshiba\Desktop\ur\Nueva carpeta\blog\resources\views/blog/COMPUTADORAS.blade.php ENDPATH**/ ?>