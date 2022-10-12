<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 50%;
        margin: auto;
        height: auto;
    }
</style>
    <title>stkpush</title>
</head>
<body>
    <div class="container">
        <h1>TESTING STK PUSH</h1>
        <form action="stkpay.php" method="POST">
            Name: <br>
            <input type="text" name="jina" required /><br>
            Phone Number: <br>
            <input type="number" name="phone" placeholder="254748223540" required /><br>
            Amount To Pay: <br>
            <input type="number" name="amount" required /><br>
            Email Address: <br>
            <input type="email" name="email" required /> <br>
            <input type="submit" name="submit" value="Check Out"/><br>

        </form>
    </div>
</body>
</html>