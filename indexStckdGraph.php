<script type="text/javascript" src="https://code.jquery.com/jquery-4.6.0.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="assets/jsChart/index.js"></script>
  <link rel="stylesheet" href="assets/css/index.css">

  <div class="container">
  <div class="p-2 d-flex justify-content-end flex-row">
    <div class="p-2"></div>
      <!-- <div class="p-2"><b>Search by:</b></div>  -->
        <div class="switch">
            <input type="radio" class="switch-input radioshow" name="radiog_lite" value="year" id="week" data-class="div1">
            <label for="week" class="switch-label switch-label-off">YEAR</label>
            <input type="radio" class="switch-input radioshow" name="radiog_lite" value="month" id="month" data-class="div2">
            <label for="month" class="switch-label switch-label-on">DATE</label>
            <span class="switch-selection"></span>
        </div>

  </div>
</div>






<!-- ********** Stacked ************* -->
<div class="col-lg-4">
  <div class="card">
    <div class="card-body" >
      <h5 class="card-title">Firm Category per Province</h5>

                <div class="div2 allshow" style="display: none;">
                  <div class="mx-2 my-2">
                      <label for="start-date" >Start Date:</label>
                      <input type="date" id="start_date" class="form-control">
                  </div>

                  <div class="mx-2 my-2">
                    <label for="end-date" >End Date:</label>
                    <input type="date" id="end_date" class="form-control">
                  </div>
                </div>

                      <div class="div1 allshow" style="display: none;">
                            <select name="year" id="year" class="form-control">
                              <option value="">Select Year</option>
                                <?php
                                foreach($year as $row)
                                {
                                  if($row->year != 0){
                                    echo '<option value="'.$row->year.'">'.$row->year.'</option>';
                                  }
                                }
                                ?>
                            </select>
                      </div>

      <!-- Stacked Bar Chart -->
      <canvas id="stakedBarChart" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>


      <!-- End Stacked Bar Chart -->

    </div>
  </div>
</div>
<!-- *********** Stacked ************* -->

<!-- ********** permits ************* -->
<div class="col-lg-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Permits</h5>

      <div class="div2 allshow" style="display: none;">
                  <div class="mx-2 my-2">
                      <label for="startDate" >Start Date:</label>
                      <input type="date" id="startDate" class="form-control">
                  </div>

                  <div class="mx-2 my-2">
                    <label for="endDate" >End Date:</label>
                    <input type="date" id="endDate" class="form-control">
                  </div>
                </div>

                      <div class="div1 allshow" style="display: none;">
                            <select name="year1" id="year1" class="form-control">
                              <option value="">Select Year</option>
                                <?php
                                foreach($year as $row)
                                {
                                  if($row->year!= 0){
                                    echo '<option value="'.$row->year.'">'.$row->year.'</option>';
                                  }
                                }
                                ?>
                            </select>
                      </div>
                      <canvas id="barChart" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>


              <!-- End Bar CHart -->

    </div>
  </div>
</div>
<!-- *********** permits ************* -->


<!-- PCO AND FIRMS -->
<div class="col-lg-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">PCO and Firms</h5>

                <div class="div2 allshow" style="display: none;">
                  <div class="mx-2 my-2">
                      <label for="sDate" >Start Date:</label>
                      <input type="date" id="sDate" class="form-control">
                  </div>

                  <div class="mx-2 my-2">
                    <label for="eDate" >End Date:</label>
                    <input type="date" id="eDate" class="form-control">
                  </div>
                </div>

                      <div class="div1 allshow" style="display: none;">
                            <select name="year2" id="year2" class="form-control">
                              <option value="">Select Year</option>
                                <?php
                                foreach($yearPco as $row)
                                {
                                  if($row->year!= 0){
                                    echo '<option value="'.$row->year.'">'.$row->year.'</option>';
                                  }
                                }
                                ?>
                            </select>
                      </div>
                      <?php
                      // $gg = '';
                      // $ss = '';
                      // foreach($ec as $row)
                      // {
                        // $gg = $row->firm;
                        // $ss = $row->pco;
                      //  echo $row->firm . "<br>  ";
                      //  echo $row->pco;
                      // }

                      // foreach($pc as $row)
                      // {
                      //   $ss = $row->pco;
                        // $ss = $row->pco;
                      //  echo $row->firm . "<br>  ";
                      //  echo $row->pco;
                      // }
                      // echo "$gg - FIRM<br>";
                      // echo "$ss - PCO";
                      // foreach($firm as $firm)
                      // {
                      //   echo $firm->fid;
                      // }
                      ?>

                      <canvas id="firmPcoChart" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>


              <!-- End Bar CHart -->

    </div>
  </div>
</div>
