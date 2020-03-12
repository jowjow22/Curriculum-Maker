
	$(".open-modal").click(function(){
	$(".modal-overlay").show();
	});

	$(".modal-close").click(function(){
	$(".modal-overlay").hide();
	});

	$(".open-logModal").click(function(){
	$(".logModal-overlay").show();
	});

	$(".logModal-close").click(function(){
	$(".logModal-overlay").hide();
	});


	$(".open").click(function(){
	$(".overlay").width('100%');
	});

	$(".close").click(function(){
	$(".overlay").width('0%');
	});
     $(document).on('submit','#form',function(){
         var dados = $(this).serialize();
        $.ajax({
             type: 'POST',
             url: 'request.php?user=cadastro',
             data: dados,
             success: function(retorno){
                 alert(retorno);
            }
         });
       return false;
     });