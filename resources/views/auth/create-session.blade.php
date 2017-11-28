<form action="/login" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="text" id="exampleInputEmail" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword">Password</label>
        <input type="text" id="exampleInputPassword" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>