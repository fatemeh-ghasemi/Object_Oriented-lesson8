<!DOCTYPE html>
<?php
require 'Includes/connection.php';
$id = $_REQUEST['id'];

$func2=new book();
$data=$func2->get_data($id,"id",TRUE);

$lid = $data['grouptype'];

$func=new group();
$data2=$func->get_data($lid);
?>
<html>
    <head>

        <title>Show contact</title>
        <link href="global.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <a href="first.php"><button>Contact</button> </a>
            <a href="group.php"><button> Group</button> </a>
            <a href="add.php"><button> Add new contact</button> </a>
            <a href="addgroup.php"><button> Add new group</button> </a>
            <a href="search.php"><button> Search </button> </a>
            <section>
                <h4>FirstName : </h4><h5><?php echo $data['fname']; ?></h5> 
                <h4>LastName : <h5><?php echo $data['lname']; ?></h5> </h4>
                <h4>Phone : <h5><?php echo $data['phone']; ?></h5> </h4>
                <h4>mobile : <h5><?php echo $data['mobilephone']; ?></h5> </h4>
                <h4>Email : <h5><?php echo $data['email']; ?></h5> </h4>
                <h4>Relation : <h5><?php echo $data2['label']; ?></h5> </h4>
            </section>
        </div>
        <a href="index.php">Home</a>
    </body>
</html>
