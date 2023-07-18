<form method="POST" action="/unicode">
    <div>
        <input type="text" name="username" placeholder="Nhập họ và tên">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    </div>
    <button style="submit">Submit</button>
</form>
