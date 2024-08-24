<template>
    <header class="flex justify-between border-b border-slate-300 px-10 py-8">
            <div class="flex items-center gap-4">
                <img src="img/logo.png" alt="logo" class="w-10"/>

                <div>
                    <h2 class="text-xl font-bold uppercase">Vue Sneakers</h2>
                    <p class="text-slate-500">Лучший магазин</p>
                </div>
            </div>
            <ul class="flex items-center gap-10">
                <li class="flex items-center cursor-pointer gap-3 text-gray-500 hover:text-black">
                    <img src="img/cart.svg" alt="Cart" />
                    <b>1205 lei</b>
                </li>
                <li class="flex items-center cursor-pointer gap-3 text-gray-500 hover:text-black">
                    <img src="img/heart.svg" alt="Heart" />
                    <span>Закладки</span>
                </li>
                <li class="flex items-center cursor-pointer gap-3 text-gray-500 hover:text-black">
                    <img src="img/profile.svg" alt="Profile" />
                    <span>Профиль</span>
                </li>
            </ul>
        </header>
</template>