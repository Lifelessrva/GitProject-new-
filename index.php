<!DOCTYPE html>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

  

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
    <html>

    <div id="wrapper">

        <head>
            <meta charset=utf-8 />
            <title>Tip Calculator</title>
            <h1>Tip Calculator</h1>
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
