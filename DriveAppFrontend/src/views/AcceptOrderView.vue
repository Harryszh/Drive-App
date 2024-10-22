<script setup>
    import Express from '@/components/Express.vue';
    import Später from '@/components/Später.vue';

</script>
<template>
    <main>
        <div>
            <h1>Express</h1>
        </div>

        <div>
            <Express />
        </div>

        <div>
            <h1>Später</h1>
        </div>
        <div>
            <Später />
        </div>
    </main>
</template>
<style>
    h1{
        display: flex;
        justify-content: center;
    }
</style>