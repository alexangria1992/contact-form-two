<?php 

    require 'sendgrid-php/vendor/autoload.php';
    $API_KEY = "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";
    if(isset($_POST['sendemail']))
    {
        $name = $_POST['name'];
        $email_id = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['msg'];

        
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("alexangryman1992@gmail.com", "Example User");
    $email->setSubject($subject);
    $email->addTo($email_id, $name);
    $email->addContent("text/plain", $message);
    // $email->addContent(
    //     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
    // );
    $sendgrid = new \SendGrid($API_KEY);

        if($sendgrid->send($email))
        {
            echo "Email sent successfully";
        }
    // try {
    //     $response = $sendgrid->send($email);
    //     print $response->statusCode() . "\n";
    //     print_r($response->headers());
    //     print $response->body() . "\n";
    // } catch (Exception $e) {
    //     echo 'Caught exception: '. $e->getMessage() ."\n";
    // }
    }

?>










<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="card">
        <div class="card-body">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header info-color white-text text-center py-4">
                        <strong>Sending an Email with SENDGRID in PHP</strong>
                    </h3>
                    <div class="card-body px-lg-5 pt-0">
                        <form action="" method="post" style="color: #757575;" class="text-center">
                            <div class="md-form">
                                <input type="text"name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="md-form">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="md-form">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="md-form">
                                <textarea type="text" name="msg" class="form-control" rows="3" placeholder="Message">Send</textarea>
                            </div>
                            <button class="btn btn-info btn-block" type="submit" name="sendemail">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>