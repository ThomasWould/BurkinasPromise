<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container-fluid">
        <a href="sponsor-page.php" class=""><img src="images/navlogo2.png" style="width: 80px; height: 60px; margin-right: 20pt;></a>
    <a class="navbar-brand" href="accedes-page.php"></a>
        <h6 class="text-center text-white">Sponsor Page</h6>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" style="margin-left: 10%;" id="navbarResponsive">
            <ul class="navbar-nav nav" style="margin-left: 10%;">
                <li class="nav-item">
                    <a class="nav-link" href="sponsor-page.php" style="padding-left: 10%;">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="unsponsored-page.php">Unsponsored Children</a>
                </li>
                {if ($user->isSponsor())}
                <li class="nav-item">
                    <a class="nav-link" href="sponsor-profile-page.php">Profile</a>
                </li>
                {/if}
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
                <li class="nav-item text-right" style="margin-left: 220px;">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    </form>
                </li>
                <li class="nav-item" style="padding-bottom: 0px;">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{include file = 'templates/logout-modal.tpl'}
