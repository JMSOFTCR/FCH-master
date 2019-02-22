function getProductDelete(idProd,idCat){ 
    // $("#idProdDelete").val(idProd);
    // $("#nameProd").val(nameProd);
    // $('.data').html("<div class='fa-3x text-center'><i class='fas fa-spinner fa-pulse'></i></div>")
    // setTimeout(function(){
    //     $('.data').html("<h4 class='text-center'>"+nameProd+"</h4>");},500)
    
    swal({
        title: 'Are you sure you want to delete this product?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value)
        {
            $.ajax({
                url:"deleteproduct.php",
                type:"POST",
                dataType:"json",
                data:{'idProd':idProd,'idCat':idCat}
            }).done(function(resp){
                $(".infoProduct").html(null);
                $(".infoProduct").html(resp.products);
                swal({
                    type: 'success',
                    title:'Deleted!',
                    text:resp.msg,
                    showConfirmButton:false,
                    timer: 800
                })
            }).fail(function(resp){
                alert(resp.responseText);
            }); 
        }
      })
}

function getPhoto(idProd){
    
    $("#idProd").val(idProd);
    $(".images").html(""); // evitamos que se quede alguna imagen pegada

    let getPhoto ="1"; 
    $.ajax({
        url: "addphoto.php",
        type: "POST",
        dataType:'json',
        data:{'idProd':idProd,'getPhoto':getPhoto},
        beforeSend:function(){
            
        }
    }).done(function(resp){
        if(!resp.error)
        {   
            $(".images").html(resp.allPhotos);
        }
        else
        {
            $(".images").html(resp.allPhotos);
        }
    }).fail(function(resp){
        $(".images").html(resp.allPhotos);
    })
}

$("#savePhoto").click(function(){
    $("#savePhotoProd").submit(function(e) {
        e.preventDefault();
        let id = $("#idProd").val();

        let parameters = new FormData($(this)[0]);

        $(".images").html("");
          $.ajax({
                url: "addphoto.php",
                type: "POST",
                dataType:'json',
                data: parameters,
                contentType: false, 
                processData: false,
                beforeSend: function(objeto){
                    
                }
            }).done(function(resp){
            
            if(!resp.error)
            {
                $(".images").html("");
                $(".images").html(resp.allPhotos);
            }
            else
            {
                $(".images").html("<div class='alert alert-danger'>"+resp.allPhotos+"</div>");
            }
            }).fail(function(resp){
                alert(resp.responseText)
                $(".images").html(resp.allPhotos);
            });
            $("#savePhotoProd")[0].reset(); // vaciamos el formulario
            $("#idProd").val(id);
      });
});

function deletePhoto(id,photo,idProd){

    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {

            $.ajax({
                url: "del_file.php",
                type: "POST",
                dataType:'json',
                data: {'id':id,'photo':photo,'idProd':idProd},
                beforeSend: function(objeto){
                    
                }
            }).done(function(resp){ 
                if(!resp.error){
                    // $(".images").html("");
                    $(".images").html(resp.allPhotos);
                }
                else
                {
                    $(".images").html(resp.msg);
                }
                
            }).fail(function(resp){
                alert(resp.responseText)
            });

          swal({
            type: 'success',
            title:'Deleted!',
            text:'Your photo has been deleted.',
            showConfirmButton:false,
            timer: 800
            })
        }
      })

    
}