<template lang="pug">
    <div>
        <hero :title="listing.title" :subtitle="listing.short_description">
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
        </hero>
        <div class="container">
            <section class="section">
                <div class="columns">
                    <div class="column is-half is-offset-one-quarter has-text-centered">
                        <h2 class="title is-spaced is-size-4-mobile"><i class="fas fa-cubes"></i> &nbsp;Cyfleusterau</h2>
                        <ul class="amenities">
                            <li v-for="amenity in listing.amenities" class="tag is-info is-light is-medium">{{ amenity }}</li>
                        </ul>

                        <b-carousel>
                            <b-carousel-item v-for="(carousel, i) in listing.images" :key="i">
                                <section class="">
                                    <div class="has-text-centered">
                                        <img :src="carousel.filepath" />
                                    </div>
                                </section>
                            </b-carousel-item>
                        </b-carousel>

                        <h2 class="title is-spaced is-size-4-mobile"><i class="fas fa-info-circle"></i> &nbsp;Disgrifiad</h2>
                        <div class="content has-text-left">
                            {{ listing.long_description }}
                        </div>

                        <h2 class="title is-spaced is-size-4-mobile"><i class="fas fa-bed"></i> &nbsp;Argaeledd</h2>
                        <div class="tags">
                            <span v-for="night in listing.availability" :class="`tag ${night.argael ? 'is-success' : 'is-danger'}`">
                                {{ night.noson }}
                            </span>
                        </div>

                        <h2 class="title is-spaced is-size-4-mobile"><i class="fas fa-map-marker"></i> &nbsp;Lleoliad</h2>
                        <Map :lat="listing.lat" :lon="listing.lon" />
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
import Hero from '@/Shared/Hero';
import Map from '@/Shared/Map';

export default {
    layout: (h, page) => h(Layout, [page]),
    components: {
        Carousel,
        Hero,
        Map,
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
