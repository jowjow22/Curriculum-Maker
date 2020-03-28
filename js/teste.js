$(document).on('submit','#form-tel',function(){
                $(".msg").removeClass("msg-error");
                $(".msg").removeClass("msg-success");
                var dados = $(this).serialize();
                $.ajax({
                     type: 'POST',
                     url: 'request.php?user=tel',
                     data: dados,
                     success: function(retorno){
                        if (retorno == 1) {
                          $(".msg > h6").html("Referência Cadastrada!");
                          $(".msg").addClass("msg-success");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                        else{
                          $(".msg > h6").html("Referência Já existente!");
                          $(".msg").addClass("msg-error");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                    }
                 });
               return false;
      });