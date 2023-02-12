<?php
    include_once "../../generalFunctions.php";
    header("Content-type: text/css; charset: UTF-8");
?>

@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Open+Sans&display=swap');
// font-family: 'Lato', sans-serif;
// font-family: 'Open Sans', sans-serif;

:root {
    --default-color: #f1f1f1;
    --default-font: 'Lato', sans-serif;
}

body, 
html {
    margin: 0 auto;
    font-family: var(--default-font);
}
#logo {
    background-image: url("<?php echo GetWWWIndexHeaderBGUrl(); ?>");
    background-position: center;
    background-size: cover;
    height: 80vh;
}
