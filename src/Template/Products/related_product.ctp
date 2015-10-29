<div class="form-group parent-load" >
    <div class="input select">
        <label for="products">Related Products</label>
       <!-- <select name="products_id[]">
            <option value="">Select Related Products </option> -->
            <?php
            $i =0;
            foreach($related_product as $pr){
            //debug($pr);
            echo '<input type="text" readonly="readonly" value="'.$pr['productName'][$i].'" name="products_id"/>';
           // echo $this->Form->input([$i].'products_id',['value'=> $pr['productName'], 'readonly' => 'readonly']);
            echo $this->Form->input('orderItemQuantity');
            //echo '<option value="'. $pr['id'] .'">'. $pr['productName'] .' </option>';
            $i++;
            }
            ?>
      <!--  </select> -->
    </div>
</div>