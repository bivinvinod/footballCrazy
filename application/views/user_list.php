      <div class="right_col" role="main">
        <div class="page-title">
          <div class="title_left">
            <h3>Users</h3>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">

                <table id="users-table" class="table table-hover table-striped table-bordered dataTable no-footer">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Type</th>
                      <th class="col-action-button-heading text-center">Edit</th>
                      <th class="col-action-button-heading text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    if(!empty($users)) {

                      foreach ($users as $value) {

                        ?>
                        <tr id="user_<?= $value->id ?>">
                          <td><?= ucfirst($value->name) ?></td>
                          <td><?= $value->username ?></td>
                          <td><?= ucfirst($value->type) ?></td>
                          <td class="col-action-button text-center"><button class="btn btn-info" type="button" onclick="location.href='<?php echo site_url('user/edit/'.$value->id); ?>';" >Edit</button></td>
                          <td class="col-action-button text-center"><button class="btn btn-danger" type="button" data-userid="<?= $value->id ?>" onclick="deleteThis(this);">Delete</button></td>
                        </tr>
                        <?php } 
                      } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          function deleteThis (lead) {
            var id = $(lead).data('userid');
            swal({
              title: "Delete ?", 
              text: "Delete the user ?", 
              type: "info",
              showCancelButton: true,
              closeOnConfirm: true,
              confirmButtonText: "Yes, Delete it!",
              confirmButtonColor: "#ec6c62"
            }, function(isTrue) {
              if(isTrue) {
                $.get({
                  url: "<?php echo site_url('user/deleteUser') ?>/"+id,
                  beforeSend: function () {
                    toastr.warning("Please wait...");
                  },
                  success: function (data)
                  {
                    $('#user_'+id).velocity("transition.slideLeftOut");
                    toastr.success("Deleted");
                  }
                });
              } else {
                return false;
              }
            });
          }
        </script>
         <script type="text/javascript">

        $(document).ready(function(){

          /* DataTable configuration */
          var table = $('#users-table').DataTable({
            "paging": true,
            "ordering": true,
            "columns": [
              null,
              { "orderable": false },
              { "orderable": false },
              { "orderable": false },
              { "orderable": false },
            ],
            "initComplete": function(settings, json) {
              /* Executes after table initialization is complete. */
            }
          });
          
        });

      </script>