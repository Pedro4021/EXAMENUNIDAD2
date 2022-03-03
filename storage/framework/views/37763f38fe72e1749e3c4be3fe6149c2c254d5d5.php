
<?php $__env->startSection('titulo'); ?>
<h1>PROTOCOLO DE EJECUCION DE BLOQUEO DE DOS FASES</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<span class="image main"><img src="images1/web-gdc339f535_1280.jpg" alt="" /></span>
								<h2>¿Qué es el protocolo de ejecucion de bloqueo de dos fases ?</h2>
								<p>    En bases de datos y procesamiento de transacciones, bloqueo de dos fases  es un control de concurrencia método que garantiza serializabilidad.También es el nombre del conjunto resultante de ﻿transacciones de bases de datos horarios Utiliza el protocolo cerraduras, aplicado por una transacción a datos, que pueden bloquear (interpretados como señales para parar) otras transacciones de acceso a los mismos datos durante la vida de la transacción.
									El protocolo de bloqueo de dos fases se utiliza para garantizar que las transacciones se serialicen. En el protocolo de bloqueo de dos fases, cada transacción debe emitir todas las solicitudes de bloqueo antes de que pueda emitir cualquier solicitud de desbloqueo.
									</p>
								<p>   
								</p>
								
								
								<h2>FASE 1: </h2>
							</header>
							
							
							
							<p><span class="image left">
								<img src="images1/FASE1.jpeg" alt="" />
							</span>
							<p>
								 

								Fase de expansión(también conocido como fase de crecimiento): cerraduras se adquieren y no se lanzan cerraduras (sólo puede aumentar el número de bloqueos).
								esta fase permite a la transacción emitir cualquier nueva solicitud de bloqueo que se requiera. Las solicitudes de desbloqueo no están permitidas en esta fase.

							</p>
							<br><br><h2>FASE 2:   </h2>
							<p><span class="image right">
								<img src="images1/CANDADO.jpeg" alt="" />
							</span>
							<p>
								Fase menguante: los bloqueos son liberados y no se adquieren bloqueos.
								esta fase permite que la transacción libere bloqueos adquiridos en la fase de expansión. Las nuevas solicitudes de bloqueo no están permitidas en esta fase.
							
							</p>
					
							</section>

							

					</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('boton'); ?>
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="<?php echo e(route('unidad3 copy')); ?>" class="button">Volver</a></li>
							</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layout.templateCOPU', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Toshiba\Desktop\ur\Nueva carpeta\blog\resources\views/blog/FASES2.blade.php ENDPATH**/ ?>