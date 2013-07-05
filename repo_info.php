<?php
$repo_inf = $_GET['repo'];
$owner = $_GET['owner'];
require 'blocks/auth.php';
include('connect.php');
$repo = $client->api('repo')->show($owner, $repo_inf);
$contributors = $client->api('repo')->contributors($owner, $repo_inf);
foreach ($contributors as $row) {

    $sql[] = '(' . $row['id'] . '," ' . mysql_real_escape_string($row['login']) . '")';
}

mysql_query('INSERT INTO users (user_id, name) VALUES ' . implode(',', $sql));
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MobiDev</title>
        <script type='text/javascript' src='js/jquery-1.8.1.js'></script>
        <script type='text/javascript' src='js/script.js'></script>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/style1.css">
    </head>
    <body>

        <div id="main">

            <div id="search">
                <div style='float: left;'><h3 style="margin-left: 5px;"> GitHub Browser >><a href='index.php'> Main</a> >>Repo Info</h3></div>
                <div id="search_form">
                    <?php require_once 'blocks/form.php'; ?>
                </div>
            </div>

            <div id="content">
                <div id="repo_info">
                    <div align="center" id="rep">
                        <h2> <?php echo $repo[full_name]; ?></h2>
                        <table width="40%" id='table_inf' align='center' >
                            <tr>
                                <td >  Description : <?php echo $repo[description]; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    Watchers :

                                    <?php echo $repo[watchers]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td  width="30%">
                                    Forks :

                                    <?php echo $repo[forks]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td  width="30%">
                                    Open Issues :  

                                    <?php echo $repo[open_issues]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Homepage :

                                    <a id="href" href=" <?php echo $repo[homepage]; ?>"><?php echo $repo[homepage]; ?>  </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    GitHub repo :

                                    <a href="<?php echo $repo[repos_url]; ?>"> <?php echo $repo [organization][repos_url]; ?> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Created at :

                                    <?php echo $repo[created_at]; ?>
                                </td>
                            </tr>
                        </table>       
                    </div>
                </div>
                <div id="contributors">
                    <div align="center" id="rep">
                        <h2>Contributors : </h2>
                        <table id='index_table' >
                            <?php
                   
                                $result = mysql_query("SELECT vote_up,
vote_down FROM votes WHERE user_id");
                            
                            while ($row = mysql_fetch_array($result)) {
                                $item[] = $row;
                            }
                            
                            $a = count($contributors);
                            for ($i = 0; $i < $a; $i++) {
                                if ($i < 8) {
                                    echo "<tr>
                                <div id='nam'><td  align='center'  width='35%'><a    href='user_info.php?user=" . $contributors[$i][login] . "' >" . $contributors[$i][login] . "</a></div>
                               <div class='section' >
                        <div class='vote_up right' id='" . $contributors[$i][id] . "'>
                            <span class='yes_value'>" . (!empty($item[$i]['vote_up']) ? $item[$i]['vote_up'] : "0") . "</span>
                                <img style='cursor: pointer;' src='img/vote_up.png' alt='vote_up' class='vote_up_image'>
                          
                            </div>
                           <div class='vote_down left' id='" . $contributors[$i][id] . "'>
                            <span class='no_value'>" . (!empty($item[$i]['vote_down']) ? $item[$i]['vote_down'] : "0") . "</span> 
                                <img style='cursor: pointer;' src='img/vote_down.png' alt='vote_down' class='vote_down_image'>
                           
                            </div>
                            </div>
                                </td>
                            </tr>";
                                }
                            }
                            ?>
                        </table>      

                    </div>


                </div>


            </div>


        </div>


    </body>
</html>
