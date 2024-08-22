@extends('layouts.app')
@section('content')


<section id="about" class="text-center py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{asset('img/vp.jpg')}}" alt="Sua Foto" class="img-fluid rounded-circle shadow-sm mb-4 no-download">
            </div>

            <div class="col-md-8 text-md-start">
                <h2>Sobre Mim</h2>
                <p>Sou um entusiasta desenvolvedor full-stack com uma sólida experiência em criar produtos inovadores e funcionais. Minha paixão por tecnologia me impulsiona a sempre buscar as melhores soluções para os desafios modernos, focando em qualidade e satisfação do cliente.</p>
                <div id="social-media" class="d-flex justify-content-center justify-content-md-start">
                    <a href="https://www.facebook.com/vasco.gouveiapinto" target="_blank" class="btn btn-outline-dark me-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/vasco.gouveiapinto" target="_blank" class="btn btn-outline-dark me-2">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@toma_nota" target="_blank" class="btn btn-outline-dark me-2">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/vasco-pinto-b7b783262" target="_blank" class="btn btn-outline-dark">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="hobbies" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Meus Hobbies</h2>
        <div id="hobbiesCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="text-center">
                        <i class="bi bi-book fs-1 text-primary"></i>
                        <h5 class="mt-3">Leitura</h5>
                        <p>Gosto de ler e aprender novas técnicas ligadas à TI, além de escrever sobre esses temas.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="text-center">
                        <i class="bi bi-music-note-beamed fs-1 text-primary"></i>
                        <h5 class="mt-3">Música</h5>
                        <p>Escutar música é uma forma de relaxamento e inspiração, sempre presente em meu dia a dia.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="text-center">
                        <i class="bi bi-tv fs-1 text-primary"></i>
                        <h5 class="mt-3">Séries</h5>
                        <p>Adoro assistir séries, especialmente as que desafiam a mente e oferecem novas perspectivas.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="text-center">
                        <i class="bi bi-people fs-1 text-primary"></i>
                        <h5 class="mt-3">Amigos e Família</h5>
                        <p>Sair com amigos e família é essencial para recarregar as energias e criar memórias inesquecíveis.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="text-center">
                        <i class="bi bi-brightness-high fs-1 text-primary"></i>
                        <h5 class="mt-3">Capacitação</h5>
                        <p>Capacitar pessoas e compartilhar conhecimento é uma de minhas maiores paixões.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hobbiesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hobbiesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
</section>


