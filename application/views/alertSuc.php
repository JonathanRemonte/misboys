
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <style media="screen">
    /* <!-- datab indi --> */
    tfoot input { width: 100%; padding: 3px; box-sizing: border-box; }
    /* showadlgu */
    #tow{ display: none; }
    /* div of modal lgu */
    #modlgudiv{ padding-bottom:20px; }
    /* hide modal id for increment */
    .modid{ visibility: hidden; margin-top:-45px; }

    #swmcrud{
      color:black;
    }
  </style>

  <body>

    <main id="main" class="main">
      <div class="pagetitle" style="">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <h1>ALERT</h1>
            </div>
            <div class="col-md-4" style="margin-top:-8px;padding-bottom:8px;">
              <!-- <h6><button type="button" id="hour">Hourly</button></h6> -->
              <button type="" class="btn btn-primary" id="hour">Hourly</button>
            </div>
            <div class="col-md-4" style="margin-top:-8px;">
              <!-- <h6><button type="button" id="avrg">Average</button></h6> -->
              <button type="" class="btn btn-primary" id="avrg">Average</button>
            </div>
          </div>
        </div>
      </div>


      <section>

        <!-- card -->
        <div class="card" >
          <div class="card-body">
            <div class="row" style="padding-top:20px;">

              <!-- table -->
              <table id="caamstab" class="display" style="width:100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Entered By</th>
                  <th>Date</th>
                  <th>PM</th>
                  <th>Average</th>
                </tr>
                </thead>
                <tfoot style="display:table-header-group;">
                <tr>
                  <th></th>
                  <th>Entered By</th>
                  <th>Date</th>
                  <th>PM</th>
                  <th>Average</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php $caamsno=''; foreach ($recaams as $rcaams) { $caamsno++; ?>
                    <tr>
                      <td><?php echo $caamsno; ?></td>
                      <td><?php echo $rcaams->author; ?></td>
                      <td><?php echo $rcaams->camdat; ?></td>
                      <td><?php echo $rcaams->parmat; ?></td>
                      <td><?php echo $rcaams->allave; ?></td>

                      <!-- deghg -->
                      <div class="modal fade" id="deghg<?php echo $rcaams->camid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#DF362D;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Remove this Record?</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/delghg') ?>/<?php echo $rcaams->camid; ?>">
                                <div class="" hidden>
                                  <input type="text" class="form-control" name="camid" value="<?php echo $rcaams->camid; ?>" required>
                                </div>
                                <div class="" style="padding-top:10px;padding-bottom:15px;">
                                  <input type="text" class="form-control" name="" value="<?php echo $rcaams->camdat; ?>" required>
                                </div>
                               <div class="footer" style="text-align:right;">
                                  <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- deghg -->


                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- table -->

            </div>
          </div>
        </div>
        <!-- card -->

      </section>
    </main>

  </body>
</html>

    <!-- caamstab datab indi -->
    <script type="text/javascript">
      $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#caamstab tfoot th').each( function () { var title = $(this).text();
          //remove first column
          if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

        // DataTable
        var table = $('#caamstab').DataTable({ initComplete: function () {
                // Apply the search
                this.api() .columns() .every(function () { var that = this;

                        $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
    </script>
    <!-- bio datab indi -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
