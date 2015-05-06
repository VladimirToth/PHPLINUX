<?php
include_once "Db.php";

class Admin
{
    private $adminUsername = 'admin';
    private $adminPassword = 'admin';
    private $errors = array();
    private $baseUrl = 'http://localhost/PHPLINUX/PhpProject/#section1/admin/';

    public function __construct() {
        if(!$this->isAdmin()) {
            $this->checkAdmin();
            $this->displayLogin();
        } else {
            $this->displayPage();
        }
    }

    private function displayPage() {
        $page = !isset($_GET['page']) ? 'products' : $_GET['page'];

        $this->displayNav();
        switch($page) {
            case 'products':
                $this->displayProducts();
                break;
            case 'categories':
                $this->displayCategories();
                break;
            case 'logout':
                $this->displayLogout();
                break;
            case 'editproduct':
                $this->editProduct();
                break;
            case 'addproduct':
                $this->addProduct();
                $this->displayAddProduct();
                break;
            default:
                $this->displayProducts();
        }

    }

    private function editProduct() {
        if(isset($_GET['id'])) {
            $db = new Db();

            if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price'])) {
                $db->query("
                    UPDATE eshop_lang SET
                    name = '".$_POST['name']."',
                    description = '".$_POST['description']."'
                    WHERE id = ".$_POST['plid'].";
                ");
                $db->query("
                    UPDATE eshop SET
                    price = ".$_POST['price'].",
                    id_man = ".$_POST['manufacturer']."
                    WHERE id_product = ".$_GET['id'].";
                ");
                $db->query("
                    UPDATE category_products SET
                    id_cat = ".$_POST['category']."
                    WHERE id = ".$_POST['id_cat_pro'].";
                ");
            }

            $products = $db->query("
            SELECT products.*, pl.description, pl.name, cp.id_cat AS id_category, pl.id_lang, pl.id AS plid, cp.id AS id_cat_pro
            FROM eshop AS products
            LEFT JOIN eshop_lang AS pl ON products.id_product = pl.id_product
            LEFT JOIN category_products AS cp ON products.id_product = cp.id_prod
            WHERE products.id_product = " . $_GET['id']);
            $product = mysqli_fetch_assoc($products);
            $optionMan = $this->getOptions($product['id_man'],'manufacture','id_man','name');
            $optionCat = $this->getOptions($product['id_category'],'category','id_category','category_name');


            echo '
                <form method="post" action="?page=editproduct&id='.$_GET['id'].'">
                    <table>
                        <tr>
                            <td>Name: </td>
                            <td><input type="text" name="name" value="'.$product['name'].'" /></td>
                        </tr>
                        <tr>
                            <td>Description: </td>
                            <td><textarea name="description">'.$product['description'].'</textarea></td>
                        </tr>
                        <tr>
                            <td>Price: </td>
                            <td><input type="text" name="price" value="'.$product['price'].'" /></td>
                        </tr>
                        <tr>
                            <td>Manufacturer: </td>
                            <td><select name="manufacturer">'.$optionMan.'</select></td>
                        </tr>
                        <tr>
                            <td>Category: </td>
                            <td><select name="category">'.$optionCat.'</select></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="hidden" name="plid" value="'.$product['plid'].'" /><input type="hidden" name="id_cat_pro" value="'.$product['id_cat_pro'].'" /><input type="submit" value="Update" /></td>
                        </tr>
                    </table>
                </form>
            ';
        } else {
            array_push($this->errors, "No ID");
            $this->displayErrors();
        }
    }

    private function addProduct() {
        if(isset($_POST['price']) && isset($_POST['description']) && isset($_POST['name'])) {
            $price = (float)$_POST['price'];
            $description = $_POST['description'];
            $name = $_POST['name'];
            $manufacturer = $_POST['manufacturers'];
            $language = $_POST['languages'];
            $category = $_POST['category'];
            $db = new Db();

            // vlozit produkt
            $db->query("INSERT INTO eshop(price,id_man)
            VALUES ($price,$manufacturer);");
            // vytiahnut posledne ID
            $lastIds = $db->query("SELECT * FROM eshop ORDER BY id_product DESC;");
            $lastId = mysqli_fetch_assoc($lastIds);
            // vlozit produkt lang
            $db->query("INSERT INTO eshop_lang(id_product,id_lang,description,name)
            VALUES (".$lastId['id_product'].",$language,'$description', '$name');");
            // vlozit kategoriu
            $db->query("INSERT INTO category_products(id_cat,id_prod)
            VALUES ($category,".$lastId['id_product'].");
            ");
        }
    }

    private function getOptions($idSelected = '', $tableName, $idColName, $colValueName) {
        $db = new Db();

        $categories = $db->query("SELECT * FROM $tableName");
        $optionCat = "";
        while($category = mysqli_fetch_array($categories,MYSQL_ASSOC)){
            $optionCat.="<option value='".$category[$idColName]."'
            ".(!empty($idSelected) && $idSelected == $category[$idColName]
                ?
                ' selected="selected"'
                :
                '').">".$category[$colValueName]."</option>";
        }

        return $optionCat;
    }

    private function  displayAddProduct() {
        // zobrazit formular pre
        // 1. cena
        // 2. dropdown s vyrobcami
        // 3. dropdown s jazykmi
        // 4. description
        // 5. name

        $optionMan = $this->getOptions('','manufacture','id_man','name');
        $optionLan = $this->getOptions('','languages','id_lang','name');
        $optionCat = $this->getOptions('','category','id_category','category_name');


        echo '
            <form method="post" action="?page=addproduct">
            <input type="text" name="price" placeholder="cena"/>
            <input type="text" name="description" placeholder="popis"/>
            <input type="text" name="name" placeholder="meno"/>
            <SELECT name="manufacturers">
                '.$optionMan.'
            </SELECT>
            <SELECT name="languages">
                '.$optionLan.'
            </SELECT>
            <SELECT name="category">
                '.$optionCat.'
            </SELECT>
            <input type="submit" value="submit"/>
            </form>
        ';
    }

    private function displayProducts() {
        $db = new Db();
        $products = $db->query("
            SELECT products.*, pl.description, pl.name
            FROM eshop AS products
            LEFT JOIN eshop_lang AS pl ON products.id_product = pl.id_product
        ");

        echo '<div>
        <a href="?page=addproduct" class="btn btn-primary">Add product</a>
        </div>';
        echo '<table class="table table-striped">';
        echo '<tr>';
        echo '<th>ID</th><th>price</th><th>description</th><th>name</th><th>action</th>';
        echo '</tr>';
        while($product = mysqli_fetch_array($products, MYSQL_ASSOC)) {
            echo '<tr>
                <td>'.$product['id_product'].'</td>
                <td>'.$product['price'].'</td>
                <td>
                '.(strlen($product['description']) > 15
                ?
                substr($product['description'], 0, 15) . '...'
                :
                $product['description']).'
                </td>
                <td>'.$product['name'].'</td>
                <td>
                <a href="?page=editproduct&id='.$product['id_product'].'" class="btn btn-default">Edit</a>
                <a href="?page=deleteproduct&id='.$product['id_product'].'" class="btn btn-default">Delete</a>
                </td>
            </tr>';
        }
        echo '</table>';
    }

    private function displayNav() {
        echo '
        <a href="?page=products" class="btn btn-primary">Products</a>
        <a href="?page=categories" class="btn btn-primary">Categories</a>
        <a href="?page=logout" class="btn btn-primary">Log out</a>
        ';
    }

    private function displayErrors() {
        foreach($this->errors as $error) {
            echo '<div class="alert alert-danger" role="alert">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span>'.$error.'</span>
            </div>';
        }
    }

    private function checkAdmin() {
        if(isset($_POST['username']) && isset($_POST['password'])) {
            if($_POST['username'] == $this->adminUsername
                && $_POST['password'] == $this->adminPassword) {
                $_SESSION['admin'] = '1';
                header("Location:" . $this->baseUrl);
            } else {
                array_push($this->errors, "Wrong login");
                $this->displayErrors();
            }
        }
    }

    private function isAdmin() {
        if(!isset($_SESSION['admin'])){
            return false;
        } else {
            if($_SESSION['admin'] != '1') {
                return false;
            } else {
                return true;
            }
        }
    }

    private function displayLogin() {
        echo '
            <div class="row">
                <form method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Username:</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" placeholder="Username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default">
                        </div>
                    </div>
                </form>
            </div>
        ';
    }

}
new Admin();