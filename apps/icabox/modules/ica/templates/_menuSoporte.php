    <?php
/*
 * Menú de acciones para el actor admin.
 *
 * El resaltado de la aplicación se logra comparando la URI solicitada con la URI
 * esperada para cada módulo. Si el nombre del módulo (que se encuentra en la URI)
 * es parte de la URI solicitada se resalta la aplicación.
 */
?>

    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Icabox</li>
                <li class="app  <?php echo in_array('icabox', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@icabox') ?>" class="alternate">Icabox</a></li>
                <li class="app  <?php echo in_array('reparacion', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@reparacion') ?>" class="alternate">Reparaciones</a></li>
            </ul>
    </li>