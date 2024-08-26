<template>
    <!-- <Drawer></Drawer> -->
    <div class="bg-white w-4/5 m-auto rounded-xl shadow-xl mt-14">

        <Header></Header>
        <div class="p-10">

            <div class="flex justify-between items-center">
                <h2 class="text-3xl font-bold mb-9">Все кроссовки</h2>

                <div class="flex gap-4">
                    <select name="" id="" class="py-2 px-3 border rounded-md outline-none">
                        <option value="">По названию</option>
                        <option value="">По цене(дешевые)</option>
                        <option value="">По цене(дорогие)</option>
                    </select>
                    <div class="relative">
                        <img class="absolute left-4 top-3" src="img/search.svg" alt="search" />
                        <input class="border rounded-md py-2 pl-12 pr-4 outline-none focus:border-gray-400" type="text"
                            placeholder="Search..." />
                    </div>
                </div>
            </div>

            <div class="mt-10">
                <CardList></CardList>
            </div>
        </div>
    </div>
</template>

<script setup>
import Header from './Header.vue';
import CardList from './CardList.vue';
import Drawer from './Drawer.vue';


</script>
