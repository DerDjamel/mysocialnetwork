<?php require_once ROOT_PATH . '/views/basic/header.php'; ?>

<h1>Login into your account</h1>
<form method="post" action="<?php echo SITE_URL; ?> /Login/logUserIn">
    <input type="email"     name="email"    placeholder="enter your email">
    <input type="password"  name="password" placeholder="password">
    <button>Log in</button>
</form>

<?php require_once ROOT_PATH . '/views/basic/footer.php'; ?>