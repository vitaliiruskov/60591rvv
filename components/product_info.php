<section class="item">
    <div class="container">
        <h1 class="item-title"><?php echo $title ?></h1>
        <img src="<?php echo $img_url ?>" width="510" height="392" alt="<?= $title ?>">
        <h1 class="item-title"><?= 'Цена ' ?><? echo $price ?></h1>

        <?php
        if ($_SESSION['username']) {
           ?>
            <form method="post" action="..\order.php"
                <p>
                    <label for="id1">Количество:</label>
                    <input type="text" name="quantity" id="id1">
                </p>
            <p>
                <label for="id1">Цвет:</label>
                <select name="color" id="id2">
                    <?php foreach (explode(',',$colors) as $color): ?>
                        <option class="color-<?= $color ?>"><?=$color?></option>
                    <?php endforeach;?>
                </select>
            </p>
            <input type="hidden" name="id" id="id3" value="<?=$id?>">
            <input type="hidden" name="price" id="id4" value="<?=$price?>">
                <p><input type="submit" value="Добавить в корзину"></p>
            </form>





        <?}
    ?>




    </div>
</section>