<script setup>
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";

defineProps({
    errors: Object,
});

const form = reactive({
    title: null,
    content: null,
});

const submitFunctiom = () => {
    // 第一引数はpost先(StoreのURL), 第二引数に渡す値(DBに登録する値)
    Inertia.post("/inertia", form);
};
</script>

<template>
    <BreezeValidationErrors :errors="errors" />
    <form @submit.prevent="submitFunctiom">
        <input type="text" name="title" v-model="form.title" /><br />
        <div v-if="errors.title">{{ errors.title }}</div>
        <input type="text" name="content" v-model="form.content" /><br />
        <div v-if="errors.content">{{ errors.content }}</div>
        <button>送信</button>
    </form>
</template>
