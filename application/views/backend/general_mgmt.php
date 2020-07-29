        <div id="main-content">        
        <div class="container-fluid">
          <div class="row-fluid">              
            <div class="span12">
              <div id="theme-change" class="hidden-phone">
                <i class="icon-cogs"></i>
                <span class="settings">
                  <span class="text">Theme Color:</span>
                  <span class="colors">
                    <span class="color-default" general-style="default"></span>
                    <span class="color-green" general-style="green"></span>
                    <span class="color-gray" general-style="gray"></span>
                    <span class="color-purple" general-style="purple"></span>
                    <span class="color-red" general-style="red"></span>
                  </span>
                </span>
              </div>
              <h3 class="page-title"> General Setting</h3>
              <ul class="breadcrumb">
                <li >
                  <a href="<?=site_url('mgmt/index')?>">Home </a>
                    <span class="divider">/</span>
                </li>
                <li class="active">General Setting</li>
              </ul>
            </div> 
          </div>
          <div class="row-fluid">
            <div class="span12">
              <div class="widget green">
                <div class="widget-title">
                  <h4><i class="icon-reorder"></i>General Setting</h4>
                  <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                  </span>
                </div>
                <div class="widget-body">
                  <form  method="post">
                    <div id="box">
                      <table style="border-collapse: collapse;" width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#CEE6F4">
                        <tr>
                          <td width="2%" align="center" class="text">&nbsp;</td>
                          <td colspan="2" align="left" class="text">Fieds Marked with (<span class="error">*</span>) are Mandatory
                          </td>
                        </tr>
                        <tr>
                          <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
                          <td  align="left" class="text">Email : </td>
                          <td width="78%" bgcolor="#F5F5F5" class="text">
                            <input type="hidden" name="action" value="general">
                            <input name="email" id="email" type="text" class="textfieldbig"  size="50" value="<?=set_value('email',$general->email)?>" />
                            <br/>
                            <span id="lbltitle" class="error" style="color: red"><?=_error('email',$error)?></span>
                          </td>
                        </tr>
                        <tr>
                          <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
                          <td  align="left" class="text">Mobile1: </td>
                          <td width="78%" bgcolor="#F5F5F5" class="text">
                            <input name="mobile1" id="mobile1" type="text" class="textfieldbig"  size="50" value="<?=set_value('mobile1',$general->mobile1)?>" />
                            <br/>
                            <span id="lbltitle" class="error" style="color: red"><?=_error('mobile1',$error)?></span>
                          </td>
                        </tr> 
                                              
                        <tr>
                          <td valign="top" class="text" align="center"></td>
                          <td align="left" valign="top" class="text">Address-1 : </td>
                          <td bgcolor="#F2F9FD" class="text">
                            <textarea name="address" class="textfieldbig"><?=set_value('address',$general->address)?></textarea>
                             <br/>
                            <span id="lbltitle" class="error" style="color: red"><?=form_error("photo")?></span> 
                          </td>
                        </tr>

                        <tr>
                          <td valign="top" class="text" align="center"></td>
                          <td align="left" valign="top" class="text">Address-2 : </td>
                          <td bgcolor="#F2F9FD" class="text">
                            <textarea name="address2" class="textfieldbig"><?=set_value('address2',$general->address2)?></textarea>
                             <br/>
                            <span id="lbltitle" class="error" style="color: red"><?=form_error("photo")?></span> 
                          </td>
                        </tr>

                         

                        <tr>
                          <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
                          <td  align="left" class="text">Facebook Url : </td>
                          <td width="78%" bgcolor="#F5F5F5" class="text">
                            <input name="facebook_url" id="facebook_url" type="text" class="textfieldbig"  size="50" value="<?=set_value('facebook_url',$general->facebook_url)?>" />
                            <br/>
                            <span id="lbltitle" class="error" style="color: red"><?=_error("facebook_url",$error)?></span>
                          </td>
                        </tr>
                        <tr>
                          <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
                          <td  align="left" class="text">Twitter Url : </td>
                          <td width="78%" bgcolor="#F5F5F5" class="text">
                            <input name="twitter_url" id="twitter_url" type="text" class="textfieldbig"  size="50" value="<?=set_value('twitter_url',$general->twitter_url)?>" />
                            <br/>
                            <span id="lbltitle" class="error" style="color: red"><?=_error("twitter_url",$error)?></span>
                          </td>
                        </tr>
                        <tr>
                          <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
                          <td  align="left" class="text">Instagram Url : </td>
                          <td width="78%" bgcolor="#F5F5F5" class="text">
                            <input name="instagram_url" id="instagram_url" type="text" class="textfieldbig"  size="50" value="<?=set_value('instagram_url',$general->instagram_url)?>" />
                            <br/>
                            <span id="lbltitle" class="error" style="color: red"><?=_error('instagram_url',$error)?></span>
                          </td>
                        </tr>
                        <tr>
                          <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
                          <td  align="left" class="text">Google + Url : </td>
                          <td width="78%" bgcolor="#F5F5F5" class="text">
                            <input name="pin_url" id="pin_url" type="text" class="textfieldbig"  size="50" value="<?=set_value('pin_url',$general->pin_url)?>" />
                            <br/>
                            <span id="lbltitle" class="error" style="color: red"><?=_error("pin_url",$error)?></span>
                          </td>
                        </tr>
                        <tr>
                          <td width="3%" align="center" valign="middle" class="text"><span class="error">*</span></td>
                          <td  align="left" class="text">Linkedin Url : </td>
                          <td width="78%" bgcolor="#F5F5F5" class="text">
                            <input name="linkedin_url" id="linkedin_url" type="text" class="textfieldbig"  size="50" value="<?=set_value('linkedin_url',$general->linkedin_url)?>" />
                            <br/>
                            <span id="lbltitle" class="error" style="color: red"><?=_error("linkedin_url",$error)?></span>
                          </td>
                        </tr>
                        <input type="hidden" name="map" value="">
                        <tr>
                          <td align="left" valign="top" class="text">&nbsp;</td>
                          <td align="left" valign="top" class="text">&nbsp;</td>
                          <td bgcolor="#F2F9FD" class="text">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center">&nbsp;</td>
                          <td align="left">
                          <input type="Submit" name="Submit" value="Save" class="buttongrey">            </td>
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
