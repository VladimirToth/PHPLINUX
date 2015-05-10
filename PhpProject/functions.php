<?php
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBSELECT','dentist');
define('PERPAGE',3);

//function get_meta_data($page='index') {
//    $array=array(
//        'index' => array(
//            'title' => "Company",
//            "description" => "Our company",
//            'keyword' => "Company, Big"
//        ),
//        'about' => array(
//            'title' => "Eshop",
//            "description" => "Our company",
//            'keyword' => "Company, Big"
//        ),
//        'contact' => array(
//            'title' => "Contact",
//            "description" => "Our company",
//            'keyword' => "Company, Big"
//        )
//    );
//    return $array[$page];
//}
//
//function get_products(){
//    $cid = isset($_GET['cid']) ? intval($_GET['cid']) : false;
//    $page = !isset($_GET['p']) ? 1 : intval($_GET['p']);
//    $limit = "LIMIT " . ($page == 1 ? 0
//        : ( $page * PERPAGE - PERPAGE ) ) . "," . PERPAGE;
//
//    if($cid) {
//        $byCid = "
//        LEFT JOIN category_products
//        ON eshop.id_product = category_products.id_prod
//        WHERE category_products.id_cat = $cid
//        ";
//    }
//
//    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBSELECT);
//    $result = mysqli_query($link,"
//        SELECT eshop.*, eshop_lang.name AS menop,
//                eshop_lang.description AS description,
//                manufacture.name AS manufacturer
//        FROM eshop
//        LEFT JOIN eshop_lang ON eshop.id_product = eshop_lang.id_product
//        LEFT JOIN manufacture ON eshop.id_man = manufacture.id_man
//        ".(isset($byCid) ? $byCid : "")."
//        ORDER BY eshop.price
//        $limit;
//    ");
//
//    while($product = mysqli_fetch_array($result, MYSQL_ASSOC)) {
//        echo '<div class="product">
//            <p class="p-name">
//<a href="/PhpProject/?page=about&pid='.$product['id_product'].'">' . $product['menop'] . '</a></p>
//            <p class="p-description">' . $product['description'] . '</p>
//            <p class="p-manufacturer">' . $product['manufacturer'] . '</p>
//            <p class="p-price">' . $product['price'] . '</p>
//        </div>';
//    }
//}
//
//function create_pagination() {
//    $cid = isset($_GET['cid']) ? intval($_GET['cid']) : false;
//    if($cid) {
//        $byCid = "
//        LEFT JOIN category_products
//        ON eshop.id_product = category_products.id_prod
//        WHERE category_products.id_cat = $cid
//        ";
//    }
//    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBSELECT);
//    $result = mysqli_query($link,"
//        SELECT eshop.* FROM eshop
//        ".(isset($byCid) ? $byCid : "").";
//    ");
//    $numproduct = mysqli_num_rows($result);
//    $maxpages = ceil($numproduct / PERPAGE);
//    for($i = 1; $i <= $maxpages; $i++) {
//        echo '
//            <a href="/PhpProject/?page=about&p='.$i.''.(isset($_GET['cid']) ? '&cid=' . $_GET['cid'] : '').'">'.$i.'</a>
//        ';
//    }
//}
//
//function display_product() {
//    $productId = intval($_GET['pid']);
//    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBSELECT);
//    $result = mysqli_query($link,"
//        SELECT eshop.*, eshop_lang.name AS menop,
//                eshop_lang.description AS description,
//                manufacture.name AS manufacturer
//        FROM eshop
//        LEFT JOIN eshop_lang ON eshop.id_product = eshop_lang.id_product
//        LEFT JOIN manufacture ON eshop.id_man = manufacture.id_man
//        WHERE eshop.id_product = $productId;
//    ");
//    $product = mysqli_fetch_assoc($result);
//
//    if(empty($product['id_product'])) {
//        echo 'Product doesn\'t exists';
//    } else {
//        echo '
//            <div class="product-detail">
//                <p class="p-name">' . $product['menop'] . '</p>
//                <p class="p-description">' . $product['description'] . '</p>
//                <p class="p-manufacturer">' . $product['manufacturer'] . '</p>
//                <p class="p-price">' . $product['price'] . '</p>
//            </div>
//        ';
//    }
//}
//
//function display_categories() {
//    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBSELECT);
//    $result = mysqli_query($link, "
//        SELECT * FROM category
//        ORDER BY position;
//    ");
//    $numCategories = mysqli_num_rows($result);
//
//    if($numCategories > 0) {
//        echo '<ul>';
//        while($category = mysqli_fetch_array($result, MYSQL_ASSOC)) {
//echo '<li>
//    <a href="/PhpProject/?page=about&cid='.$category['id_category'].'">
//    '.$category['category_name'].'
//    </a>
//</li>';
//        }
//        echo '</ul>';
//    }
//}

function display_staffs() {

   $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBSELECT);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            display_staffs_row($row);
        }
    } else {
        echo "0 results";
    }
    $conn->close();   
}

function display_services() {

   $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBSELECT);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM services";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            display_services_row($row);
        }
    } else {
        echo "0 results";
    }
    $conn->close();   
}

function display_services_row($row) {  ?>

	<div class="row-fluid">
            <div class="col-sm-4 col-xs-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p class="lead"><?=$row['ServiceName'];?></p>
                        <p><img src="<?=$row['Image'];?>" class="img-responsive"></p>
                        <p><?=$row['Description'];?></p>   
                        <p>Price: <?=$row['ServicePrice'];?> Euros</p>
                        <p>Discount: <?=$row['Discount'];?> %</p>
                        <p>Period of discount: <?=$row['DiscountStartDate'];?> - <?=$row['DiscountEndDate'];?> </p>
                    </div>
                </div>
            </div>
        </div>
   
<?php } 

function display_staffs_row($row) {  ?>

    <div class="staff-details">
        <table>
            <div class="header">
                <tr>
                    <td class="text-center"><h2><?=$row['Name'];?> </h2></td>
                    <td><h2><?=$row['JobTitle'];?></h2></td>
                </tr>
            </div>
            
            <tr>
                <th rowspan="4"><img src="<?=$row['Image'];?>" alt="<?=$row['Name'];?>" class="img-circle"/></th> 
            </tr>
            <tr>
              <td><?=$row['Qualifications'];?></td>
            </tr>
            <tr>
              <td>Working days: <?=$row['WorkingDaysandTimes'];?></td>
            </tr>
            <tr>
                <td>E-mail: <?=$row['Email']; ?></td>
            </tr>
        </table>
    </div>
<?php } ?>
