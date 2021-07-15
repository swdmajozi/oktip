<!-- iCheck -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/iCheck/flat/blue.css">
<!-- Morris chart -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/morris/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datepicker/datepicker3.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


<section class="content" style="height:800px">
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>0</h3>

                <p>Auctions</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('admin/users'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>0</h3>

                <p>Payments</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>0<sup style="font-size: 20px">%</sup></h3>

                <p>Failed Payments</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <!-- ./col -->
</div>
<!-- /.row -->


<table>
                        <tr><p>Here is  your  referral link <a href="<?php echo base_url();?>auth/register/?reflink=<?php echo @$username?>"><?php echo base_url();?>auth/sign_up/?reflink=<?php echo @$username?></a></p></tr>

</table>



</div>
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->




<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?= base_url() ?>public/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>public/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>public/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url() ?>public/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url() ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>public/dist/js/demo.js"></script>

<script>
    $("#dashboard1").addClass('active');
</script>

<style type="text/css">
    
td{
    padding: 10px !important;
}

</style>