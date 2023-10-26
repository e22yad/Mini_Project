<?php declare(strict_types=1) ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('Elantra.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            background-color: cyan;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .frame {
            width: 80%;
            margin: 20px auto;
            border: 2px solid #000;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        .centered-link {
            text-align: center;
        }

    </style>
</head>
<body>

    <div class="frame">
        <h1>Thanks You For Rental a Elantra Your Order Are Done Succeefuly </h1>
        <p>Your Car is: <?php echo $_POST['car']; ?></p>
        <p>Rent Days: <?php echo $_POST['in']; ?></p>
        <p>Total Amount: <?php define('carPrices', 150);
         $Price = carPrices * $_POST['in'];
         echo $Price; ?></p>
        
        <p class="centered-link"><a href="carR.php">Go back to rental page</a></p>
    </div>

</body>
</html>
