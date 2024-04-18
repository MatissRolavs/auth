<?php require "views/components/head.php";?>
<?php require "views/components/navbar.php";?>

<form method="POST"> 
    <label>
        Email:
        <input type="email" name="email"/>
    </label>
    <label>
        Password:
        <input type="password" name="password"/>
    </label>
    <?php if (isset($errors["user"])){?>
            <p class="error"><?= $errors["user"] ?></p>
        <?php } ?>
    <button>Login</button>
</form>
<?php if(isset($_SESSION["flash_message"])){?>
    <p><?= $_SESSION["flash_message"] ?></p>
<?php } ?>
<?php
    require "views/components/footer.php";
?>