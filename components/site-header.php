<header id="site-header">
  <div class="site-title">
    <?php
$site_title = "Arvestustöö";
echo $site_title;
?>
  </div>

  <nav class="menu-main">
    <ul class="menu">
        <?php
            foreach($menu_main as $menu => $item){
                echo '<li><a href="'.$item.'">'.$menu."</a></li>";
            };
        ?>
    </ul>
  </nav>
  
</header>
