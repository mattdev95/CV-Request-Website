<?php
//Connection for database
require_once 'db.php';
//Select Database
$sql = "SELECT * FROM cv_requests";
$result = $db_connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="description" content="Matthew's cv requests">
<meta name="author" content="Matthew Edwards">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/view_CV_requested.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet" type="text/css">
<title>CV Requests</title>
</head>
<body>
   <!--This is the main part of the page-->
   <div id="container">
   <!--This goes to the image map-->
     <div id="home_link">
        <a href="/web_form.html">
        <img border="0" alt="Go back to the web form" src="images\back.png" width="50" height="50">
        </a>
     </div>
     <!--This is the table for all the cv requests-->
     <div id="table_style">
       <div id="table_header" >
          <h1 >CV Requests</h1>
       </div>
     <table>
       <thead>
          <tr>
             <th>ID</th>
             <th>Company Name</th>
             <th>Comments</th>
          </tr>
       </thead>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
      <tbody>
    <tr>
    <td><?php echo htmlspecialchars($row['unique_id']); ?></td>
     <td><?php echo htmlspecialchars($row['your_company_name']); ?></td>
     <td><?php echo htmlspecialchars($row['user_comment']); ?></td>
</tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="3">There's No data found!!!</th>
 </tr>
 <?php
}
?>
    </tbody>
</table>
</div>
  </div>
	<script src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="   crossorigin="anonymous"></script>
<script src="scripts/view_CV_requested.js">
// this will make each colour different each row

</script>


</body>
</html>
