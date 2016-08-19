
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">

                <table id="users-table" class="table table-hover table-striped table-bordered dataTable no-footer">
                  <thead>
                    <tr>
                      <th>User Name</th>
                      <th>Points</th>
                      <th>Top Player</th>
                      <th>Captain</th>
                      <th>Overall GW Rank</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    if(!empty($userName)) {
                      $count = count($userName);
                      for ($i=0; $i < $count ; $i++) { 

                        ?>
                        <tr>
                          <td><?= $userName[$i] ?></td>
                          <td><?= $userScore[$i] ?></td>
                          <td><?= $playerNames[$i] ?></td>
                          <td><?= $userCaptain[$i] ?></td>
                          <td><?= $userRank[$i] ?></td>

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
            "responsive": true,
            "order": [[ 1, 'desc' ]],
            "columns": [
              { "orderable": true },
              { "orderable": true },
              { "orderable": true },
              { "orderable": true },
              { "orderable": true }
            ],
            "initComplete": function(settings, json) {
              /* Executes after table initialization is complete. */
            }
          });
          
        });

      </script>