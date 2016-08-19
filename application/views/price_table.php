<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_left">
      <h3>Potential player price rise and fall</h3>
    </div>
  </div>

  <div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">

        <table id="users-table" class="table table-hover  dataTable no-footer">
          <thead>
            <tr>
              <th>Name</th>
              <th>Target</th>
              <th>Club</th>
              <th>Position</th>
              <th>Status</th>
              <th>%Owned</th>
              <th>Price</th>
              <th>Chngs</th>
              <th>Delta</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            if(!empty($occurences)) {
              foreach ($occurences as $value) {


                  ?>
                  <tr>
                  <td><?= $value[1] ?></td>
                    <td><?= $value[10] ?></td>
                    <td><?= $value[2] ?></td>
                    <td><?= $value[3] ?></td>
                    <td><?= $value[4] ?></td>
                    <td><?= $value[5] ?></td>
                    <td><?= $value[6] ?></td>
                    <td><?= $value[7] ?></td>
                    <td><?= $value[9] ?></td>
                  </tr>
                  <?php } 
              } ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Info <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">

                    <div class="col-md-8 col-lg-8 col-sm-7">
                      <!-- blockquote -->
                      <ol>
                  
                      <li style="font-size: 0.8em; font-weight: normal">Chgs: Denotes the number of price changes so far this gameweek. A player can rise or fall by up to £0.3m in a single gameweek. A players threshold value will change (see below) when a price change occurs. In addition a percentage of the carryover transfers will be lost at the gameweek changeover for those players who have changed in value in the previous gameweek.</li>
                      <li style="font-size: 0.8em; font-weight: normal">Delta: Denotes the additional 'effective' transfers required to effect a price change.</li>
                      <li style="font-size: 0.8em; font-weight: normal">Click on column headings to resort the data. For example clicking on "Target" will toggle between showing players likely to fall or rise in value.</li>
                      <li style="font-size: 0.8em; font-weight: normal">When a player is injured (0% chance of playing), suspended or unavailable his price can still change in value. However, once his status has changed (to fully available) his price will be "locked".</li>
                      <li style="font-size: 0.8em; font-weight: normal">When a player is "locked" i) his price will not change, ii) transfers in and out will not affect his price, and iii) his Target percentage will be set to zero. To view the locked players and determine the date and time at which they will be unlocked look in the "Unlocks" column (You may need to expand the view using the green row expander on the far left of the row to view this information). If the date and time is in the future then the players price is current locked.</li>
                      <li style="font-size: 0.8em; font-weight: normal">A players price will change when the total number of transfers in (or out) of that player reaches a threshold value. The rate at which this threshold is reached is dependent on twelve parameters. Unfortunately to complicate matters these individual factors vary throughout the season. This season a further complication has arisen whereby not all transfers are equally effective (e.g wild cards and other factors). This programme now determinesa the probability that each transfer contributes to reaching the threshold.</li>
                      <li style="font-size: 0.8em; font-weight: normal">Any new players added to the fantasy league will not immediately increase (or decrease) in price. A player must have been in the league for over eight days before transfers count towards the threshold value. This locking period can be extended to the start of a new Gameweek if the completion of the eight days period falls within an international break. To view the date and time at which they will be unlocked look in the "Unlocks" column. If the date and time is in the future then the players price is current locked.</li>
                      <li style="font-size: 0.8em; font-weight: normal">For a player to fall in price quickly i) teams need to be selling the player, ii) at the same time he must be 100% available (i.e. not injured) and iii) the ineffective transfers must be low. For a player to rise in value quickly i) teams need to be buying the player, ii) the player must not be "locked" and iii) the ineffective transfers must be low.</li>
                      </ol>

                      
                    </div>

                    <div class="clearfix"></div>

                    
                  </div>
                </div>
  </div>

  <script type="text/javascript">

    $(document).ready(function(){

      /* DataTable configuration */
      var table = $('#users-table').DataTable({
        "paging": true,
        "ordering": true,
        responsive: true,
        "order": [[ 8, 'desc' ]],
        "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": true },
        { "orderable": true },
        { "orderable": true },
        { "orderable": true },
        { "orderable": true },
        { "orderable": true },
        { "orderable": true }
        ],
        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
        if(aData['8'] >= 100 ) {
          $(nRow).css('color', 'blue').css('font-weight', 'bold');
        } else if(aData['8'] <= -100 ) {
          $(nRow).css('color', 'Red').css('font-weight', 'bold');
        }
    },
        "initComplete": function(settings, json) {
          /* Executes after table initialization is complete. */
        }
      });

    });

  </script>