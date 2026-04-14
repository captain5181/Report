<html>
    <head>
        <title>
            Products
        </title>
    </head>
    <body>
        <h1>Product Inventory</h1>
        <form method="post">
            Books (price 200rs):
            Quantity: <input type="number" name="book_qty" min="0" value="0"><br><br>
            Pens (price 100rs):
            Quantity: <input type="number" name="pen_qty" min="0" value="0"><br><br>
            Bags (price 500rs):
            Quantity: <input type="number" name="bag_qty" min="0" value="0"><br><br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){


    $book = 200;
    $pen = 100;
    $bag = 500;

    $book_q = $_POST['book_qty'];
    $pen_q = $_POST['pen_qty'];
    $bag_q = $_POST['bag_qty'];

    echo "<strong style='color:blue';>Bill Details</strong><br><br>";

    echo "<b style='color:blue';>The Unit Price of Items</b><br><br>";
    echo "The Unit Price of Book - <b>200rs</b><br>";
    echo "The Unit Price of Pen - <b>100rs</b><br>";
    echo "The Unit Price of Bag - <b>500rs</b><br><br>";

    echo "<strong style='color:blue';>The Total Quantity of Items:</strong><br><br>";

    echo "Books - $book_q <br>";
    echo "Pens - $pen_q<br>";
    echo "Bags - $bag_q<br><br>";

    echo "<strong style='color:blue';>The Total Cost of Items:</strong><br><br>";

    echo "Books - " .$book*$book_q ;
    echo "<br>Pens - " .$pen*$pen_q;
    echo "<br>Bags - " .$bag*$bag_q;
    echo "<br><b>Total - <b>" .($book*$book_q) + ($pen*$pen_q) + ($bag*$bag_q);

}
?>