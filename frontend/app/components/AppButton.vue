<script setup>
defineProps({
    text: {
        type: String,
    },
})
</script>

<template>
    <button
        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-all duration-300 text-sm"
        type="button"
    >
        {{ text }}
    </button>
</template>