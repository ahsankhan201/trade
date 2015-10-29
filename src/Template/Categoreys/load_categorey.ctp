
<div class="form-group parent-load" >
    <div class="input select">
        <?php 
        foreach ($parents as $parent) {
echo  $parent->catLabel. '->' .$parent->catName.' >';
}
       // echo $this->Form->input('categories', ['options' => $childs,'empty' => true,'onchange' => 'subCat(this)']);
        
        $selectBox = '';
        if(!empty($childs)){        
        foreach ($childs as $child) {
        $label = $child->catLabel;
        $selectBox = $selectBox. '<option value="'.$child->id.'">'. $child->catName.'</option>';
        }
        echo '<label for="parent-id">'.$label.'</label>';
        echo '<select name="parent_id" id="'.$html_id.'" onchange = "subCat(this);" >';
        echo '<option>Select '.$label.' </option>';
        echo $selectBox;
        echo '</select>';
        }
        else {
        foreach ($products as $product) {        
        $selectBox = $selectBox. '<option value="'.$product->id.'">'. $product->productName.'</option>';
        }
        echo '<label for="'.$html_id.'">Product</label>';
        echo '<select name="products_id" id="products-id" data-controller="parent-id" onchange = "relatedProduct(this);">';
        echo '<option>Select product</option>';
        echo $selectBox;
        echo '</select>';

        }
        ?>
    </div>
</div>

