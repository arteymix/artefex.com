
<div class="content">

    <nav id="menu"> 
        <ul>
            <?php
            foreach ($menus as $key => $menu) :
                ?>
                <li><?php echo HTML::anchor($key, $menu, array('style' => Request::current()->controller() == $key ? "text-shadow: 0px 0px 4px white;" : "")) ?> </li>
            <?php endforeach; ?>
                
                
            <?php $uri_version = Urlang::translation_to_uri(Request::current()->uri()) ?>
                
            <?php if (i18n::lang() == 'fr') : ?>
                <li><a href="<?php echo Urlang::translate_current_page('en') ?>" >English</a></li>
            <?php else : ?>
                <li><a href="<?php echo Urlang::translate_current_page('fr') ?>" >Français</a></li>
            <?php endif; ?>


        </ul>

    </nav>
    <br class="clear" />

</div>
