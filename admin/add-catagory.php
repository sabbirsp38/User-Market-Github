<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add Category</h2>
                <div class="block">               
                 <form action="DB-add-category.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Category in english</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Category in english..." class="medium" name="en_title" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Category in Garman</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Category in Garman..." class="medium" name="de_title" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Category Icon</label>
                            </td>
                            <td>
                                <input type="file" placeholder="Country in english..." class="medium" name="icon" />
                            </td>
                        </tr>
                       
                        
                     
                        <tr>
                            <td></td>
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