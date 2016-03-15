<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <link
        href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <style type="text/css">
        body {
            font-family: Verdana, Geneva, sans-serif;
            font-family: 'Roboto', Arial, sans-serif;
        }

        a {
            outline: none;
        }
    </style>

</head>
<body style="margin:0; background:#f9f9fb;">
<table bgcolor="#f9f9fb" align="center" width="100%" style="background-color: #f9f9fb;" cellpadding="0" cellspacing="0" border="0">

    <tr>
        <td align="center">
            <table cellpadding="0" cellspacing="0" width="639"
                   style="padding-left:5px; padding-right:5px; font-family: 'Roboto', sans-serif; font-size: 12px; color: #636363; margin-top: 0; margin-right: auto; margin-bottom: 0px; margin-left:auto; text-align:left;">
                <tr>
                    <td style="padding:0;">

                        <table cellpadding="0" cellspacing="0">

                            <tr>
                                <td style="padding-top:100px; padding-right:0; padding-bottom:0; padding-left:33px;">
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td style="padding-left:0; padding-right:0; padding-bottom:10px; padding-top:0; color:#3c3c3e; text-align:center; font-size:26px; font-weight:600;">
                                                Password Reminder Request
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:0; padding-right:0; padding-bottom:25px; padding-top:0; color:#3c3c3e; text-align:center; font-size:16px;">
                                                <?=date('F d, Y')?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:0;">
                                                <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff;"
                                                       style="background:#ffffff; padding-top:40px; padding-bottom:40px; padding-left:30px; padding-right:30px; text-align:left;">
                                                    <tr>
                                                        <td style="color:#3e3e3e; font-size:16px; line-height:1.2; padding:0 0 25px;">
                                                            Dear <?=$userName?>,
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#3e3e3e; font-size:16px; line-height:1.2; padding:0 0 5px;">
                                                            A password reminder request was submitted for your Tekcell
                                                            account.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#3e3e3e; font-size:16px; line-height:1.2; padding:0 0 5px;">
                                                            Please log into your account with the following details.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left:0; padding-right:0; padding-bottom:20px; padding-top:20px; text-align:center;">
                                                            <a href="http://tekcell.blixx.net/Login.php"
                                                               style="color:#fefefe; font-size:14px; text-decoration:none; display:inline-block; padding:15px 15px; text-transform:lowercase; background:#4580b8; font-weight:bold;">
                                                                http://tekcell.blixx.net/Login.php
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#3e3e3e; font-size:16px; line-height:1.2; padding:0 0 5px;">
                                                            Email: <a
                                                                style="color:#4580b8; font-size:16px; text-decoration:underline;"
                                                                href="#"><?=$email?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#3e3e3e; font-size:16px; line-height:1.2; padding:0 0 15px;">
                                                            Password: <?=$password?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#3e3e3e; font-size:16px; line-height:1.2; padding:0 0 25px;">
                                                            If you did not make this request, please let us know.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#3e3e3e; font-size:16px; line-height:1.2; padding:0 0 5px;">
                                                            Tekcell Support Team
                                                        </td>
                                                    </tr>

                                                </table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="padding-left:0; padding-right:0; padding-bottom:20px; padding-top:40px; text-align:center;">
                                                <a href="#"><img border="0" alt="Tekcell" src="images/tekcell.png"> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-left:0; padding-right:0; padding-bottom:20px; padding-top:0; color:#818181; font-size:12px; text-align:center;">
                                                Click. Build. Ship.
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>