<!DOCTYPE html>
<?php
require 'Includes/connection.php';
$result = $database->query("SELECT * FROM group_type");
$data = $result->fetch_all(MYSQLI_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $label = $_REQUEST['name'];
    $func=new group();
    $func->add_to_group($label);
}
?>
<html>
    <head>

        <title>Add group</title>
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
                <h4>GroupName : </h4><input type="text" name="name">

                <input type="submit" value="SAVE" name="save">
            </form>
        </div>
    </body>
</html>
