<template lang="pug">
    <div>
        <hero title="Rhestr Llety" subtitle="Dewiswch o'r rhestr isod" />
        <div class="container">
            <section class="section">
                <div class="columns is-desktop">
                    <div class="column is-half is-offset-one-quarter">
                        <listing-card v-for="listing in listings" :key="listing.id" :listing="listing" />
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import Layout from '@/Shared/Layout';
import ListingCard from '@/Shared/ListingCard';
import Hero from '@/Shared/Hero';

export default {
    layout: (h, page) => h(Layout, [page]),
    components: {
        ListingCard,
        Hero
    },
    props: {
        listings: Array
    }
};
</script>
