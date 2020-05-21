//UX & UI
//MODAL INDEX CAD E LOG

	$(".open-modal").click(function(){
	$(".modal-overlay").fadeIn();
	});

	$(".modal-close").click(function(){
	$(".modal-overlay").fadeOut();
	});

	$(".open-logModal").click(function(){
	$(".logModal-overlay").fadeIn();
	});

	$(".logModal-close").click(function(){
	$(".logModal-overlay").fadeOut();
	});
//RESPONSIVE MENU

	$(".open").click(function(){
	$(".overlay").width('100%');
	});

	$(".close").click(function(){
	$(".overlay").width('0%');
	});
//BACKEND
     $(document).on('submit','#form',function(){
        $(".msg").removeClass("msg-error");
        $(".msg").removeClass("msg-success");
         var dados = $(this).serialize();
        $.ajax({
             type: 'POST',
             url: 'request.php?user=cadastro',
             data: dados,
             success: function(retorno){
                 if (retorno == 1) {
                    $(".msg > h3").html("Cadastrado com Sucesso!");
                    $(".msg").addClass("msg-success");
                    $(".msg").fadeIn("slow", function(){
                        $(this).delay(2000).fadeOut("slow");
                    });
                 }
                 else{
                    $(".msg > h3").html("Erro ao Cadastrar!");
                    $(".msg").addClass("msg-error");
                    $(".msg").fadeIn("slow", function(){
                        $(this).delay(2000).fadeOut("slow");
                    });
                 }
            }
         });
       return false;
     });

     $(document).on('submit','#form-login',function(){
                $(".msg").removeClass("msg-error");
                $(".msg").removeClass("msg-success");
                var dados = $(this).serialize();
                console.log(dados);
                    $.ajax({
                     type: 'POST',
                     url: 'request.php?user=login',
                     data: dados,
                     success: function(retorno){
                        alert(retorno);
                        if (retorno == 1) {
                        $(".msg > h3").html("Logado com Sucesso!");
                        $(".msg").addClass("msg-success");
                        $(".msg").fadeIn("slow", function(){
                            $(this).delay(2000).fadeOut("slow");
                        });
                            window.location = "home.php";
                        }
                        else
                        {
                        $(".msg > h3").html("Erro ao Logar!");
                        $(".msg").addClass("msg-error");
                        $(".msg").fadeIn("slow", function(){
                            $(this).delay(2000).fadeOut("slow");
                        });
                        }
                        
                    }
                 });
               return false;
      });
    