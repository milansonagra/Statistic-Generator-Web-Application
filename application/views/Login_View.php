<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
    <head>
        <title>Login</title>
    </head>
    <body>
        <center>
        <font color="red"><?php echo "$msg";?></font>    
        <div id='login_form'>
            <form action='Login/process' method='post' name='process'>
                <table cellpadding ="5px" cellspacing="10px"  style="border: double;align-content: center;">
                    <tr>
                        <th colspan="2">
                            <center><h2>Login</h2></center>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php if(! is_null($msg)) echo $msg;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='username'>Username</label>
                        </td>
                        <td>
                            <input type='text' name='username' id='username' size='25' />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for='password'>Password</label>
                        </td>
                        <td>
                            <input type='password' name='password' id='password' size='25' />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><input type='Submit' value='Login' /></center>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        </center>
    </body>
</html>