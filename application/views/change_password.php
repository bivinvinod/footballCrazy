      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Change Password</h3>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <form  action="<?php echo site_url('home/updatePassword'); ?>" method="post" enctype="multipart/form-data" data-parsley-validate>
                    <!-- Current password -->
                    <label class="input-label">Current password</label>
                    <input name="oldPassword" type="password" class="form-control" data-parsley-required="true">
                    <!-- New password -->
                    <label class="input-label">New password</label>
                    <input name="repassword" id="new-password" type="password" class="form-control" data-parsley-required="true">
                    <!-- Confirm password -->
                    <label class="input-label">Confirm password</label>
                    <input name="password" type="password" class="form-control" data-parsley-required="true" data-parsley-equalto="#new-password" data-parsley-error-message="Passwords do not match.">
                    <button class="btn btn-primary btn-custom" type="submit">Save</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>