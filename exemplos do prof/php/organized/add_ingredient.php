<?php

include('templates/tpl_common.php');
include('templates/tpl_ingredients.php');

$rcp_id = $_GET['rcp_id'];

draw_header();
draw_add_ingredient($rcp_id);
draw_footer();

?>