<script setup>
defineProps({
    id: String,
});
</script>

<template>
    <div>
        {{ id }}
        <Link
            as="button"
            :href="
                route(items.edit, {
                    item: item.id,
                })
            "
            >編集する</Link
        >
    </div>
</template>
