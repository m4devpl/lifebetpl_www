<?php
    ini_set('display_errors','1');
    session_start();

    // === CHECK lb_conn_default.php FOR TEMPLATE ===
    include_once "lb_conn.php";

    $lang = 'PL';
    // $baseurl = '//lifebet.pl/';
    $baseurl = '//localhost/lifebetpl_www/';
    $dbconn;
    $dbconn_status;
    $www_index_windowtitle;
    $www_index_headerbgurl;
    

    function ConnectToDB() {
        global $dbconn,$dbconn_status, $lb_dbhost, $lb_dbuser, $lb_dbpass, $lb_dbname;
        
        if (!$dbconn_status){
            $dbconn = new mysqli($lb_dbhost,$lb_dbuser,$lb_dbpass,$lb_dbname);
            if (empty($dbconn->connect_errno)) {
                $dbconn->set_charset("UTF8");
                $dbconn_status = true;
            } else {
                RedirectError($dbconn->connect_errno);
            }
        }
    }

    function DisconnectFromDB() {
        global $dbconn, $dbconn_status;;

        if ($dbconn) {
            $dbconn_status = false;
            $dbconn->Close();
        }
    }

    function GetWWWIndexWindowTitle() {
        global $lang, $dbconn, $www_index_windowtitle;
    
        if (!empty($www_index_windowtitle)) {
            return $www_index_windowtitle;
        } else {
            ConnectToDB();

            if ($result = $dbconn->query("SELECT www_index_windowtitle FROM lb_config WHERE LANG='$lang'")) {
                if ($row=$result->fetch_assoc()) {
                    $www_index_windowtitle = $row['www_index_windowtitle'];
                    DisconnectFromDB();
                    return $www_index_windowtitle ;
                } else {
                    RedirectError($dbconn->errno);
                }
            } else {
                RedirectError($dbconn->errno);
            }
        }
    }

    function GetWWWIndexHeaderBGUrl() {
        global $lang, $dbconn, $www_index_headerbgurl;
    
        if (!empty($www_index_headerbgurl)) {
            return $www_index_headerbgurl;
        } else {
            ConnectToDB();

            if ($result = $dbconn->query("SELECT www_index_headerbgurl FROM lb_config WHERE LANG='$lang'")) {
                if ($row=$result->fetch_assoc()) {
                    $www_index_headerbgurl = $row['www_index_headerbgurl'];
                    DisconnectFromDB();
                    return $www_index_headerbgurl;
                } else {
                    RedirectError($dbconn->errno);
                }
            } else {
                RedirectError($dbconn->errno);
            }
        }
    }

    function CheckUserLoginState() {
        global $baseurl;

        if (isset($_SESSION['user_loginState']) && $_SESSION['user_loginState'] = true) {
            Header('Location: '.$baseurl);
            exit();
        } else {
            Header('Location: '.$baseurl.'u/login/');
            exit();
        }
    }

    function RedirectError($err) {
        global $baseurl;

        DisconnectFromDB();
        $_SESSION['e'] = $err;
        Header('Location: '.$baseurl.'e.php');
        exit();
    }
?>