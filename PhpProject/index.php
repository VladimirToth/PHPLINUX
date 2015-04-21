<?php
    include_once "functions.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php
    if(isset($_GET['page'])) {
        switch($_GET['page']) {
            case "about":
                $page="about";
                break;
            case "contact":
                $page="contact";
                break;
            default: $page='index';
        }
    } else {
        $page="index";
    }
    include("head.php");
    ?>
</head>
<body>
<div class="holder top">
    <div class="inner">
        <a href="/PhpProject/?page=contact">Contact</a>
    </div>
</div>

<div class="holder">
    <div class="inner header_image">
        <img src="" alt=""/>
    </div>
</div>

<header class="holder">
    <nav class="inner">
        <ul>
            <li><a href="/PhpProject">Home</a></li>
            <li>
                <a href="/PhpProject/?page=about">Eshop</a>
                <?php display_categories(); ?>
            </li>
            <li><a href="/PhpProject/?page=contact">Contact</a></li>
        </ul>
    </nav>
</header>

<section class="holder">
    <article class="inner">
        <?php
            if(!isset($page)) {
                include "/content/index.php";
            } else {
                include "/content/" . $page . ".php";
            }
        ?>
    </article>
</section>

<footer class="holder footer">
    <div class="inner">
        <?php
        include("footer.php");
        ?>
    </div>
</footer>

</body>
</html>