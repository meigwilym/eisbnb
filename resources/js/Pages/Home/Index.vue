<template lang="pug">
    <div>
        <hero title="EisBnB" subtitle="Llety Eisteddfodol" />
        <div class="container">
            <section class="section">
                <div class="columns is-desktop">
                    <div class="column is-half is-offset-one-quarter">
                        <listing-card v-for="listing in featuredListings" :key="listing.id" :listing="listing" />
                    </div>
                </div>

                <div class="has-text-centered">
                    <inertia-link :href="route('listings')" class="button is-medium is-primary">Gweld y Rhestr Llawn</inertia-link>
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
        Hero,
    },
    props: {
        featuredListings: Array
    }
};
</script>
