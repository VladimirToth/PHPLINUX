<?php
include_once "Db.php";
class Admin
{
    private $adminUsername = 'admin';
    private $adminPassword = 'admin';
    private $errors = array();
// HEAD
    private $baseUrl = 'http://localhost/PHPLINUX/PhpProject/admin/';

//=======
 //   private $baseUrl = 'http://localhost/aptech/web/admin/';
//>>>>>>> origin/master
    public function __construct() {
        if(!$this->isAdmin()) {
            $this->checkAdmin();
            $this->displayLogin();
        } else {
            $this->displayPage();
        }
    }
    private function displayPage() {
        $page = !isset($_GET['page']) ? 'services' : $_GET['page'];
        $this->displayNav();
        switch($page) {
            case 'services':
                $this->displayServices();
                break;
            case 'staff':
                $this->displayStaff();
                break;
            case 'logout':
                $this->Logout();
                break;
            case 'editservice':
                $this->editService();
                break;
            case 'editstaff':
                $this->editStaff();
                break;
            case 'addservice':
                $this->displayAddService();
                $this->addService();
                break;
            case 'addstaff':
                $this->displayAddStaff();
                $this->addStaff();
                break;
            default:
                $this->displayServices();
        }
    }
    private function editService() {
        if(isset($_GET['ServiceID'])) {
            $db = new Db();
            if(isset($_POST['ServiceName']) && isset($_POST['Description']) && isset($_POST['ServicePrice'])) {
                $db->query("
                    UPDATE services SET
                    ServiceName = '".$_POST['ServiceName']."',
                    Description = '".$_POST['Description']."',
                    Discount = '".$_POST['Discount']."',
                    DiscountStartDate = '".$_POST['DiscountStartDate']."',
                    DiscountEndDate = '".$_POST['DiscountEndDate']."',
                    Image = '".$_POST['DiscountEndDate']."',
                    WHERE ServiceID = ".$_GET['ServiceID'].";
                ");
//                $db->query("
//                    UPDATE eshop SET
//                    price = ".$_POST['price'].",
//                 );
////                $db->query("
//                    UPDATE category_products SET
//                    id_cat = ".$_POST['category']."
//                    WHERE id = ".$_POST['id_cat_pro'].";
//                ");   id_man = ".$_POST['manufacturer']."
//                    WHERE id_product = ".$_GET['id'].";
//                ");
//                $db->query("
//                    UPDATE category_products SET
//                    id_cat = ".$_POST['category']."
//                    WHERE id = ".$_POST['id_cat_pro'].";
//                ");
            }
            $services = $db->query("
            SELECT services.*
            FROM dentist AS services
            WHERE services.ServiceID = " . $_GET['ServiceID']);
            $service = mysqli_fetch_assoc($services);
  //          $optionMan = $this->getOptions($product['id_man'],'manufacture','id_man','name');
 //           $optionCat = $this->getOptions($product['id_category'],'category','id_category','category_name');
            echo '
                <form method="post" action="?page=editservice&id='.$_GET['ServiceID'].'">
                    <table>
                        <tr>
                            <td>Name: </td>
                            <td><input type="text" name="name" value="'.$service['ServiceName'].'" /></td>
                        </tr>
                        <tr>
                            <td>Description: </td>
                            <td><textarea name="description">'.$service['Description'].'</textarea></td>
                        </tr>
                        <tr>
                            <td>Price: </td>
                            <td><input type="text" name="price" value="'.$service['ServicePrice'].'" /></td>
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
    private function addService() {
        if(isset($_POST['ServicePrice']) && isset($_POST['Description']) && isset($_POST['ServiceName'])) {
            $name = $_POST['ServiceName'];
            $description = $_POST['Description'];
            $price = (float)$_POST['ServicePrice'];
            $discount = $_POST['Discount'];
            $startDate = $_POST['DiscountStartDate'];
            $endDate = $_POST['DiscountEndDate'];
            $image = $_POST['Image'];
            $db = new Db();
            // vlozit service
            $db->query("INSERT INTO 'services' ('ServiceName', 'Description', 'ServicePrice', 'Discount', 'DiscountStartDate', 'DiscountEndDate', 'Image')
           VALUES ($name,$description, $price, $discount, $startDate, $endDate, $image);");
            // vytiahnut posledne ID
         //   $lastIds = $db->query("SELECT * FROM eshop ORDER BY id_product DESC;");
         //   $lastId = mysqli_fetch_assoc($lastIds);
            // vlozit produkt lang
        //    $db->query("INSERT INTO eshop_lang(id_product,id_lang,description,name)
        //    VALUES (".$lastId['id_product'].",$language,'$description', '$name');");
            // vlozit kategoriu
       //     $db->query("INSERT INTO category_products(id_cat,id_prod)
       //     VALUES ($category,".$lastId['id_product'].");
            
        }else {
            array_push($this->errors, "Data missing!");
            $this->displayErrors();
        }
    }
    
     private function addStaff() {
        if(isset($_POST['Name']) && isset($_POST['Qualifications']) && isset($_POST['JobTitle'])) {
            $name = $_POST['Name'];
            $title = $_POST['JobTitle'];
            $image = $_POST['Image'];
            $public = $_POST['Public'];
            $qual = $_POST['Qualifications'];
            $work = $_POST['WorkingDaysandTimes'];
            $email = $_POST['Email'];
            $db = new Db();
            // vlozit staff membera
        //    $db->query("INSERT INTO 'staff' ('Name', 'JobTitle', 'Image', 'Public', 'Qualifications', 'WorkingDaysandTimes', 'Email')
        //    VALUES ('$name', '$title', '$image', '$public', '$qual', '$work', '$email');");  
            $db->query("INSERT INTO 'staff' VALUES (NULL, '$name', '$title', '$image', '$public', '$qual', '$work', '$email');");  
            // vytiahnut posledne ID
         //   $lastIds = $db->query("SELECT * FROM eshop ORDER BY id_product DESC;");
         //   $lastId = mysqli_fetch_assoc($lastIds);
            // vlozit produkt lang
        //    $db->query("INSERT INTO eshop_lang(id_product,id_lang,description,name)
         //   VALUES (".$lastId['id_product'].",$language,'$description', '$name');");
            // vlozit kategoriu
          //  $db->query("INSERT INTO category_products(id_cat,id_prod)
          //  VALUES ($category,".$lastId['id_product'].");
            
        }else {
            array_push($this->errors, "Data missing!");
            $this->displayErrors();
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
    private function  displayAddService() {
        // zobrazit formular pre
        // 1. cena
        // 2. dropdown s vyrobcami
        // 3. dropdown s jazykmi
        // 4. description
        // 5. name
    //    $optionMan = $this->getOptions('','manufacture','id_man','name');
    //    $optionLan = $this->getOptions('','languages','id_lang','name');
    //    $optionCat = $this->getOptions('','category','id_category','category_name');
        echo '<div class="lead text-center">Add Service: </div></br>
            <form method="post" action="?page=addservice">
            <label class="col-sm-2 control-label">ServicePrice:</label>
            <input type="text" name="ServicePrice" placeholder="service price"/></br>
            <label class="col-sm-2 control-label">Description:</label>
            <input type="textarea" name="Description" placeholder="description"/></br>
            <label class="col-sm-2 control-label">ServiceName:</label>
            <input type="text" name="ServiceName" placeholder="service name"/></br>
            <label class="col-sm-2 control-label">Discount:</label>
            <input type="text" name="Discount" placeholder="percentage"/></br>
            <label class="col-sm-2 control-label">DiscountStartDate:</label>
            <input type="text" name="DiscountStartDate" placeholder="date format YYYY-MM-DD"/></br>
            <label class="col-sm-2 control-label">DiscountEndDate:</label>
            <input type="text" name="DiscountEndDate" placeholder="date format YYYY-MM-DD"/></br>
            <label class="col-sm-2 control-label">Image:</label>
            <input type="text" name="Image" placeholder="images/services/yourImage.jpg"/></br>
            <label class="col-sm-2 control-label">Confirm:</label>
            <input type="submit" value="Add Service"/>
            </form>
        ';
    }
    
     private function  displayAddStaff() {
        // zobrazit formular pre
        // 1. cena
        // 2. dropdown s vyrobcami
        // 3. dropdown s jazykmi
        // 4. description
        // 5. name
    //    $optionMan = $this->getOptions('','manufacture','id_man','name');
    //    $optionLan = $this->getOptions('','languages','id_lang','name');
    //    $optionCat = $this->getOptions('','category','id_category','category_name');
        echo '<div class="lead text-center">Add Staff Member: </div></br>
            <form method="post" action="?page=addstaff">
            <label class="col-sm-2 control-label">Name:</label>
            <input type="text" name="Name" placeholder="name"/></br>
            <label class="col-sm-2 control-label">Job Title:</label>
            <input type="text" name="JobTitle" placeholder="job title"/></br>
            <label class="col-sm-2 control-label">Image:</label>
            <input type="text" name="Image" placeholder="format: images/staffs/image.jpg"/></br>
            <label class="col-sm-2 control-label">Public:</label>
            <input type="text" name="Public" placeholder="phone number"/></br>
            <label class="col-sm-2 control-label">Qualifications:</label>
            <input type="text" name="Qualifications" placeholder="carreer and school"/></br>
            <label class="col-sm-2 control-label">Working time:</label>
            <input type="text" name="WorkingDaysandTimes" placeholder="Monday-Friday 09.00-17.00"/></br>
            <label class="col-sm-2 control-label">Email:</label>
            <input type="text" name="Email" placeholder="name@dentist.sk"/></br>
            <label class="col-sm-2 control-label">Confirm:</label>
            <input type="submit" value="Add Staff Member"/>
            </form>
        ';
    }
    
    private function displayServices() {
        $db = new Db();
        $products = $db->query("
            SELECT *
            FROM dentist.services AS Services
        ");
        echo '<div>
        <a href="?page=addservice" class="btn btn-primary">Add Service</a>
        </div>';
        echo '<table class="table table-striped">';
        echo '<tr>';
        echo '<th>ServiceID</th><th>ServicePrice</th><th>Description</th><th>ServiceName</th><th>Discount</th><th>DiscountStartDate</th><th>DiscountEndDate</th><th>Image</th><th>Action</th>';
        echo '</tr>';
        while($service = mysqli_fetch_array($products, MYSQL_ASSOC)) {
            echo '<tr>
                <td>'.$service['ServiceID'].'</td>
                <td>'.$service['ServicePrice'].'</td>
                <td>
                '.(strlen($service['Description']) > 15
                ?
                substr($service['Description'], 0, 15) . '...'
                :
                $service['Description']).'
                </td>
                <td>'.$service['ServiceName'].'</td>
                <td>'.$service['Discount'].'</td>
                <td>'.$service['DiscountStartDate'].'</td>
                <td>'.$service['DiscountEndDate'].'</td>
                <td>'.$service['Image'].'</td>
                <td>
                <a href="?page=editservice&id='.$service['ServiceID'].'" class="btn btn-default">Edit</a>
                <a href="?page=deleteservice&id='.$service['ServiceID'].'" class="btn btn-default">Delete</a>
                </td>
            </tr>';
        }
        echo '</table>';
    }
    
    private function displayStaff() {
        $db = new Db();
        $products = $db->query("
            SELECT *
            FROM dentist.staff AS Staff
        ");
        echo '<div>
        <a href="?page=addstaff" class="btn btn-primary">Add Staff</a>
        </div>';
        echo '<table class="table table-striped">';
        echo '<tr>';
        echo '<th>ID</th><th>Name</th><th>Qualifications</th><th>JobTitle</th><th>Image</th><th>Public</th><th>WorkingDaysandTimes</th><th>Email</th><th>Action</th>';
        echo '</tr>';
        while($staff = mysqli_fetch_array($products, MYSQL_ASSOC)) {
            echo '<tr>
                <td>'.$staff['ID'].'</td>
                <td>'.$staff['Name'].'</td>
                <td>
                '.(strlen($staff['Qualifications']) > 15
                ?
                substr($staff['Qualifications'], 0, 15) . '...'
                :
                $staff['Qualifications']).'
                </td>
                <td>'.$staff['JobTitle'].'</td>
                <td>'.$staff['Image'].'</td>
                <td>'.$staff['Public'].'</td>
                <td>'.$staff['WorkingDaysandTimes'].'</td>
                <td>'.$staff['Email'].'</td>
                <td>
                <a href="?page=editstaff&id='.$staff['ID'].'" class="btn btn-default">Edit</a>
                <a href="?page=deletestaff&id='.$staff['ID'].'" class="btn btn-default">Delete</a>
                </td>
            </tr>';
        }
        echo '</table>';
    }
    private function displayNav() {
        echo '
        <a href="?page=appointments" class="btn btn-primary col-sm-3">Appointments</a>
        <a href="?page=services" class="btn btn-primary col-sm-3">Services</a>
        <a href="?page=staff" class="btn btn-primary col-sm-3">Staff</a>
        <a href="?page=logout" class="btn btn-primary col-sm-3">Log out</a>
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
                            <input type="submit" value="Login" class="btn btn-default">
                        </div>
                    </div>
                </form>
            </div>
        ';
    }
    
    private function Logout(){
// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
// And back to Login start page.
header("location:index.php");
    }
}
new Admin();
