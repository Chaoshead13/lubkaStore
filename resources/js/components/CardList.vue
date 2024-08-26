<template>
    <div class="grid grid-cols-4 gap-4">
        <Card v-for="product in products" :key="product.id" :product="product" :is-added="true" :is-favorite="true" :onClickAdd ="onClickAdd"/>
            </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Card from './Card.vue';

const products = ref([]);



const getProducts = async () => {
    try {
        const res = await axios.get('./api/products');
        products.value = res.data.data; // Сохраняем полученные данные в products
    } catch (error) {
        console.error('Ошибка при получении данных:', error);
    }
};
const onClickAdd = () => {
    alert("add")
}

// Запускаем получение данных после монтирования компонента
onMounted(() => {
    getProducts();
});

</script>