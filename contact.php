            <?php
            if (isset($_POST['submit'])) {
                // get the input values
                $name = $_POST['name'];
                $email = $_POST['mail'];
                $message = $_POST['message'];

                // validate the input fields
                if (empty($name) || empty($email) || empty($message)) {
                    echo "Please fill in all the fields.";
                    return;
                }

                // set the recipient email address
                $to = "venkatesham2908@gmail.com";

                // set the email subject
                $subject = "New message from $name";

                // set the email message
                $message = "Name: $name\nEmail: $email\n\nMessage:\n$message";

                // set the email headers
                $headers = "From: $email\r\nReply-To: $email\r\n";

                // send the email
                if (mail($to, $subject, $message, $headers)) {
                    echo "Your message has been sent!";
                } else {
                    echo "There was an error sending your message. Please try again later.";
                }
            }
            ?>