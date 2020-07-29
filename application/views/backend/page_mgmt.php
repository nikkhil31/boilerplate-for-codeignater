<div id="main-content">
 <div class="container-fluid"> 
  <div class="row-fluid">
   <div class="span12">
     <h3 class="page-title">
       Manage Page
     </h3>
     <ul class="breadcrumb">
       <li class="active">
         Manage Page 
       </li>
     </ul>
   </div>
 </div>
 <div class="row-fluid">
   <div class="span12">
     <div class="widget purple">
       <div class="widget-title">
         <h4><i class="icon-reorder"></i> Manage Page </h4>
         <span class="tools">
          <a href="javascript:;" class="icon-chevron-down"></a>
          <a href="javascript:;" class="icon-remove"></a>
        </span>
      </div>
      <div class="widget-body">
       <div>

         <div class="clearfix">

         </div>
         <div class="space15"></div>
         <table class="table table-striped table-hover table-bordered" id="editable-sample">
           <thead>
             <tr>
              <th width="8%" align="center">Sr.</th>
              <th width="29%">Page name </th>
              <th width="29%">Page Title </th>
              <th align="center" width="9%">Edit</th>
            </tr>
          </thead>
          <tbody>
            <?
            $sr=1;
            foreach ($page as $key => $value) {
              ?>
              <tr>
               <td><?=$sr?></td>
               <td><?=$value->name?></td>
               <td><?=$value->page_title?></td>
               <td>

                  <a  href="<?=site_url('page/edit?id='.$value->id)?>" ><button class="btn btn-primary" title="Edit"><i class="icon-pencil" title="Edit"></i></button></a>

                </td>
                </tr>
                <?
                $sr++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>