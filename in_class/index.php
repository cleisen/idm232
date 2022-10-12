<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In class work</title>
</head>
<body>
    <form action="path-to-file-OR-full-URL-to-file" method="get">
        <label for="firstName">First Name</label>
        <input type="text" value="enter username" id="firstName">

        <input type="submit" value="Submit">

    </form>


<?php 
 broken stuff
$page_name = 'Home';
$site_name = 'IDM 232';
$document_title = $page_name . '|' . $site_name;

function redirect_to($location)
{
    header('Location: ' . $location);
    exit;
}

// redirect_to('google.com');

?>


</body>
</html>