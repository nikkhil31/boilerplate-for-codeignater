<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                    Change password </h3>
                   <ul class="breadcrumb">
                       <!--<li>
                           <a href="dashboard.php">Dashboard</a>
                           <span class="divider">/</span>
                       </li>-->
                       <li>
                           <a href="dashboard.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Change password
                       </li>
                       <!--<li class="pull-right search-wrap">
                           <form action="#" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>-->
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Change password</h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                           <div id="box">
                      <span class="error">* </span><span class="text">indicates mandatory field required </span><br /><br />
              <table style="border-collapse: collapse;" width="100%" border="1" cellpadding="2"
                                            cellspacing="0" bordercolor="#F0DED5">
                <form  method="post" name="frmcpass" id="frmcpass" >
                  <? if($this->session->flashdata('general')) { ?>
                  <tr>
                    <td colspan="2"><?=$this->session->flashdata('general')?></td>
                  </tr>
                  <? } ?>
                  <tr height="24">
                    <td width="17%"  align="right" class="text">&nbsp;&nbsp;&nbsp;User Name : </td>
                    <td bgcolor="#e5e5e5" class="text"><b><?php echo $user->username?></b></td>
                  </tr>
                  <tr>
                    <td align="right" valign="middle" class="text"><span class="error">* </span>Old Password : </td>
                    <td bgcolor="#e5e5e5"><input name="opassword" type="password" class="textfieldbig" value="<?=set_value('opassword')?>" />
                        <input type="hidden" name="action" value="newpass">
                        <br />
                        <span id="lbloldpass" class="error"><?=_error('opassword',$error)?></span></td>
                  </tr>
                  <tr>
                    <td align="right" class="text" valign="middle"><span class="error">* </span>New Password : </td>
                    <td bgcolor="#e5e5e5"><input name="npassword" type="password" class="textfieldbig"  value="<?=set_value('npassword')?>"/>
                        <br />
                        <span  id="lblnewpass" class="error"><? echo _error('npassword',$error); ?></span> </td>
                  </tr>
                  <tr>
                    <td align="right" class="text" valign="middle"><span class="error">* </span>Confirm Password : </td>
                    <td bgcolor="#e5e5e5"><input name="cpassword" type="password" class="textfieldbig"  value="<?=set_value('cpassword')?>"/>
                        <br />
                        <span id="lblconpass" class="error"><? echo _error('cpassword',$error); ?></span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input name="Submit" type="submit" class="buttongrey" value="Change" />                    </td>
                  </tr>
                </form>
              </table>
            </div>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
            

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->