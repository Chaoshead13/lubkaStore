<template>
    <div class="relative bg-white border border-slate-100 rounded-3xl p-8 cursor-pointer transition hover:-translate-y-2 hover:shadow-xl">
                <img :src="!isFavorite ? 'img/like-1.svg' : 'img/like-2.svg' " alt="like" class="absolute top-8 left-8" />
                <img :src=" product.image_url " alt="sneakers" />
                <p class="mt-2">{{product.title}}</p>

                <div class="flex justify-between mt-5">
                    <div class="flex flex-col">
                        <span class="text-slate-400">Цена:</span>
                        <b>{{product.price}} лей.</b>
                    </div>
                    <img @click="onClickAdd" :src="!isAdded ? 'img/plus.svg' : 'img/checked.svg'" alt="Plus">
                </div>
            </div>
</template>

<script setup>



const props = defineProps({
    product: {
        type: Object,
        required: true
    },
    isFavorite: Boolean,
    isAdded: Boolean,
    onClickAdd: Function,
    onClickFavorite: Function,

});
</script>