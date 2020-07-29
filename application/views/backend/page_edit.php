<div id="main-content">
 <div class="container-fluid">
  <div class="row-fluid">
   <div class="span12">
     <h3 class="page-title">
     Edit Page </h3>
     <ul class="breadcrumb">
       <li>
         <a href="<?=site_url('page/mgmt')?>">Manage Page</a>
         <span class="divider">/</span>
       </li>
       <li class="active">
        Edit Page
      </li>
    </ul>
  </div>
</div>
<div class="row-fluid">
  <div class="span12">
    <div class="widget green">
      <div class="widget-title">
        <h4><i class="icon-reorder"></i>Edit Page </h4>
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
            </tr>

            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
              <td  align="left" class="text">Page Name :</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="name" type="text" class="textfieldbig" id="name" size="50" value="<?=set_value('name',$page->name)?>" readonly/>
                <input type="hidden" name="action" value="edit">
                <br/>
                <span id="lblname1" class="error"><?=_error('name')?></span>                          </td>
            </tr>

            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">Page Title:</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="page_title" type="text" class="textfieldbig" id="page_title" size="50" value="<?=set_value('page_title',$page->page_title)?>" />
                <br/>
                <span id="lblpage_title1" class="error"><?=_error('page_title')?></span>                          </td>
            </tr>

            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">Meta Title</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="meta_title" type="text" class="textfieldbig" id="meta_title" size="50" value="<?=set_value('meta_title',$page->meta_title)?>" />
                <br/>
                <span id="lbltitle1" class="error"><?=_error('meta_title')?></span>                          </td>
            </tr>


            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">Meta Keyword</td>
              <td width="78%" bgcolor="#F5F5F5" class="text"><input name="meta_keyword" type="text" class="textfieldbig" id="meta_keyword" size="50" value="<?=set_value('meta_keyword',$page->meta_keyword)?>" />
                <br/>
                <span id="lbltitle1" class="error"><?=_error('meta_keyword')?></span>                          </td>
            </tr>

             <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td  align="left" class="text">Meta Description</td>
              <td width="78%" bgcolor="#F5F5F5" class="text">
                <textarea name="meta_desc" class="textfieldbig"><?=set_value('meta_desc',$page->meta_desc)?></textarea>
                <br/>
                <span id="lblmeta_desc1" class="error"><?=_error('meta_desc')?></span>                          </td>
            </tr>
            <?
              if($page->id == 2 || $page->id == 1 || $page->id == 3) {
            ?>
            <tr>
              <td class="text"></td>
              <td class="text">Description : </td>
              <td bgcolor="#F5F5F5"></td>
            </tr>
            <tr>
              <td width="3%" align="center" valign="middle" class="text"><span class="error"></span></td>
              <td width="78%" bgcolor="#F5F5F5" class="text" colspan="2">
                <textarea name="description"  id="description" cols="80"  rows="20"><?=set_value('description',$page->description)?></textarea>
          <script type="text/javascript">
                    CKEDITOR.replace( 'description',{
                       filebrowserUploadUrl : 'upload.php'
                    });
            </script>
                <br/>
                <span id="lbltitle1" class="error"><?=_error('description')?></span>                          </td>
            </tr>

            <?}?>

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
