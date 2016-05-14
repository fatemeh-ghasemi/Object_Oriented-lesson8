<!DOCTYPE html>
<?php
require 'Includes/connection.php';
$id = $_REQUEST['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $func=new group();
    $func->update_group($_REQUEST['name'], $id);
}
$result2 = $database->query("SELECT * FROM group_type WHERE id=$id");
$data2 = $result2->fetch_assoc();
?>
<html>
    <head>

        <title>Edit group</title>
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
                <h4>GroupName : </h4><input type="text" name="name" value="<?php echo $data2['label']; ?>">
                <input type="submit" value="Rename" name="save">
            </form>
        </div>
    </body>
</html>
