<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Главнвя" />

    <GuestLayout>
        <div class="py-12">
            <div class="grid grid-cols-10">
                <div class="col-span-2">Наименование</div>
                <div>Кол-во</div>
                <div>Источник</div>
                <div>Лазер</div>
                <div>Сварка</div>
                <div>Сборка</div>
                <div>Электр</div>
                <div class="col-span-2 flex justify-end">
                    I
                    C
                    O
                    N
                </div>
            </div>
            <div class="grid grid-cols-10 mt-10">
                <div class="col-span-2">Наименование</div>
                <div>Кол-во</div>
                <div>Источник</div>
                <div>Лазер</div>
                <div>Сварка</div>
                <div>Сборка</div>
                <div>Электр</div>
                <div class="col-span-2 flex justify-end">
                    I
                    C
                    O
                    N
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
