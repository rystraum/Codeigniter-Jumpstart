<dl id="user-profiles">
<?php foreach ($user as $k => $v): ?>
    <dt><?php print $k ?></dt>
    <dd><?php print ($v)? $v : '-' ?></dd>
<?php endforeach ?>
</dl>
