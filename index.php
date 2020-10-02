<h1>Se connecter :</h1>
<form action="content/login.php" method="POST"><br>
    Adresse email: <input type="email" name="mail"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="login" value="Se connecter">
</form>

<h1>S'inscrire :</h1>
<form action="content/createAccount.php" method="POST">
    Login: <input type="text" name="login"><br>
    Adresse email : <input type="email" name="mail"><br>
    Password: <input type="password" name="password"><br>
    Verifier password : <input type="password" name="verif"><br>
    Numero de Téléphone : <input type="phonenumber" name="phonenumber"><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" name="createAccount" value="S'inscrire">
</form>