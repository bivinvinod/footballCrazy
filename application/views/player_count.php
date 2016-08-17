
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">

                <table id="users-table" class="table table-hover table-striped table-bordered dataTable no-footer">
                  <thead>
                    <tr>
                      <th>Player Name</th>
                      <th>Count</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    if(!empty($occurences)) {

                      foreach ($occurences as $key => $value) {

                        ?>
                        <tr>
                          <td><?= ucfirst($key) ?></td>
                          <td><?= $value ?></td>
                        </tr>
                        <?php } 
                      } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        
         <script type="text/javascript">

        $(document).ready(function(){

          /* DataTable configuration */
          var table = $('#users-table').DataTable({
            "paging": true,
            "ordering": true,
            "columns": [
              { "orderable": true },
              { "orderable": true }
            ],
            "initComplete": function(settings, json) {
              /* Executes after table initialization is complete. */
            }
          });
          
        });

      </script>