<script setup lang="ts">
import GrowthSection from '~/components/GrowthSection.vue';
import References from '~/components/References.vue';
import ServiceCards from '~/components/ServiceCards.vue';
import TimeLine from '~/components/TimeLine.vue';

</script>

<template>
    <Layout>
        <ServiceCards />

        <References />

        <TimeLine />

        <GrowthSection />
    </Layout>
</template>