<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <?php
    require_once(__DIR__ . "/modal/Card_Registration.php");
//    $url = explode("/", $_SERVER['REQUEST_URI']);
    $message = null;
    if (isset($_POST["add"]) && $_POST["add"] === "save_new_details") {
        try {
            $response = Card_Registration::newRegistrationData($_POST);
            $message = $response["message"];
            $registration_number = $response["user_id"];
        } catch (Exception $e) {
            $message = $e->getMessage();
        }
    }
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Digital Advertiser Visiting Card</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once(__DIR__ . '/view/common_css.php') ?>

</head>

<body>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <?php require('left_sidebar.php'); ?>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <?php require_once(__DIR__ . "/view/header.php"); ?>
    <!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Add Card</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active"><a href="#">Add New User </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <?php if(isset($message)) {?>
                <h4 style="color: #00A000;"><?php echo $message; ?></h4>

            <?php }?>
            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                <input type="hidden" name="add" value="save_new_details">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Basic Details</strong>
                            </div>
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="full_name" placeholder="Full Name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                            <input type="email" name="email" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" name="mobile" placeholder="Mobile" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="email" name="alternate_phone"
                                                   placeholder="Alternate Phone Number" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12"><textarea name="address" rows="2" placeholder="Address"
                                                                  class="form-control"></textarea></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Business Details</strong>
                            </div>
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="company_name" placeholder="Company name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="year_of_est " placeholder="Year Of Establish "
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-building"></i></div>
                                            <input type="text" name="nature_of_business"
                                                   placeholder="Nature Of Business" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" name="specialities" placeholder="Specialities"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Payment  Details</strong>
                            </div>
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="paytm" placeholder="Paytm Upi"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="google_pay " placeholder="Google Pay Number"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-building"></i></div>
                                            <input type="text" name="phone_pay"
                                                   placeholder="Phone Pay" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" name="bank_account" placeholder="Bank Account Number"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" name="account_ifsc" placeholder="Bank Account IFSC"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Social Account Details</strong>
                            </div>
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="facebook" placeholder="Facebook Page Link"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="instagram " placeholder="Instagram"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-building"></i></div>
                                            <input type="text" name="linkdin"
                                                   placeholder="Linkdin" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" name="pinterest" placeholder="Pinterest"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" name="telegram" placeholder="Telegram"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" name="twitter" placeholder="Twitter"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" name="website" placeholder="Website"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">YouTube Video Link</strong>
                            </div>
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="youtube_id_1" placeholder="You Tube Link Id"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="youtube_id_2" placeholder="You Tube Link Id"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="youtube_id_3" placeholder="You Tube Link Id"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="youtube_id_4" placeholder="You Tube Link Id"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="youtube_id_5" placeholder="You Tube Link Id"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="submit" name="submit" class="submit">
            </form>
        </div>
    </div>
</div>


<?php require_once(__DIR__ . '/view/common_js.php'); ?>
</body>
</html>
