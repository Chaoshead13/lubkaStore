<template>
  <Drawer v-if="drawerOpen"></Drawer>
    <div class="bg-white w-4/5 m-auto rounded-xl shadow-xl mt-14">
        <Header></Header>
        <div class="p-10">
            <div class="flex justify-between items-center">
                <h2 class="text-3xl font-bold mb-9">Все кроссовки</h2>
                <div class="flex gap-4">
                    <select v-model="sortByCategory" class="py-2 px-3 border rounded-md outline-none">
                        <option disabled selected value="name">категория</option>
                        <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.title }}</option>
                       
                    </select>
                    <select v-model="sortBy" class="py-2 px-3 border rounded-md outline-none">
                        <option value="name">По названию</option>
                        <option value="priceLow">По цене(дешевые)</option>
                        <option value="priceHigh">По цене(дорогие)</option>
                    </select>
                    <div class="relative">
                        <img class="absolute left-4 top-3" src="img/search.svg" alt="search" />
                        <input v-model="searchQuery" class="border rounded-md py-2 pl-12 pr-4 outline-none focus:border-gray-400" type="text"
                            placeholder="Search..." />
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <CardList :sortBy="sortBy" :searchQuery="searchQuery" :sortByCategory="sortByCategory"></CardList>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Header from './Header.vue';
import CardList from './CardList.vue';
import Drawer from './Drawer.vue';

const drawerOpen = ref(0);
const sortBy = ref("");
const searchQuery = ref("");
const sortByCategory = ref("");
const categories = ref([]);

const getCategories = async () => {
    try {
        const res = await axios.get('./api/categories');
        categories.value = res.data.data;
    } catch (error) {
        console.error('Ошибка при получении данных:', error);
    }
};

onMounted(() => {
    getCategories();
});


</script>
