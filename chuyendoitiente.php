
<form method="post">
     <input type="text" name="usd" placeholder="usd"/>
     <input type="submit" name="submit" value="Chuyển"/><br><br>
     Việt Nam Đồng:
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usd = $_POST["usd"];
        $vnd = 23000;

        $submit = $usd * $vnd;
        echo $submit;

    }
    ?>

</form>
