import "../css/app.css";

import './bootstrap';
import { createApp } from 'vue';



const app = createApp({});

import App from './components/App.vue';

app.component('example-component', App);

app.mount('#app');
