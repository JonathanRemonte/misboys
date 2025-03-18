<!-- bhive progress -->
<div class="col-12">
  <div class="card top-selling overflow-auto">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <h5 class="card-title"><a class="open-homeEvents" <?php if ($_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#addtask" style="color:black;">Dev Progress Bar</a></h5>
          </div>
          <div class="col-md-6" style="padding-top:20px;">
            <i class="fa fa-arrow-down" aria-hidden="true"></i> <span class="badge rounded-pill bg-danger">1</span> <span class="badge rounded-pill bg-warning">2</span>
            <span class="badge rounded-pill bg-info">3</span> <span class="badge rounded-pill bg-primary">4</span>
            <span class="badge rounded-pill bg-success">5</span> <i class="fa fa-arrow-up" aria-hidden="true"></i>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addtask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#2E9aC0;">
                <h5 class="modal-title" id="exampleModalLabel"><b>Add Task</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?php echo site_url('Ind/adtask') ?>">
                  <div class="mb-3" hidden>
                    <input type="text" class="form-control" name="proid" value="<?php $procnt=0; foreach($result as $row) { $procnt+=1; } echo $procnt+1; ?>" required>
                  </div>
                  <div class="mb-3" style="padding-top:12px;padding-bottom:22px;">
                    <label for="">Task</label>
                    <input type="text" class="form-control" name="task" placeholder="" required autofocus>
                  </div>
                  <div class="mb-3" style="padding-top:12px;" hidden>
                    <input type="text" class="form-control" name="scale" value="0" required>
                  </div>
                  <div class="footer" style="text-align:right;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Progress Bars with Striped Backgrounds-->
        <?php
          $overall=0; $cnt=0;
          foreach($result as $row) { $cnt+=1; $overall+=$row->scale; ?>
            <!-- foreach($result as $row) { $cnt+=1; $overall+=$row->scale; ?> -->
            <div class="" style="padding-bottom:10px;">
              <div class="">
                <a class="open-homeEvents" data-id="test#$%" <?php if ($_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#prog<?php echo $row->proid; ?>" ><?php echo $row->task; ?></a>
              </div>
              <div class="progress" style="height:18px;">
                <?php if ($row->scale==0 || $row->scale<=20){ $barcolor='bg-danger'; }elseif ($row->scale==21 || $row->scale<=40){ $barcolor='bg-warning';
                }elseif ($row->scale==41 || $row->scale<=60){ $barcolor='bg-info'; }elseif ($row->scale==61 || $row->scale<=80){ $barcolor='bg-primary';
                }else{ $barcolor='bg-success'; } ?>
                <div class="progress-bar progress-bar-striped <?php echo $barcolor; ?> progress-bar-animated" role="progressbar" style="width: <?php echo $row->scale; ?>%" aria-valuenow="<?php echo $row->scale; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $row->scale; ?>%</div>
              </div>
            </div>

            <!-- **************************edit modal********************************* -->
            <!-- edit modal 1 -->
            <div class="modal fade" id="prog<?php echo $row->proid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header" style="background-color:#f8a532;">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Edit <?php echo $row->task; ?></b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?php echo site_url('Ind/edtask') ?>/<?php echo $row->proid; ?>">
                      <div class="" hidden>
                        <input type="text" class="form-control" name="proid" value="<?php echo $row->proid; ?>" required>
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" name="task" value="<?php echo $row->task; ?>" required>
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" name="scale" value="<?php echo $row->scale; ?>" required>
                      </div>
                     <div class="footer" style="text-align:right;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

        <?php } ?>
        <div class="" style="padding-top:5px;font-weight:bold;">
          OVERALL
        </div>
        <div class="progress" style="padding-right:10px;height:23px;">
          <?php $overall=$overall/$cnt;
           if ($overall==0 || $overall<=20){ $barcolor='bg-danger'; }elseif ($overall==21 || $overall<=40){ $barcolor='bg-warning';
          }elseif ($overall==41 || $overall<=60){ $barcolor='bg-info'; }elseif ($overall==61 || $overall<=80){ $barcolor='bg-primary';
          }else{ $barcolor='bg-success'; } ?>
          <div class="progress-bar progress-bar-striped <?php echo $barcolor; ?> progress-bar-animated" role="progressbar" style="width: <?php echo $overall; ?>%" aria-valuenow="<?php echo $overall; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo round($overall,2); ?>%</div>
        </div>
      </div>
    </div>
  </div>
</div><!-- bhive progress -->
