<?php
$product = DB::table('cd_material')->get();
 ?> 
<script type="text/javascript">
function sendValue(value)
{
    var parentId = <?php echo json_encode($_GET['id']); ?>;
    window.opener.updateValue(parentId, value);
    window.close();
}
</script>

 <form name="selectform"> 

                <table border=0 width=1000 id="hor-minimalist-a"> 
                    <tr> 
                        <th>Material Code</th>                       
                        <th>&nbsp;</th>  
                        <th>Material Ktg</th>   
                        <th>Product Name</th> 
                        <th>Material Pack</th> 
                        <th>Material Size</th>  
                        <th>Material Unit</th>  
                        <th>Material Item</th>  
                    </tr> 
<?php 
   foreach ($product as $rows) {
?> 
                    <tr> 
                        <td><input type=button value="Select" onClick="sendValue('<?php echo $rows->material_code; ?>')" /></td>
                        <td><?php echo $rows->material_ktg; ?></td> 
                        <td><center><?php echo $rows->material_name; ?></td> 
                        <td><center><?php echo $rows->material_pack; ?></td> 
                        <td><center><?php echo $rows->material_size; ?></td> 
                        <td><center><?php echo $rows->material_unit; ?></td> 
                        <td><center><?php echo $rows->material_item; ?></td> 
                    </tr>                                    

<?php 
    } 
?> 
                    </table> 