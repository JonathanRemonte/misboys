<link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
  

     <!-- fontawesome icon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


     <title>4Bhive-GSU</title>
</head>
<body>
    
    <!-- Start of Navbar -->
        <style>
            a:hover 
            {
                /* background-color: #58CCED; */
                border-radius: 10px;
            }
            /* a:active 
            {
                background-color: #58CCED;
                box-shadow: 0 5px #666;
                border-radius: 10px;
                transform: translateY(4px);
            } */
            .logo span {
                font-size: 26px;
                font-weight: 700;
                color: #012970;
                font-family: "Nunito", sans-serif;
            }
            .logo {
                line-height: 1;
            }
            .logo img {
                max-height: 26px;
                margin-right: 6px;
            }
         </style>


<?php if(empty($_SESSION['urights'])){ redirect('Auth/logout'); }?>

    <nav class = "navbar navbar-expand-lg navbar-light" style="background-color:#68BBE3;">
        <!-- <a class = "navbar-brand" href="<?php echo base_url('index'); ?>"><img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" height="25" width="25" alt=""> <span class="">4BHive</span></a> -->
        <a href=<?php echo base_url('index'); ?> class="logo d-flex align-items-center" style="text-decoration:none;">
        <img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" height="25" width="25" alt="">
        <span class="d-none d-lg-block">4BHive</span>
      </a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('gsu'); ?>"><i class="fa-sharp fa-solid fa-house-user"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('request'); ?>"><i class="fa-solid fa-basket-shopping"></i> Request</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-gears"></i> Transaction </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><i class="fa-regular fa-credit-card"></i> Purchase Request</a>
                            <a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-bag-shopping"></i> Purchase Order</a>
                            <a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-box"></i> Receiving</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('userMR'); ?>"><i class="fa-solid fa-list-check"></i> Material Requisition</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-pen-to-square"></i> Office Supply</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url(''); ?>"><i class="fa-solid fa-clipboard-check"></i> EMPLOYEES REQUEST</a>
                            <a class="dropdown-item" href="<?php echo base_url(''); ?>"><i class="fa-solid fa-note-sticky"></i> REQUEST AND ISSUE</a>
                            <a class="dropdown-item" href="<?php echo base_url(''); ?>"><i class="fa-regular fa-copy"></i> RSMI</a>
                            <a class="dropdown-item" href="<?php echo base_url(''); ?>"><i class="fa-solid fa-file-circle-plus"></i> Stock Card</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa-solid fa-file-circle-check"></i> RPCI</a>
                            <a class="dropdown-item" href="<?php echo base_url('try'); ?>"><i class="fa-solid fa-file-circle-check"></i> RPCI</a>
                        </div>
                    </li>
                </ul>
            </div> -->


            <?php if($_SESSION['urights']==3.4 || ($_SESSION['urights'] == 1)){?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('userMR'); ?>"><i class="fa-sharp fa-solid fa-house-user"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('MaterialRequisition'); ?>"><i class="fa-solid fa-list-check"></i> PPE/ICS</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('request'); ?>"><i class="fa-solid fa-basket-shopping"></i> Request</a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-gears"></i> Transaction </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><i class="fa-regular fa-credit-card"></i> Purchase Request</a>
                            <a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-bag-shopping"></i> Purchase Order</a>
                            <a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-box"></i> Receiving</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('MaterialRequisition'); ?>"><i class="fa-solid fa-list-check"></i> Material Requisition</a>
                        </div>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-pen-to-square"></i> Office Supply</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url('RequisitionandIssue'); ?>"><i class="fa-solid fa-clipboard-check"></i> EMPLOYEES REQUEST</a>
                            <a class="dropdown-item" href="<?php echo base_url('ris'); ?>"><i class="fa-solid fa-note-sticky"></i> REQUEST AND ISSUE</a>
                            <a class="dropdown-item" href="<?php echo base_url('rsmi'); ?>"><i class="fa-regular fa-copy"></i> RSMI</a>
                            <a class="dropdown-item" href="<?php echo base_url('scard'); ?>"><i class="fa-solid fa-file-circle-plus"></i> Stock Card</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa-solid fa-file-circle-check"></i> RPCI</a>
                            <a class="dropdown-item" href="<?php echo base_url('try'); ?>"><i class="fa-solid fa-file-circle-check"></i> RPCI</a>
                        </div>
                    </li> -->
                </ul>
    <?php }else{ ?>
     
    <?php } ?>
    </nav>
    