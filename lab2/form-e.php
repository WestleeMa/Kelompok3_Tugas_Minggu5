<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label class="form-label"><b>ID Member</b></label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="member" />

        <div class="mb-3">
            <label class="form-label"><b>Password</b></label>
            <input type="password" class="form-control" name="pass" />
        </div>
        <div>
            <input type="submit" class="btn btn-primary">
        </div>
    </form>