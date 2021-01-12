<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
<?php include "html/header.html";?>
        
        <main>
            <h2>Bine ati venit !</h2>
            <?php require "book.php";?>

            <?php
                // foreach($books as $k=>$b) {
                //         echo $b['title'];echo "<br>";
                //         echo $b['author'];echo "<br>";echo "<br>";
                // }
            ?>

            <?php foreach($books as $k=>$b) :?>
                <h1>Titlul carte : <?php echo $b['title'];?></h1>
                <p> Autorul este : <?php echo $b['author'];?></p>
                <img src="<?php echo $b['imageLink'];?>" alt="<?php echo $b['title'];?>">
            <?php endforeach;?>
        </main>
 <?php include "html/footer.html";?>
    
    </body>
</html>