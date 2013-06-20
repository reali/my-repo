<?php
$repo_inf = $_GET['repo'];
$owner = $_GET['owner'];
require 'blocks/auth.php';
$repo = $client->api('repo')->show($owner, $repo_inf);
$contributors = $client->api('repo')->contributors($owner, $repo_inf);
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
                <div style='float: left;'><h3> GitHub Browser >><a href='index.php'> Main</a> >>Repo Info</h3></div>
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
                            $a = count($contributors);
                            for ($i = 0; $i < $a; $i++) {

                                echo "<tr>
                                <td width='35%'><a href='user_info.php?user=" . $contributors[$i]['login'] . "'>" . $contributors[$i]['login'] . "</a>
                                </td>
                                
                                <td width='20%' align='center'>
                                   <a id='like' class='like-Unlike' href=' '>Like</a>
                                </td>
                            </tr>";
                            }
                            ?>
                        </table>      

                    </div>


                </div>


            </div>


        </div>


    </body>
</html>
