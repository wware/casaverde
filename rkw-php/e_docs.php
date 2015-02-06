<html>
  <head>
    <title>E-Docs Log-In</title>
  </head>

  <body>
<?php
session_start();
unset($_SESSION['logged_in']);
?>
    <form action="http://www.casaverde.us/e_docs_process.php" 
      method="post">
      <p>
        E-Docs Password:  
        <input type="password" name="thebox" id="thebox" value="">
      </p>
      <p>
        <input type="submit" id="submit" value="Submit">
      </p>
    </form>
<?php
if ($_SESSION['failed']) {
  echo
    "Incorrect Password to view CasaVerde E-Docs . . you can try again.";
}
$_SESSION['failed'] = FALSE;
?>
  </body>

</html>

