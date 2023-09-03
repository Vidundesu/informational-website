<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailheader = "From: " . $name . " <" . $email . ">\r\n";

        $recipient = "your email goes here";

        mail($recipient, $subject, $message, $mailheader) or die ("Error!");
        
        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Contact us - The Flower Haze</title>
                <link rel="stylesheet" href="style.css">
                <style>
                    .main{
                        margin-top:50px;
                        height: 50vh;
                        width: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        
                        gap: 2rem;
                    }
                    #contact-main{
                        display: flex;
                        flex-direction: row;
                        gap:1rem;
                        max-width: 800px;
                    }
                    #contact-text{
                        font-family: "Yeseva One";
                        font-size: 40px;
                        color: #b9b9b9;
                        padding:50px;
                        height: auto;
                        width: 50%;
                    
                    }
                </style>
            </head>
            <body>
                <div id="navbar-placeholder"></div>
                <div class="main">
                    <div id="contact-main">
                        <div id="contact-text">Thank you for contacting us. We will get back to you as soon as possible!</div>
                        <span>Go back to the <a href="index.html">homepage</a></span>
                    </div>
                </div>
            </body>
            </html>
        ';
    }
?>