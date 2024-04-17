<?php require "views/components/head.php";?>
<?php require "views/components/navbar.php";?>

<form method="POST"> 
    <label>
        Email:
        <input type="email" name="email"/>
        <?php if (isset($errors["email"])){?>
            <p class="error"><?= $errors["email"] ?></p>
        <?php } ?>
    </label>
    <label>
        Password:
        <input type="password" name="password"/><span class="explanation">(Atleast 6 characters)</span>
        <?php if (isset($errors["password"])){?>
            <p class="error"><?= $errors["password"] ?></p>
        <?php } ?>
    </label>
    <button>Register</button>
</form>

<?php
    require "views/components/footer.php";
?>