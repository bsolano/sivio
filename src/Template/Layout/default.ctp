<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$sivioDescription = 'SIVIO';
?>
<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $sivioDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('sivio.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
	<!--<header>-->
		<div class="title-bar" style="background-color:white;">
			<?= $this->Html->image('main-logo.png', ['alt' => 'SIVIO']) ?>
			<div style="float:right;">
				<?php
					// User is logged in, shows logout.
					if($this->request->session()->read('Auth.User')) {
						echo $this->Html->link('Cerrar sesión', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'hollow secondary button']);
					}
				?>
			</div>
		</div>
		
		<?php
		    if($this->request->session()->read('Auth.User')) {
		?>
		<div class="title-bar" data-responsive-toggle="sivio-menu" data-hide-for="medium">
		  <button class="menu-icon" type="button" data-toggle></button>
		  <div class="title-bar-title">Menú</div>
		</div>
		<div class="top-bar" id="sivio-menu">
		  <div class="top-bar-left">
			<ul class="dropdown menu" data-dropdown-menu>
			  <li><?= $this->Html->link('Expediente', ['controller' => 'People', 'action' => 'index']) ?></li>
			  <?php $uid = $this->request->session()->read('Auth.User.id'); ?>
			  <li><?= $this->Html->link('Personas asignadas', ['controller' => 'Users', 'action' => 'designees', $uid]) ?></li>
			  <li><a href="#">Referencias</a></li>
			  <li><a href="#">Asesoría técnica</a></li>
			  <li><?= $this->Html->link('Reportes', ['controller' => 'Statistics', 'action' => 'index']) ?></li>
			  <li>
			      <a href="#">Administración</a>
			      <ul class="menu vertical">
			          <li><?= $this->Html->link('Usuarios', ['controller' => 'Users', 'action' => 'index']) ?></li>
			          <li><?= $this->Html->link('Roles', ['controller' => 'Groups', 'action' => 'index']) ?></li>
			      </ul>
			  </li>
			</ul>
		  </div>
		  <div class="top-bar-right">
			<ul class="menu">
			  <li><input type="search" placeholder="Identificación o nombre"></li>
			  <li><button type="button" class="secondary button">Buscar expediente</button></li>
			</ul>
		  </div>
		</div>
		<?php
		    }
		?>
	<!--</header>-->

    <div class="container">
    	<?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>  <!-- Container -->
    
    <footer class="footer">
        <!-- <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>  -->
    </footer>

    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('what-input.js') ?>
    <?= $this->Html->script('foundation.min.js') ?>
    <?= $this->Html->script('sivio.js') ?>
</body>
</html>
