<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results
        <?php 
        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty']; 
       echo '<p>Your order is as follows: </p>';
echo    htmlspecialchars($tireqty).' tires<br />';
echo    htmlspecialchars($oilqty).' bottles of oil<br />';
echo    htmlspecialchars($sparkqty).' spark plugs<br />';
        echo "<p>Order processed at ".date("H:i, jS F Y")."</p>";?>
        </h2>
    </body>
</html>
