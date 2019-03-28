<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Child Profile Page</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    {include file = 'templates/sponsor-navbar.tpl'}

    <!-- Page Content -->

    <div class="container">
      {*<a href="child-profile-page.php?child_data_id={$sponsorData['child_data_id']}" class="list-group-item">{$sponsorData["first_name"]} {$sponsorData["last_name"]}</a>*}
        {foreach $data as $sponsorData}
          <div class="row">
        <div class="col-lg-3 p-0">
          <h3 class="m-3">Child Profile Page</h3>
          <p class="border-bottom"></p>
          <div class="list-group">
            {*<a href="child-profile-page.php?id={$sponsorData['child_id']}" class="list-group-item"> {$sponsorData["first_name"]} {$sponsorData["last_name"]}</a>*}
          </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="images/{$sponsorData["photo"]}" alt="Child Profile example">
            <div class="card-body">

              <h3 class="card-title">{$sponsorData["first_name"]} {$sponsorData["last_name"]}</h3>
              <p class="card-text"></p>
            </div>
          </div>
          <!-- /.card -->
          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Child Information
            </div>
            <div class="card-body">
              <p>My fathers name is {$sponsorData["fathers_first_name"]}</p>
              <p>My mothers name is {$sponsorData["mothers_first_name"]}</p>
              <p>I have {$sponsorData["number_of_brothers"]} brother(s) and {$sponsorData["number_of_sisters"]} sister(s).</p>
              <hr>
              <p>I was born in {$sponsorData["place_of_origin"]}.</p>
              <hr>
              <p>My birthday is {$sponsorData["date_of_birth"]}!</p>
              <hr>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
{/foreach}
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
