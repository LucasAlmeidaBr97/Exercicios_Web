<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Stack+Sans+Headline:wght@200..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Facebook</title>
</head>

<body>
    <header>
        <div class="center">

            <div class="logo">
                <h2>facebook</h2>
            </div><!--logo-->

            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone</p>
                    <input type="email">
                </div><!--form-element-->

                <div class="form-element">
                    <p>Senha</p>
                    <input type="password">
                </div><!--form-element-->

                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="assets/img1.png" alt="">
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será.</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50-->


                    <div class="w100">
                        <input placeholder="E-mail" type="email">
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Senha" type="password">
                    </div><!--w100-->
                    
                    <div class="w100">
                        <h2>Data de Nascimento</h2>
                        <select class="nascimento" name="nascimento-dia" id="">
                            <?php
                                for($i = 0; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php }?>
                        </select>

                        <select class="nascimento" name="nascimento-mes" id="">
                            <option value="0">Junho</option>
                        </select>

                        <select class="nascimento" name="nascimento-ano" id="">
                            <?php
                                for($i = 1960; $i <= 2018; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php }?>
                        </select>
                        <div class="clear"></div><!--clear-->

                        <div class="w100">
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="maculino">
                                <h2>Masculino</h2>
                            </div><!--input-radio-->

                            <div class="input-radio">
                                <input type="radio" name="sexo" value="feminino">
                                <h2>Feminino</h2>
                            </div><!--input-radio-->
                            <div class="clear"></div><!--clear-->
                        </div><!--w100-->

                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value="cadastrar">
                    </div><!--w100-->

                </form><!--criar-conta-->
            </div><!--abrir-conta-->


            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--main-->


    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
        </div><!--center-->

        <div style="border:0; padding-top:10px;" class="center">
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>          
        </div><!--center-->
    </section><!--linguas-->


</body>

</html>