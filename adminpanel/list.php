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
    $data=Card_Registration::allCards();
//    $list=$data["list"];
//    print_r($list);
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Users | Digital Advertiser Visiting Card</title>
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
                    <h1>All Cards</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active"><a href="#">All User </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">All User Cards List</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Company Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Issue Card Date</th>
                                    <th>Status</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $card) {?>
                                <tr>
                                    <td><?php echo $card['name'];?></td>
                                    <td><?php echo $card['name'];?></td>
                                    <td><?php echo $card['phone'];?></td>
                                    <td><?php echo $card['alternate_phone'];?></td>
                                    <td><?php echo $card['issue_card_date'];?></td>
                                    <td><button class="btn btn-secondary"><?php echo $card['status']==="0"?"active":"inactive";?></button></td>
                                    <td><a href="./mvc.php/<?php echo $card['user_id'];?>">View</a></td>
                                </tr>
                                <?php }?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once(__DIR__ . '/view/common_js.php'); ?>
</body>
</html>
