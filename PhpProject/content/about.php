<div id="products">
    <?php
        if(!isset($_GET['pid']))
            get_products();
        else
            display_product();
    ?>
</div>
<div id="pagination">
    <?php if(!isset($_GET['pid'])) create_pagination(); ?>
</div>