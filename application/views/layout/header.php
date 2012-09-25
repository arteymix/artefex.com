<div class="content">
   
    <nav id="menu" class="navbar"> 
         <div class="navbar-inner">
        <ul class="nav">
            <?php
            foreach ($menus as $key => $menu) :
                ?>
                <li class="<?php echo Request::current()->controller() == $key ? "active" : ""?>"><?php echo HTML::anchor($key, $menu, array('class' => Request::current()->controller() == $key ? "text-shadow: 0px 0px 4px white;" : "")) ?> </li>
            <?php endforeach; ?>

            <?php $lang_uri = Urlang::instance()->translation_to_uri(Urlang::instance()->unprepend(Request::current()->uri())) ?>

            <li><?php echo HTML::anchor($lang_uri, I18n::lang() == 'fr' ? 'English' : 'Français', array(), NULL, NULL, I18n::lang() == 'fr' ? 'en' : 'fr'); ?></li>





        </ul>
             </div>

    </nav>
    <br class="clear" />

</div>