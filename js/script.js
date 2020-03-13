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
      firstActive: 0 // this is the default
   })
//BACKEND
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

     $(document).on('submit','#form-login',function(){
                var dados = $(this).serialize();
                $.ajax({
                     type: 'POST',
                     url: 'request.php?user=login',
                     data: dados,
                     success: function(retorno){
                        alert(retorno);
                        window.location = 'home.php';
                    }
                 });
               return false;
      });
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