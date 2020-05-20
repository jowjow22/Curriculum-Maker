//SIDENAV
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  $(".dropdown-trigger").dropdown({
    coverTrigger: false
  });
  $(".dropdown-trigger2").dropdown({
    coverTrigger: true
  });
  var collapsibleElem = document.querySelector('.collapsible');
  var collapsibleInstance = M.Collapsible.init(collapsibleElem);
//ACTION
$(".perfil-target").click(function(){
  $(".flex-row").hide();
  $(".perfil").show();
});  
$(".cards-target").click(function(){
  $(".flex-row").show();
  $(".perfil").hide();
})
$(".refresh").click(function(){
  location.reload(true);
});
//MODALS SIDENAV
  $(document).ready(function(){
    $('.modal1').modal();
  });
  $(document).ready(function(){
    $('.modal2').modal();
  });
    $(document).ready(function(){
    $('.modal3').modal();
  });
    $(document).ready(function(){
    $('.modal4').modal();
  });
    $(document).ready(function(){
    $('.modal5').modal();
  });
    $(document).ready(function(){
    $('.nascimento').datepicker({
      format: "dd/mm/yyyy"
    });
  });
    $(document).ready(function(){
    $('.datepicker1').datepicker({
      format: "yyyy"
    });
  });
    $(document).ready(function(){
    $('.datepicker2').datepicker({
      format: "yyyy"
    });
  });
//STEPPERS
   var stepper1 = document.querySelector('.stepper1');
   var stepperFormacao = new MStepper(stepper1, {
      // options
      firstActive: 0 // this is the default
   });
   var stepper2 = document.querySelector('.stepper2');
   var stepperExp = new MStepper(stepper2, {
      // options
      firstActive: 0 // this is the default
   });
   var stepper3 = document.querySelector('.stepper3');
   var stepperRef = new MStepper(stepper3, {
      // options
      firstActive: 0 // this is the default
   });
   var stepper5 = document.querySelector('.stepper5');
   var stepperRef = new MStepper(stepper5, {
      // options
      firstActive: 0 // this is the default
   });
    $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
    $(".addForm").click(function(){
      stepperFormacao.openStep(0);
    });
    $(".addExp").click(function(){
      stepperExp.openStep(0);
    });
    $(".addRef").click(function(){
      stepperRef.openStep(0);
    });
//backend//
 $(document).on('submit','#form-formacao',function(){
                var dados = $(this).serialize();
                $.ajax({
                     type: 'POST',
                     url: 'request.php?formacao=cadastro',
                     data: dados,
                     success: function(retorno){
                          if (retorno == 1) {
                          $(".msg > h6").html("Formação Cadastrada!");
                          $(".msg").addClass("msg-success");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                        else{
                          $(".msg > h6").html("Formação Já existente!");
                          $(".msg").addClass("msg-error");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                    }
                 });
               return false;
      });
     $(document).on('submit','#form-exp',function(){
                var dados = $(this).serialize();
                $.ajax({
                     type: 'POST',
                     url: 'request.php?exp=cadastro',
                     data: dados,
                     success: function(retorno){
                          if (retorno == 1) {
                          $(".msg > h6").html("Experiência Cadastrada!");
                          $(".msg").addClass("msg-success");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                        else{
                          $(".msg > h6").html("Experiência Já existente!");
                          $(".msg").addClass("msg-error");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                    }
                 });
               return false;
      });
     $(document).on('submit','#form-hab',function(){
                var dados = $(this).serialize();
                $.ajax({
                     type: 'POST',
                     url: 'request.php?hab=cadastro',
                     data: dados,
                     success: function(retorno){
                          if (retorno == 1) {
                          $(".msg > h6").html("Habilidade Cadastrada!");
                          $(".msg").addClass("msg-success");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                        else{
                          $(".msg > h6").html("Habilidade Já existente!");
                          $(".msg").addClass("msg-error");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                    }
                 });
               return false;
      });
     $(document).on('submit','#form-ref',function(){
                $(".msg").removeClass("msg-error");
                $(".msg").removeClass("msg-success");
                var dados = $(this).serialize();
                $.ajax({
                     type: 'POST',
                     url: 'request.php?ref=cadastro',
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
     $(document).ready(function(){
      var endereco = "jsonRequests.php?data&users";
        $.ajax({
            url: endereco,
            complete: function(res){
                var userData = JSON.parse(res.responseText);
                $(".user-name").html(userData[0].nm_nome+" "+userData[0].nm_sobrenome);
                $(".email").html(userData[0].nm_email);
            }
        });  
     });
     $(document).ready(function(){
     $(".msg").removeClass("msg-error");
     $(".msg").removeClass("msg-success");
     $(".msg").removeClass("msg-warning");
        $.ajax({
          type: 'POST',
          url:'request.php?user=check',
          success: function(retorno){
              if (retorno==1) {
                          $(".msg > h6").html("Termine o seu cadastro para utilizar nossas funcionalidades!");
                          $(".msg").addClass("msg-warning t20");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(3000).fadeOut("slow");
                          });
              }
              else{
                $(".confirmed").addClass("perfil-target");
              }
          }
        });
     });
     $(".update").click(function(){
              var endereco = "jsonRequests.php?data&users";
        $.ajax({
            url: endereco,
            complete: function(res){
                var userData = JSON.parse(res.responseText);
                $("#nomeUpdate").val(userData[0].nm_nome);
                $("#nomeL").addClass("active");
                $("#sobrenome").val(userData[0].nm_sobrenome);
                $("#sobrenomeL").addClass("active");
                $("#email").val(userData[0].nm_email);
                $("#emailL").addClass("active");
                $("#nascimento").val(userData[0].dt_nascimento);
                $("#nascimentoL").addClass("active");
                $("#telefone-perfil").val(userData[0].nr_telefone);
                $("#telefoneL").addClass("active");
                $("#site").val(userData[0].url_website);
                $("#siteL").addClass("active");
                $("#profissao").val(userData[0].nm_profissao);
                $("#profissaoL").addClass("active");
                $("#endereco").val(userData[0].ds_endereco);
                $("#enderecoL").addClass("active");
                $("#obj").val(userData[0].ds_objetivo);
                $("#objL").addClass("active");
            }
        });
     });
     $(document).on('submit','#form-update',function(){
      var formData = new FormData(this);
      var dados = $(this).serialize();
      console.log(formData)
      console.log(dados);
        $.ajax({
          type: 'POST',
          url: 'request.php?user=update',
          data: formData,
                     success: function(retorno){
                      console.log(retorno);
                      alert(retorno);
                        if (retorno == 1) {
                          $(".msg > h6").html("CadastradO!");
                          $(".msg").addClass("msg-success");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                        else{
                          $(".msg > h6").html("Não foi possivel atualizar seu cadastro");
                          $(".msg").addClass("msg-error");
                          $(".msg").fadeIn("slow", function(){
                          $(this).delay(2000).fadeOut("slow");
                          });
                        }
                    }
                 });
               return false;
        });

