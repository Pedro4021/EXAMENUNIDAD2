
<?php $__env->startSection('titulo'); ?>
<h1> CLIENTE Y SERVIDOR  </h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<span class="image main"><img src="images/server-gb36e3c6e5_1280.jpg" alt="" /></span>
								<h2>¿Qué son los clientes?</h2>
								<p>
									<span class="image right"><img src="images/upt.je" alt="" />
									</span>Un cliente es una persona o entidad que compra los bienes y servicios que ofrece una empresa.

									La palabra cliente también puede ser utilizada como sinónimo de comprador. 
									El cliente puede comprar un producto y luego consumirlo; o simplemente comprarlo para que lo disfrute otra persona.</p>
		
		
							<p>

							</p>	
								
							<h2>¿Qué son los servidores?</h2>
								<p><span class="image left">
									<img src="images/servidor.jpeg" alt="" />
								</span>Un servidor web (server) es un ordenador de gran potencia que se encarga de “prestar el servicio” de transmitir la información pedida por sus clientes (otros ordenadores, dispositivos móviles, impresoras, personas, etc.)

								Los servidores web (web server) son un componente de los servidores que tienen como principal función almacenar, en web hosting, todos los archivos propios de una página web (imágenes, textos, videos, etc.) y transmitirlos a los usuarios a través de los navegadores mediante el protocolo HTTP (Hipertext Transfer Protocol).
							</p>
							
						

							</section>

					</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('boton'); ?>
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="<?php echo e(route('hola')); ?>" class="button">Volver</a></li>
							</ul>
						
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layout.templateCOPU', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Toshiba\Desktop\ur\Nueva carpeta\blog\resources\views/blog/CLIENTE.blade.php ENDPATH**/ ?>