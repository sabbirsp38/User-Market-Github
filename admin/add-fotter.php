<?php include 'inc/hader3.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add Fotter</h2>
                <div class="block">               
                 <form action="DB-add-footer.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Footer section title in english</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Footer section title in english" class="medium" name="en_titile" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Footer section title in Garman</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Footer section title in Garman" class="medium" name="de_titile" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Footer section Description in english</label>
                            </td>
                            <td>
                                  <textarea name="en_dec" class="tinymce"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Footer section Description in Garman</label>
                            </td>
                            <td>
                                  <textarea name="de_dec" class="tinymce"></textarea>
                            </td>
                        </tr>
                        
                       
                        
                     
                        <tr>
                            
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>



<?php include 'inc/foter.php'; ?>  

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>