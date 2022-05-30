<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mini calculator using PHP</h1>
    <hr>
    <center>
        <h2>Calculate your value</h2>
        <br>
        <form method="post">
            <input type="number" name="num1" placeholder="Enter your first number"> <br> <br>
            <input type="number" name="num2" placeholder="Enter your second number">
            <br><br>
            <select name="action" >
                <option disabled="">Select one</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <br><br><br>

        <div style="height:100px; width: 250px; padding: 20px; border: 2px solid green;">

        <?php 
            if(isset($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $action = $_POST['action'];

                if($action == "+"){

                    $cal = $num1 + $num2;
                    echo $cal;

                }elseif($action == "-"){

                    $cal = $num1 - $num2;
                    echo $cal;

                }elseif($action == "*"){

                    $cal = $num1 * $num2;
                    echo $cal;

                }elseif($action == "/"){

                    $cal = $num1 / $num2;
                    echo $cal;
                    
                }else{
                    return fales;
                }
            }
    
        ?>

         </div>
    </center>
</body>
</html>