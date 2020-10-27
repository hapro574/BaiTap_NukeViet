<?php
include "config.php";
include "register.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bài Tập</title>
    <!-- Bootstrap Core CSS -->
    <link href="layouts/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="layouts/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="layouts/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div style="margin-top: 100px;" class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Thông tin khách hàng</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <div><strong>Họ và tên :</strong> </div> <br>
                                    <input class="form-control" placeholder="Họ và tên" name="name" type="text"
                                        autofocus>
                                </div>
                                <div class="form-group">
                                    <div><strong>Số điện thoại : </strong></div> <br>
                                    <input class="form-control" placeholder="Số điện thoại" name="phone" type="text"
                                        autofocus>
                                </div>
                                <div class="form-group">
                                    <div><strong>Email : </strong></div> <br>
                                    <input class="form-control" placeholder="E-mail" name="email" type="email"
                                        autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Thành Phố/Tỉnh : </label>
                                    <select name="province" class="form-control" id="exampleFormControlSelect1">
                                        <?php
                                        foreach ($query as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>">
                                            <?php echo $data['title']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Quận/Huyện : </label>
                                    <select id="" name="district" class="form-control" id="exampleFormControlSelect1">
                                        <?php
                                        foreach ($qr_district as $q) { ?>
                                        <option value="<?php echo $q['id']; ?>">
                                            <?php echo $q['title']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Xã/Phường : </label>
                                    <select name="ward" class="form-control" id="exampleFormControlSelect1">
                                        <?php
                                        foreach ($qr_ward as $x) { ?>
                                        <option value="<?php echo $x['id']; ?>">
                                            <?php echo $x['title']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <button type="submit" name="submit"
                                    class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="layouts/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="layouts/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="layouts/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>