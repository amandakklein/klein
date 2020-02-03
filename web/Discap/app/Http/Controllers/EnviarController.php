<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnviarController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $nome = $request->get('nome');
        $email = $request->get('email');
        $telefone = $request->get('tel');
        $mensagem = $request->get('msg');
        $data_envio = date('d/m/Y');
        $hora_envio = date('H:i:s');

        // Compo E-mail
        $arquivo = "
        Nome: $nome
        Email de contato: $email
        Telefone: $telefone
        Mensagem: $mensagem
        Data e Hora de envio: $data_envio $hora_envio
        ";

        //enviar
        
        // emails para quem será enviado o formulário
        $emailenviar = "naninhaklein@gmail.com";
        $assunto = "Contato pelo Site";
        
        // É necessário indicar que o formato do e-mail é html
        $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= "From: $nome <$email>";
        //$headers .= "Bcc: $EmailPadrao\r\n";
        
        $enviaremail = mail("naninhaklein@gmail.com", $assunto, $arquivo);
        if($enviaremail){
           echo "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
            echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
            return redirect('/contato');
        } else {
            echo "traaa";
            echo "";
        }
    }

}
