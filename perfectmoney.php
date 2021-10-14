 

<form action="https://perfectmoney.is/api/step1.asp" method="POST">


    <input type="hidden" name="PAYEE_ACCOUNT" value="U35164144">

    <input type="hidden" name="PAYEE_NAME" value="Anas">

    <input type="text" name="PAYMENT_AMOUNT" placeholder="Amount">

    <input type="hidden" name="PAYMENT_UNITS" value="USD">

    <input type="hidden" name="STATUS_URL" value="http://localhost/Projet%20testing%20api%20perfect%20money/perfectmoney.php">

    <input type="hidden" name="PAYMENT_URL" value="http://localhost/Projet%20testing%20api%20perfect%20money/success.php">

    <input type="hidden" name="NOPAYMENT_URL" value="http://localhost/Projet%20testing%20api%20perfect%20money/refuse.php">


    <input type="text" name="PAYMENT_ID" placeholder="id">
    <input type="submit" name="PAYMENT_METHOD" value="Submit">


</form>