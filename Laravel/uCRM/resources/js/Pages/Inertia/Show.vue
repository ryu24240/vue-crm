<script setup>
import { Inertia } from "@inertiajs/inertia";

defineProps({
    id: String,
    blog: Object,
});

const deleteConfirm = (id) => {
    Inertia.delete(`/inertia/${id}`, {
        //イベント前処理
        onBefore: () => confirm("本当に削除しますか？"),
    });
};
</script>

<template>
    <div>
        {{ id }}<br />
        {{ blog.title }}<br />
        <button @click="deleteConfirm(blog.id)">削除</button>
    </div>
</template>
