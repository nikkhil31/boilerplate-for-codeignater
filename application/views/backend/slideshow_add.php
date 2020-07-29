<div id="main-content">
 <div class="container-fluid">
  <div class="row-fluid">
   <div class="span12">
     <h3 class="page-title">
     Add New Slideshow </h3>
     <ul class="breadcrumb">
       <li>
         <a href="<?=site_url('slideshow/mgmt')?>">Manage Slideshow</a>
         <span class="divider">/</span>
       </li>
       <li class="active">
        Add New Slideshow
      </li>
    </ul>
  </div>
</div>
<div class="row-fluid">
  <div class="span12">
    <div class="widget green">
      <div class="widget-title">
        <h4><i class="icon-reorder"></i>Add New Slideshow </h4>
        <span class="tools">
          <a href="javascript:;" class="icon-chevron-down"></a>
          <a href="javascript:;" class="icon-remove"></a>
        </span>
      </div>
      <div class="widget-body">
        <form method="post" enctype="multipart/form-data">

          <div id="box">
            <table style="border-collapse: collapse;" width="100%" border="1" cellpadding="2"
            cellspacing="0" bordercolor="#CEE6F4">
            <tr>
              <td width="3%" align="center" class="text">&nbsp;</td>
              <td colspan="2" align="left" class="text">Fieds Marked with (<span class="error">*</span>) are Mandatory </td>
                <input type="hidden" name="action" value="add">
            </tr>

            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
              <td  align="left" class="text">Image :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="image" type="file" />
                Image size Should be 1170 x 400
                <br/>
                <span id="lbltitle1" class="error"><?=_error('image')?></span>                          </td>
            </tr>

            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
              <td  align="left" class="text">Display Order :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="display_order" type="text" class="textfieldbig" id="display_order" size="50" value="<?=set_value('display_order')?>" />
                <br/>
                <span id="lbltitle1" class="error"><?=_error('display_order')?></span>                          </td>
            </tr>


              <tr>
                <td colspan="2" align="center">&nbsp;</td>
                <td align="left">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="center">&nbsp;</td>
                <td align="left"><input type="submit" name="Submit" class="btn blue" value="Save">            </td>
              </tr>
            </table>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
