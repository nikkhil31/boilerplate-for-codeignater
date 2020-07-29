<div id="main-content">
 <div class="container-fluid">
  <div class="row-fluid">
   <div class="span12">
     <h3 class="page-title">
     General </h3>
     <ul class="breadcrumb">
       <li class="active">
        General
      </li>
    </ul>
  </div>
</div>
<div class="row-fluid">
  <div class="span12">
    <div class="widget green">
      <div class="widget-title">
        <h4><i class="icon-reorder"></i>General </h4>
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
              <td colspan="2" align="left" class="text">Fieds Marked with (<span class="error"></span>) are Mandatory </td>
            </tr>

            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
              <td  align="left" class="text">Phone :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="phone" type="text" class="textfieldbig" id="phone" size="50" value="<?=set_value('phone',$gen['phone'])?>" />
                <input type="hidden" name="action" value="edit">
                <br/>
                <span id="lblname1" class="error"><?=_error('phone')?></span>                          </td>
            </tr>

             <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
              <td  align="left" class="text">  Email :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="email" type="text" class="textfieldbig" id="email" size="50" value="<?=set_value('email',$gen['email'])?>" />
                <br/>
                <span id="lbltitle1" class="error"><?=_error('email')?></span>                          </td>
            </tr>



            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">Address :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><textarea class="textfieldbig" name="address"><?=set_value('address',$gen['address'])?></textarea>
                <br/>
                <span id="lbltitle1" class="error"><?=_error('address')?></span>                          </td>
            </tr>



            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">Footer Description :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><textarea class="textfieldbig" name="footer_desc"><?=set_value('footer_desc',$gen['footer_desc'])?></textarea>
                <br/>
                <span id="lbltitle1" class="error"><?=_error('footer_desc')?></span>                          </td>
            </tr>

             <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">  Facebook link :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="fb" type="text" class="textfieldbig" id="fb" size="50" value="<?=set_value('fb',$gen['fb'])?>" />
                <br/>
                <span id="lbltitle1" class="error"><?=_error('fb')?></span>                          </td>
            </tr>



            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">  Google-plus link :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="google-plus" type="text" class="textfieldbig" id="google-plus" size="50" value="<?=set_value('google-plus',$gen['google-plus'])?>" />
                <br/>
                <span id="lbltitle1" class="error"><?=_error('google-plus')?></span>                          </td>
            </tr>


            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">  Twitter link :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="twitter" type="text" class="textfieldbig" id="twitter" size="50" value="<?=set_value('twitter',$gen['twitter'])?>" />
                <br/>
                <span id="lbltitle1" class="error"><?=_error('twitter')?></span>                          </td>
            </tr>

             <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">Google Map :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><textarea class="textfieldbig" name="map"><?=set_value('map',$gen['map'])?></textarea>
                <br/>
                <span id="lbltitle1" class="error"><?=_error('map')?></span>                          </td>
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
