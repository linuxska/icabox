<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title><?php include_slot('title', 'GDLIcanet')?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div id="header">
          <div id="logos">
              <img alt="" src="/images/banner.png" />
          </div>
      </div>
      <div id="content" class="ipe_admin_content">
          <?php echo $sf_content ?>
      </div>
      <div class="rp_admin_footer">
        <p> <?php echo date('Y', time());?> <a href="http://www.gdlicanet.net">GDLIcanet</a>.
        <p class="rp_admin_ipe">Mariano Otero No. 3431, Piso 6 Oficinas 611-612, C.P: 44550 Guadajalara,Jalisco, Sonora. CP 83000.<br />Telefono: +52 33 31 21 96 43 | CorreoE: alarios@gdlicanet.net.mx </p>
        <p class="rp_admin_dev">Desarrollado por Abraham Rafael Rico Moreno.<br /> <a href="http://www.abricolabs.net/">Labs Cafeinne</a>. 461 1433 296 </p>
      </div>
  </body>
</html>
