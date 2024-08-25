<template>
    <div class="relative bg-white border border-slate-100 rounded-3xl p-8 cursor-pointer transition hover:-translate-y-2 hover:shadow-xl">
                <img src="img/like-2.svg" alt="like 1" class="absolute top-8 left-8" />
                <img :src=" product.image_url " alt="sneakers" />
                <p class="mt-2">{{product.title}}</p>

                <div class="flex justify-between mt-5">
                    <div class="flex flex-col">
                        <span class="text-slate-400">Цена:</span>
                        <b>{{product.price}} лей.</b>
                    </div>
                    <img src="img/plus.svg" alt="Plus">
                </div>
            </div>
</template>

<script setup>
// Принимаем данные продукта через props
const props = defineProps({
    product: {
        type: Object,
        required: true
    }
});
</script>