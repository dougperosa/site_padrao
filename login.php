<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <title>Site Padrão</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8"/>
        <meta name="description" content="Site Padrão"/>
        <meta name="author" content="Douglas Perosa"/>

        <link rel="shortcut icon" href="imagens/favicon.ico"/>


        <link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    </head>

    <body style="background-color: #3a87ad">
        <div class="container">
            <table height="200" width="450" style="margin-left: 250px; margin-top: 180px; background-color: #bce8f1; border-radius: 15px">
                <tr>
                    <td valign="middle" align="center">
                        <br>
                            <form class="form-signin" name="form" id="form-login" method="post" action="validaLogin.php">
                                <br><br>
                                    <table width="200" border="0" align="center" bgcolor="#99cc99">
                                        <tr>
                                            <td width="30%">Usuário:</td>
                                            <td width="70%"><input placeholder="Digite seu Usuário" type="text" class="text" name="Usuario" id="Usuario" style="height: 30px" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Senha:</td>
                                            <td><input placeholder="Digite sua Senha" type="password" class="text" name="Senha" id="Senha"  style="height: 30px" required></td>
                                        </tr>
                                        <tr align="right">
                                            <td>&nbsp;</td>
                                            <td><input style="width: 120px; margin-top: 10px" type="submit" class="btn btn-info"  name="loginButton" value="Entrar" id="loginButton"></td>
                                        </tr>
                                        <tr align="right">
                                            <td>&nbsp;</td>
                                        </tr>
                                    </table>
                            </form>
                    </td>
                </tr>
            </table>
            <img style="position: absolute; z-index: 1; margin-top: -100px; margin-left: 110px" src="imagens/logo.png" width="250" height="200">
        </div>
    </body>