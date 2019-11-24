<section id="content">
  <h2>Categories</h2>
  <ul class="categories">
    <?php foreach ($categories as $category) { ?>
      <li>
        <a href="list_products.php?cat_id=<?=$category['id']?>">
          <?=$category['name']?>
        </a>
      </li>
    <?php } ?>
  </ul>
  <?php if (isset($_SESSION['username'])) {?>
    <a href="add_category.php">Add</a>
  <?php } ?>
</section>
