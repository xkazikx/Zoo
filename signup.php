<?php
require "header.php";
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Rejestracja</h1>
            <form class="form-signup" action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" palceholder="Username">
                <input type="password" name="pwd" palceholder="Password">
                <button type="submit" name="signup-submit">Zarejestruj</button>
            </form>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>