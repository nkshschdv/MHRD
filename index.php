<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Untitled Document</title>
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        <div id="login">
            <h2 align="center">Admin Login</h2>
            <table border="0" align="center" cellpadding="10" cellspacing="10">
                <tr>
                    <td colspan="2">
                        <span id="display" style="color:#FF0000;"></span>
                    </td>
                </tr>
                <form name="frm" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>
                            <input type="text" name="uname" id="tb" required placeholder="Enter Username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="pass" id="tb" required placeholder="Enter Password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="s1" value="LogIn" id="sb">
                        </td>
                    </tr>
            </table>
        </div>

        <?php
            if(isset($_POST['s1']))
            {
                include("connection.php");
                $count=0;
                $mysqlj=mysqli_query($m,"Select * from users where username='$_POST[uname]' and password='$_POST[pass]'");
                $count=mysqli_num_rows($mysqlj);
                if($count>=1)
                {
                     echo "done";
                }
                else
                {
                    ?>
                    <script type="text/javascript">
                    document.getElementById("display").innerHTML="Wrong username or password";
                    </script>
                    <?php
                }
            }
        ?>

    </body>
</html>


