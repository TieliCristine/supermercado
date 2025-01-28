// Obtém os elementos
const toggleThemeButton = document.getElementById('toggle-theme');
const themeIcon = document.getElementById('theme-icon');
const htmlElement = document.documentElement;

// Função para alternar o tema
const toggleTheme = () => {
    const currentTheme = htmlElement.getAttribute('data-bs-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

    // Atualiza o tema e salva no localStorage
    htmlElement.setAttribute('data-bs-theme', newTheme);
    localStorage.setItem('theme', newTheme);

    // Atualiza o ícone
    themeIcon.className = newTheme === 'light' ? 'bi bi-sun' : 'bi bi-moon-stars';
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

// Adiciona o evento ao botão
if (toggleThemeButton) {
    toggleThemeButton.addEventListener('click', toggleTheme);
}
