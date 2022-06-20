<?php
global $template_url;
global $home_url;
?>
<form method="get" id="searchform" action="<?= $home_url; ?>/">
    <input type="text" name="s" id="s" placeholder=""/>
    <button type="submit">検索</button>
</form>
