
<div class="content container_16">
    <div class="grid_4">
        <h4>Navigation</h4>
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


    </div>
    <div class="grid_4">
        <h4>Programmation</h4>
        <ul>
            <?php
            $menus = array(
                'programmation#libre' => 'Libre et open-source',
                'programmation#kohana' => 'Frameworks',
                'programmation#git' => 'Gestion de version');
            foreach ($menus as $key => $menu) :
                ?>
                <li><a href="<?php echo URL::base() . ($key == 'accueil' ? '' : $key) ?>" style="<?php echo $name == $key ? "text-shadow: 0px 0px 4px white;" : "" ?>"><?php echo $menu ?></a></li>
            <?php endforeach; ?>
            
        </ul>


    </div>
    <div class="grid_4">
        <h4>Gestion de projets</h4>
        <ul>
            <?php
            $menus = array(
                'projets#web' => 'Projets web',
                'projets#logiciels' => 'Logiciels',
                'projets#serveur' => 'Configuration de serveur',
                );
            foreach ($menus as $key => $menu) :
                ?>
                <li><a href="<?php echo URL::base() . ($key == 'accueil' ? '' : $key) ?>" style="<?php echo $name == $key ? "text-shadow: 0px 0px 4px white;" : "" ?>"><?php echo $menu ?></a></li>
            <?php endforeach; ?>
           

        </ul>


    </div>
    <div class="grid_4">
        <h4>À propos</h4>
        <ul>
            <?php
            $menus = array(
                'blog' => 'Blog',
                'about#equipe' => 'Notre équipe',
                'about#partenaires' => 'Partenaires'
                );
            foreach ($menus as $key => $menu) :
                ?>
                <li><a href="<?php echo URL::base() . ($key == 'accueil' ? '' : $key) ?>" style="<?php echo $name == $key ? "text-shadow: 0px 0px 4px white;" : "" ?>"><?php echo $menu ?></a></li>
            <?php endforeach; ?>
            


        </ul>


    </div>


</div>




