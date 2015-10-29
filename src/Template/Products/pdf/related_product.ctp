<div class="form-group parent-load" >
    <div class="input select">
        <label for="parent-id">Related Products</label>
        <select name="relatedProduct">
            <option value="">Select Related Products </option>
            <?php
            foreach($related_product as $pr){
            //debug($pr);
            echo '<option value="'. $pr['id'] .'">'. $pr['productName'] .' </option>';
            }
            ?>
        </select>
    </div>
</div>