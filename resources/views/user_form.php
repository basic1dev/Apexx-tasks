<html>
    <head><title>User Form</title></head>
    <body>

        <h1><?=$title1?></h1>
        <h2><?=$title2?></h2>
        <h3><?=$test?></h3>

        <!-- Here the url helper is used inside action where it helps to join the uri with the base URL  -->
        <form method="POST" action="<?=url('get-userdata')?>">


            <!-- The redirected message  -->
            <?=session('obtained-message')?><br>


            <label>UserName: <input type="text" name="name"></label><br> <br>
            <label>Email: <input type="text" name="email"></label><br> <br>
            <label>password: <input type="password" name="password"></label><br> <br>
            <input type="hidden" name="_token" value="<?=csrf_token()?>">
            <input type="submit" value="send">

    </body>
</html>
