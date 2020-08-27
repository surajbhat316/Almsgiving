<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">		
	<!-- 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- jQuery library -->
	<script src="https://use.fontawesome.com/fefcf99aee.js"></script>
    <title>Thank You</title>
</head>
<body>
    <div class="container">
        <h1 class = "text-center">Thank You </h1>
        <?php
            include 'instamojo/Instamojo.php';
            $api = new Instamojo\Instamojo('test_260b8b845b9a9228f9bd14feee4', 'test_74a70267c8296a34187858ea6ad', 'https://test.instamojo.com/api/1.1/');
            $payid = $_GET["payment_request_id"];

            try{
                $response = $api->paymentRequestStatus($payid);
            
        ?>
        <div class="table-responsive-sm">    
            <table class="table">
                <caption>Payment Details</caption>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Payment ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td><?= $response['payments'][0]['payment_id']; ?></td>
                    <td><?= $response['payments'][0]['buyer_name']; ?></td>
                    <td><?= $response['payments'][0]['buyer_email']; ?></td>
                    <td><?= $response['payments'][0]['amount']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>    
        
    <?php
        }
        catch (Exception $e){
                print("Error : ". $e->getMessage());
            }
            
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	 integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	 integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	  crossorigin="anonymous"></script>


</body>
</html>