<?php function draw_recipes($recipes) { ?>
  <section id="recipes">
  <?php foreach ($recipes as $recipe) { ?>
    <article class="recipe">
    <a href="view_recipe.php?rcp_id=<?=$recipe['rcp_id']?>">
    <h2><?=$recipe['rcp_name']?></h2>
    <img src="photos/<?=$recipe['rcp_id']?>.png" alt="Photo of <?=$recipe['rcp_name']?>">
    </a>
    </article>
  <?php } ?>
  </section>
<?php } ?>

<?php function draw_recipe($recipe, $ingredients, $steps) { ?>

  <article class="recipe">
  <a href="view_recipe.php?rcp_id=<?=$recipe['rcp_id']?>">
    <h2><?=$recipe['rcp_name']?></h2>
    <img src="photos/<?=$recipe['rcp_id']?>.png" alt="Photo of <?=$recipe['rcp_name']?>">
  </a>

  <section class="ingredients">
    <h3>Ingredients</h3>
    <ul>
      <?php foreach ($ingredients as $ingredient) { ?>
        <li><?=$ingredient['ing_quantity']?> <?=$ingredient['ing_name']?></li>
      <?php } ?>
      <li><a href="add_ingredient.php?rcp_id=<?=$recipe['rcp_id']?>">Add Ingredient</a></li>
    </ul>
  </section>

  <section class="steps">
    <h3>Steps</h3>
    <ul>
      <?php foreach ($steps as $step) { ?>
        <li><?=$step['stp_description']?></li>
      <?php } ?>
    </ul>
  </section>

</article>

<?php } ?>