<?php
$http = url('/');
?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<table cellpadding="0" cellspacing="0" align="center" border="0" width="100%" >
    <tr>
        <td width="600" border="0"  align="center">
            <table cellpadding="0" cellspacing="0" border="0" width="600" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
                <tr>
                    <td width="100%" style="width:100%; text-align: center; border:0; padding: 0;">
                        <a target="_blank" href="{{$http}}"><img src="{{$http}}/img/seo.jpg" style="width:100%; display: block" alt="43-05"></a>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" bgcolor="#F2F2F2" width="100%" style="width:100%; text-align: center; border:0; padding: 0; background-color: #F2F2F2;">
                        <table cellpadding="0" align="center" cellspacing="0" border="0" width="400">
                            <tr>
                                <td align="center" border="0" style="padding-top: 20px; padding-bottom: 20px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 13pt; color: #808080; line-height: 1.5em;">
                                    <span style="color: #FEA950; font-weight: bold; font-size: 12pt">Buenas<br> </span>
                                    Usted se ha registrado sastifactoriamente en <a target="_blank" href='{{$http}}/' style='text-decoration: none'><span style='font-weight:700;font-size: 16px;color: #FEA950;'>{{$http}}</span></a>.<br>
                                    <br>
                                    <div style='background: #FEA950; color: #F0F0F0;width: 98%; padding: 5px 10px;'>INFORMACIÓN BÁSICA</div>
                                    <br>
                                    <div style='padding-left: 10px'>
                                        Usuario: {{$user->email}} <br>
                                        Contraseña: {{$user->password}} <br>
                                        <br>
                                    </div>
                                    <span style="color: #FEA950">Mensaje automatico desde Carmona.</span> <i></i>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top" width="100%" bgcolor="" style="width:100%; border:0; padding-top: 20px;padding-bottom: 20px;">
                        <table cellpadding="0" cellspacing="0" align="center" border="0" width="550" style="width: 550px; border-collapse: collapse;">
                            <tr>
                                <td align="left" valign="bottom" width="50%" bgcolor="#ffffff" style="width: 50%; line-height: 1.3em; letter-spacing: 1px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 8pt; color: #ffffff;background-image: url('{{$http}}/img/footer/background.png')">
                                    <a target="_blank" href="{{$http}}"><img style="padding-bottom: 20px;width: 120px;" src="{{$http}}/img/logo_big.svg" alt="2-04"></a><br>
                                </td>
                                <td align="right" valign="bottom" width="50%" bgcolor="#ffffff" style="width: 50%; line-height: 1.3em; letter-spacing: 1px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 8pt; color: #FEA950;">
                                    <a  style="color: #FEA950; text-decoration: none" href="{{$http}}"><b>CONTÁCTENOS</b></a><br><br>
                                    Carmona,<br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
