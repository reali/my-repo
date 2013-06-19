<?php
$username = $_GET['user'];
require 'blocks/auth.php';
$user = $client->api('user')->show($username);

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include_once 'blocks/jquery_connect.php'; ?>
        <title>MobiDev </title>
        <link rel="stylesheet" type="text/css" href="style/style.css">

    </head>
    <body>

        <div id="main">

            <div id="search">
                <div  style='float: left;'><h3>GitHub Browser >> Search</h3></div>
                <div id="search_form">
                    <?php require_once 'blocks/form.php'; ?>
                </div>
            </div>

            <div id="content">
                <div align='center'>
                   
                   
                </div>
                <div  id="user">

                    <?php
                    echo "  <table id='index_table'  width='100%'  align='center'  CELLPADDING=10 >
                        <tr>
                            <td width='17%'  ><h2>".$user[name]. "</h2></td>
        
                                <td width='5%' ROWSPAN='4'><img width='100%'  src='" . $user[avatar_url] . "'></a></td>
                        </tr>
                        <tr>
                            <td>Login : " . $user[login] . "</td>
                        </tr>
                        <tr>
                            <td>Company: " . $user[company] . "</td>
                         </tr>  
                         <tr>
                            <td>Blog : <a href='" .$user[blog] ."' target='blank'>" .$user[blog] ."</a></td>
                         </tr>  
                        <tr>
                            <td>Followers : " .$user[followers] ."</td>
                                <td  align='center' width='12%' > <span><a  class='like-Unlike' href=' '>Like</a></span></td>
                         </tr> 
                </table>";
                    ?>
                </div>
            </div>
        </div>

    </body>
</html>
