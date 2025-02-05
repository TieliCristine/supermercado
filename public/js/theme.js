// Obtém os elementos
const toggleThemeButton = document.getElementById('toggle-theme');
const themeIcon = document.getElementById('theme-icon');
const htmlElement = document.documentElement;
const logo = document.getElementById('logo');

// Aqui passamos as URLs corretas das imagens
const logoLight = logo ? logo.getAttribute('data-logo-light') : null;
const logoDark = logo ? logo.getAttribute('data-logo-dark') : null;

// Função para alternar o tema
const toggleTheme = () => {
    const currentTheme = htmlElement.getAttribute('data-bs-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

    // Atualiza o tema e salva no localStorage
    htmlElement.setAttribute('data-bs-theme', newTheme);
    localStorage.setItem('theme', newTheme);

    // Atualiza o ícone
    themeIcon.className = newTheme === 'light' ? 'bi bi-sun' : 'bi bi-moon-stars';

    // Atualiza a logo
    if (logo && logoLight && logoDark) {
        logo.src = newTheme === 'light' ? logoLight : logoDark;
    }
};

// Inicializa o tema salvo
const savedTheme = localStorage.getItem('theme');
const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
const defaultTheme = savedTheme || (prefersDark ? 'dark' : 'light');

htmlElement.setAttribute('data-bs-theme', defaultTheme);

// Configura o ícone inicial
if (themeIcon) {
    themeIcon.className = defaultTheme === 'light' ? 'bi bi-sun' : 'bi bi-moon-stars';
}

// Configura a logo inicial
if (logo && logoLight && logoDark) {
    logo.src = defaultTheme === 'light' ? logoLight : logoDark;
}

// Adiciona o evento ao botão
if (toggleThemeButton) {
    toggleThemeButton.addEventListener('click', toggleTheme);
}
