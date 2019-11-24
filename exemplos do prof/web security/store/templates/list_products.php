<section id="content">
  <h2><?=$category['name']?></h2>
  <ul class="products">
    <?php foreach ($products as $product) { ?>
      <li>
        <img src="images/<?=$product['id']?>.png">
        <a href="view_product.php?prod_id=<?=$product['id']?>">
          <?=$product['name']?>
        </a>
      </li>
    <?php } ?>
  </ul>
</section>
