import axios from 'axios';
import Alpine from 'alpinejs';

// 1. Setup axios dulu
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// 2. Expose Alpine ke window sebelum start
window.Alpine = Alpine;

// 3. Start Alpine terakhir, setelah semua komponen siap
Alpine.start();