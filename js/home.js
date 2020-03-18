//SIDENAV
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  $(".dropdown-trigger").dropdown({
    coverTrigger: false
  });
  var collapsibleElem = document.querySelector('.collapsible');
  var collapsibleInstance = M.Collapsible.init(collapsibleElem);
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
