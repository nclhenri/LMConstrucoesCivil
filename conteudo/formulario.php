<section class="formulario">
    <h2>FAÇA SEU ORÇAMENTO <span class="destaqueOnline">ONLINE</span></h2>

    <div class="site contato">
        <div>
            <form action="#" method="POST">

                <div class="caixas">
                    <div>
                        <label for="nome">Nome:*</label>
                        <input type="text" name="nome" id="nome" placeholder="Informe seu nome: " required>
                    </div>

                    <div>
                        <label for="email">Email:*</label>
                        <input type="email" name="email" id="email" placeholder="Informe seu e-mail: " required>
                    </div>

                    <div>
                        <label for="fone">Telefone:*</label>
                        <input type="number" name="fone" id="fone" placeholder="Informe seu telefone: " required>
                    </div>

                    <div class="mens ">

                        <div>
                            <label for="mens">Mensagem</label>
                            <textarea name="mens" id="mens" cols="32" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="botoes">
                        <!-- <button type="submit" class="btn btn-outline-primary">Enviar por E-Mail</button> -->
                        <button type="submit" class="btn btn-outline-success" onclick="EnviarWhats()">Enviar por WhatsApp</button>
                    </div>

                </div>

            </form>
        </div>
        <div class="informacoesContato">

            <div>
                <h3>Outras formas de contato:</h3>
                <div class="estruturaContato">
                    <img src="./img/fone.svg" alt="">
                    <a href="tel:+5511999999999">(11) 99999-9999</a>
                </div>

                <div class="estruturaContato">
                    <img src="./img/email.svg" alt="">
                    <a href="">lm@construcoes.com</a>
                </div>

                <div class="estruturaContato">
                    <img src="./img/whats.svg" alt="">
                    <a href="tel:+5511999999999">(11) 99999-9999</a>
                </div>
            </div>
        </div>
    </div>
</section>