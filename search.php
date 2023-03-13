<!DOCTYPE html>
<html>
    <head>
<meta charset="UTF-8">
<title>Search</title>
    </head>
    <body>
        <a download="" href="pdf" "target="_blank" >download</a>
        <?php
$connection = new mysqli("localhost","root","","geeksforgeeks");
$stmt = $connection ->prepare("select * from pdf_data");
$stmt ->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()){
    echo $row["username"];

}


?>
    </body>
</html>