<?php include_once("includes/templates/header.php"); ?>
    <main class="container new-section">
        <h2>Registro de usuarios</h2>
        <form action="" > <!-- method="post"-->
            <fieldset class="container-reservations containers-clear">
                <div class="record-field">
                    <label>Nombre:</label>
                    <input type="text" name="name" class="name" placeholder="Tu Nombre">
                    <div class="error"></div>
                </div>
                <div class="record-field">
                    <label>Apellido:</label>
                    <input type="text" name="last-name" class="last-name" placeholder="Tu Apellido">
                    <div class="error"></div>
                </div>
                <div class="record-field">
                    <label>Email:</label>
                    <input type="email" name="email" class="email" placeholder="Tu Email">
                    <div class="error"></div>
                </div>
            </fieldset>

            <fieldset>
                <h3>elige el número de boletos</h3>
                <div class="grid container-price packages">
                    <div class="containers-clear content-price">
                        <h3 class="tittle-price">pase por día (Viernes)</h3>
                        <p class="price">$30</p>
                        <div class="inf-price">
                            <p><i class="fas fa-check"></i>bocadillos gratis</p>
                            <p><i class="fas fa-check"></i>todas las conferencias</p>
                            <p><i class="fas fa-check"></i>todos los talleres</p>
                        </div>
                        <div class="form-tickets">
                            <label>Boletos deseados</label>
                            <input type="number" min="0" placeholder="0" class="ticket-day">
                        </div>
                    </div>
                    <div class="containers-clear content-price">
                        <h3 class="tittle-price spacing-full">todos los días</h3>
                        <p class="price">$50</p>
                        <div class="inf-price">
                            <p><i class="fas fa-check"></i>bocadillos gratis</p>
                            <p><i class="fas fa-check"></i>todas las conferencias</p>
                            <p><i class="fas fa-check"></i>todos los talleres</p>
                        </div>
                        <div class="form-tickets">
                            <label>Boletos deseados</label>
                            <input type="number" min="0" placeholder="0" class="full-ticket">
                        </div>
                    </div>
                    <div class="containers-clear content-price grid-colum1-3">
                        <h3 class="tittle-price">pase por 2 días (viernes y sábado)</h3>
                        <p class="price">$45</p>
                        <div class="inf-price">
                            <p><i class="fas fa-check"></i>bocadillos gratis</p>
                            <p><i class="fas fa-check"></i>todas las conferencias</p>
                            <p><i class="fas fa-check"></i>todos los talleres</p>
                        </div>
                        <div class="form-tickets">
                            <label>Boletos deseados</label>
                            <input type="number" min="0" placeholder="0" class="ticket-twodays">
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <h3>elige tus talleres</h3>
                <div class="container-reservations containers-clear container-workshops">
                    <div class="friday">
                        <h4>Viernes</h4>
                        <div class="container-day">
                            <div class="colum-4 content-workshops">
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
                                <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                                <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                                <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
                                <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
                            </div>
                            <div class="colum-4 content-workshops">
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                                <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                                <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                            </div>
                            <div class="colum-4 content-workshops">
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                            </div>
                        </div>
                    </div> <!--#Friday-->
                    <div class="saturday">
                        <h4>Sábado</h4>
                        <div class="container-day">
                            <div class="colum-4 content-workshops">
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
                                <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
                                <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                                <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
                                <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                                <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
                            </div>
                            <div class="colum-4 content-workshops">
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
                                <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
                                <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
                            </div>
                            <div class="colum-4 content-workshops">
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
                                <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                            </div>
                        </div>
                    </div> <!--#Sábado-->
                    <div class="sunday">
                        <h4>Domingo</h4>
                        <div class="container-day">
                            <div class="colum-4 content-workshops">
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
                                <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
                                <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                                <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
                                <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                           </div>
                            <div class="colum-4 content-workshops">
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                                <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                                <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
                            </div>
                            <div class="colum-4 content-workshops">
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
                                <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
                            </div>
                        </div>
                    </div> <!--#Domingo-->
                </div><!--.caja-->
            </fieldset>

            <fieldset>
                <h3>pago y extras</h3>
                <div class="container-reservations containers-clear form-payments">
                    <div class="colum-6">
                        <div class="content-payments">
                            <label>Camisa del evento $10 <span>(30% dto. en mayor a 15 camisas)</span></label>
                            <input type="number" min="0" class="input-quantity number-shirts" placeholder="0">
                        </div>
                        <div class="content-payments">
                            <label>Paquete de 10 etiquetas $2 <span>(HTML5,CCS3,JavaScript,Chrome)</span></label>
                            <input type="number" min="0" class="input-quantity number-labels" placeholder="0">
                        </div>
                        <div class="content-payments">
                            <label>Seleccione un regalo</label>
                            <select name="" id="present">
                                <option value="" selected>-- Seleccione un regalo --</option>
                                <option value="label">Etiquetas</option>
                                <option value="bracelet">Pulsera</option>
                                <option value="pen">Plumas</option>
                            </select>
                        </div>
                        <div class="container-btn-payments">
                            <input type="submit" value="Calcular" id="calculate" class="button button-orange">
                        </div>
                    </div>
                    <div class="colum-6">
                        <p>Resumen:</p>
                        <div class="product-list"></div>
                        <p>Total:</p>
                        <div class="total"></div>
                        <div class="container-btn-payments">
                            <input type="submit" value="Pagar" id="pay" class="button button-orange">
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </main>
    <?php include_once("includes/templates/footer.php"); ?>