<?php $this->load->view('pages/admin/header'); ?>

<!---======================== Sidebar ============================--->

<?php $this->load->view('pages/admin/left_menu');  //echo "<pre>";print_r($user);die;?> 

<!----========================Content=============================---->
<style>
.table_style thead th{ border:none;}
.logosize img {
    cursor: pointer;
    max-height: 130px;
    max-width: 158px;
    min-height: 130px;
    min-width: 168px;
}
</style>
<script type="text/javascript">
function newlogo(){
					$(".add_image").click();
				}
				
function validate(){
		 
			
			 
  if(document.getElementById('image').value!="")
  {
    if((document.getElementById('image').value.lastIndexOf('.jpg')==-1) && (document.getElementById('image').value.lastIndexOf('.jpeg')==-1) && (document.getElementById('image').value.lastIndexOf('.gif')==-1)&& (document.getElementById('image').value.lastIndexOf('.png')==-1))     {
    alert('Please select .jpg or gif or .png file only');
    document.getElementById('image').focus();
  	document.getElementById('image').value='';  return false;
    }
	$("#logoimage").toggle();
	$(".add_image").toggle();
  }
  }
</script>
<div id="content" class="container-fluid"> 
 
<div class="row-fluid">
        <div class="span12">
            <h2 class="pull-left"><?php if($chk==''){ echo "View"; }else{echo "Edit";} ?> Add</h2>
        </div>
    </div>
  <form action="" method="post" name="update_user" enctype="multipart/form-data">
      <div class="main_box">
          <table class="table_style">
            <thead>
            <tr>
		<th>ID</th>
		<td> <?=$add->id;?> </td>
	</tr>
	<tr>
		<th>Add Name</th>
		<td><input type="text"  value="<?=@$add->add_name;?>" <?=@$chk;?> name="add_name"> 
</td>
	</tr>
	<tr>
		<th>Add Image</th>
		<td>
         <div id='logoimage' class="logosize">
       		 <img src="<?=base_url()?>img/adds/<?=@$add->add_image;?>" onclick="<?=@$chk;?>newlogo()" class="sd-img"> 
         </div>
         <input style="display:none;" type="file" onchange="return validate();" name="add_image" id="image" class="add_image" placeholder="upload file">
</td>
	</tr>
	<tr>
		<th>Add Link</th>
		<td><input type="text" value="<?=@$add->add_link;?>" <?=@$chk;?> name="add_link"> 
</td>
	</tr>
    <tr>
		<th>Add Description</th>
		<td><textarea <?=@$chk;?> name="add_des"><?=@$add->add_des;?> </textarea>
</td>
	</tr>
    <tr>
		<th>Display Order</th>
		<td><input type="text" value="<?=@$add->add_order;?>" <?=@$chk;?> name="add_order"> 
</td>
	</tr>
    
	<tr>
		<th>Is active</th>
		<td> <input type="checkbox" name="active" <?=@$chk;?> value="1"  <?php if($add->active=='Y'){echo 'checked="checked"';}?> />  
</td>
	</tr>
    <tr>
		<th>&nbsp;  </th>
		<td>   <?php if($chk==''){ ?>
			<input type="submit" value="Update" name="update">
			<?php }  ?>   
</td>
	</tr>
           </thead>
           </table>
      
      
      </div>
</form>
  </div>
</div>


<!-------------------------------row-------------------------------->

<div class="clearfix"></div></div>

 

<!----======================== Javascripts =============================----->

<!-- jQuery (latest version) -->
<script src="js/jquery-latest.js"></script>
<!-- menu -->
<script src="js/menu.js"></script>
<!-- bootstrap 2.3.0 -->
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
function del(id){
				if(confirm("Are you sure want to delete this category?")){
					$.post("<?php echo base_url();?>admin/delcat" , { id : id} ,
					function(data){
							alert("Category Deleted!");
							window.location.href='';
						});
				}
}
</script>

</body></html>