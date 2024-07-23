<html>
    <head><title>User Form</title></head>
    <body>

        <h1>Enter your details here</h1>

        <!-- Here the url helper is used inside action where it helps to join the uri with the base URL  -->
        <form method="POST" action="<?=url('get-userdata')?>">


            <!-- The redirected message  -->
            <?=session('message')?><br>

            <label>UserName: <input type="text" name="name"></label><br>
            <label>Email: <input type="text" name="email"></label><br>
            <label>password: <input type="password" name="password"></label><br>
            <input type="hidden" name="_token" value="<?=csrf_token()?>">
            <input type="submit" value="send">

    </body>
</html>
