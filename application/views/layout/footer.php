<div class="content container_16">
    <?php foreach ($footer_menus as $key => $sous_menu) : ?>
        <div class="grid_4">
            <h4><?php echo $key ?></h4>
            <ul>
                <?php foreach ($sous_menu as $key2 => $menu): ?>
                    <li><?php echo HTML::anchor($key2, $menu) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>