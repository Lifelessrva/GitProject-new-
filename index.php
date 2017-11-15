<!DOCTYPE html>
<?php
/*
if($_POST["email"]):
mail($_POST["email"],"Your Tip Calculation',Bill: ".$_POST["bill"]."\nTip: ".$_POST["tip"]."\nTotal:".$_POST["total"]);
endif; 
} */

if(isset($_POST['submit'])){
    $from = $_POST['email'];
    $bill = $_POST['bill'];
    $tip_percent = $_POST['tip'];
    $name = $_POST['name'];
    $tipprcnt = $_POST['tipprcnt'];
    $total = $_POST['total'];
    $subject = "Your Electonric Receipt";
    $message = "Here is a copy of your receipt " . $first_name . "\n\n" . $_POST['bill'] . "\n\n" . $_POST['tip'] . "\n\n" . $_POST['tipprcnt'] . "\n\n" . $_POST['total'] . " from" $_POST['name'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($from,$subject,$message,$header); 
    echo "Mail Sent. Thank you";
    
    }

?>
    <html>
    <div id="wrapper">

        <head>
            <meta charset=utf-8 />
            <title>Tip Calculator</title>
            <h1>Tip Calculator</h1>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        </head>

        <body>
            <form onsubmit="return false">
                Amount: $<input id="bill" type="text">
                <br> Tip Percent: %<input id="tip" type="text">
                <br>
                <button onclick="calc();" value="Calculate">Calculate</button>
                <br> Tip: <span id="tipprcnt"></span>
                <br> Total: <span id="total"></span>
            </form>
            <form method="post">
                Send an electronic receipt to your email! <input id="email" type="text" placeholder="Email Address">
                <br>
                Resturaunt name: <input id="name" type="text" placeholder="Resturaunt Name">
                <br>
                <button onclick "" value="submit">Send e-Receipt!</button>
            </form>
    </div>
    <script>
        function calc() {
            var bill = parseFloat(document.getElementById('bill').value);
            var tip = parseFloat(document.getElementById('tip').value);
            var tipprcnt = (tip / 100) * (bill);
            var total = bill + tipprcnt;

            document.getElementById("tipprcnt").innerHTML = "$" + (tipprcnt).toFixed(2);
            document.getElementById("total").innerHTML = "$" + (total).toFixed(2);

        }

    </script>
    </body>

    </html>
