<nav aria-label="breadcrumb" class="fundobdc">
    <ol class="breadcrumb justify-content-center ondeestou">
        <li class="breadcrumb-item"><a href="inicio">Página Inicial</a></li>
        <li class="breadcrumb-item text-white" aria-current="page"><?=$this->titulo?></li>
    </ol>
</nav>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <form>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="nomeContato">Nome*</label>
                            <input type="text" class="form-control" id="nomeContato" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="sobrenomeContato">Sobrenome*</label>
                            <input type="text" class="form-control" id="sobrenomeContato" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-6 mb-3">
                            <label for="emailContato">E-mail*</label>
                            <input type="email" class="form-control" id="emailContato" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="assuntoContato">Assunto*</label>
                            <input type="text" class="form-control" id="assuntoContato" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12 mb-3">
                            <label for="mensagemContato">Mensagem*</label>
                            <textarea class="form-control" id="mensagemContato" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LePCrAZAAAAAEnjkfbXuh04fM6HpsC0GyfRYbW6"></div>
                    <button class="btn bg-padrao btn-sm mt-3" type="submit" id="formContato">Enviar Mensagem</button>
                </form>
            </div>
            <div class="col-lg-5 bg-dark p-5 contato-infos rounded-lg">
                <div class="mb-4">
                    <i class="fab fa-whatsapp fa-lg pt-2 pb-2 pl-3 pr-3 mr-2 bg-padrao rounded-lg"></i>
                    <a href="https://api.whatsapp.com/send?phone=5521982372555" target="_blank" class="pt-1">(21) 98237-2555</a>
                </div>
                <div class="mb-4">
                    <i class="fas fa-phone-alt fa-lg pt-2 pb-2 pl-3 pr-3 mr-2 bg-padrao rounded-lg"></i>
                    <a href="tel:2141286328" target="_blank" class="pt-1">(21) 4128-6328</a>
                </div>
                <div class="mb-4">
                    <i class="far fa-envelope fa-lg pt-2 pb-2 pl-3 pr-3 mr-2 bg-padrao rounded-lg"></i>
                    <a href="mailto:altadefinicaocaxias@gmail.com" target="_blank" class="pt-1">altadefinicaocaxias@gmail.com</a>
                </div>
                <div>
                    <i class="fas fa-map-marker-alt fa-lg pt-2 pb-2 pl-3 pr-3 mr-2 bg-padrao rounded-lg"></i>
                    <a href="https://goo.gl/maps/XcNxJ9edc3bFXbS49" target="_blank" class="pt-1">Av. Governador Leonel de Moura Brizola - Jardim das Oliveiras, Duque de Caxias - RJ, 25040-004</a>
                </div>
                <ul class="list-inline mt-5">
                    <li class="list-inline-item">
                        <a class="text-white" href="https://www.facebook.com/AltaDefinicaoComunicacaoVisual" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-white" href="https://www.instagram.com/altadefinicaorj/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.936315234984!2d-43.31413158556496!3d-22.730608337321524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997035baabfd21%3A0x288d87dc02a52c0d!2zQWx0YSBEZWZpbmnDp8Ojbw!5e0!3m2!1spt-BR!2sbr!4v1594044941233!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<div id="notificacaoFormContato" class="fixed-bottom mb-2" style="z-index:9999999;"></div>