<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Page</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
{include file = 'templates/admin-navbar.tpl'};

<div class="content-wrapper">
    <div class="container-fluid">
        {if $success === true}
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Sponsor has been added.
            </div>
        {elseif $success === false}
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sorry!</strong> A sponsor with this email already exists.
            </div>
        {/if}
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Sponsor</li>
        </ol>
        <!-- Add Form-->
        <!-- Default form register -->
        <p class="h4 text-left mb-4">Add Sponsor</p>
        <form role="form" action="add-sponsor.php" method="post">
            <input type="hidden" name="processForm" value="1">

            <div class="form-group">

                <label for="first_name">First name</label>
                <input type="text" class="form-control col-4" id="first_name" name="first_name" placeholder="" required
                        {if isset($first_name)}value="{$first_name}"{/if}/>
            </div>

            <div class="form-group">

                <label for="last_name">Last Name</label>
                <input type="text" class="form-control col-4" id="last_name" name="last_name" placeholder="" required
                        {if isset($last_name)}value="{$last_name}"{/if}/>

            </div>

            <div class="form-group">

                <label for="address">Address</label>
                <input type="text" class="form-control col-4" id="address" name="address" placeholder="" required
                        {if isset($address)}value="{$address}"{/if}/>

            </div>

            <div class="form-group">

                <label for="city">City</label>
                <input type="text" class="form-control col-4" id="city" name="city" placeholder="" required
                        {if isset($city)}value="{$city}"{/if}/>

            </div>

            <div class="form-group">
                <label for="state">State</label>
                <select id="state" name="state" class="form-control selectpicker col-4">
                    <option value="">Select State</option>
                    <option {if isset($state)}{if $state = "Alabama"}selected{/if}{/if}>Alabama</option>
                    <option {if isset($state)}{if $state = "Alaska"}selected{/if}{/if}>Alaska</option>
                    <option {if isset($state)}{if $state = "Arizona"}selected{/if}{/if}>Arizona</option>
                    <option {if isset($state)}{if $state = "Arkansas"}selected{/if}{/if}>Arkansas</option>
                    <option {if isset($state)}{if $state = "California"}selected{/if}{/if}>California</option>
                    <option {if isset($state)}{if $state = "Colorado"}selected{/if}{/if}>Colorado</option>
                    <option {if isset($state)}{if $state = "Connecticut"}selected{/if}{/if}>Connecticut</option>
                    <option {if isset($state)}{if $state = "Delaware"}selected{/if}{/if}>Delaware</option>
                    <option {if isset($state)}{if $state = "District of Columbia"}selected{/if}{/if}>District of Columbia</option>
                    <option {if isset($state)}{if $state = "Florida"}selected{/if}{/if}>Florida</option>
                    <option {if isset($state)}{if $state = "Georgia"}selected{/if}{/if}>Georgia</option>
                    <option {if isset($state)}{if $state = "Hawaii"}selected{/if}{/if}>Hawaii</option>
                    <option {if isset($state)}{if $state = "Idaho"}selected{/if}{/if}>Idaho</option>
                    <option {if isset($state)}{if $state = "Illinois"}selected{/if}{/if}>Illinois</option>
                    <option {if isset($state)}{if $state = "Indiana"}selected{/if}{/if}>Indiana</option>
                    <option {if isset($state)}{if $state = "Iowa"}selected{/if}{/if}>Iowa</option>
                    <option {if isset($state)}{if $state = "Kansas"}selected{/if}{/if}>Kansas</option>
                    <option {if isset($state)}{if $state = "Kentucky"}selected{/if}{/if}>Kentucky</option>
                    <option {if isset($state)}{if $state = "Louisiana"}selected{/if}{/if}>Louisiana</option>
                    <option {if isset($state)}{if $state = "Maine"}selected{/if}{/if}>Maine</option>
                    <option {if isset($state)}{if $state = "Maryland"}selected{/if}{/if}>Maryland</option>
                    <option {if isset($state)}{if $state = "Massachusetts"}selected{/if}{/if}>Massachusetts</option>
                    <option {if isset($state)}{if $state = "Michigan"}selected{/if}{/if}>Michigan</option>
                    <option {if isset($state)}{if $state = "Minnesota"}selected{/if}{/if}>Minnesota</option>
                    <option {if isset($state)}{if $state = "Mississippi"}selected{/if}{/if}>Mississippi</option>
                    <option {if isset($state)}{if $state = "Missouri"}selected{/if}{/if}>Missouri</option>
                    <option {if isset($state)}{if $state = "Montana"}selected{/if}{/if}>Montana</option>
                    <option {if isset($state)}{if $state = "Nebraska"}selected{/if}{/if}>Nebraska</option>
                    <option {if isset($state)}{if $state = "Nevada"}selected{/if}{/if}>Nevada</option>
                    <option {if isset($state)}{if $state = "New Hampshire"}selected{/if}{/if}>New Hampshire</option>
                    <option {if isset($state)}{if $state = "New Jersey"}selected{/if}{/if}>New Jersey</option>
                    <option {if isset($state)}{if $state = "New Mexico"}selected{/if}{/if}>New Mexico</option>
                    <option {if isset($state)}{if $state = "New York"}selected{/if}{/if}>New York</option>
                    <option {if isset($state)}{if $state = "North Carolina"}selected{/if}{/if}>North Carolina</option>
                    <option {if isset($state)}{if $state = "North Dakota"}selected{/if}{/if}>North Dakota</option>
                    <option {if isset($state)}{if $state = "Ohio"}selected{/if}{/if}>Ohio</option>
                    <option {if isset($state)}{if $state = "Oklahoma"}selected{/if}{/if}>Oklahoma</option>
                    <option {if isset($state)}{if $state = "Oregon"}selected{/if}{/if}>Oregon</option>
                    <option {if isset($state)}{if $state = "Pennsylvania"}selected{/if}{/if}>Pennsylvania</option>
                    <option {if isset($state)}{if $state = "Rhode Island"}selected{/if}{/if}>Rhode Island</option>
                    <option {if isset($state)}{if $state = "South Carolina"}selected{/if}{/if}>South Carolina</option>
                    <option {if isset($state)}{if $state = "South Dakota"}selected{/if}{/if}>South Dakota</option>
                    <option {if isset($state)}{if $state = "Tennessee"}selected{/if}{/if}>Tennessee</option>
                    <option {if isset($state)}{if $state = "Texas"}selected{/if}{/if}>Texas</option>
                    <option {if isset($state)}{if $state = "Utah"}selected{/if}{/if}>Utah</option>
                    <option {if isset($state)}{if $state = "Vermont"}selected{/if}{/if}>Vermont</option>
                    <option {if isset($state)}{if $state = "Virginia"}selected{/if}{/if}>Virginia</option>
                    <option {if isset($state)}{if $state = "Washington"}selected{/if}{/if}>Washington</option>
                    <option {if isset($state)}{if $state = "West Virginia"}selected{/if}{/if}>West Virginia</option>
                    <option {if isset($state)}{if $state = "Wisconsin"}selected{/if}{/if}>Wisconsin</option>
                    <option {if isset($state)}{if $state = "Wyoming"}selected{/if}{/if}>Wyoming</option>
                    <option {if isset($state)}{if $state = "Other Country"}selected{/if}{/if}>Other Country</option>
                </select>
            </div>

    <div class="form-group">

        <label for="zip">Zip Code</label>
        <input type="text" class="form-control col-4" id="zip" name="zip" placeholder="" pattern="[0-9][0-9][0-9][0-9][0-9]" required
                {if isset($zip)}value="{$zip}"{/if}/>

    </div>

    <div class="form-group">

        <label for="country">Country</label>
        <input type="text" class="form-control col-4" id="country" name="country" placeholder="" required
                {if isset($country)}value="{$country}"{/if}/>

    </div>

    <div class="form-group">

        <label for="phone">Phone Number (Format: xxx-xxx-xxxx)</label>
        <input type="text" class="form-control col-4" id="phone" name="phone" placeholder="" pattern="[0-9][0-9][0-9][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]" required
                {if isset($phone)}value="{$phone}"{/if}/>

    </div>

    <div class="form-group">

        <label for="email">Email Address</label>
        <input type="email" class="form-control col-4" id="email" name="email" placeholder="" required
                {if isset($email)}value="{$email}"{/if}/>

        <div class="text-left mt-4">
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </div>
    </form>
    <!-- Default form register -->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer bg-dark">
        <div class="container">
            <div class="text-center">
                <small class="text-white">Copyright © Burkina's Promise 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>

</div>
</div>
</body>

</html>
