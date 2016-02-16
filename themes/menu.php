<ul class="nav nav-pills">
    <?php foreach($menu as $menuItem): ?>
        <li class='nav-item'><a class='nav-link' href='<?=$menuItem['url']?>'><?=$menuItem['text']?></a></li>
    <?php endforeach; ?>
</ul>