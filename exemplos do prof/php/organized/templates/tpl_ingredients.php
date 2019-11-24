<?php function draw_add_ingredient($rcp_id) { ?>

<section id="recipe">
  <form action="action_add_ingredient.php" method="post">
    <input type="hidden" name="rcp_id" value="<?=$rcp_id?>">
    <label>Name:<input type="text" name="ing_name"></label>
    <label>Quantity:<input type="text" name="ing_quantity"></label>
    <input type="submit" value="Add">
  </form>
</section>

<?php } ?>