<?php
//ouverture de la session
session_start();
?>
<h2>Entrer votre Username et votre Password</h2>
<?php
// condition pour verifier le mot de pass et l'username entrer par l'utilisateur
$msg = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (
    isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])
  ) {

    if (
      // 
      $_POST['username'] == 'antara' &&
      $_POST['password'] == '12345678'
    ) {
      // verification de la validité de la session
      $_SESSION['valid'] = true;

      $_SESSION['username'] = 'antara';
      //  redirection de l'utilisateur sur la page welcome en cas de succes de connexion 
      header("location:welcome.php");
    } else {
      $msg = 'Nom et Mot de pass incorrect';
    }
  }
}
?>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" name="username" placeholder="username" required />
    <br><br>
    <input type="password" name="password" placeholder="password" required /><br><br>
    <button type="submit" name="login">Login</button>
    <br><br>
    <h4 class="form-signin-heading" style="color:red;"><?php echo $msg; ?></h4>
  </form>
</body>

</html>