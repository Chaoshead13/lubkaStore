<template>
    <div class="grid grid-cols-4 gap-4">
        <Card 
            v-for="product in filteredAndSortedProducts" 
            :key="product.id" 
            :product="product" 
            :is-added="true" 
            :is-favorite="false" 
            :onClickAdd="onClickAdd"
        />
    </div>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue';
import axios from 'axios';
import Card from './Card.vue';

const props = defineProps({
    sortBy: String,
    searchQuery: String,
    sortByCategory: String
});

const products = ref([]);

const getProducts = async () => {
    try {
        const res = await axios.get('./api/products');
        products.value = res.data.data;
    } catch (error) {
        console.error('Ошибка при получении данных:', error);
    }
};

const filteredAndSortedProducts = computed(() => {
    let filtered = products.value;

    // Фильтрация по категории
    if (props.sortByCategory) {
        filtered = filtered.filter(product => product.category.id == props.sortByCategory);
    }

    // Поиск по названию
    filtered = filtered.filter(product => 
        product.title.toLowerCase().includes(props.searchQuery.toLowerCase())
    );
    
    // Сортировка
    if (props.sortBy === "name") {
        filtered = filtered.sort((a, b) => a.title.localeCompare(b.title));
    } else if (props.sortBy === "priceLow") {
        filtered = filtered.sort((a, b) => a.price - b.price);
    } else if (props.sortBy === "priceHigh") {
        filtered = filtered.sort((a, b) => b.price - a.price);
    }

    return filtered;
});

const onClickAdd = () => {
    alert("add");
}

onMounted(() => {
    getProducts();
});
</script>
