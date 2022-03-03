
<?php $__env->startSection('titulo'); ?>
<h1>SISTEMAS DE CONEXION  </h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<span class="image main"><img src="images/social-media-g29a7efdd3_1280.png" alt="" /></span>
								<h2>¿Qué son los sistemas de conexion?</h2>
								<p>  es una red de comunicaciones en la cual los clientes están conectados a un servidor, en el que se centralizan los diversos recursos y aplicaciones con que se cuenta; y que los pone a disposición de los clientes cada vez que estos son solicitados.
								</p>
								
								
							
								
							<header class="major">
								<h2>TIPOS DE SISTEMAS CONEXION </h2>
							</header>
							<ul class="features">
								<li>
									<span class="image"><img src="images/sccc.jpeg"  /></span>
									<h3>SISTEMAS DE CONEXION LINEA</h3>
									<footer class="major">
										<ul class="actions special">
											<li><a href="<?php echo e(route('CONEXION')); ?>" class="button">Leer mas</a></li>
										</ul>
									</footer>
								</li>
								<li>
									<span class="image"><img src="images/sr.jpeg"  /></span>
									
									<h3>SISTEMAS ATRAVES DE RED </h3>
									
									<footer class="major">
										<ul class="actions special">
											<li><a href="<?php echo e(route('red')); ?>" class="button">leer mas </a></li>
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
<?php echo $__env->make('blog.layout.templateCOPU', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Toshiba\Desktop\ur\Nueva carpeta\blog\resources\views/blog/redes.blade.php ENDPATH**/ ?>