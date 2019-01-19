
$(function() {
    load(1);
});
function load(page){
    var query=$("#q").val();
    var per_page=10;
    var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'ajax/list_products.php',
        data: parametros,
         beforeSend: function(objeto){
        $("#loader").html("Loading...");
      },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}

$('#editProductModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') 
  $('#edit_id').val(id)
  var name = button.data('name') 
  $('#edit_name').val(name)
  var category = button.data('category') 
  $('#edit_category').val(category);//html("<option value=" + 1 + ">" + category + "</option>");
  var stock = button.data('stock') 
  $('#edit_stock').val(stock)
  var price = button.data('price') 
  $('#edit_price').val(price)
  var photo = button.data('photo')  
  $('#edit_photo').val(photo)
  var description = button.data('description')  
  $('#edit_description').val(description)
  var tech = button.data('tech')  
  $('#edit_tech').val(tech)
  var video = button.data('video')  
  $('#edit_video').val(video)
  var supplier = button.data('supplier')  
  $('#edit_supplier').val(supplier)
  
})

$('#deleteProductModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') 
  $('#delete_id').val(id)
})


$('#saveEdit').click(function() {
  $( "#edit_product" ).submit(function(e) {
    e.preventDefault();
    let parametros=$(this).serialize();//new FormData($(this)[0])
  
      $.ajax({
          url: "edit_product.php",
          type: "POST",
          dataType: 'json',
          encoding:"UTF-8",
          data: parametros,
          beforeSend: function(objeto){
             $("#resultados").html("Enviando...");
          },
          success: function(datos){
              swal({
                type:'success',
                title:'Product Update successfully!'
              })
          $("#resultados").html(datos);
          load(1);
          $('#editProductModal').modal('hide');
        },
        error: function(resp) {
          alert(resp.responseText);
        } 
      });   
  });
});

 $('#saveStore').click(function() { // investigar como enviar imagnes de un file campo con post yq que sea con ajax
  $( "#add_product" ).submit(function(e)  {
    e.preventDefault();
    let parametros = new FormData($(this)[0]);//$(this).serialize()+"&images="+image;
    //parametros.append("images", $("#images").prop('files')[0]);

    //alert($("#supplier_p").val()+ " category:"+$("#category_p").val());
      $.ajax({
          url: "ajax/save_product.php",
          type: "POST",
          dataType:'json',
          data: parametros,
          contentType: false, 
          processData: false,
          beforeSend: function(objeto){
            $("#resultados").html("Enviando...");
          },
          success: function(resp)
          {
            if(!resp.error){
              swal({
                type:'success',
                title:'Product added successfully!!'+resp.msg
              })

              $("#resultados").html(resp);
              $('#addProductModal').modal('hide');
              load(1);
            }
            else if(resp.error){
              swal({
                type:'error',
                title: 'Error: '+resp.msg,
              })
            }
          },
          error: function(resp){
            swal({
              type: 'error',
              title:'Error!',
              text:resp.responseText,
            })
            console.log(resp.responseText);
          }
      }); 
  });
 });

$( "#delete_product" ).submit(function( event ) {
  var parametros = $(this).serialize();
    $.ajax({
            type: "POST",
            url: "ajax/del_product.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#resultados").html("Enviando...");
              },
            success: function(datos){
              swal(
                'Product Delete!',
                '',
                'success'
                  )
            $("#resultados").html(datos);
            load(1);
            $('#deleteProductModal').modal('hide');
          }
    });
  event.preventDefault();
});

$("#send").click(function(){
  // intentar con peticion ajax mandar el valor del campo y caerle al file 
  alert($("#archivo").val())
})