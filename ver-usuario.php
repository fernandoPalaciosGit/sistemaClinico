<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    	<script src="js/sweetalert.min.js"></script>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/sweetalert.css" />
        <script>
            $(function(){

                peticionAjax('server-ver-usuarios.php');

                $('#selec-tipoUsuario').change(function () {
                    var optionSelected = $(this);
                    var valueSelected  = optionSelected.val();
                    peticionAjax('server-ver-usuarios.php');
                });

                function peticionAjax(url){
                    $.ajax({
        				type: 'POST',
        				url: url,
                        data: $("#selec-tipoUsuario").serialize(),
        				success:function(data){
                            if(data == 10){
                                alertSweetNoUsuario();
                            }else{
                                $('#respVer').html(data);
                            }
        				}
        			});
                }
                function alertSweetNoUsuario(){
    				sweetAlert("Error...", "No hay Usuarios de ese tipo registrados.", "error");
    			}
            });
        </script>
        <style>
            .select-filtro{
                width: 100%;
            }
            .form-group {
            }
        </style>
    </head>
    <body>
        <div class="form-group select-filtro">
            <div>
                <select class="form-control" id="selec-tipoUsuario" name="selec-tipoUsuario">
                    <option>Doctor</option>
                    <option>Psicologo</option>
                    <option>Enfermera</option>
                </select>
            </div>
        </div>
        <div id="respVer">

        </div>

    </body>
</html>
