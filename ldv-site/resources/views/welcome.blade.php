@extends('layouts.main')

@section('title', 'LDV | Digital')

@section('content')

    <div class="ldv-top">
        <div class="ldv-bar ldv-white ldv-wide ldv-padding ldv-card">
            <a href="#home" class="ldv-bar-item ldv-button"><b>LDV</b> Digital</a>

            <div class="ldv-right ldv-hide-small">
                <a href="#projects" class="ldv-bar-item ldv-button">Nossos Serviços</a>
                <a href="#about" class="ldv-bar-item ldv-button">Sobre Nós</a>
                <a href="#contact" class="ldv-bar-item ldv-button">Contatos</a>
            </div>
        </div>
    </div>

    <header class="ldv-display-container ldv-content ldv-wide" style="max-width:1500px;" id="home">
        <img class="ldv-image desktop" src="img/banner-ldv.jpg" alt="imagem relacionada a tecnologia" width="1500"
            height="800">
        <img class="ldv-image mobile" src="img/banner-mobile.png" alt="imagem relacionada a tecnologia" width="1500"
            height="800">
        <div class="ldv-display-middle ldv-margin-top ldv-center">
            <h1 class="ldv-xxlarge ldv-text-white"><span class="ldv-padding ldv-black ldv-opacity-min"><b>LDV</b></span>
                <span class="ldv-hide-small ldv-text-light-grey">Digital</span>
            </h1>
        </div>
    </header>

    <div class="ldv-content ldv-padding" style="max-width:1564px">

        <div class="ldv-container ldv-padding-32" id="about">
            <h3 class="ldv-border-bottom ldv-border-light-grey ldv-padding-16">Bem-vindo à LDV Digital</h3>
            <p>Seja bem-vindo à LDV Digital, sua parceira de excelência em desenvolvimento de produtos digitais
                inovadores. Nós somos uma equipe dedicada e experiente, apaixonada por transformar ideias em soluções
                digitais de alto impacto. Combinando tecnologia, design e estratégia, estamos aqui para ajudar a sua
                empresa a conquistar o mundo digital.
            </p>
        </div>

        <div class="ldv-row-padding ldv-grayscale">
            <div class="ldv-col l3 m6 ldv-margin-bottom">
                <img src="img/equipe.png" alt="logo sobre nós" width=96 height="96" style="width:100%">
                <h3>Sobre Nós</h3>

                <p>Somos apaixonados por criar e compartilhar produtos digitais incríveis que tornam a vida mais fácil,
                    divertida e produtiva. Fundada por um grupo de entusiastas da tecnologia, nossa empresa tem o
                    compromisso de oferecer soluções inovadoras para os desafios do mundo digital.</p>

            </div>
            <div class="ldv-col l3 m6 ldv-margin-bottom">
                <img src="img/missao.png" alt="Logo nossa missão" width=96 height="96" style="width:100%">
                <h3>Nossa Missão</h3>

                <p>Nossa missão é simplificar a vida digital, fornecendo produtos de alta qualidade que atendam às
                    necessidades de nossos clientes. Acreditamos que a tecnologia deve ser acessível e amigável, e
                    estamos empenhados em fazer a diferença na vida das pessoas.</p>

            </div>
            <div class="ldv-col l3 m6 ldv-margin-bottom">
                <img src="img/ideia.png" alt="Logo o que fazemos" width=96 height="96" style="width:100%">
                <h3>O Que Fazemos</h3>

                <p>Desenvolvemos uma variedade de produtos digitais, desde aplicativos móveis e software de
                    computador até cursos online e recursos de produtividade. Nosso foco é aprimorar a forma como as
                    pessoas interagem com a tecnologia e como ela pode melhorar sua vida.</p>

            </div>
            <div class="ldv-col l3 m6 ldv-margin-bottom">
                <img src="img/trabalho-em-equipe.png" alt="Logo nossa equipe" width=96 height="96" style="width:100%">
                <h3>Nossa Equipe</h3>

                <p>Nossa equipe é formada por especialistas apaixonados e dedicados em diversas áreas, incluindo design
                    de UX, desenvolvimento de software, marketing digital e suporte ao cliente. Estamos sempre
                    aprendendo e evoluindo para acompanhar as tendências tecnológicas e oferecer soluções inovadoras.
                </p>

            </div>
        </div>

        <div class="ldv-container ldv-padding-32" id="projects">

            <div>
                <h3 class="ldv-border-bottom ldv-border-light-grey ldv-padding-16">Nossos Serviços</h3>
                <ul>
                    <li>Desenvolvimento de Aplicativos Móveis: Criamos aplicativos móveis incríveis para iOS e Android,
                        aproveitando as tecnologias mais recentes, como React Native e Flutter.</li>
                    <li>Desenvolvimento Web: Construímos websites de alta performance, usando frameworks como React,
                        Angular e Vue.js, garantindo uma experiência de usuário excepcional.</li>
                    <li>Design de Interfaces (UI/UX): Nossa equipe de designers talentosos transforma conceitos em
                        interfaces atraentes e fáceis de usar, garantindo a satisfação do usuário.</li>
                    <li>Desenvolvimento de Software Personalizado: Desenvolvemos soluções de software sob medida para
                        atender às necessidades específicas da sua empresa, com tecnologias como Python, Node.js, e
                        muito mais.</li>
                    <li>Integração de APIs e Serviços: Conectamos sua aplicação a uma variedade de serviços de
                        terceiros, aprimorando a funcionalidade e a escalabilidade.</li>
                </ul>
            </div>

            <div>
                <h3 class="ldv-border-bottom ldv-border-light-grey ldv-padding-16">Nossa Abordagem</h3>
                <ul>
                    <li>Desenvolvimento Ágil: Nossa equipe utiliza metodologias ágeis, como Scrum e Kanban, para
                        garantir que o projeto seja flexível e adaptável às mudanças.</li>
                    <li>Testes de Qualidade: Garantimos a qualidade do produto por meio de testes rigorosos e automação,
                        para garantir que o resultado final seja impecável.</li>
                    <li>Segurança e Privacidade: Mantemos a segurança e privacidade dos dados do usuário como
                        prioridade, aderindo às mais recentes práticas de segurança cibernética.</li>
                </ul>
            </div>
        </div>

        <div class="ldv-container ldv-padding-32" id="contact">
            <h3 class="ldv-border-bottom ldv-border-light-grey ldv-padding-16">Informações de Contato</h3>
            <div>
                <p>Entre em contato conosco. Estamos aqui para ajudar!
                </p>

                <ul>

                    <li><strong>E-mail:</strong> <a
                            href="mailto:contato@ldvdigital.com.br">contato@ldvdigital.com.br</a></li>
                    <li><strong>Endereço:</strong> São Paulo - SP</li>
                </ul>


            </div>
        </div>
        <div class="ldv-container">
            <img src="img/banner-footer.jpg" class="ldv-image" alt="Imagem de uma mesa de escritório" width=1500
                height="800" style="width:100%">
        </div>

    </div>
@endsection
