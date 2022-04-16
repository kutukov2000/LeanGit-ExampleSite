<!DOCTYPE html>
<html lang="en">
<script>
    window.onload = function(){
        setInterval(clockPainting,1000);
    }
</script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт web-студії "Web-DECO</title>
    <style>
        .big{transform:scale(2);}
    </style>
    <style>
        .shadowtext {
            text-shadow: 1px 3px 2px white, 0 0 lem red;
            color: #210042;
            font-size: 2em;
        }
    </style>
    <script src="js/clock1.js"></script>
    <script type="text/javascript">
function send(){
    var valid = true;
    var elems = document.forms[0].elements;
    for(var i=0;i<document.forms[0].length;i++){
        if(elems[i].getAttribute('type')=='text' ||
           elems[i].getAttribute('type')=='password' ||
           elems[i].getAttribute('type')=='email'){
               if(elems[i].value == ''){
                   elems[i].style.border = '2px solid red';
                   valid = false;
               }
           }
    }
    if(!valid){
        alert('Заповніть всі поля !!!');
        return false;
    }
}

    </script>
</head>

<body background="images/bg.jpg">
    <!-- Каркас сайта -->
    <table border="1" align="center" cellpadding="10">
        <tr>
            <td background="images/bg-3.jpg" colspan="2" height="150" align="right">
                <font size="5" color="Maroon">
                    <h1 class="shadowtext">Сайт web-студії "Web-DECO"</h1>
                </font>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <font size="4">
                    <b>
                        <a href="#">Головка</a>
                        <a href="#">Фотогалерея</a>
                        <a href="#">Телефони</a>
                        <a href="#">Статистика</a>
                        <a href="#">Зареєстровані</a>
                    </b>
                </font>
            </td>
        </tr>
        <tr>
            <td width="30%" valign="top">
                <center><canvas id="canvas" height="120" width="120"></canvas>></center>
                <font size="5" color="navy">
                    <h2>Новини</h2>
                </font>
                <font size="5">
                    <ul>
                        <li><a href="#">Сайт будівельної компанії </a></li>
                        <li><a href="#">Сайт ТМ "Новашкола" </a></li>
                        <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                        <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
                        <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
                        <p align="right"><a href="#">інші...</a></p>
                    </ul>
                </font>
                <hr>
                <H1 align="center">
                    <font color="green">Реєстрація</font>
                </H1>
                <form action="forma.php" method="post" onsubmit="return send();">
                    <TABLE align="center">
                        <TR>
                            <TD>
                                <font color="green">Прізвище</font>:
                            </TD>
                            <TD><input type="text" size="10" maxlength="20" name="name2"> </TD>
                        </TR>
                        <TR>
                            <TD>
                                <font color="green">Ім'я</font> :
                            </TD>
                            <TD><input type="text" size="10" maxlength="20" name="name1"> </TD>
                        </TR>
                        <TR>
                            <TD>
                                <font color="green">Бажаний Login</font> :
                            </TD>
                            <TD><input type="text" size="10" maxlength="20" name="nic1"> </TD>
                        </TR>
                        <TR>
                            <TD>
                                <font color="green">E-Mail</font> :
                            </TD>
                            <TD><input type="email" size="10" maxlength="20" name="email"></TD>
                        </TR>
                        <TR>
                            <TD>
                                <font color="green">Пароль</font> :
                            </TD>
                            <TD><input type="password" size="10" maxlength="20" name="password"></TD>
                        </TR>
                    </TABLE>
                    <p align="center">
                        <input type="submit" value="Зареєструватись">
                        <input type="reset" value="Очистити">
                    </p>
                </form>
                <hr>
            </td>
            <td width="70%" valing='top'>
            <h1 align="center">Фотогалерея</h1>
            <?php
            function excess($file){
                $result = array();
                for($i =0;$i<count($files);$i++){
                    if($files[$i]!="." && $files[$i] !="..")$result[] = $files[];
                }
                return $result;
            }
            $dir = "pic";
            $files = scandir($dir);
            $files = excess($files);
            ?>
            <?php
            for($i =0;$i <count($files);$i++){ ?>
            <img src="<?=$dir."/".$files[$i]?>" alt="" width="350"
            height="250" hspace="5" vspace="7" border="5" onclick="this.classlist.toggle('big')"/>
            <?php if (($i+1)%4==0){?><br /><?php}?>
            <?php } ?>
        </td>
        </tr>
        <tr>
            <td background="images/bg-3.jpg" colspan="2" valig="middle" height="90">
                <font size="4">Сайт розробив "Kutukov Artur"</font>
            </td>
        </tr>
    </table>


</body>

</html>