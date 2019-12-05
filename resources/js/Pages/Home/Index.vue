<template lang="pug">
    <div>
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title ">EisBnB</h1>
                    <h2 class="subtitle">Llety Eisteddfodol</h2>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="section">
                <div class="columns is-desktop">
                    <div class="column is-half is-offset-one-quarter">
                        <ListingCard v-for="listing in featuredListings" :key="listing.id" :listing="listing" />
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
import Navbar from '@/Shared/Navbar';
import Footer from '@/Shared/Footer';

export default {
    layout: (h, page) => h(Layout, [page]),
    components: {
        Navbar,
        Footer,
        ListingCard
    },
    props: {
        featuredListings: Array
    }
};
</script>
