@if ($errors->any())
    <ul>
        {!! implode('', $errors->all('<li>:message</li>')) !!}
    </ul>
@endif


<form method="POST" action="store">
    <label for="">Name<input type="text" name="name"> </label> </br>
    <label for="">email<input type="text" name="email"> </label> </br>
    <label for="">password<input type="password" name="password"> </label></br>
    <label for="">confirm password<input type="password" name="password_confirmation"> </label></br>
    <input type="submit" value="Register">
    @csrf
</form>


