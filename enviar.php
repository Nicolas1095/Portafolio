<?php 
    $alert = '';
    if (isset($_POST['enviar'])) {
        if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
            $name = $_POST['name'];
            $asunto = 'Nombre: '.$_POST['name'].'<br/> Numero de telefono: '. $_POST['phone'].'<br/>'.$_POST['mensaje'];
            $email = "nicolasgalarraga1095@gmail.com";
            $header = "From: ". $_POST['email'] . "\r\n";
            $header .= "Content-type:text/html;charset=UTF-8";
            $header .= "Reply-To: nicolasgalarraga1095@gmail.com" . "\r\n";
            $header .= "X-mailer: PHP/". phpversion();
            $mail = @mail($email, $name, $asunto, $header);
            if ($mail) {
                $alert = '<p class="alert correct">Correo enviado con exito</p>';
                echo '<script language="JavaScript" src="js/jquery.js" type="text/javascript"></script> <script>
                let coordenadas = $("#contacto").position();
                coordenadas = coordenadas.top + 450;
                $(window).scrollTop(coordenadas)</script>';
            }
            else{
                $alert = '<p class="alert error">Hubo un error intentalo de nuevo mas tarde</p>';
                echo '<script language="JavaScript" src="js/jquery.js" type="text/javascript"></script> <script>
                let coordenadas = $("#contacto").position();
                coordenadas = coordenadas.top + 450;
                $(window).scrollTop(coordenadas)</script>';
            }
        }
    }
?>