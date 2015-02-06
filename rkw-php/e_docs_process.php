<html>
  <head>
    <title>E-Docs Log-In</title>
  </head>

  <body>
<?php
session_start();
unset($_SESSION['logged_in']);
$password=$_POST['thebox'];

if (strcmp($password, "communitydinner") == 0) {
  $_SESSION['failed'] = FALSE;
  $_SESSION['logged_in'] = TRUE;
  /* Redirect browser  */
  header('Location: http://www.casaverde.us/docs/e_docs_index.php');
  /* Make sure that code below does not get executed when we redirect. */
  exit;
} else {
  $_SESSION['failed'] = TRUE;
  $_SESSION['logged_in'] = FALSE;
  /* Redirect browser */
  header('Location: http://www.casaverde.us/e_docs.php');
/*echo "Incorrect Password to view CasaVerde E-Docs";*/
}
?>
  </body>

</html>

