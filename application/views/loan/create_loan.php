<body class="">
    <?php $this->load->view('loading_screen');?>
    <div class="wrapper ">

        <!-- Top NavBar -->
        <?php $this->load->view('navigation/sidebar');?>
        <!-- End of NavBar -->

        <div class="main-panel">

        <!-- Navbar -->
        <?php $this->load->view('navigation/topbar');?>
        <!-- End Navbar -->

            <div class="content" style="margin-top:50px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <?php $this->load->view('navigation/loan_navbar');?>
                            
                            <div class="tab-content tab-space">

                                <div class="tab-pane active">
                                    <div class="card">
                                        <div class="card-header card-header-primary">
                                            <h4 class="card-title">Loan Application Form</h4>
                                            <p class="card-category">Complete the loan application form</p>
                                        </div>
                                        <div class="card-body form-body mt-2">
                                            <form id="loan-form" method="POST">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Loan No</label>
                                                                    <?php if($loan_no==100){?> 
                                                                    <input type="text" class="form-control loan_no" name="loan" value="L<?php echo 1000;?>" readonly>
                                                                    <?php }else{ ?>
                                                                    <input type="text" class="form-control loan_no" name="loan" value="L<?php echo $loan_no+1;?>" readonly>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Area</label>
                                                                    <input type="text" class="form-control area" name="area" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="form-group input-group-prepend">
                                                                    <label class="bmd-label-floating">Interest(2mo)</label>
                                                                    <input type="text" class="form-control interest text-center" value="20" readonly>
                                                                    <span class="input-group-text">
                                                                            <i class="fa fa-percent"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="form-group input-group-prepend">
                                                                    <label class="bmd-label-floating">Terms(days)</label>
                                                                    <input type="text" class="form-control terms text-center" value="60" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Date</label>
                                                                    <input type="date" class="form-control date" name="date" value="<?php echo date('Y-m-d');?>" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="input-group no-border">
                                                                    <?php if(isset($account_no)){?>
                                                                       <input type="text" value="<?php echo $account_no?>" class="form-control accnt_no" placeholder="Account no" autofocus required>
                                                                    <?php }else{ ?>
                                                                        <input type="text" value="" class="form-control accnt_no" placeholder="Account no" autofocus required>
                                                                    <?php } ?>
                                                                    <button type="submit" class="btn btn-primary btn-round btn-just-icon search_account">
                                                                    <i class="material-icons">search</i>
                                                                    <div class="ripple-container"></div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group input-group-prepend">
                                                                    <span class="input-group-text">
                                                                    &#8377;
                                                                    </span>
                                                                    <label class="bmd-label-floating pl-3">Loan Amount</label>
                                                                    <input type="number" min="0.01" step="0.01" max="100000" class="form-control text-right amount font-weight-bold" name="amount" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <select id="inputState1" class="form-control collector">
                                                                        <option disabled selected>Choose collector...</option>
                                                                        <?php foreach($collector as $key => $collect) { 
                                                                            if(!empty($collect)){  ?>
                                                                            <option value="<?php echo $collect['username'];?>"><?php echo $collect['firstname'];?> </option>
                                                                        <?php }} ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <select id="inputState" class="form-control verifier">
                                                                        <option disabled selected>Verified by...</option>
                                                                        <?php 
                                                                        foreach($verifier as $key => $verified) { ?>

                                                                           <?php if(!empty($verified)){  ?>
                                                                            <option value="<?php echo $verified['username'];?> "><?php echo $verified['firstname'];?></option>
                                                                        <?php }} ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 mb-2">
                                                            <h6 class="card-title">Borrowers Information</h6>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Full Name</label>
                                                                    <input type="text" class="form-control full_name" name="fullname" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Current Address</label>
                                                                    <input type="text" class="form-control address" name="address" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Email</label>
                                                                    <input type="email" class="form-control email" name="email" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">SIM1-Contact No</label>
                                                                    <input type="text" class="form-control sim1" name="sim1" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">SIM2-Contact No</label>
                                                                    <input type="text" class="form-control sim2" name="sim2" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="row ml-1">
                                                                    <i class="fas fa-toggle-off mr-2" rel="tooltip" id="email-toggle" title="Send Email Notification" onclick="email(this)"></i>
                                                                    Send Email Notification
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="row ml-1">
                                                                    <i class="fas fa-toggle-off mr-2" onclick="sim1(this)" id="sim1-toggle" rel="tooltip" title="Send SMS Notification"></i>
                                                                    Send SIM1 Notification
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="row ml-1">
                                                                    <i class="fas fa-toggle-off mr-2" onclick="sim2(this)" id="sim2-toggle" rel="tooltip" title="Send SMS Notification"></i>
                                                                    Send SIM2 Notification
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3 mb-2">
                                                            <h6 class="card-title">Business Info</h6>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Business Name</label>
                                                                    <input type="text" class="form-control b_name" name="b_name" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row bs">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Purok No</label>
                                                                    <input type="number" class="form-control purok_no1" name="purok_no" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Barangay</label>
                                                                    <input type="text" class="form-control barangay1" name="barangay" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">City</label>
                                                                    <input type="text" class="form-control city" name="city1" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row bs">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Province</label>
                                                                    <input type="text" class="form-control province1" name="province" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Postal Code</label>
                                                                    <input type="number" class="form-control postal1" name="postal" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row c-add" style="display: none" >
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="bmd-label-floating">Current Address</label>
                                                                    <input type="text" class="form-control address" id="c_address" name="address" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="row ml-1">
                                                                    <i class="fas fa-toggle-off mr-2" rel="tooltip" title="Select current address" onclick="business_add(this)" id="c-add"></i>
                                                                        Same as the current address
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3 mb-2">
                                                    <h6 class="card-title">Co-Maker Info</h6>
                                                </div>
                                                <div class="co-maker-section">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Fullname</label>
                                                                <input type="text" id="c-name1" class="form-control comaker-name" name="comaker-name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-social btn-just-icon btn-round btn-primary" id="add_co-maker" rel="tooltip" title="Add another co-maker">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Residence Certificate No</label>
                                                                <input type="text" class="form-control cedula" name="cedula" id="cedula1" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Date issued</label>
                                                                <input type="date" class="form-control date_issued" name="date_issued" id="c-date1" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Where issued</label>
                                                                <input type="text" class="form-control where_issued" name="where_issued" id="c-place1" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-primary btn-round pull-right create-loan"><i class="material-icons">check_circle</i> Submit</button>
                                                    <button class="btn btn-default btn-round pull-right cancel-create-loan"><i class="material-icons">cancel</i> Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php $this->load->view('templates/change_pass') ?>
	<?php $this->load->view('templates/footer') ?>
</body>
