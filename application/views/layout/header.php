
<div class="content">

    <nav id="menu"> 
        <ul>
            <?php
            
            foreach ($menus as $key => $menu) :
                ?>
                <li><?php echo HTML::anchor($key, $menu, array('style' => Request::current()->controller() == $key ? "text-shadow: 0px 0px 4px white;" : "")) ?> </li>
            <?php endforeach; ?>



        </ul>

    </nav>
    <br class="clear" />

</div>
