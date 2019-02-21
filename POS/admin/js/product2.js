$("#addPhoto").click(function(){
    $.ajax({
        url: "",
        type: "POST",
        dataType:'json',
        data:"",    
        contentType: false, 
        processData: false,
        beforeSend:function(){
            
        }
    }).done(function(answ){

    }).fail(function(answ){

    })
});

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

function getProductDelete(idProd){
    $("#idProdDelete").val(idProd);
     $('.data').html("<div class='fa-3x'><i class='fas fa-spinner fa-pulse'></i></div>");

    $.ajax({
        url:"deleteproduct.php",
        type:"POST",
        dataType:"json",
        data:{'idProd':idProd},
        beforeSend:function(){
            $('.data').html("<div class='fa-3x'><i class='fas fa-spinner fa-pulse'></i></div>");
        }
    }).done(function(resp){
        alert(resp.responseText);
    }).fail(function(resp){
        alert(resp.responseText);
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
}