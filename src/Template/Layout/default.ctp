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
<html>
<head>
    <?= $this->Html->charset() ?>
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
    <?= $this->Html->script(array(
    'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
    'global'
    )); ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
            
                <?php
                
                if($this->request->session()->read('Auth.User')) {
                    // user is logged in, show logout..user menu etc
                    echo $this->Html->tag('li', $this->Html->link(__('Log out'), ['controller' => 'Users', 'action' => 'logout']) );
                } else {
                    // the user is not logged in
                    echo $this->Html->tag('li', $this->Html->link(__('Log in'), ['controller' => 'Users', 'action' => 'login']) );
                }

                ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
    </footer>
</body>
</html>
