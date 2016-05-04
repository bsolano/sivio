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
    
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/css/normalize.css" media="screen" rel="stylesheet">
<link href="http://cdn.foundation5.zurb.com/foundation.css" media="screen" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" media="screen" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.13/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    
    <?= $this->Html->charset() ?>
    
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
    <!--  $this->Html->script(array( 'ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', 'global' )); -->
</head>

<body>
    
<!-- Wrappers -->
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
      
    <!-- La Negra -->
    <nav class="tab-bar top-bar expanded" data-topbar role="navigation">
    
        <div class="top-bar-section top-bar expanded" data-topbar role="navigation">
        <?php
            if($this->request->session()->read('Auth.User')) {?>
            <ul>
                <li><a class="left-off-canvas-toggle menu-icon" href="#"> <span>  </span> </a></li>
                <li class="name"> <h1><a><?= $this->fetch('title') ?></a></h1> </li>
                <li><a>link1</a></li>
                <li><a>link2</a></li>

                <!-- <li><h1>algo tuanis</h1></li> -->
            </u>
            <ul class="right">
            <?php
                    // user is logged in, show logout..user menu etc
                    echo $this->Html->tag('li', $this->Html->link(__('Log out'), ['controller' => 'Users', 'action' => 'logout']) );
                } else {
                    ?><li class="name"><h1> <a> SIVIO </a> </h1></li><?php
                    // the user is not logged in
                    /*echo $this->Html->tag('li', $this->Html->link(__('Log in'), ['controller' => 'Users', 'action' => 'login']) );*/
                }

                ?>
            </ul>
        </div>
    </nav>
    <!-- Menu Extendido de la Negra -->
    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        
        <li><label> INAMU </label></li><!-- Titulo de la Negra -->

        <li><a href="/usersPeople"    >Atención</a></li>
        <li><a href="/users"          >Usuarias  </a></li>
        <li><a href="/groups"         >Grupos    </a></li>
 
        <li><a href="#">Option 3</a></li>
        <li><a href="#" class="off-canvas-submenu-call">Option 4 <span class="right"> + </span></a></li>
            <ul class="off-canvas-submenu">
                <li><a href="#">Sub menu 1</a></li>
                <li><a href="#">Sub menu 2</a></li>
                <li><a href="#">Sub menu 3</a></li>
            </ul>
        <li><a href="#">Option 5</a></li>
        <li><a href="#">Option 6</a></li>
      </ul>
    </aside>
    <!-- EOF: Menu Extendido de la Negra -->
    
       
       
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    
    
  </div>
</div>

    <footer class="footer">
        <!-- <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>  -->
    </footer>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdn.foundation5.zurb.com/foundation.js"></script>
    <script>
      $(document).foundation();
      $(".off-canvas-submenu").hide();
      $(document).ready(function(){
        // disable default behavior for links - prevents iframe logging to
        // browsing history, requiring multiple back-button clicks to go back one page
        $('a[href=#]').click(function(e) {
          e.preventDefault();
        });
      });
    </script>
    <script>$(document).ready(function(){$(document).foundation();
    $(".off-canvas-submenu").hide();
    $(".off-canvas-submenu-call").click(function() {
    	var icon = $(this).parent().next(".off-canvas-submenu").is(':visible') ? '+' : '-';
    	$(this).parent().next(".off-canvas-submenu").slideToggle('fast');
    	$(this).find("span").text(icon);
    });
    })
    </script>
</body>
</html>
