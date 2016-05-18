<!--Regitrarse-->
<!--<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->

    <div class="modal-dialog" >
        <div class="modal-content">
            <form name="login" action="https://www.tipo.es/create_account/" method="post" id="form_sign_up_general" role="form"><input type="hidden" name="formid" value="7fcf28d9b86da3ef56aef066d6baa973">


                <input type="hidden" name="action" value="create_account">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Regístrate</h4>
                </div>

                <div class="modal-body">

                    <p>Crea una cuenta con nosotros para poder ver tus presupuestos, hacer pedidos y obtener información de las mejores ofertas. </p>

             <div class="col-md-4">
                                <label class="">Nombre de usuario:</label>
                                <input type="text" value="<?= set_value('nombre_usu') ?>" placeholder="Nombre de Usuario" id="billing_first_name" name="nombre_usu" class="input-text" maxlength="30">

                            </div>                           

                            <div class="col-md-2">
                                <label class="">Contraseña:</label>
                                <input type="password" value="" style="width: 100%" placeholder="Contraseña" id="billing_first_name" name="clave" class="input-text">                                
                            </div>

                            <div class="col-md-2">
                                <label class="">Repita Contraseña:</label>
                                <input type="password" value="" style="width: 100%" placeholder="Repita Contraseña" id="billing_first_name" name="rep_clave" class="input-text">                                
                            </div>

                            <div class="col-md-4">
                                <label class="">Correo electrónico:</label>
                                <input type="text" value="<?= set_value('correo') ?>" placeholder="Correo de electrónico" id="billing_first_name" name="correo" class="input-text" maxlength="180">
                            </div>

                            <div class="row">
                                <div class="col-md-4"><?= form_error('nombre_usu'); ?></div>
                                <?php
                                if (! EMPTY($errorclave)) {
                                    echo '<div class="col-md-4">';
                                    echo $errorclave;
                                    echo '</div>';
                                }
                                if (EMPTY($errorclave)):
                                    ?>
                                    <div class="col-md-2"><?= form_error('clave'); ?></div>
                                    <div class="col-md-2"><?= form_error('rep_clave'); ?></div>
                                <?php endif ?>                  
                                <div class="col-md-4"><?= form_error('correo'); ?></div>
                            </div>
                            <!--///-->

                            <div class="col-md-4">
                                <label class="">Nombre: </label>
                                <input type="text" value="<?= set_value('nombre_persona') ?>" placeholder="Nombre" id="billing_first_name" name="nombre_persona" class="input-text" maxlength="40"> 
                            </div>                         

                            <div class="col-md-4">
                                <label class="">Apellidos: </label>
                                <input type="text" value="<?= set_value('apellidos_persona') ?>" placeholder="Apellidos" id="billing_first_name" name="apellidos_persona" class="input-text" maxlength="60"> 
                            </div>

                            <div class="col-md-4">
                                <label class="">DNI: </label>
                                <input type="text" value="<?= set_value('dni') ?>" placeholder="DNI" id="billing_first_name" name="dni" class="input-text" maxlength="9"> 
                            </div>

                            <div class="row">
                                <div class="col-md-4"><?= form_error('nombre_persona'); ?></div>
                                <div class="col-md-4"><?= form_error('apellidos_persona'); ?></div>
                                <div class="col-md-4"><?= form_error('dni'); ?></div>
                            </div>
                            <!--///-->

                            <div class="col-md-4">
                                <label class="">Dirección: </label>
                                <input type="text" value="<?= set_value('direccion') ?>" placeholder="Dirección" id="billing_first_name" name="direccion" class="input-text" maxlength="100"> 
                            </div>

                            <div class="col-md-4">
                                <label class="">Código Postal: </label>
                                <input type="text" value="<?= set_value('cp') ?>" placeholder="CP" id="billing_first_name" name="cp" class="input-text" maxlength="5"> 
                            </div>

                            <div class="col-md-4">
                                <label class="">Provincia: </label>
                                <?= $select ?> 
                            </div>

                            <div class="row">
                                <div class="col-md-4"><?= form_error('direccion'); ?></div>
                                <div class="col-md-4"><?= form_error('cp'); ?></div>
                                <div class="col-md-4"><?= form_error('cod_provincia'); ?></div>
                            </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" required="true" name="preferencia_condiciones"> <small>Acepto las  <a href="javascript:void(0);" onclick="aptshop_pop_conditions();">condiciones de uso</a>  y la  <a href="javascript:void(0);" onclick="aptshop_pop_privacy();">política de privacidad</a></small>
                            </label>
                        </div>
                    </div>

                    <div class="errors"></div>
                    <p>¿Ya estás registrado? Accede <a href="javascript:void(0)" onclick="aptshop_ajax_show_login()">aquí.</a></p>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>

            </form>
        </div>
    </div>
<!--</div>-->
<!--/Regitrarse-->