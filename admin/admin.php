    <?php
    session_start();
    include "../partials/header.php";
    require("../config/db-config.php");
    //PASSWORD_BCRYPT  sécurise la connexion ( Salt et Cost 10)
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = $_POST['mdp'];
//        statement = la selection du mdp dans membre dont le pseudo est = au pseudo entré
        $stmt = $Pdo_Object->prepare('SELECT password FROM member WHERE pseudo=:pseudo');
        $stmt->execute(['pseudo' => $pseudo_saisi]);
        $password = $stmt->fetch();
        if (password_verify($mdp_saisi, $password[0])) {
            $_SESSION['mdp'] = $mdp_saisi;
            echo '<div style="height:70vh">
        <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-auto">
          <div class="bubble">
            <p class="text-center">Espace admin, Bonjour ' . $pseudo_saisi . '!</p>
          </div>
        </div>
      </div>
</div>';
        } else {
            echo "Votre mot de passe ou pseudo est incorrect";
        }
    } else {
        echo "Veuillez compléter tous les champs";
    }

    ?>
        <div class="row justify-content-center">
    <div class="col-auto dropdown ">
        <button class="btn dropdown-toggle " type="button"
                id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
            Listing Membres
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php $data = $Pdo_Object->query("SELECT * FROM member")->fetchAll();
            foreach ($data as $member) {
                echo utf8_encode("<li class='dropdown-item'>" . $member['pseudo'] . "</li>");
            }
            ?>
        </ul>
    </div>
    </div>
    </div>
    <?php
    include "../partials/footer.php";
    ?>
