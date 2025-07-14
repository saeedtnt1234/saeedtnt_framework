<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <?php use Core\Security;?>

    <form action="/saeedtnt_framework/public/dashbord"  method="post" style="background-color: yellowgreen; color: red;">
        <input type="hidden" name="csrf_token" value="<?php echo Security::generateCsrfToken(); ?>">
        <input type="email" name="email" placeholder="ایمیل">
        <input type="password" name="password" placeholder="رمز عبور">
        <input type="submit" value="ارسال">
    </form>
</body>
</html>
