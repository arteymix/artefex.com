<?php
defined('SYSPATH') or die('No direct script access.');

// Show the status of the backend followed by the status of a unit
?>

Backend is running : <?php echo $backend->running_state() ?><br />



Available units : <ul>
    <?php foreach ($backend->units() as $unit) : ?>
        <li><?php echo $unit->name() ?></li>
    <?php endforeach; ?>

</ul>


Thread available : <?php echo Thread::available() ? "Yes" : "No" ?>