<section id="portfolio" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Portfólio</h2>
        <div class="row">
            <div class="col-md-3">
                <ul id="portfolio-sidebar" class="list-group">
                    <li class="list-group-item active" data-target="#project1">
                        <i class="bi bi-folder2-open"></i> Teconect API
                    </li>
                    <li class="list-group-item" data-target="#project2">
                        <i class="bi bi-folder2-open"></i> CDA - Clínica
                    </li>
                    <li class="list-group-item" data-target="#project3">
                        <i class="bi bi-folder2-open"></i> Marine Records
                    </li>
                    <li class="list-group-item" data-target="#project4">
                        <i class="bi bi-folder2-open"></i> CB&B 
                    </li>
                    <li class="list-group-item" data-target="#project5">
                        <i class="bi bi-folder2-open"></i> Tecnideia
                    </li>
                    <li class="list-group-item" data-target="#project6">
                        <i class="bi bi-folder2-open"></i> Teconect API
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div id="project1" class="portfolio-content active">
                    <div class="no-download-wrapper">
                        <img src="{{asset('img/landingpag.jpg')}}" alt="Projeto 1" class="img-fluid rounded shadow-sm mb-3 no-download">
                    </div>
                    <h3 class="project-title">Teconect API</h3>
                    <p class="project-description">Landing page da API Teconect, feito com Bootstrap 5, HTML, CSS3, JavaScript para animações e efeitos, usando esquema de template Blade do Laravel.</p>
                </div>
                <div id="project2" class="portfolio-content">
                    <div class="no-download-wrapper">
                        <img src="{{asset('img/cda.jpg')}}" alt="Projeto 2" class="img-fluid rounded shadow-sm mb-3 no-download">
                    </div>
                    <h3 class="project-title">Clínica dos Animais</h3>
                    <p class="project-description">Website Oficial da CDA, feito com as tecnologias: Bootstrap 5, HTML, CSS3, JavaScript, usei o Laravel para aprimorar o SEO e construção do Sitemap automatizado e as rotas. </p>
                </div>
                <div id="project3" class="portfolio-content">
                    <div class="no-download-wrapper">
                        <img src="{{asset('img/marine.jpg')}}" alt="Projeto 3" class="img-fluid rounded shadow-sm mb-3 no-download">
                    </div>
                    <h3 class="project-title">Marine Records</h3>
                    <p class="project-description">Site Oficial da gravadora Marine Records, Bootstrap 5, HTML, CSS3, JavaScript foi usado para construção da interface intuitiva e responsiva.</p>
                </div>
                <div id="project4" class="portfolio-content">
                    <div class="no-download-wrapper">
                        <img src="{{asset('img/cbeb.jpg')}}" alt="Projeto 4" class="img-fluid rounded shadow-sm mb-3 no-download">
                    </div>
                    <h3 class="project-title">CB&B - Transportes</h3>
                    <p class="project-description">Site Oficial da empresa, para exibição dos serviços e apresentação formal da empresa, usei Bootstrap 5, HTML, CSS3, JavaScript para construção das views.</p>
                </div>
                <div id="project5" class="portfolio-content">
                    <div class="no-download-wrapper">
                        <img src="{{asset('img/tecnideia.jpg')}}" alt="Projeto 5" class="img-fluid rounded shadow-sm mb-3 no-download">
                    </div>
                    <h3 class="project-title">Tecnideia</h3>
                    <p class="project-description">Site Oficial da empresa, com sistema integrado, Bootstrap 5, HTML, CSS3, JavaScript foi usado para construção da interface intuitiva e responsiva, usei o Laravel para o back-end.</p>
                </div>
                <div id="project6" class="portfolio-content">
                    <div class="no-download-wrapper">
                        <img src="{{asset('img/teconectapi.jpg')}}" alt="Projeto 6" class="img-fluid rounded shadow-sm mb-3 no-download">
                    </div>
                    <h3 class="project-title">Teconect API</h3>
                    <p class="project-description">Página da Documentação - API Teconect.</p>
                </div> 
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" id="portfolio-link" class="btn btn-primary">
                <i class="bi bi-file-earmark-pdf"></i> Ver Portfólio Completo
            </a>
        </div>
    </div>
</section>


<!-- Overlay for Portfolio Animation -->
<div id="portfolio-overlay">
    <div class="overlay-content">
        <h1>Portfólio Criativo</h1>
        <div class="pdf-icon">
            &lt;<i class="bi bi-file-earmark-pdf heart"></i>&gt;
        </div>
    </div>
</div>

<!-- Currículo section -->
<section id="resume" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Currículo</h2>
        <div class="row">
            <div class="col-md-3">
                <ul id="resume-sidebar" class="list-group">
                    <li class="list-group-item active" data-target="#experience">
                        <i class="bi bi-briefcase-fill"></i> Experiência Profissional
                    </li>
                    <li class="list-group-item" data-target="#education">
                        <i class="bi bi-mortarboard-fill"></i> Educação
                    </li>
                    <li class="list-group-item" data-target="#skills">
                        <i class="bi bi-tools"></i> Habilidades
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div id="experience" class="resume-content active">
                    <div class="resume-section mb-4">
                        <h3><i class="bi bi-briefcase-fill"></i> Experiência Profissional</h3>
                        <div class="resume-item">
                            <p><strong>Tecnideia</strong> - CTO & Desenvolvedor Web</p>
                            <p class="text-muted">Janeiro 2021 - Presente, Angola</p>
                            <ul>
                                <li>Criação e manutenção de websites funcionais e intuitivos.</li>
                                <li>Garantia da qualidade e eficiência do código.</li>
                                <li>Colaboração com equipes multidisciplinares e solução ágil de problemas técnicos.</li>
                                <li>Implementação de medidas de segurança para proteger os sites contra possíveis ameaças.</li>
                                <li>Atualização constante com as últimas tendências e tecnologias.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="education" class="resume-content">
                    <div class="resume-section mb-4">
                        <h3><i class="bi bi-mortarboard-fill"></i> Educação</h3>
                        <div class="resume-item">
                            <p><strong>Universidade De Belas</strong> - Licenciatura em Engenharia Informática</p>
                            <p class="text-muted">Março 2019 - 2024, Angola</p>
                            <p>Desenvolvimento de habilidades sólidas na criação de aplicações web, estudos em coordenação de projetos, engenharia de inteligência artificial, gestão de servidores web, administração de redes e monitoramento de infraestrutura com Zabbix.</p>
                        </div>
                    </div>
                </div>
                <div id="skills" class="resume-content">
                    <div class="resume-section">
                        <h3><i class="bi bi-tools"></i> Habilidades</h3>
                        <div class="resume-item">
                            <ul>
                                <li>HTML, CSS, JavaScript, PHP, React.js, Laravel</li>
                                <li>GitHub, MySQL, Web Server, Zabbix, Photoshop, Windows Server 2016, Webmail</li>
                                <li>Engenharia de Prompt, Helpdesk</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Currículo ebooks -->
