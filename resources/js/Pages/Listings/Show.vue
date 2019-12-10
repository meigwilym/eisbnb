<template lang="pug">
    <div>
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title ">{{ listing.title }}</h1>
                    <h2 class="subtitle">{{ listing.short_description }}</h2>

                    <div>
                        <div class="field is-grouped is-grouped-multiline">
                            <div class="control">
                                <div class="tags has-addons">
                                    <span class="tag is-large">Gwelyau</span>
                                    <span class="tag is-info is-light is-large">{{ listing.beds }}</span>
                                </div>
                            </div>
                            <div class="control">
                                <div class="tags has-addons">
                                    <span class="tag is-large">Pris</span>
                                    <span class="tag is-info is-light is-large">&pound;{{ listing.cost_per_night }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="section">
                <div class="columns">
                    <div class="column is-one-quarter has-text-centered">
                        <h2 class="title is-spaced is-size-4-mobile"><i class="fas fa-cubes"></i> &nbsp;Cyfleusterau</h2>
                        <ul class="amenities">
                            <li v-for="amenity in listing.amenities" class="tag is-info is-light is-medium">{{ amenity }}</li>
                        </ul>
                    </div>
                    <div class="column">
                        <b-carousel>
                            <b-carousel-item v-for="(carousel, i) in listing.images" :key="i">
                                <section class="hero is-medium">
                                    <div class="hero-body has-text-centered">
                                        <img :src="carousel.filepath" />
                                    </div>
                                </section>
                            </b-carousel-item>
                        </b-carousel>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h2 class="title is-spaced is-size-4-mobile"><i class="fa fa-info-circle"></i> &nbsp;Disgrifiad</h2>
                        <div class="content">
                            {{ listing.long_description }}
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="tags">
                        <span v-for="night in listing.availability" :class="`tag ${night.argael ? 'is-success' : 'is-danger'}`">
                            {{ night.noson }}
                        </span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="columns">
                    <div class="column">
                        <form>

                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import { Carousel } from 'buefy';
import Layout from '@/Shared/Layout';

export default {
    layout: (h, page) => h(Layout, [page]),
    components: {
        Carousel
    },
    props: {
        listing: Object
    }
};
</script>

<style>
ul.amenities li {
    display: inline-block;
    margin-left: 0.5rem;
    margin-bottom:0.5rem;
}
</style>
