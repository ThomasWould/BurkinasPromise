<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a href="admin-page.php" class=""><img src="images/navlogo2.png" style="width: 100%; height: 50px; margin-right: 20pt;></a>
    <a class=" navbar-brand" href="accedes-page.php"></a>
    <h4 class="text-center text-white mr-5"></h4>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                {if $user -> account_type == "owner"}
                <a class="nav-link" href="admin-page.php">
                    {else}
                    <a class="nav-link" href="accedes-page.php">
                        {/if}
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="child-info.php">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Child Information</span>
                </a>
            </li>
            {if $user -> account_type == "owner"}
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="sponsor-list.php">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Sponsors</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="view-connections.php">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Connections</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="presentation-page.php">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Presentation</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="add-sponsor.php">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Add Sponsor</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="sponsor-connect.php">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">New Connection</span>
                    </a>
                </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="add-child.php">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Add Child</span>
                </a>
            </li>
            {/if}
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">New Messages:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong> </strong>
                        <span class="small float-right text-muted"> </span>
                        <div class="dropdown-message small"></div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong> </strong>
                        <span class="small float-right text-muted"> </span>
                        <div class="dropdown-message small"></div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong> </strong>
                        <span class="small float-right text-muted"> </span>
                        <div class="dropdown-message small"></div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#"> </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                  <strong> </strong>
              </span>
                        <span class="small float-right text-muted"> </span>
                        <div class="dropdown-message small"></div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong> </strong>
              </span>
                        <span class="small float-right text-muted"> </span>
                        <div class="dropdown-message small"></div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong> </strong>
              </span>
                        <span class="small float-right text-muted"> </span>
                        <div class="dropdown-message small"></div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#"> </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>

{include file = 'templates/logout-modal.tpl'};
