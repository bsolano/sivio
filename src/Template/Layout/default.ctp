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
     <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,200,100' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="/webroot/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/webroot/sweetalert/dist/sweetalert.css">
    
    <!-- JQuery!  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    -->
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('what-input.js') ?>
    <?= $this->Html->script('foundation.min.js') ?>
    <?= $this->Html->script('sivio.js') ?>
    
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
    
    <!-- Para attentions/add/  -->
    <link type="text/css" rel="stylesheet" href="/webroot/css/responsive-tabs.css" />
    <script src="/webroot/js/jquery.responsiveTabs.js" type="text/javascript"></script>
    
</head>
<body>
	<!--<header>-->
	<div class="title-bar" style="background-color:white;">
		<?= $this->Html->image('main-logo.png', [
			'alt'	=> 'SIVIO',
			'url'	=> ['controller' => 'Users', 'action' => 'login'],
			'style' => 'height:55px;'
		]) ?>
		<div style="float:right;">
			<?php
				// User is logged in, shows logout.
				if($this->request->session()->read('Auth.User')) {
					echo $this->Html->link('Cerrar sesión', ['controller' => 'Users', 'action' => 'logout'], [
						'class' => 'hollow secondary button',
						'style' => 'padding-left: 1.1rem;'
					]);
				}
			?>
		</div>
	</div> 
	<?php
	
	if($this->request->session()->read('Auth.User')) { ?>
		<div class="title-bar" data-responsive-toggle="sivio-menu" data-hide-for="medium">
		  <button class="menu-icon" type="button" data-toggle></button>
		  <div class="title-bar-title" >Menú</div>
		</div>
		
		<nav  style="padding:0;" class="top-bar" id="sivio-menu">
		  <div class="top-bar" data-topbar role="navigation"> <!---top-bar-left-->
			<ul class="dropdown menu" data-dropdown-menu>
			  <li><?= $this->Html->link('Expediente', ['controller' => 'People', 'action' => 'index']) ?></li>
			  <?php $uid = $this->request->session()->read('Auth.User.id'); ?>
			  <?php
				/**
				 * Condicion para mostrar o no el link a Personas asignadas, mediante una expresion regular
				 * @author Brandon Madrigal B33906
				 */
			  ?>
			  <?php if (preg_match("/Profesional(.)*/", $this->request->session()->read('group.name'))): ?>
			  	<li><?= $this->Html->link('Personas asignadas', ['controller' => 'Users', 'action' => 'designees', $uid]) ?></li>
			  <?php endif ?>
			 <li><?= $this->Html->link("Referencias", ['controller' => 'InternalReferences', 'action' => 'index']) ?></li>
			 
			  <li><a href="#">Asesoría técnica</a>


			  </li>
  	  		  <li><?= $this->Html->link('Asignaciones', ['controller' => 'Allocations', 'action' => 'index']) ?></li>

			  <li><?= $this->Html->link('Reportes', ['controller' => 'Statistics', 'action' => 'index']) ?></li>
			  <li>
			      <a href="#">Administración</a>
			      <ul class="menu vertical">
			          <li><?= $this->Html->link('Usuarios', ['controller' => 'Users', 'action' => 'index']) ?></li>
			          <li><?= $this->Html->link('Roles', ['controller' => 'Groups', 'action' => 'index']) ?></li>
			      </ul>
			  </li>
			  <!--   EMPTY SPACE  -->
			  <li style="width: 100%;" >  </li>
			  
			  <li><input type="search" style="width: 15rem; white-space: nowrap;" placeholder="Identificación o nombre"></li>
			  <li><button type="button" style="white-space: nowrap;padding-left: 2rem;padding-right: 2.4rem;"    class="secondary button">Buscar</button></li>
			</ul>

		  </div>
		  <!--
		  <div class="top-bar-right">
			<ul class="menu">
			  <li><input type="search" placeholder="Identificación o nombre"></li>
			  <li><button type="button" class="secondary button">Buscar expediente</button></li>
			</ul>
		  </div>
		  -->
		</nav>
		<?php
	} ?>
	<!--</header>-->

    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>

    <footer class="footer">
        <!-- <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>  -->
    </footer>
    	<script type="text/javascript" >
    	$(document).foundation();
    </script>

</body>
</html>
