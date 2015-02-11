<?php include_once BASE_VIEW_PATH.'/elements/header.php';?>
<h2><a href="index.php">Home</a> &raquo;<a href="#">Category</a>&raquo;<a href="#"><?php echo $this->cat->name?></a>&raquo;<a href="#" class="active">Edit</a></h2> 
                <form method="post" action="<?php echo BASE_URL?>post_save.php">
                <input type="hidden" name='id' value="<?php echo $this->cat->id?>">
                <div id="main"> 
					<h3>Edit Post</h3> 
                    <table cellpadding="0" cellspacing="0"> 
                        <tr>
                            <td width="114">Title</td>
                            <td width="584"><input type="text" name="name" value="" /></td>
                         </tr> 
                         <tr>
                            <td width="114">Category</td>
                            <td width="584"><input type="text"  name="category" value="" /></td>
                         </tr> 
                          <tr>
                            <td width="114">Content</td>
                            <td width="584"><input type="text"  name="content" value="" /></td>
                         </tr> 
                          <tr>
                            <td width="114">Author</td>
                            <td width="584"><input type="text"  name="author" value="" /></td>
                         </tr> 
                          <tr>
                            <td width="114">Status</td>
                            <td width="584"><input type="text"  name="status" value="" /></td>
                         </tr> 
                         <tr>
                            <td width="114">&nbsp;</td>
                            <td width="584"><input type="submit" /></td>
                         </tr>                   
                    </table> 
                    
                    <br /><br /> 
                </div> </form>

<?php include_once BASE_VIEW_PATH.'/elements/footer.php';?>