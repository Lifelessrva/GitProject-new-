<!DOCTYPE html>
<?php
/*
if($_POST["email"]):
mail($_POST["email"],"Your Tip Calculation',Bill: ".$_POST["bill"]."\nTip: ".$_POST["tip"]."\nTotal:".$_POST["total"]);
endif; */

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
            <form onsubmit="">
                Send an electronic receipt to your email! <input id="email" type="text" placeholder="Email Address">
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
    <script>
        function myFunction() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'name1=' + name + '&email1=' + email ;
            if (name == '' || email == '') {
                alert("Please Fill All Fields");
            } else {
                // AJAX code to submit form.
                $.ajax({
                    type: "POST",
                    url: "ajaxjs.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                        alert(html);
                    }
                });
            }
            return false;
        }

    </script>
    </body>

    </html>
