require('./bootstrap');

// Adicionando o token CSRF de forma global no Axios
axios.defaults.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
