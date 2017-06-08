<nav class="navbar navbar-toggleable-sm navbar-inverse fixed-top mr-auto" style="background-color: #b71c1c;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expeanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="" class="navbar-brand"><i class="fa fa-money"></i> ยืมหน่อย</a>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
            <li class="nav-item hidden-md-up">
            <form method="post">
                <button type="hidden" value="true" name="logout2" class="nav-link btn btn-link" style="cursor: pointer;"><i class="fa fa-sign-out"></i> Logout</a>
            </form>
            </li>
        </ul>
    </div>
     <ul class="navbar-nav hidden-sm-down">
        <li class="nav-item px-3">
            <span class="navbar-text"> <?php echo ' '.$_SESSION["name"].' '; ?> </span>
        </li>
        <li class="nav-item px-1">
            <form method="post">
                <button type="submit" value="true" name="logout" class="btn btn-danger" style="cursor: pointer;"> Logout <i class="fa fa-sign-out"></i></button>
            </form>
        </li>
    </ul>
</nav>