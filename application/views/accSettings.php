<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/cssbhive/accSettings.css'); ?>" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<!-- <div class="page"> -->
    <div class="nesttabs">
        <div class="container">
            <div class="row">
                <div class="col-4 border-right">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="d-flex flex-column align-items-center text-center upload mt-4">
                            <?php if (!empty($profileImage) && !empty($profileImage->profPic)) : ?>
                                <img id="myImg" src="data:image/jpeg;base64,<?= base64_encode($profileImage->profPic) ?>" alt="Profile Picture" style="border: 4px solid white; border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
                            <?php else : ?>
                                <img id="myImg" src="<?= base_url('assets/img/userdefault.png') ?>" style="width:100%;max-width:400px">
                            <?php endif; ?>


                         <!-- The Modal -->
                            <div id="myModal1" class="modal1">
                                <span class="close1">&times;</span>
                                <form id="uploadForm" action="<?= base_url('Auth/update1/' . $userID->userid) ?>" method="POST" enctype="multipart/form-data">
                                    <div class="profile-pic">
                                        <label class="-label" for="file">
                                            <span class="fa fa-camera"></span>
                                            <span>Change Image</span>
                                        </label>
                                        <input name="image" id="file" type="file" onchange="loadFile(event)" />
                                        <img class="modal-content1" id="img01" />
                                    </div>
                                    <div id="caption1"></div>
                                    <input type="submit" value="Update Profile Picture" name="submit">
                                    <!-- <button class="btn btn-primary custom-btn" type="submit" name="save_profile" value="Save Profile">Update Profile Picture</button> -->
                                    <!-- <input class="btn btn-primary custom-btn" type="submit" name="save_profile" value="Save Profile"> -->
                                </form>
                            </div>

                        </div>
                         <?php if (isset($userID)): ?>
                        <div class="row justify-content-center">
                            <div class="col-md-12 mt-4 text-center">
                                <h2><?php echo $userID->fname . ' ' . $userID->lname ; ?></h2>
                                <b><h5><?php echo $userID->position ; ?></h5></b>
                            </div>
                        </div>

                            <a class="nav-link mt-5 col-md-12 profile-link" id="v-pills-home-tab1" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-profile" aria-selected="true">
   	                        <div class="descrip">
                               <div class="notifications"></div>
                                <h5 class="mb-3"><i class="fas fa-id-card"></i> Profile Settings</h5>
					        </div>
                            </a>
                            <a class="nav-link active profile-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="descrip">
                                    <h5 class="mb-3"><i class="fa-sharp fa-solid fa-gears"></i> Change Password</h5>
                                </div>
                            </a>
                    </div>
                </div>
