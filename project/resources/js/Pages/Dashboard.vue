<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import TrashIcon from '@/icon/Trash.vue';
import NoteIcon from '@/icon/Note.vue';


const props = defineProps({
    orders: Array,
    ordersDetail: Array,
});
</script>



<template>

    <Head title="Главнвя" />

    <GuestLayout>
        <div class="py-12">
            <v-row></v-row>
            <div class="grid grid-cols-10">
                <div class="col-span-2 ml-4">Наименование</div>
                <div class="flex justify-center ">Кол-во</div>
                <div class="flex justify-center">Источник</div>
                <div class="flex justify-center">Лазер</div>
                <div class="flex justify-center">Сварка</div>
                <div class="flex justify-center">Сборка</div>
                <div class="flex justify-center">Электр</div>
                <div class="col-span-2 flex justify-end" />

            </div>
        </div>
        <v-expansion-panels>
            <v-expansion-panel v-for="order in orders" class="border">
                <v-expansion-panel-title class="bg-gray-100">

                    <div class="grid grid-cols-10 justify-end gap-x-24">
                        <div class="col-span-2">{{ order.title }}</div>
                        <div class="flex justify-center ml-8">{{ order.quanity }}</div>
                        <div class="flex justify-center ml-8">{{ order.source }}</div>
                        <div class="flex justify-center  ml-8">{{ order.laser }}</div>
                        <div class="flex justify-center  ml-6">{{ order.welding }}</div>
                        <div class="flex justify-center  ml-4">{{ order.construct }}</div>
                        <div class="flex justify-center  ml-4">{{ order.electro }}</div>
                        <div class="col-span-2 flex justify-end">
                            <a href="/" class="z-10">
                                <NoteIcon />
                            </a>
                            <a href="/" class="z-10">
                                <TrashIcon />
                            </a>
                        </div>
                    </div>

                </v-expansion-panel-title>



                <v-expansion-panel-text v-for="orderDetail in ordersDetail" class=" rounded-lg mt-5 p-1">

                    <div class="grid grid-cols-10 justify-end gap-x-24"
                        v-if="order.id === orderDetail.orders_id">

                        <div class="col-span-2">{{ orderDetail.title }}</div>
                        <div class="flex justify-center ml-8">{{ orderDetail.quanity }}</div>
                        <div class="flex justify-center ml-8">{{ orderDetail.source }}</div>
                        <div class="flex justify-center  ml-8">{{ orderDetail.laser }}</div>
                        <div class="flex justify-center  ml-6">{{ orderDetail.welding }}</div>
                        <div class="flex justify-center  ml-4">{{ orderDetail.construct }}</div>
                        <div class="flex justify-center  ml-4">{{ orderDetail.electro }}</div>


                    </div>
                </v-expansion-panel-text>
            </v-expansion-panel>
        </v-expansion-panels>
    </GuestLayout>
</template>
