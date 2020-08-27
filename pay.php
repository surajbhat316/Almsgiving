<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];

    include 'instamojo/Instamojo.php';
    $api = new Instamojo\Instamojo('test_260b8b845b9a9228f9bd14feee4', 'test_74a70267c8296a34187858ea6ad', 'https://test.instamojo.com/api/1.1/');
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "Charity",
            "amount" => $amount,
            "send_email" => true,
            "email" => $email,
            "buyer_name" => $name,
            "allow_repeated_payments"=> false,
            "redirect_url" => "http://localhost:8080/Payment/thankyou.php"
            ));
         print_r($response);
    $pay_url = $response['longurl'];
    header("Location:$pay_url");
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAY</title>
</head>
<body>
    <p>Name is <?php echo $name;?></p>
</body>
</html>