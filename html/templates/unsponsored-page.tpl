<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sponsor Page</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<!--{*{include file = 'templates/sponsor-check.tpl'}*}-->

{include file = 'templates/sponsor-navbar.tpl'}
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-3 p-0">
            <h1 class="m-3">Unsponsored Page</h1>
            {if $data["sponsorship_status"] == 0}
                <p class="border-bottom"></p>
            {/if}
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="images/sponsor-child1.jpg" alt="Child example">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="images/sponsor-child3.jpg" alt="Child example">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
		{if $data["sponsorship_status"] == 0}
                {foreach $data as $sponsorData}
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="child-profile-page.php?id={$sponsorData["child_id"]}"><img width="297" height="170" class="card-img-top" src="images/{$sponsorData["photo"]}" alt="Child example"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href='child-profile-page.php?id={$sponsorData['child_id']}'>{$sponsorData['first_name']} {$sponsorData['last_name']}</a>
                                </h4>
                                <p class="card-text"></p>
                            </div>
                            {*<div class="card-footer">*}
                            {*</div>*}
                        </div>
                    </div>
                {/foreach}
		{/if}
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Burkina's Promise 2018</p>
    </div>
    <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
