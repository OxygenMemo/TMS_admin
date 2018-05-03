<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <?= form_open(); ?>
    username : <input type='text' name='username' maxlength='20'><br/>
    password : <input type='password' name='password' maxlength='20'><br/>
    <input type="submit" name="btn_login">
    </form>
</body>
</html>