<div class="col-8 nesttabscontent">
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab1">
          <p>
                <div class="col-md-12">
                    <div class="p-5 py-5">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>

                        <div class="row mt-3 ">
                            <div class="col-md-8 mx-auto"><label class="labels">First Name</label><input type="text" class="form-control" value="<?php echo $userID->fname; ?>" readonly></div>
                            <div class="col-md-8 mx-auto"><label class="labels">Middle Name</label><input type="text" class="form-control" value="<?php echo $userID->mname; ?>" readonly></div>
                            <div class="col-md-8 mx-auto"><label class="labels">Last Name</label><input type="text" class="form-control" value="<?php echo $userID->lname; ?>" readonly></div>
                            <div class="col-md-8 mx-auto"><label class="labels">Email Address</label><input type="text" class="form-control" value="<?php echo $userID->uemail; ?>" readonly></div>
                            <div class="col-md-8 mx-auto"><label class="labels">Mobile Number</label><input type="text" class="form-control" value="<?php echo $userID->uphone; ?>" readonly></div>
                        </div>
                        <div class="row mt-3">

                            <div class="col-md-4 offset-md-2"><label class="labels">Designation</label><input type="text" class="form-control" value="<?php echo $userID->udiv; ?>" readonly></div>
                            <div class="col-md-4 "><label class="labels">Section</label><input type="text" class="form-control" value="<?php echo $userID->usec;?>" readonly></div>
                        </div>
                        <!-- <div class="mt-5 text-center">
                            <a class="btn btn-success profile-button text-white" type="button" value = "Save Profile">Save Profile</a>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index" type="button" value="Cancel">Cancel</a>
                        </div> -->
                    </div>
                </div>

                <?php endif; ?>
          </p>
        </div>
        <div class="tab-pane fade  show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <p>
            <div class="col-md-12">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <h4 class="text-right">Password Settings</h4>
                    </div>
                    <br>
                    <form method="post" action="<?php echo base_url('Auth/changePass1'); ?>">
                        <div class="col-md-5 mx-auto">
                            <label class="labels">Old Password</label>
                            <input type="password" class="form-control" name="old_password"/>
                            <?= form_error('old_password'); ?>
                        </div>
                        <br>
                        <!-- <div class="col-md-5 mx-auto">
                            <label class="labels">New Password</label>
                            <input type="password" class="form-control" name="new_password" value="">-->
                            <?= form_error('new_password'); ?>

                            <div class="col-md-5 mx-auto transition-container eye-close">
                                <label class="labels">New Password</label>
                                <input type="password" class="form-control form-control-black transition-input1" name="new_password"/>
                                <!-- <span class="transition-bg"></span> -->
                                <!-- <span class="icon-lock"> -->
                                <!-- <svg viewBox="97 6 809 988" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><metadata>http://www.onlinewebfonts.com/icon</metadata><g fill="currentColor"><path d="M321.8,455.5h356.4V321.8c0-49.2-17.4-91.2-52.2-126c-34.8-34.8-76.8-52.2-126-52.2c-49.2,0-91.2,17.4-126,52.2c-34.8,34.8-52.2,76.8-52.2,126L321.8,455.5L321.8,455.5z M900.9,522.3v400.9c0,18.6-6.5,34.3-19.5,47.3c-13,13-28.8,19.5-47.3,19.5H165.9c-18.6,0-34.3-6.5-47.3-19.5c-13-13-19.5-28.8-19.5-47.3V522.3c0-18.6,6.5-34.3,19.5-47.3c13-13,28.8-19.5,47.3-19.5h22.3V321.8c0-85.4,30.6-158.7,91.9-219.9C341.3,40.7,414.7,10,500,10c85.3,0,158.7,30.6,219.9,91.9c61.3,61.3,91.9,134.6,91.9,219.9v133.6h22.3c18.6,0,34.3,6.5,47.3,19.5C894.4,488,900.9,503.7,900.9,522.3L900.9,522.3z"/></g></svg> -->
                                <!-- </span>  -->
                                <span class="icon-eye middle-right js-transition"><svg viewBox="-20 -200 320 400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style>#eye{--duration-blink: .2s;--duration-lashes: .2s;--delay-lashes: var(--duration-blink);--duration-pupil: .1s;--delay-pupil: calc(var(--duration-blink)*2/3);}#eye-bottom,#eye-top{stroke-linecap:round;}#eye-top,#eye-lashes{transition: var(--duration-blink) ease-in;}#eye-pupil {opacity: 0;transition:opacity var(--duration-pupil) var(--delay-pupil) ease;}.eye-open #eye-top,.eye-open #eye-lashes{transform: rotateX(.5turn);animation:scaleUp var(--duration-lashes) var(--delay-lashes) ease-in-out;}.eye-open #eye-pupil{opacity:1;}.eye-close #eye-lashes{animation:scaleDown var(--duration-lashes) var(--duration-blink) ease-in-out;}.eye-close #eye-pupil{opacity:0;}@keyframes scaleUp {50%{transform:rotateX(.5turn) scaleY(1.15); }to{transform:rotateX(.5turn) scaleY(1);}}@keyframes scaleDown {50%{transform:scaleY(1.15);}to{transform:scaleY(1); }}</style><g id="eye" stroke-width="30" fill="none"><g id="eye-lashes" stroke="currentColor"><line x1="140" x2="140" y1="90" y2="180" /><line x1="70"  x2="10"  y1="60" y2="140" /><line x1="210" x2="270" y1="60" y2="140" /></g><path id="eye-bottom" d="m0,0q140,190 280,0" stroke="currentColor" /><path id="eye-top"    d="m0,0q140,190 280,0" stroke="currentColor" /><circle id="eye-pupil" cx="140" cy="0" r="50" fill="currentColor" stroke="none" /></g></svg>
                                </span>
                            </div>
                            <!-- end -->
                            <div class="col-md-5 mx-auto">
                                <label class="labels">Confirm Password</label>
                                <input type="password" class="form-control  form-control-black transition-input" name="confirm_password">
                                <?= form_error('confirm_password'); ?>
                            </div>
                            <div class="mt-5 text-center buttons">
                                <button class="btn btn-primary custom-btn1" type="submit" name="save_password" value="Save Password">Update Password</button>

                                <a class="btn btn-danger" href="<?php echo base_url(); ?>index" type="button" value="Cancel">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </p>
        </div>
        <!-- <div class='m-12'></div> -->
    </div>
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        const notifications = document.querySelector(".notifications");
        const buttons = document.querySelectorAll(".buttons .custom-btn1");

        const toastDetails = {
            timer: 5000,
            success: {
                icon: 'fa-circle-check',
                text: 'Success: Successfully change your password!',
            },
            error: {
                icon: 'fa-circle-xmark',
                text: 'Error: Invalid old password!',
            }
        };

          const removeToast = (toast) => {
          const toastElement = toast.closest('.toast');
          if (toastElement) {
            toastElement.classList.add('hide');
            if (toastElement.timeoutId) clearTimeout(toastElement.timeoutId);
            setTimeout(() => {
              toastElement.remove();
            }, 500);
          }
        };

        const createToast = (id) => {

            const { icon, text } = toastDetails[id];
            const toast = document.createElement("li");
            toast.className = `toast ${id}`;
            toast.innerHTML = `<div class="column">
                                 <i class="fa-solid ${icon}"></i>
                                 <span>${text}</span>
                              </div>
                              <i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>`;
            notifications.appendChild(toast);
            toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
            setTimeout(() => {
              toast.classList.add('show');
            }, 100);
        };

        buttons.forEach(btn => {
            btn.addEventListener("click", () => createToast(btn.id));
        });

        const toastMessage = '<?= $this->session->tempdata("toast_message"); ?>';
        if (toastMessage) {
            createToast(toastMessage);

            // console.log ('yes')
        }


    // show pass
    document.querySelector('.js-transition').addEventListener('click', toggle);

    function toggle() {
   var container = document.querySelector('.transition-container');

  // manage clases
  var containerClasses = container.classList;
  containerClasses.toggle('js-show-pw');
  containerClasses.toggle('eye-open');
  containerClasses.toggle('eye-close');

  // update input
  var input = document.querySelector('.transition-input');
  var input1 = document.querySelector('.transition-input1');

    if (containerClasses.contains('js-show-pw')) {
        // use time = animation duration
        var delay = getComputedStyle(container).getPropertyValue('--duration');
        delay = parseInt(delay);

        setTimeout(function() {
        input.classList.add('show-input');
        // update input type
        input.type="text";
        }, delay);
    } else {
        // update input type
        input.type="password";
        input.classList.remove('show-input');
    }
    if (containerClasses.contains('js-show-pw')) {
        // use time = animation duration
        var delay = getComputedStyle(container).getPropertyValue('--duration');
        delay = parseInt(delay);

        setTimeout(function() {
        input1.classList.add('show-input');
        // update input type
        input1.type="text";
        }, delay);
    } else {
        // update input type
        input1.type="password";
        input1.classList.remove('show-input');
    }
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var uploadProfileURL = '<?php echo site_url('Auth/uploadProfile'); ?>';
    </script>
    <script src="<?= base_url(); ?>assets/jsbhive/accSettings.js"></script>

</body>

</html>
