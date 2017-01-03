<footer>
  <div class="content">
    <div class="col-6 ">
      <address>
      <a href="mailto:soynovia@santoencanto.cl">soynovia@santoencanto.cl</a><br>
      <a href="tel:+56226388378">+562 2638 8378</a><br>
      <br>
      Monjitas 626, Oficina #73. <br>
      Santiago, Chile.
      </address>
      <small>Desarrollado por <a href="http://www.somosbrutos.cl" target="_blank">Brutos</a>.</small> </div>
    <!-- /col-6 -->
    <div class="col-6">
      <p>Like &amp; Síguenos</p>
      <ul>
        <li><a href="https://www.facebook.com/santoencanto/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://www.instagram.com/santo.encanto/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="https://twitter.com/santoencanto" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <!-- /col-6 --> 
  </div>
  <!-- /content -->
  <div id="infonovia"></div>
  <div id="infocompra"></div>
</footer>
<script src="js/jquery-2.1.1.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.steps.min.js"></script> 
<script src="js/jquery.validate.min.js"></script> 
<script src="js/chosen.jquery.js"></script> 
<script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
	$("#add-phone").click(function( ){
		$(".phone-info label, .phone-info input").clone().appendTo(".add-here");
		$(".phone-info label").html("Telefono principal*");
		$(".add-here label").html("Telefono secundario");
		$(".add-here input").removeClass('required');
		$(".phone-botton").remove();
	});
	
	
	$("#radio-3").click(function () {
        if ($('input[name=optionsRadios]:checked')) {
            $('#other').show();
        } else {
            $('#other').hide();
        }
    });


	$('.label-radio').click(function() {
	   if($('#radio-3').is(':checked')) { 
		$('#other').show();
	   }else{
		   $('#other').hide();
		}
	});
	
	$('.chosen-select').chosen({width: "100%"});
	
  	// Asociar un evento al botón que muestra la ventana modal
  	$('#info-novia').click(function() {
   	$.ajax({
        // la URL para la petición
        url : 'http://localhost:8888/Atelier/infobride-info.php',
 
        // especifica si será una petición POST o GET
        type : 'POST',
 
        // el tipo de información que se espera de respuesta
        dataType : 'html',
 
        // código a ejecutar si la petición es satisfactoria;
        success : function(respuesta) {
            $('#infonovia').html(respuesta);
			 $("#info").modal('show');
        },
 
        // código a ejecutar si la petición falla;
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
    });
  });
  
  	// Asociar un evento al botón que muestra la ventana modal
  	$('#info-compra').click(function() {
   	$.ajax({
        // la URL para la petición
        url : 'http://localhost:8888/Atelier/infobride-compra.php',
 
        // especifica si será una petición POST o GET
        type : 'POST',
 
        // el tipo de información que se espera de respuesta
        dataType : 'html',
 
        // código a ejecutar si la petición es satisfactoria;
        success : function(respuesta) {
            $('#infocompra').html(respuesta);
			 $("#compra").modal('show');
        },
 
        // código a ejecutar si la petición falla;
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
    });
  });
  
  	// Asociar un evento al botón que muestra la ventana modal
  	$('#info-abono').click(function() {
   	$.ajax({
        // la URL para la petición
        url : 'http://localhost:8888/santoencanto/infobride-pago.php',
 
        // especifica si será una petición POST o GET
        type : 'POST',
 
        // el tipo de información que se espera de respuesta
        dataType : 'html',
 
        // código a ejecutar si la petición es satisfactoria;
        success : function(respuesta) {
            $('#infoabono').html(respuesta);
			 $("#abono").modal('show');
        },
 
        // código a ejecutar si la petición falla;
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
    });
  });


}); //Final
</script>
</body></html>