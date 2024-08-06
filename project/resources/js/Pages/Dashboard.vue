<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import TrashIcon from '@/icon/Trash.vue';
import NoteIcon from '@/icon/Note.vue';
import ArrowUp from '@/icon/ArrowUp.vue';
import ArrowDown from '@/icon/ArrowDown.vue';
import Open from '@/icon/Open.vue';


const props = defineProps({
    orders: Array,
    ordersDetail: Array,
});
</script>

<style>
.v-expansion-panel-title__overlay {
    display: none !important;
}

.v-expansion-panel-title {
    cursor: default !important;
}
</style>

<template>

    <Head title="Главнaя" />

    <GuestLayout>
        <v-expansion-panels multiple>
            <v-container>

                <v-row no-gutters>
                    <v-col />
                    <v-col align="center">Наименование</v-col>
                    <v-col align="center">Кол-во</v-col>
                    <v-col align="center">Источник</v-col>
                    <v-col align="center">Лазер</v-col>
                    <v-col align="center">Сварка</v-col>
                    <v-col align="center">Сборка</v-col>
                    <v-col align="center">Электр</v-col>
                    <v-col cols="2" />
                </v-row>

                <v-expansion-panel v-for="order in orders" class="border cursor-default">
                    <v-row no-gutters>
                        <v-expansion-panel-title :disabled="ordersDetail.some(detail => detail.orders_id !== order.id)">
                            <v-col no-gutters cols="1">
                                <v-col>
                                    <a href="/" @click="upIndex(order.id)">
                                        <ArrowUp />
                                    </a>
                                    <a href="/" @click.="downIndex(order.id)">
                                        <ArrowDown />
                                    </a>
                                </v-col>
                            </v-col>
                            <v-col>
                                <v-row>
                                    <v-col v-if="ordersDetail.some(detail => detail.orders_id === order.id)"
                                        class="flex " align="center">{{ order.title }}<div>
                                            <Open class="cursor-pointer " />
                                        </div></v-col>
                                    <v-col v-else class="flex " align="center">{{ order.title }}</v-col>
                                    <v-col align="center">{{ order.quanity }}</v-col>
                                    <v-col align="center">{{ order.source }}</v-col>
                                    <v-col align="center">{{ order.laser }}</v-col>
                                    <v-col align="center">{{ order.welding }}</v-col>
                                    <v-col cols="1" align="center">{{ order.construct }}</v-col>
                                    <v-col cols="2" align="center">{{ order.electro }}</v-col>
                                    <v-col class="flex">
                                        <a href="/" class="z-10">
                                            <NoteIcon />
                                        </a>
                                        <a href="/" @click="deleteOrder(order.id)" class="z-10 ">
                                            <TrashIcon />
                                        </a>
                                    </v-col>
                                </v-row>
                            </v-col>
                        </v-expansion-panel-title>
                    </v-row>
                    <v-expansion-panel-text v-for="orderDetail in ordersDetail">
                        <v-row no-gutters v-if="order.id === orderDetail.orders_id">
                            <v-col cols="1" />
                            <v-col align="center">{{ orderDetail.title }}</v-col>
                            <v-col align="center">{{ orderDetail.quanity }}</v-col>
                            <v-col align="center">{{ orderDetail.source }}</v-col>
                            <v-col align="center">{{ orderDetail.laser }}</v-col>
                            <v-col align="center">{{ orderDetail.welding }}</v-col>
                            <v-col cols="1" align="center">{{ orderDetail.construct }}</v-col>
                            <v-col cols="2" align="center">{{ orderDetail.electro }}</v-col>
                            <v-col />
                        </v-row>
                    </v-expansion-panel-text>
                </v-expansion-panel>
            </v-container>
        </v-expansion-panels>
    </GuestLayout>
</template>
<script>
import axios from 'axios';
export default {
    methods: {
        upIndex(orderId) {
            const index = '1'
            axios.put(`http://localhost:8000/api/upDown/${orderId}/${index}`)
            .then(() => {
                    console.log('Позиция поднята');
                })
                .catch(error => console.error('Ошибка при поднятии:', error));
        },
        downIndex(orderId) {
            const index = '-1'
            axios.put(`http://localhost:8000/api/upDown/${orderId}/${index}`)
            .then(() => {
                    console.log('Позиция опущена');
                })
                .catch(error => console.error('Ошибка понижении:', error));
        },
        deleteOrder(orderId) {
            axios.delete(`http://localhost:8000/api/orders/${orderId}`)
                .then(() => {
                    console.log('Заказ успешно удален');
                })
                .catch(error => console.error('Ошибка при удалении заказа:', error));
        }
    }
}
</script>