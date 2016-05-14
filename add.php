<!DOCTYPE html>
<?php
require 'Includes/connection.php';
$result = $database->query("SELECT * FROM group_type");
$data = $result->fetch_all(MYSQLI_ASSOC);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $func=new book();
    $info=["option"=>$_REQUEST['options'],"fname"=>$_REQUEST['fname'],"lname"=>$_REQUEST['lname'],"phone"=> $_REQUEST['phone'],"email"=>$_REQUEST['email'],"mobile"=> $_REQUEST['mobile']];
    $func->add_to_book($info);
}
?>
<html>
    <head>

        <title>Add contact</title>
        <link href="global.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <a href="first.php"><button>Contact</button> </a>
            <a href="group.php"><button> Group</button> </a>
            <a href="add.php"><button> Add new contact</button> </a>
            <a href="addgroup.php"><button> Add new group</button> </a>
            <a href="search.php"><button> Search </button> </a>
            <form action="" method="post">
                <h5>FirstName : </h5><input type="text" name="fname">
                <h5>LastName : </h5><input type="text" name="lname">
                <h5>Email  : </h5><input type="text" name="email">
                <h5>Phone :<img src="images/telephone.png"> </h5><input type="text" name="phone">
                <h5>mobile :<img src="images/cellphone.png"> </h5><input type="text" name="mobile">
                <h5>Group_type : </h5><select name="options">
                    <?php
                    foreach ($data as $v) {
                        echo '<option>' . $v['label'] . '</option>';
                    }
                    ?>

                </select>
                <input type="submit" value="SAVE" name="save">
            </form>
        </div>
    </body>
</html>
