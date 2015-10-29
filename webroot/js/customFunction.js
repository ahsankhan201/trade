function subCat(parent) {
  $.ajax({
        type: "post", // Request method: post, get
        url: "/trade/categoreys/loadCategorey/" + parent.value , // URL to request
        data: "ajax=true",
        // dataType:'json',// post data
        success: function (response) {
            $("#"+parent.id).next('.parent-load').remove();
            $("#"+parent.id).attr('name', 'parents_id_old');
            $("#"+parent.id).after(response);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert('error');
        }
    }); 
}

function relatedProduct(product) {
    
  $.ajax({
        type: "post", // Request method: post, get
        url: "/trade/products/relatedProduct/" + product.value , // URL to request
        data: "ajax=true",
        // dataType:'json',// post data
        success: function (response) {
           // $("#"+parent.id).next('.parent-load').remove();
            $("#"+product.id).after(response);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert('error');
        }
    });  
}

