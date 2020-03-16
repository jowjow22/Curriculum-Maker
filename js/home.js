
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
 //SIDENAV
      $(document).ready(function(){
    $('.sidenav').sidenav();
  });
//MODALS SIDENAV
  $(document).ready(function(){
    $('.modal1').modal();
  });
//STEPPERS
   var stepper = document.querySelector('.stepper');
   var stepperInstace = new MStepper(stepper, {
      // options
      firstActive: 0 // this is the default;
   });
//BAckENd