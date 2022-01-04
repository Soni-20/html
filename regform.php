<html>
    <head>
        <title>reg form</title>
        <body>
            <center>
                <form method="POST">
            <table>
                <h1><u>VALIDATION FORM</u></h1>
                <tr>
                    <th>username:</th>
                    <td><input type="text" name="username" id="n"></td>
                </tr>
                <tr>
                    <th>password:</th>
                    <td><input type="text" name="password" id="p"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="subm" id="s"></td>
                </tr>
            </table>
        </form>
        </center>
        </body>

    </html>
    <?php
    if(isset($_POST["subm"]))
    {
        $c1=preg_match("/[a-z]/",$_POST["password"]);
        $c2=preg_match("/[A-Z]/",$_POST["password"]);
        $c3=preg_match("/[0-9]/",$_POST["password"]);
        if(!($c1 && $c2 && $c3) && !strlen($_POST["password"])<8)
        {
            echo "password not strong";
        }?><br><?php
        if($_POST["username"]=="")
        {
            echo "enter username";
        }?><br><?php
        if($_POST["password"]=="")
        {
            echo "enter password";
        }
    }
    ?>
