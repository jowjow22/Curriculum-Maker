//SIDENAV
  $(document).ready(function(){
    $('.sidenav').sidenav();
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
//STEPPERS
   var stepper1 = document.querySelector('.stepper1');
   var stepperFormacao = new MStepper(stepper1, {
      // options
      firstActive: 0 // this is the default
   });
   var stepper2 = document.querySelector('.stepper2');
   var stepperInstace2 = new MStepper(stepper2, {
      // options
      firstActive: 0 // this is the default
   });
     $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
    $(".add").click(function(){
      stepperFormacao.openStep(0);
    });
//backend//
 $(document).on('submit','#form-formacao',function(){
                var dados = $(this).serialize();
                $.ajax({
                     type: 'POST',
                     url: 'request.php?formacao=cadastro',
                     data: dados,
                     success: function(retorno){
                        alert(retorno);
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
                        alert(retorno);
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
                        alert(retorno);
                    }
                 });
               return false;
      });
     $(document).on('submit','#form-ref',function(){
                var dados = $(this).serialize();
                $.ajax({
                     type: 'POST',
                     url: 'request.php?ref=cadastro',
                     data: dados,
                     success: function(retorno){
                        alert(retorno);
                    }
                 });
               return false;
      });
