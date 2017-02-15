<footer>
    <div class="content">
        <div>
            <address>
                <a href="mailto:soynovia@santoencanto.cl">soynovia@santoencanto.cl</a><br>
                <a href="tel:+56226388378">+562 2638 8378</a><br>
                <br>
                Monjitas 626, Oficina #73. <br>
                Santiago, Chile.
            </address>
            <small>Desarrollado por <a href="http://www.somosbrutos.cl" target="_blank">Brutos</a>.</small>
        </div>
        <!-- /col-6 -->
        <div class="redes">
            <p>Like &amp; Síguenos</p>
            <ul>
                <li><a href="https://www.facebook.com/santoencanto/" target="_blank"><i class="fa fa-facebook"
                                                                                        aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/santo.encanto/" target="_blank"><i class="fa fa-instagram"
                                                                                          aria-hidden="true"></i></a>
                </li>
                <li><a href="https://twitter.com/santoencanto" target="_blank"><i class="fa fa-twitter"
                                                                                  aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <!-- /col-6 -->
    </div>
    <!-- /content -->
    <div id="modal-novias"></div>
</footer>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.steps.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/chosen.jquery.js"></script>

<script>
    $(document).ready(function () {
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex) {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex) {
                    return true;
                }

                // Forbid suppressing "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18) {
                    return false;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex) {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex) {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                    $(this).steps("next");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3) {
                    $(this).steps("previous");
                }
            },
            onFinishing: function (event, currentIndex) {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                var form = $(this);

                // Submit form input
                form.submit();
            }
        }).validate({
            errorPlacement: function (error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        $("#add-phone").click(function () {
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

        $(document).on('change', ".chosen-select", function (event, element) {
            if (element.selected == "cancel") {
                $('#why').show();
            } else {
                $('#why').hide();
            }
        });

        $('#perfil').bind('change', function (e) {
            if ($('#perfil').val() == 'design') {
                $('#info-design').show();
                $('#info-admin, #info-seller, #info-add, #info-taller').hide();
            }
            else if ($('#perfil').val() == 'admin') {
                $('#info-admin').show();
                $('#info-add, #info-seller, #info-design, #info-taller').hide();
            }
            else if ($('#perfil').val() == 'seller') {
                $('#info-seller').show();
                $('#info-admin, #info-add, #info-design, #info-taller').hide();
            }
            else if ($('#perfil').val() == 'atelier') {
                $('#info-taller').show();
                $('#info-add, #info-seller, #info-design, #info-admin').hide();
            }
            else {
                $('#info-add').show();
                $('#info-admin, #info-seller, #info-design, #info-taller').hide();
            }
        });

        $(document).on('change','#estado', function (d) {
            if ($(this).val() == 'end') {
                $('#who').show();
                $('#why').hide();
            }
            else if ($(this).val() == 'cancel') {
                $('#why').show();
                $('#who').hide();
            }
            else {
                $('#who, #why').hide();
            }
        });

        $('.label-radio').click(function () {
            if ($('#radio-3').is(':checked')) {
                $('#other').show();
            } else {
                $('#other').hide();
            }
        });

        $('.chosen-select').chosen({width: "100%"});

        $('.search').click(function () {
            $.ajax({
                // la URL para la petición
                url: 'http://localhost:8888/Users/danialiaga/documents/proyectos/atelier/search-modal.php',

                // especifica si será una petición POST o GET
                type: 'POST',

                // el tipo de información que se espera de respuesta
                dataType: 'html',

                // código a ejecutar si la petición es satisfactoria;
                success: function (respuesta) {
                    $('#modal-novias').html(respuesta);
                    $(".m-search").modal('show');
                },

                // código a ejecutar si la petición falla;
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        });


        // Asociar un evento al botón que muestra la ventana modal
        $('#info-novia').click(function () {
            $.ajax({
                // la URL para la petición
                url: 'http://localhost:8888/Users/danialiaga/documents/proyectos/atelier/infobride-info.php',

                // especifica si será una petición POST o GET
                type: 'POST',

                // el tipo de información que se espera de respuesta
                dataType: 'html',

                // código a ejecutar si la petición es satisfactoria;
                success: function (respuesta) {
                    $('#modal-novias').html(respuesta);
                    $("#info").modal('show');
                },

                // código a ejecutar si la petición falla;
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        });

        // Asociar un evento al botón que muestra la ventana modal
        $('#info-compra').click(function () {
            $.ajax({
                // la URL para la petición
                url: 'http://localhost:8888/Users/danialiaga/documents/proyectos/atelier/infobride-compra.php',

                // especifica si será una petición POST o GET
                type: 'POST',

                // el tipo de información que se espera de respuesta
                dataType: 'html',

                // código a ejecutar si la petición es satisfactoria;
                success: function (respuesta) {
                    $('#modal-novias').html(respuesta);
                    $("#compra").modal('show');
                },

                // código a ejecutar si la petición falla;
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        });

        // Asociar un evento al botón que muestra la ventana modal
        $('#info-abono').click(function () {
            $.ajax({
                // la URL para la petición
                url: 'http://localhost:8888/Users/danialiaga/documents/proyectos/atelier/infobride-pago.php',

                // especifica si será una petición POST o GET
                type: 'POST',

                // el tipo de información que se espera de respuesta
                dataType: 'html',

                // código a ejecutar si la petición es satisfactoria;
                success: function (respuesta) {
                    $('#modal-novias').html(respuesta);
                    $("#abono").modal('show');
                },

                // código a ejecutar si la petición falla;
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        });
        // Asociar un evento al botón que muestra la ventana modal
        $('#info-medidas').click(function () {
            $.ajax({
                // la URL para la petición
                url: 'http://localhost:8888/Users/danialiaga/documents/proyectos/atelier/infobride-medidas.php',

                // especifica si será una petición POST o GET
                type: 'POST',

                // el tipo de información que se espera de respuesta
                dataType: 'html',

                // código a ejecutar si la petición es satisfactoria;
                success: function (respuesta) {
                    $('#modal-novias').html(respuesta);
                    $("#medidas").modal('show');
                },

                // código a ejecutar si la petición falla;
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        });
        // Asociar un evento al botón que muestra la ventana modal
        $('#info-citas').click(function () {
            $.ajax({
                // la URL para la petición
                url: 'http://localhost:8888/Users/danialiaga/documents/proyectos/atelier/infobride-citas.php',

                // especifica si será una petición POST o GET
                type: 'POST',

                // el tipo de información que se espera de respuesta
                dataType: 'html',

                // código a ejecutar si la petición es satisfactoria;
                success: function (respuesta) {
                    $('#modal-novias').html(respuesta);
                    $("#citas").modal('show');
                },

                // código a ejecutar si la petición falla;
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        });
        $('#info-entrega').click(function () {
            $.ajax({
                // la URL para la petición
                url: 'http://localhost:8888/Users/danialiaga/documents/proyectos/atelier/infobride-entrega.php',

                // especifica si será una petición POST o GET
                type: 'POST',

                // el tipo de información que se espera de respuesta
                dataType: 'html',

                // código a ejecutar si la petición es satisfactoria;
                success: function (respuesta) {
                    $('#modal-novias').html(respuesta);
                    $("#entrega").modal('show');
                },

                // código a ejecutar si la petición falla;
                error: function (xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        });


    }); //Final
</script>
</body></html>