<?php include "header.php"; ?>
<?php include "profile_nav.php"; ?>
<?php include "script.php"; ?>

<body id="acc_body">
<div id="wrapper">
    <div class="well well-lg">
        <form id="settings">
            <div class="form-group">
                <label>Change e-mail address</label><input class="form-control" type="email">
            </div>

            <div class="form-group">
                <label>Change password</label><input class="form-control" type="password">
            </div>

            <div class="form-group">
                <label>Upgrade account</label><input class="form-control" type="text">
            </div>

            <div class="form-group form-inline row">
            <label>Change notification frequency</label><br>
                <div class="col-md-4"><label>E-mail</label><input class="form-control col-md-4" type="checkbox"></div>
                <div class="col-md-4"><label>Mobile App</label><input class="form-control col-md-4" type="checkbox"></div>
                <div class="col-md-4"><label>Desktop App</label><input class="form-control col-md-4" type="checkbox"></div>
            </div>

            <div class="form-group">
                <label>Gift pro membership</label><input class="form-control" type="email" placeholder="e-mail">
            </div>

            <div class="form-group form-inline">
                <label>Set up automatic synchronization</label><br>
                <label>Yes</label>
                <input class="form-control" type="radio" id="yes">
                <label>No</label>
                <input class="form-control" type="radio" id="no">
            </div>

            <div class="form-group">
                <label>Set up avatar</label><input class="form-control" type="file">
            </div>

            <div class="form-group">
            <label>Change basic information</label>
                <label>Full name</label><input class="form-control" type="text">
                <label>Date of birth</label><input class="form-control" type="text">
                <label>Credit Card number</label><input class="form-control" type="text">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>
</body>