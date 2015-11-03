<!--<div class="form-group parent-load" >
    <div class="input text">
        <label for="products">Related Products</label>
        <select name="products_id[]">
            <option value="">Select Related Products </option> 
            <?php
            $i =0;
            foreach($related_product as $pr){
            //debug($pr);
            //echo '<input type="text" readonly="readonly" value="'.$pr['productName'][$i].'" name="products_id"/>';
            echo $this->Form->input('products_id',['value'=> $pr['productName'], 'readonly' => 'readonly']);
            
            //echo '<option value="'. $pr['id'] .'">'. $pr['productName'] .' </option>';
            $i++;
            }
            ?>
        </select> 
    </div>
</div>-->
<?php
            $i =1;
            foreach($related_product as $pr){ 
echo '<div class="input text">';
echo '<label for="'.$i.'products-id">Product</label>';
echo '<input type="text" name="products_id" readonly="readonly" value="'. $pr['id'].'" maxlength="30" id="products-id">';
echo '</div>'; 
         
echo '<div class="input text">
<label for="orderitemquantity">Order Item Quantity</label>
<input type="text" name="orderItemQuantity" maxlength="30" id="orderitemquantity">
</div>';
}
?>