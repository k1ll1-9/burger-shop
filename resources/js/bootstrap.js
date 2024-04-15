import axios from 'axios';
import jQuery from 'jquery'
import select2 from 'select2';
import bsCustomFileInput from "bs-custom-file-input";

bsCustomFileInput.init();
select2();
window.$ = jQuery;
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
