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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

$sivioDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $sivioDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('sivio.css') ?>
</head>
<body class="home">
    <header>
        <div class="header-image">
            <h1>Sistema Información Integrada sobre la gestión de Rectoría para la Atención y Prevención de la Violencia contra las Mujeres del INAMU.</h1>
        </div>
    </header>
    <div id="content">
        <div class="row">
            <div class="large-12 medium-12 columns">
                <h2>¡Bienvenido!</h2>
                <p>Por favor, ingrese al sistema con su nombre de usuario y su clave.</p>
            </div>
            <form>
            <div class="row">
                <div class="large-6 medium-6 columns">
                    <label>Usuario
                        <input type="email" placeholder="Digite su correo">
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-6 medium-6 columns">
                    <label>Clave
                        <input type="password" placeholder="Digite su clave">
                    </label>
                </div>
                <div class="large-12 medium-12 columns">
                    <input type="submit" class="button" value="Ingresar">
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
