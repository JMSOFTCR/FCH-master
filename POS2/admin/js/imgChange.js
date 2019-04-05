$("#savePhoto").click(function(){
   
    $("#photoForm").submit(function(e){
        e.preventDefault();
        alert("Some");
        let param = new FormData($(this)[0]);
        // $.ajax({
        //     url: "addphoto.php",
        //     type: "POST",
        //     dataType:'json',
        //     data: param,
        //     contentType: false, 
        //     processData: false,
        //     beforeSend: function(objeto){
        //        // $("#resultPhoto").html("Enviando...");
        //     },
        //     success:function(resp){

        //     },
        //     error:function(resp){

        //     }
        // });
    });
});

function addPhoto(e){
  
    $("#addphoto").modal();
}