
<div class="large-6 columns main-content">
   <div style="max-width: 625px;">
   		<h1> <?=@$headding?></h1> 
        <?php  if(isset($is_cat)){?>  
        <div class="row storetop" style="padding: 10px;">
          <div class="large-12 columns signup-button storedetails">
            <ul class="signup-button store-details">
              <li class="signup search">
                <form class="search" action="<?php echo base_url();?>store/searchstore" method="post">
                  Enter Store name :  <input type="text" name="storename" id="storename" placeholder="search" />
                  <input type="submit" value="submit">
                </form>
              </li>
			 </ul>
          </div>
        </div>
        <?php } if(isset($all_cat)){?>  
   		<div style="width: 200px;float: right; margin-top: -15px;">
   			<form action="" id="filter_cat" name="filter_cat" method="post">
            	<select name="cat_id" id="cat_id" onchange="this.form.submit()">
                	<option value="0"> --Select Category--</option>
            		<?php foreach($all_cat as $cat){?>
            			<option value="<?=$cat['id']?>" <?php if($cat_id==$cat['id']){echo 'selected="selected"';}?>><?=$cat['s_category_name']?></option>
                	<?php } ?>
            	</select>
            </form>
        </div> 
        <?php } ?>
   </div>
        <ul class="small-block-grid-3 images-box">
            <?php 
			if(!empty($cat_detail)){
				foreach($cat_detail as $d){ ?>
             		 <li class="logosize">
                            <img src="<?php echo base_url();?>img/upload/<?=$d['s_store_logo']?>">
                            <span class="caption">
                            	<a href="<?php echo base_url();?>store/viewstore/<?=$d['id']?>"><?=$d['s_store_name']?>
                             <?php   if($d['i_status']==1){ ?>
					 <img title="Confirmed" src="<?=base_url()?>img/icon_correct.jpg">
					 
					<?php } ?></a>
                            </span>
                     </li>
            <?php }}else{ ?>
             <li class="logosize">
                            
                            <span class="caption">
                            	No Record Found!
                            </span>
                     </li>
            
              <?php } ?>
            </ul>
             
 

</div>