<section id="ebooks" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Ebooks</h2>
        <p class="text-center mb-4">Explore os meus ebooks sobre desenvolvimento pessoal e negócio</p>
        <div class="row">
            <div class="col-md-3">
                <ul id="ebooks-sidebar" class="list-group">
                    <li class="list-group-item active" data-target="#ebook1">
                        <i class="bi bi-book"></i> Legalizar o seu Negócio 
                    </li>
                    <!-- <li class="list-group-item" data-target="#ebook2">
                        <i class="bi bi-book"></i> Ebook 2
                    </li>
                    <li class="list-group-item" data-target="#ebook3">
                        <i class="bi bi-book"></i> Ebook 3
                    </li> -->
                </ul>
            </div>
            <div class="col-md-9">
                <div id="ebook1" class="ebook-content active">
                    <div class="ebook-image-wrapper no-download">
                        <img src="{{asset('img/ebook1.jpg')}}" class="img-fluid rounded shadow-sm mb-3" alt="Ebook 1">
                    </div>
                    <h5 class="card-title">Como Legaliza a sua Empresa em Angola a partir de Casa</h5>
                    <p class="card-text">Legalize seu Negócio em Angola Sem Sair de Casa! Realize seu sonho de empreender em Angola sem complicações. Com o nosso ebook é a chave para você legalizar sua empresa sem gastar uma fortuna com consultor.</p>
                    <div class="btn-wrapper">
                        <a href="https://consumer.kuenha.com/marketplace/5db36544-5104-43c0-8c30-04464291a9bd" class="btn btn-outline-primary">Ver mais</a>
                    </div>
                </div>
                <!-- <div id="ebook2" class="ebook-content">
                    <div class="ebook-image-wrapper no-download">
                        <img src="{{asset('img/ebook2.jpg')}}" class="img-fluid rounded shadow-sm mb-3" alt="Ebook 2">
                    </div>
                    <h5 class="card-title">Ebook 2</h5>
                    <p class="card-text">Uma breve descrição do Ebook 2.</p>
                    <div class="btn-wrapper">
                        <a href="#" class="btn btn-outline-primary">Ver mais</a>
                    </div>
                </div>
                <div id="ebook3" class="ebook-content">
                    <div class="ebook-image-wrapper no-download">
                        <img src="{{asset('img/ebook3.jpg')}}" class="img-fluid rounded shadow-sm mb-3" alt="Ebook 3">
                    </div>
                    <h5 class="card-title">Ebook 3</h5>
                    <p class="card-text">Uma breve descrição do Ebook 3.</p>
                    <div class="btn-wrapper">
                        <a href="#" class="btn btn-outline-primary">Ver mais</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- back-to-top -->
<button id="back-to-top" class="back-to-top">
    <i class="bi bi-arrow-up"></i>
</button>


 <!-- Toggle Button for Dark/Light Mode -->
 <!-- <div id="theme-toggle" class="theme-toggle">
        <i class="bi bi-moon-fill" id="theme-icon"></i>
    </div> -->
@endsection