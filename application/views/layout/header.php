
<div class="content">

    <nav id="menu"> 
        <ul>
            <?php
            $menus = array(
                'accueil' => 'Accueil',
                'projets' => 'Projets',
                'contact' => 'Contact',
                'about' => 'À propos');
            foreach ($menus as $key => $menu) :
                ?>
                <li><a href="<?php echo URL::base() . ($key == 'accueil' ? '' : $key) ?>" style="<?php echo $name == $key ? "text-shadow: 0px 0px 4px white;" : "" ?>"><?php echo $menu ?></a></li>
            <?php endforeach; ?>

            

        </ul>

    </nav>
    <br class="clear" />

</div>
