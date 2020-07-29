<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->


<head>
   <meta charset="utf-8" />
   <title>Admin Area</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  
   <link href="<?=base_url('assets/back/')?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>css/style.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>css/style-responsive.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>css/style-default.css" rel="stylesheet" id="style_color" />
   <link href="<?=base_url('assets/back/')?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
   <script type="text/javascript" src="<?=base_url('assets/back/')?>ckeditor/ckeditor.js"></script>
  
   <link rel="stylesheet" href="<?=base_url('assets/back/');?>/assets/data-tables/DT_bootstrap.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?$this->load->view('backend/includes/header')?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <?$this->load->view('backend/includes/left')?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <?=$content?>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <?$this->load->view('backend/includes/footer')?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <!-- <script src="<?=base_url('assets/back/')?>js/jquery-1.8.3.min.js"></script> -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="<?=base_url('assets/back/')?>js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="<?=base_url('assets/back/')?>assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="<?=base_url('assets/back/')?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="<?=base_url('assets/back/')?>assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="<?=base_url('assets/back/')?>assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?=base_url('assets/back/')?>js/excanvas.js"></script>
   <script src="<?=base_url('assets/back/')?>js/respond.js"></script>
   <![endif]-->

   <!-- <script src="<?=base_url('assets/back/')?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script> -->
   <!-- <script src="<?=base_url('assets/back/')?>js/jquery.sparkline.js" type="text/javascript"></script> -->
   <!-- <script src="<?=base_url('assets/back/')?>assets/chart-master/Chart.js"></script> -->
   <script src="<?=base_url('assets/back/')?>js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="<?=base_url('assets/back/')?>js/common-scripts.js"></script>

  
   <script type="text/javascript" src="<?=base_url('assets/back/');?>/assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="<?=base_url('assets/back/');?>/assets/data-tables/DT_bootstrap.js"></script>
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>
   <!--script for this page only-->
  <!--  <script src="<?=base_url('assets/back/')?>js/easy-pie-chart.js"></script>
   <script src="<?=base_url('assets/back/')?>js/sparkline-chart.js"></script>
   <script src="<?=base_url('assets/back/')?>js/home-page-calender.js"></script>
   <script src="<?=base_url('assets/back/')?>js/home-chartjs.js"></script> -->
   <script src="<?=base_url('assets/back/');?>js/editable-table.js"></script>
   <script src="<?=base_url('assets/back/')?>js/indivisuals/inquiry.js"></script>
   <script src="<?=base_url('assets/back/')?>js/indivisuals/quotation.js"></script>
   <script src="<?=base_url('assets/back/')?>js/indivisuals/popup.js"></script>


   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->


</html>