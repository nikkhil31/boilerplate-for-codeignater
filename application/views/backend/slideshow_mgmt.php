<div id="main-content">
 <div class="container-fluid"> 
  <div class="row-fluid">
   <div class="span12">
     <h3 class="page-title">
       Manage Slideshow
     </h3>
     <ul class="breadcrumb">
       <li class="active">
         Manage Slideshow 
       </li>
     </ul>
   </div>
 </div>
 <div class="row-fluid">
   <div class="span12">
     <div class="widget purple">
       <div class="widget-title">
         <h4><i class="icon-reorder"></i> Manage Slideshow </h4>
         <span class="tools">
          <a href="javascript:;" class="icon-chevron-down"></a>
          <a href="javascript:;" class="icon-remove"></a>
        </span>
      </div>
      <div class="widget-body">
       <div>

         <div class="clearfix">
          

           <div class="btn-group" style="width:100%">

             <a href="<?=site_url('slideshow/add')?>"><button class="btn green">
               Add New Slideshow  <i class="icon-plus"></i>
             </button></a>
           </div>

           


         </div>
         <div class="space15"></div>
         <table class="table table-striped table-hover table-bordered" id="editable-sample">
           <thead>
             <tr>
              <th width="5%" align="center">Sr.</th>
              <th width="35%">Slideshow Image </th>
              <th width="35%">Display Order </th>
              <th align="center" width="5%">Edit</th>
              <th align="center" width="5%">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?
            $sr=1;
            foreach ($slideshow as $key => $value) {
              ?>
              <tr>
               <td><?=$sr?></td>
               <td><img src="<?=base_url('assets/front/image/'.$value->image_path)?>" style="width: 150px;"></td>
               <td><?=$value->display_order?></td>
               <td>
                

                  <a  href="<?=site_url('slideshow/edit?id='.$value->id)?>" ><button class="btn btn-primary" title="Edit"><i class="icon-pencil" title="Edit"></i></button></a>

                  
                </td>
                <td>
                  

                    <a href="<?=site_url('slideshow/delete?id='.$value->id)?>" onClick="return confirm('Are you sure, you want to delete this slideshow ?');"><button class="btn btn-danger" title="Delete"><i class="icon-trash " title="Delete"></i></button></a>

                    
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