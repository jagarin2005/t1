<?php
    $navbar_sr = ""; $navbar_sr2 = ""; $navbar_sr3 = ""; $navbar_sr4 = "";
    $active = ""; $active2 = ""; $active3 = ""; $active4 = "";
    if(preg_match("/WorkSpace\b/", $_SESSION['title'])){ $navbar_sr = '<span class="sr-only">(current)</span>'; $active = " active";}
    if(preg_match("/Add\b/", $_SESSION['title'])){ $navbar_sr2 = '<span class="sr-only">(current)</span>';  $active2 = " active";}
    if(preg_match("/Edit\b/", $_SESSION['title'])){ $navbar_sr3 = '<span class="sr-only">(current)</span>';  $active3 = " active";}
?>

<nav class="navbar navbar-toggleable-sm navbar-inverse bg-primary fixed-top mr-auto">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expeanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="" class="navbar-brand">WorkSpace</a>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
            <li class="nav-item<?php echo $active; ?> pr-1">
                <a href="home" class="nav-link"><i class="fa fa-search"></i> Search <?php echo $navbar_sr; ?></a>
            </li>
            <li class="nav-item<?php echo $active2; ?> pr-1">
                <a href="insert" class="nav-link"><i class="fa fa-plus"></i> Add <?php echo $navbar_sr2; ?></a>
            </li>
            <li class="nav-item<?php echo $active3; ?> pr-1">
                <a href="edit" class="nav-link"><i class="fa fa-pencil-square-o"></i> Edit & Delete <?php echo $navbar_sr3; ?></a>
            </li>
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
                <button type="submit" value="true" name="logout" class="btn btn-primary" style="cursor: pointer;"> Logout <i class="fa fa-sign-out"></i></button>
            </form>
        </li>
    </ul>
</nav>