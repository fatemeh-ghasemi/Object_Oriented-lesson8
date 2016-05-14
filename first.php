<!DOCTYPE html>
<?php
require 'Includes/connection.php';
$result = $database->query("SELECT * FROM book");
$data = $result->fetch_all(MYSQLI_ASSOC);
?>
<html>
    <head>
    
        <title>Contact</title>
        <link href="global.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
             <div>
                 <a href="first.php"><button>Contact</button> </a>
                <a href="group.php"><button> Group</button> </a>
                <a href="add.php"><button> Add new contact</button> </a>
                <a href="addgroup.php"><button> Add new group</button> </a>
                <a href="search.php"><button> Search </button> </a>
        <table border="1" >
            <tr>
                <td> FirdtName</td>
                <td> LastName</td>
                <td> Delete</td>
                <td> Edite</td>
                <td> Show</td>
            </tr>
            <?php
            foreach ($data as $v) {
                echo '<tr>';
                echo '<th>' . $v['fname'] . '</th>';
                echo '<th>' . $v['lname'] . '</th>';
                echo '<th><a href="deletebook.php?id=' . $v['id'] . '"><img src="images/delete.png"></a></th>';
                echo '<th><a href="editbook.php?id=' . $v['id'] . '"><img src="images/photo.png"></a></th>';
                echo '<th><a href="showbook.php?id=' . $v['id'] . '"><img src="images/eye.png"></a></th>';
                echo '</tr>';
            }
            ?>
        </table>
        <a href="add.php">Add new item</a>
        <a href="search.php">Search</a>
         </div>
    </body>
</html>
