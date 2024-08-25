<template>
    <div class="bg-white w-4/5 m-auto rounded-xl shadow-xl mt-14">
        <Header></Header>
        <div class="p-10">

            <h2 class="text-3xl font-bold mb-9">Все кроссовки</h2>
            
            <CardList></CardList>
        </div>
    </div>
</template>

<script setup>
import Header from './Header.vue';
import CardList from './CardList.vue';


</script>
