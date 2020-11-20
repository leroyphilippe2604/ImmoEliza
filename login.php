<section>
    <article>
        <form action="acceuil.php" method="post">
            <label for="">Email</label><br>
            <input type="email" name="email"><br>
            <label for="">Mot de passe</label><br>
            <input type="password" name="pass"><br>
            <input class="btn btn-primary" type="submit" value="Se connecter"><br>
        </form>
    </article>
</section>
<?php
    include ('db.php');

    if(isset($_POST['email'])){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt ->execute([$_POST['email']]);
        $users = $stmt->fetch();

        if($users && password_verify($_POST['pass'], $users['pass'])){
            //se connecter
            $_SESSION['id_user'] = $users['id'];
            header('location: index.php');
        }else{
            echo 'Le mot de passe est incorrect';
        }
     }
?>