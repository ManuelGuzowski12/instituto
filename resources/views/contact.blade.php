<section id="contact" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contactanos</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form  role="form" method="POST" action="send" >
                    {{ csrf_field() }}

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" required data-validation-required-message="Por favor, introduzca su nombre completo.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="Correo Electrónico" id="email" name="email" required data-validation-required-message="Por favor, introduzca su dirección de correo electrónico.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="phone">Número de Teléfono</label>
                            <input type="tel" class="form-control" placeholder="Númeor de Teléfono" id="phone" name="phone" required data-validation-required-message="Por favor, introduzca su dirección de correo electrónico.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="message">Mensaje</label>
                            <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" name="message" required data-validation-required-message="Por favor, introduzca un mensaje."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-md-8 col-md-offset-2">
            <h3 class="text-center">Ubicación</h3>
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAhXaZzo3eMrMmJmVKZHtT_ZDtFUSbOh6Q&q=Centro+Educativo+de+Lideres%2FLearning+Center+%26+Institute"></iframe>
        </div>
    </div>
</section>