<! doctype html>
< html  lang = " pt-br " >
  < cabeça >
    <! - Metatags obrigatórios ->
    < meta  charset = " utf-8 " >
    < meta  name = " viewport "  content = " largura = largura do dispositivo, escala inicial = 1, encolher para ajustar = não " >
    <! - Bootstrap CSS ->
    < link  rel = " stylesheet "  href = " https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css "  integridade = " sha384-ggOyR0iXCbMQv3Xipma34MD + dH / 1fQ784 / j6cY / iJTQUOhcWr7x9JvoRxT2MZw1T "  crossorigin = " anônimo " >
    
    <! - CSS jQuery Validate ->
    < link  rel = " stylesheet "  href = " https://jqueryvalidation.org/files/demo/site-demos.css " >
    
    < title > Sistema de Login </ title >
    < style >
        #alerta
        #caixaRegistro,
        #caixaSenha {
            exibir : nenhum ;
        }  
    </ style >
  </ head >
  < body  class = " bg-dark " >
      < main  class = " contêiner mt-4 " >
          <! - Alerta ->
          < section  class = " row " >
              < div  class = " col-lg-4 deslocamento-lg-4 " 
                   id = " alerta " >
                  < div  class = " alerta alerta-sucesso centro de texto " >
                      < strong  id = " resultado " >
                          Olá Maravilhoso Mundo Bootstrap
                      </ strong >
                  </ div >
              </ div >
          </ section >
          
          <! - Formulário de Login ->
          < section  class = " row " >
              < div  classe = " col-lg-4 offset-lg-4 luz-bg arredondada "
                   id = " caixaLogin " >
                  < h2  class = " centro de texto mt-2 " >
                      Entrada
                  </ h2 >
                  < form  action = " # "  method = " post "  role = " formulário "
                        class = " p-2 "  id = " formLogin " >
                      
                      < div  class = " form-group " >
                          < input  type = " text "  name = " nomeUsuario "
                                 class = " controle de formulário "
                                 placeholder = " Nome do usuário "
                                  minlength necessário = " 5 " >
                      </ div >
                      
                      < div  class = " form-group " >
                          < input  type = " password " 
                                 nome = " senhaUsuario "
                                 class = " controle de formulário "
                                 placeholder = " Senha "
                                  minlength necessário = " 6 " >
                      </ div >
                      
                      < div  class = " grupo de forma mt-5 " >
                          < div  class = " caixa de seleção personalizada de controle personalizado " >
                              < input  type = " checkbox "  name = " lembrar "
                                     id = " checkLembrar " 
                                     class = " custom-control-input " >
                              < label  for = " checkLembrar " 
                                     class = " custom-control-label " >
                                  Lembrar de mim.
                              </ label >
                              < A  href = " # "  id = " btnEsqueci "  class = " float-direita " >
                                  Esqueci a senha.
                              </ a >
                          </ div >
                      </ div >
                      
                      < div  class = " form-group " >
                          < input  type = " submit "  name = " btnEntrar "
                                 id = " btnEntrar " 
                                 valor = " :: Entrar :: "
                                 classe = " btn btn-primário btn-bloco " >
                      </ div >
                      
                      < div  class = " form-group " >
                          < p >
                              Novo usuário?
                              < A  href = " # "  id = " btnRegistrar " >
                                Registrar-se aqui.
                              </ a >
                          </ p >
                      </ div >
                          
                  </ form >
              </ div >
          </ section >
          < Br > <! - maroto ->
          <! - Formulário de Registro de Novo Usuário ->
          < section  class = " row " >
              < div  classe = " col-lg-4 offset-lg-4 luz-bg arredondada " 
                   id = " caixaRegistro " >
                  < h2  class = " centro-de-texto mt-2 " > Registrar-se </ h2 >
                  < form  action = " # "  method = " post "  role = " formulário " 
                        class = " p-2 "  id = " formRegistro " >
                      
                      <! - Campo Nome Completo ->
                      < div  class = " form-group " >
                          < input  type = " text "  name = " nomeCompleto " 
                                 class = " controle de formulário "
                                 placeholder = " Nome completo "  obrigatório
                                 minlength = " 6 " >
                      </ div >
                      
                      <! - Campo Nome do Usuário ->
                      < div  class = " form-group " >
                          < input  type = " text "  name = " nomeUsuario "
                                 class = " controle de formulário "
                                 placeholder = " Nome do Usuário "  obrigatório
                                 minlength = " 6 " >
                      </ div >
                      
                      <! - Campo E-mail ->
                      < div  class = " form-group " >
                          < input  type = " email "  name = " emailUsuario "
                                 class = " controle de formulário "
                                 placeholder = " E-mail "  necessário >
                      </ div >
                      
                      <! - Campo Senha >
                      < div  class = " form-group " >
                          < input  type = " password "  id = " senhaUsuario "
                                 class = " controle de formulário "
                                 placeholder = " Senha "  obrigatória
                                 minlength = " 6 " >
                      </ div >
                      
                      <! - Campo de senha de acesso ->
                      < div  class = " form-group " >
                          < input  type = " password " 
                                 id = " senhaUsuarioConfirmar " 
                                 name = " senhaUsuarioConfirmar "
                                 class = " controle de formulário "
                                 placeholder = " Confirmar a senha "  obrigatório
                                 minlength = " 6 " >
                      </ div >
                      
                      <! - Caixa de seleção de termos dos termos ->
                      < div  class = " grupo de forma mt-5 " >
                          < div  class = " caixa de seleção personalizada de controle personalizado " >
                            < input  type = " checkbox "  name = " concordar "
                                   class = " custom-control-input " 
                                   id = " checkConcordar " >
                            < label  for = " checkConcordar " 
                                   class = " custom-control-label " >
                                Eu concordo com os
                                < A  href = " # " > TERMOS e condições. </ A >
                            </ label >
                          </ div >
                      </ div >
                      
                      <! - botão enviar ->
                      < div  class = " form-group " >
                          < input  type = " submit " 
                                 name = " btnRegistroUsuario "
                                 id = " btnRegistroUsuario "
                                 value = " :: Registrar :: "
                                 classe = " btn btn-primário btn-bloco " >
                      </ div >
                      
                      <! - Já registrado ->
                      < div  class = " form-group " >
                          < p  class = " text-center " >
                              Já registrado?
                              < A  href = " # "  id = " btnEntrarRegistrado " >
                                  Entrar aqui
                              </ a >
                          </ p >
                      </ div >
                          
                  </ form >                  
              </ div >
          </ section >
          < Br > <! - maroto ->
          <! - Formulário de Recuperação de Senha ->
          < section  class = " row " >
              < div  classe = " col-lg-4 offset-lg-4 luz-bg arredondada "
                   id = " caixaSenha " >
                  < h2  class = " centro de texto mt-2 " >
                      Gerar nova senha
                  </ h2 >
                  < form  action = " # "  method = " post "  role = " formulário "
                        class = " p-2 "  id = " formSenha " >
                      < div  class = " form-group " >
                          < small  class = " text-muted " >
                              Para gerar nova senha, digite seu
                              e-mail para receber as instruções.
                          </ small >
                      </ div >
                      < div  class = " form-group " >
                          < input  type = " email "  name = " emailGerarSenha "
                                 class = " controle de formulário "
                                 placeholder = " E-mail "  obrigatório = " " >
                      </ div >
                      < div  class = " form-group " >
                          < input  type = " submit "  name = " btnGerar "
                                 id = " btnGerar " 
                                 value = " :: Gerar :: "
                                 classe = " btn btn-primário btn-bloco " >
                      </ div >
                      < div  class = " grupo de formulários float-right " >
                          < A  href = " # "  id = " btnVoltar " >
                              Voltar
                          </ a >
                      </ div >
                  </ form >
              </ div >
          </ section >
          
          <! - Formulário de Recuperação de Senha ->
          
          
          
      </ main >
      
    
    <! - JavaScript opcional ->
    <! - jQuery primeiro, depois Popper.js, depois Bootstrap JS ->
    < script  src = " https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js " > </ script >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    < script  src = " https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js "  integridade = " sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf / nJGzIxFDsf4x0xIM + B07jRM "  crossorigin = " anônimo " > </ script >
    <! - Plugin jQuery Validate ->
    < script  src = " https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js " > </ script >
    
    < script >
       // $ (document) .ready (function () { } );
       // jQuery
       $ (function () {
           // Mostra caixa de senha não Login
           $ ( " #btnEsqueci " ) . clique ( function () {
               $ ( " #caixaLogin " ) . ocultar(); // Esconder
               $ ( " #caixaSenha " ) . exposição(); // Mostrar
           } );
           
           // Volta para o Login
           $ ("# btnVoltar"). click (function () {
               $ ( " #caixaLogin " ) . exposição(); // Mostrar
               $ ( " #caixaSenha " ) . ocultar(); // Esconder
           } );
           
            // Mostra caixa Registrar no Login
           $ ("# btnRegistrar"). clique (function () {
               $ ( " #caixaLogin " ) . ocultar(); // Esconder
               $ ( " #caixaRegistro " ) . exposição(); // Mostrar
           } );
           // Mostra caixa Fazer logon no Registro
           $ ("# btnEntrarRegistrado"). click (function () {
               $ ( " #caixaLogin " ) . exposição(); // Mostrar
               $ ( " #caixaRegistro " ) . ocultar(); // Esconder
           } );
           
           // Validação com jQuery
           // Pra fica azulzinho
           jQuery.validator.setDefaults ( {
                debug : false ,
                sucesso : " válido "
              } );
              
           $ ("# formLogin"). validate ();
           $ ("# formSenha"). validate ();
           $ ("# formRegistro"). validate ( {
               regras : {
                   senhaUsuario : " obrigatório " ,
                   senhaUsuarioConfirmar : {
                       equalTo : " #senhaUsuario "
                   }
               }
           } );
           
           // Envio de dados via Ajax
           // sem recarregar a página
           $ ("# btnRegistroUsuario"). clique (function (e) {            
                if ( documento
                        . querySelector ( " #formRegistro " )
                        . checkValidity ()) {
                    // Não deixa o formulário ser enviado    
                    e . preventDefault ();
                    $ . ajax ({
                        url : ' recebe.php ' ,
                        método : ' post ' ,
                        data : $ ( ' #formRegistro ' )
                                . serialize () + ' & action = registro ' ,
                        sucesso : função ( resposta ) {
                            $ ( ' #alerta ' ) . exposição();
                            $ ( ' #resultado ' ) . html ( resposta );
                        }                    
                    });            
                }
                retorno verdadeiro;
            });
            // Fim do Ajax Registro Usuário
            
            // Envio de dados via Ajax
           // Página de Login
           $ ("# btnEntrar"). click (função (e) {            
                if ( documento
                        . querySelector ( " #formLogin " )
                        . checkValidity ()) {
                    // Não deixa o formulário ser enviado    
                    e . preventDefault ();
                    $ . ajax ({
                        url : ' recebe.php ' ,
                        método : ' post ' ,
                        data : $ ( ' #formLogin ' )
                                . serialize () + ' & action = entrar ' ,
                        sucesso : função ( resposta ) {
                            $ ( ' #alerta ' ) . exposição();
                            $ ( ' #resultado ' ) . html ( resposta );
                        }                    
                    });            
                }
                retorno verdadeiro;
            });
            // Fim do Ajax Entrar
            
            
           // Envio de dados via Ajax
           // Página de Gerar Senha
           $ ("# btnGerar"). clique (função (e) {            
                if ( documento
                        . querySelector ( " #formSenha " )
                        . checkValidity ()) {
                    // Não deixa o formulário ser enviado    
                    e . preventDefault ();
                    $ . ajax ({
                        url : ' recebe.php ' ,
                        método : ' post ' ,
                        data : $ ( ' #formSenha ' )
                                . serialize () + ' & action = gerar ' ,
                        sucesso : função ( resposta ) {
                            $ ( ' #alerta ' ) . exposição();
                            $ ( ' #resultado ' ) . html ( resposta );
                        }                    
                    });            
                }
                retorno verdadeiro;
            });
            // Fim do Ajax Gerar Senha
            
           
       });
       
       // Tradução do jQuery Validate
       / *
        * Mensagens padrão traduzidas para o plugin de validação jQuery.
        * Localidade: PT_BR
        * /
        jQuery.extend (jQuery.validator.messages, {
            necessário : " Este campo & requerido. " ,
            remoto : " Por favor, corrija este campo. " ,
            email : " Por favor, forne & ccedil; um endereço eletrônico & eletrônico; lido & ldquo; " ,
            url : " Por favor, forne & ccedil; uma uma URL v & aacute; lida. " ,
            data : " Por favor, forne & ccedil; uma uma data v & aacute; lida. " ,
            dateISO : " Por favor, forne & ccedil; uma uma data v & aacute; lida (ISO). " ,
            número : " Por favor, forne & ccedil; um n & uacute; mero v & aacute; lido. " ,
            dígitos : " Por favor, forne & ccedil; a somente d & iacute; gitos. " ,
            cartão de crédito : " Por favor, forne & ccedil; um carrinho & atilde; o de cr & eacute; dito v & aacute; lido. " ,
            igualTo : " Por favor, forne & ccedil; ao mesmo valor novamente " ,
            aceite : " Por favor, forne & ccedil; a um valor com uma extensa & atilde; o v & aacute; lida. " ,
            maxlength : jQuery . validador . format ( " Por favor, forne & ccedil; a n & atilde; o mais que {0} caracteres. " ),
            minlength : jQuery . validador . format ( " Por favor, forne & ccedil; um ao menos {0} caracteres. " ),
            rangelength : jQuery . validador . format ( " Por favor, forne & ccedil; um valor entre {0} e {1} caracteres de comprimento. " ),
            intervalo : jQuery . validador . format ( " Por favor, forne & ccedil; um valor entre {0} e {1}. " ),
            max : jQuery . validador . format ( " Por favor, forne & ccedil; a um valor menor ou igual a {0}. " ),
            min : jQuery . validador . format ( " Por favor, forne & ccedil; um valor maior ou igual a {0}. " )
        } );
    </ script >
  </ body >
</ html >
