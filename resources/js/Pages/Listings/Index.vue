<template lang="pug">
    <div class="">
        <Navbar />
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title ">Rhestr Llety</h1>
                    <h2 class="subtitle">Dewiswch o'r rhestr isod</h2>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="section">
                <div class="columns is-desktop">
                    <div class="column is-half is-offset-one-quarter">
                        <ListingCard v-for="listing in listings" :key="listing.id" :listing="listing" />
                    </div>
                </div>
            </section>
        </div>
        <Footer />
    </div>
</template>

<script>
import ListingCard from '@/Shared/ListingCard';
import Navbar from '@/Shared/Navbar';
import Footer from '@/Shared/Footer';

export default {
    components: {
        Navbar,
        Footer,
        ListingCard
    },
    props: {
        listings: Array
    }
};
</script>
