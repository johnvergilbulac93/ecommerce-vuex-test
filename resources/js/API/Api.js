import axios from 'axios'
import Axios from 'axios'

const URL = '{{ env('APP_API') }}';

const API = axios.create({
     baseURL: URL,
});

export default API;