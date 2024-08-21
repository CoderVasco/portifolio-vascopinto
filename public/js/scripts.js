document.addEventListener('DOMContentLoaded', function () {
    // Loading Screen
    const loadingScreen = document.getElementById('loading-screen');
    setTimeout(() => {
        loadingScreen.style.opacity = '0';
        setTimeout(() => {
            loadingScreen.style.display = 'none';
        }, 500); // Duration of the fade-out effect
    }, 3000); // Display the loading screen for 3 seconds to allow for full visibility

    // Dynamic Coding Text Animation
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
                    index = 0; // Reset to first tag after the last one
                }
                charIndex = 0;
                currentTag = codingTexts[index];
                dynamicCodingText.textContent = "";
                typeTag();
            }, 1000); // Delay before next tag
        }
    }

    typeTag();

    // Navbar Scroll Behavior
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

            // Close the navbar menu on mobile after click
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarToggler && navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });

    // Portfolio Overlay Animation
    document.getElementById('portfolio-link').addEventListener('click', function(e) {
        e.preventDefault();
        const overlay = document.getElementById('portfolio-overlay');
        overlay.style.display = 'flex'; // Show overlay
        setTimeout(() => {
            window.open('../portifolio/portfólio_criativo_2024_Vasco_Pinto.pdf', '_blank');
            overlay.style.display = 'none'; // Hide overlay after opening PDF
        }, 3000); // 3 seconds delay for the animation
    });

    // Prevent right-click, drag and drop on images with the class "no-download"
    const noDownloadImages = document.querySelectorAll('.no-download');
    noDownloadImages.forEach(img => {
        img.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        img.addEventListener('dragstart', function(e) {
            e.preventDefault();
        });
    });

     // Portfolio Sidebar Navigation
    const sidebarItems = document.querySelectorAll('#portfolio-sidebar .list-group-item');
    const portfolioContents = document.querySelectorAll('.portfolio-content');

    sidebarItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove a classe 'active' de todos os itens e conteúdos
            sidebarItems.forEach(i => i.classList.remove('active'));
            portfolioContents.forEach(content => content.classList.remove('active'));

            // Adiciona a classe 'active' ao item clicado
            this.classList.add('active');

            // Exibe o conteúdo relacionado
            const target = this.getAttribute('data-target');
            document.querySelector(target).classList.add('active');
        });
    });

    // Exibir o primeiro projeto por padrão
    sidebarItems[0].click();
});