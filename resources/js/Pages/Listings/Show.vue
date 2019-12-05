<template lang="pug">
    <div>
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title ">{{ listing.title }}</h1>
                    <h2 class="subtitle">{{ listing.short_description }}</h2>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="section">
                <div class="columns">
                    <div class="column is-one-quarter">
                        {{ listing.amenities }}
                    </div>
                    <div class="column">
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import Layout from '@/Shared/Layout';

export default {
    layout: (h, page) => h(Layout, [page]),
    components: {

    },
    props: {
        listing: Object
    }
};
</script>
