<nav class="navigation col-sm-3 col-sm-offset-1" id='navigation'>
    <ul class="nav nav-pills nav-stacked">
    <?php
        foreach ($pages as $key => $page){
        echo "<li id='".strtolower($page)."'><a href='#".$page."'>".$page."</a></li>";
    }
    ?>
    </ul>
</nav>