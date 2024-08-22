document.addEventListener('DOMContentLoaded', function () {
    // Tela de Carregamento
    const loadingScreen = document.getElementById('loading-screen');
    setTimeout(() => {
        loadingScreen.style.opacity = '0';
        setTimeout(() => {
            loadingScreen.style.display = 'none';
        }, 500); // Duração do efeito de desvanecimento
    }, 3000); // Exibe a tela de carregamento por 3 segundos para permitir visibilidade completa

    // Animação de Texto Dinâmico
    const codingTexts = [
        "<h1>Vasco Pinto</h1>",
        "<p>Licenciado em Eng. Informática</p>",
        "<p>Desenvolvedor Full-stack</p>",
        "<p>Especialista em Soluções Web</p>",
        "<p>Entusiasta de Inovação Tecnológica</p>"
    ];

    const dynamicCodingText = document.getElementById('dynamic-coding-text');
    let index = 0;
    let charIndex = 0;
    let currentTag = codingTexts[index];

    // Função para digitar o texto, caractere por caractere
    function typeTag() {
        if (charIndex < currentTag.length) {
            dynamicCodingText.textContent += currentTag.charAt(charIndex);
            charIndex++;
            setTimeout(typeTag, 100);
        } else {
            setTimeout(() => {
                if (index < codingTexts.length - 1) {
                    index++;
                } else {
                    index = 0; // Reinicia para o primeiro texto após o último
                }
                charIndex = 0;
                currentTag = codingTexts[index];
                dynamicCodingText.textContent = "";
                typeTag();
            }, 1000); // Atraso antes do próximo texto
        }
    }

    typeTag();

    // Comportamento de Rolagem Suave para a Barra de Navegação
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 60,
                    behavior: 'smooth'
                });
            }

            // Fecha o menu da navbar em dispositivos móveis após o clique
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarToggler && navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });

    // Animação da Sobreposição do Portfólio
    document.getElementById('portfolio-link').addEventListener('click', function(e) {
        e.preventDefault();
        const overlay = document.getElementById('portfolio-overlay');
        overlay.style.display = 'flex'; // Mostra a sobreposição
        setTimeout(() => {
            window.open('../portifolio/portfolio_criativo_2024_Vasco_Pinto.pdf', '_blank');
            overlay.style.display = 'none'; // Esconde a sobreposição após abrir o PDF
        }, 3000); // Atraso de 3 segundos para a animação
    });

    // Previne o download de imagens, clique com o botão direito e arrasto
    const noDownloadImages = document.querySelectorAll('.no-download');
    noDownloadImages.forEach(img => {
        img.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        img.addEventListener('dragstart', function(e) {
            e.preventDefault();
        });
    });

    // Navegação na Sidebar do Portfólio
    const portfolioSidebarItems = document.querySelectorAll('#portfolio-sidebar .list-group-item');
    const portfolioContents = document.querySelectorAll('.portfolio-content');

    portfolioSidebarItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove a classe 'active' de todos os itens e conteúdos
            portfolioSidebarItems.forEach(i => i.classList.remove('active'));
            portfolioContents.forEach(content => content.classList.remove('active'));

            // Adiciona a classe 'active' ao item clicado
            this.classList.add('active');

            // Exibe o conteúdo relacionado
            const target = this.getAttribute('data-target');
            document.querySelector(target).classList.add('active');
        });
    });

    // Exibe o primeiro projeto por padrão
    portfolioSidebarItems[0].click();

   // Alternância das seções do currículo através da navegação lateral
   const resumeSidebarItems = document.querySelectorAll('#resume-sidebar .list-group-item');
   const resumeContents = document.querySelectorAll('.resume-content');

   resumeSidebarItems.forEach(item => {
       item.addEventListener('click', function() {
           // Remove a classe 'active' de todos os itens e conteúdos
           resumeSidebarItems.forEach(i => i.classList.remove('active'));
           resumeContents.forEach(content => content.classList.remove('active'));

           // Adiciona a classe 'active' ao item clicado
           this.classList.add('active');

           // Exibe a seção correspondente
           const target = this.getAttribute('data-target');
           document.querySelector(target).classList.add('active');
       });
   });

   // Exibe a primeira seção por padrão
   resumeSidebarItems[0].click();

   // Alternância das seções de ebooks através da navegação lateral
   const ebooksSidebarItems = document.querySelectorAll('#ebooks-sidebar .list-group-item');
   const ebookContents = document.querySelectorAll('.ebook-content');

   ebooksSidebarItems.forEach(item => {
       item.addEventListener('click', function() {
           // Remove a classe 'active' de todos os itens e conteúdos
           ebooksSidebarItems.forEach(i => i.classList.remove('active'));
           ebookContents.forEach(content => content.classList.remove('active'));

           // Adiciona a classe 'active' ao item clicado
           this.classList.add('active');

           // Exibe a seção correspondente
           const target = this.getAttribute('data-target');
           document.querySelector(target).classList.add('active');
       });
   });

   // Exibe o primeiro ebook por padrão
   ebooksSidebarItems[0].click();

   const backToTopButton = document.getElementById('back-to-top');

   // Mostrar o botão quando a página for rolada para baixo
   window.addEventListener('scroll', function () {
       if (window.scrollY > 300) {
           backToTopButton.classList.add('show');
       } else {
           backToTopButton.classList.remove('show');
       }
   });

   // Rolar suavemente para o topo da página quando o botão for clicado
   backToTopButton.addEventListener('click', function () {
       window.scrollTo({
           top: 0,
           behavior: 'smooth'
       });
   });
});
