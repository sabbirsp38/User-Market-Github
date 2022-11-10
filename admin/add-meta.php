<?php include 'inc/hader3.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add Contact Info</h2>
                <div class="block">               
                 <form action="DB-add-seo-info.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Meta Title in english</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Meta Title in english" class="medium" name="en_meta_titile" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Meta Title in Garman</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Meta Title in Garman" class="medium" name="de_meta_titile" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Meta Description in english</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="Meta Description in english" class="medium" name="en_meta_dec" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Meta Description in Garman</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="Meta Description in Garman" class="medium" name="de_meta_dec" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Meta Keword in english</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="Meta Keword in english" class="medium" name="en_meta_keword" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Meta Keword in Garman</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="Meta Keword in Garman" class="medium" name="de_meta_keword" />
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