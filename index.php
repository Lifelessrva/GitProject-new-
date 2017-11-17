<!DOCTYPE html>
<?php


if(isset($_POST['submit'])){
    $from = $_POST['email'];
    $bill = $_POST['bill'];
    $tip_percent = $_POST['tip'];
    $name = $_POST['name'];
    $tipprcnt = $_COOKIE['tipprcnt'];
    $total = $_COOKIE['total'];
    $subject = "Your Electonric Receipt";
    $message = "Here is a copy of your receipt from " . $_POST['name'] . "\n" . "Bill: $ " . $_POST['bill'] . "\n" . "Tip Percent: %" . $_REQUEST['tip'] . "\n" . "Tip Total: $ " . $_COOKIE['tipprcnt'] . "\n" . "Grand Total: $ " . $_COOKIE['total'] . " from " . $_POST['name'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($from,$subject,$message,$headers) or die ("Mail could not be sent. Please enter a valid email address."); 
    echo "Mail Sent. Thank you";
    
    }
?>
    <html>
    <div id="wrapper">

        <head>
            <meta charset=utf-8 />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
            <title>Tip Calculator</title>
            <h1>Tip Calculator</h1>
        </head>

        <body>
            <div id="form-group row">
                <form method="post">
                    <label for="bill" class="col-sm-2 col-form-label">Amount: $</label>
                    <div class="col-sm-6">
                        <input id="bill" class="form-control" name="bill" type="text" placeholder="Your Bill before Tip">
                    </div>
                    <br>
                    <label for="inputTip" class="col-sm-2 col-form-label">Tip Percent: %</label>
                    <div class="col-sm-6">
                        <input id="tip" name="tip" type="text">
                    </div>
                    <br>
                    <input class="btn btn-success" onclick="calc();" value="Calculate">
                    <br> Tip: <span id="tipprcnt" name="tipprcnt"></span>
                    <br> Total: <span id="total" name="total"></span>
                    <br> Send an electronic receipt to your email: <input id="email" name="email" type="text" placeholder="Email Address">
                    <br> Resturaunt name: <input id="name" type="text" name="name" placeholder="Resturaunt Name">
                    <br>
                    <input class="btn btn-success" type="submit" name="submit" value="Send your e-Receipt!">

                </form>
            </div>
    </div>
    <script>
        function calc() {
            var bill = parseFloat(document.getElementById('bill').value);
            var tip = parseFloat(document.getElementById('tip').value);
            var tipprcnt = (tip / 100) * (bill);
            var total = bill + tipprcnt;

            document.getElementById("tipprcnt").innerHTML = "$" + (tipprcnt).toFixed(2);
            document.getElementById("total").innerHTML = "$" + (total).toFixed(2);
            document.cookie = "tipprcnt=" + tipprcnt;
            document.cookie = "total=" + total;



        }

    </script>
    </body>

    </html>
