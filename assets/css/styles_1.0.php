<?php
    include_once "../../generalFunctions.php";
    header("Content-type: text/css; charset: UTF-8");
?>

@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Open+Sans&display=swap');
// font-family: 'Lato', sans-serif;
// font-family: 'Open Sans', sans-serif;

body {
    font-family: 'Lato', sans-serif!important;
}
#web-container {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background-color: #212131;
    background-image: url("<?php echo GetWWWIndexHeaderBGUrl(); ?>")!important;
    background-size: cover;
    background-position: center;
    overflow: hidden;
}
#logo {
    letter-spacing:1px;
    display: inline-block;
}
#logo-subtext {
    margin-top: -10px;
    font-size: .7em!important;
}
#nav-social {
    display: inline-block;
    float: right;
    margin-top: 10px;
}
#nav-social a {
    text-decoration: none;
    font-size: 1.3em;
    color: #fafafa;
    padding: 10px;
    margin: 0 .5px;
    transition: .2s;
    width: 20px;
    border-bottom: 2px solid transparent;
}
#nav-social a:hover {
    color: #dcdcdc;
    border-bottom: 2px solid #fafafa;
}
#login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    min-width: 300px;
}
#login-box h2,
#login-box h6  {
color: #fafafa;
    letter-spacing: 2px;
}
#login-box a {
    text-decoration: none;
    display: inline-block;
    color: #fafafa;
    background-color: rgba(240,240,240,.1);
    padding: .5em 1.4em;
    border-radius: 7px;
    margin: 5px auto;
    font-weight: 500;
    transition: .4s;
}
#login-box a:hover {
    background-color: rgba(240,240,240,.8);
    color: #000;
}