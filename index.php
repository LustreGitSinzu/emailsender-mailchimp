<?php

require_once('vendor/autoload.php');

function run($message)
{
    try {
        $mailchimp = new MailchimpTransactional\ApiClient();
        $mailchimp->setApiKey('PUgc6EQSRNUYnM_pkBekKA');

        $response = $mailchimp->messages->send(["message" => $message]);
        print_r($response);
    } catch (Error $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
}

$message = [
    "from_email" => "simonusman55@gmail.com",
    "subject" => "Hello world",
    "text" => "Welcome to Mailchimp Transactional!",
    "to" => [
        [
            "email" => "ndacedj@gmail.com",
            "type" => "to"
        ]
    ]
];
run($message);
?>



<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</head>
<body>

	<div class="row">

		
		<div class="col-sm-8 mx-auto bg-light p-5" style="margin-top: 4rem;">

			<form method="POST">
				<input type="text" name="grant_type" value="client_credentials" hidden>
				<input type="text" value="b886e00301cd3f0adcb749735a2c3824" name="client_id" hidden>
				<input type="text" value="6993b93cc381d8fdd21eab7abf6d8c40" name="client_secret" hidden>
				<div class="form-group">
					<label for="fromMail">From:</label>
					<input type="text" class="form-control" name="Doe" placeholder="enter name">
					<input type="email" name="fromOnePerson" class="form-control" id="fromMail" placeholder="yourmail@mail.com">
				</div>

				<div class="form-group">
					<label for="toMail">To:</label>
					<input type="text" class="form-control" name="John" placeholder="enter name">
					<input type="email" class="form-control" name="toAnotherPerson" id="toMail" placeholder="receivermail@mail.com">
				</div>	

				<div class="form-group">
					<input type="text" class="form-control" name="subject" placeholder="Subject">
				</div>	

				<div class="form-group">
					<textarea class="form-control" style="height: 100px;" name="textSend"></textarea>
				</div>	

				<button class="btn btn-primary mt-2" name="submit" style="width:100%; ">submit</button>

			</form>

		</div>
		


	</div>

</body>
</html>

 -->