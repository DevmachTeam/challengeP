<ul>
    <?php
        foreach ($company as $row):
    ?>
    <li>
        <a href="<?php echo Path.$row->c_slug."/product/".$row->c_id ?>"><?php echo $row->c_name ?></a>
    </li>
    <?php  endforeach; ?>
</ul>