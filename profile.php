<?php include "header.php"; ?>

<?php include "profile_nav.php"; ?>

<body id="acc_body">
    <div id="wrapper">
        <div class="well well-lg">
                <div class="stor">
                  <h4>Cloud storages</h3>
                    <div class="dropbox col-md-2 col-md-offset-1">
                      <i class="fa fa-dropbox" aria-hidden="true"></i>
                      <p class="cap">Dropbox</p>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>

                    <div class="drive col-md-2 col-md-offset-2">
                      <i class="fa fa-google" aria-hidden="true"></i>
                      <p class="cap">Google Drive</p>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>

                    <div class="mega col-md-2 col-md-offset-2">
                      <i class="fa fa-cloud" aria-hidden="true"></i>
                      <p class="cap">Mega Upload</p>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                  </div>

                </div><!-- connected accounts, tiles of cloud accounts, 3x4 grid including thumbnails and rounded progressbars -->
                <div></div><!-- package type used on this account -->
                <div></div><!-- invite friends -->
                <div></div><!-- delete account  -->


        
        </div>
    </div>
</body>

<?php include "script.php"; ?>