<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="http://localhost/capesesp/assets/images/logo.png" alt="IMG">
        </div>

        <form class="contact1-form validate-form" action="request/create" method="POST">

            <div class="wrap-input1 validate-input" data-validate="Nome é requerido">
                <input class="input1" type="text" name="name" placeholder="Nome completo">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Exemplo de email válido: ex@abc.xyz">
                <input class="input1" type="text" name="email" placeholder="Email">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Telefone requerido no formato (99) 99999-9999">
                <input class="input1" type="text" name="phone" class="form-control" placeholder="Telefone" />
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Matricula requerida">
                <input class="input1" type="text" name="matricula" minlength="9" maxlength="9" placeholder="Matrícula Capesesp" data-validate="Nome é requerido">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Assunto é requerido">
                <input class="input1" type="text" name="subject" placeholder="Assunto">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Descreva detalhadamente sua solicitação">
                <textarea class="input1" name="message" placeholder="Mensagem"></textarea>
                <span class="shadow-input1"></span>
            </div>

            <div class="container-contact1-form-btn">
                <button type="submit" class="contact1-form-btn">
                    <span>
                        Enviar solicitação
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>