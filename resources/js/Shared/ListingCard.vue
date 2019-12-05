<template>
    <div class="card m-b-md">
        <inertia-link :href="route('listings.show', listing.slug)">
            <div class="card-content">
                <span v-if="listing.is_featured" class="icon is-large is-pulled-right">
                    <i class="fa fa-star fa-2x has-text-warning"></i>
                </span>
                <div class="media">
                    <div v-if="listing.images.length > 0" class="media-left">
                        <figure class="image is-64x64">
                            <img :src="listing.images[0].filepath" :alt="listing.title">
                        </figure>
                    </div>
                    <!--
                    <div v-else class="media-left">
                        <figure class="image is-64x64">
                            <img :src="listing.listing_type.icon" alt="Placeholder image">
                        </figure>
                    </div>
                    -->
                    <div class="media-content">
                        <p class="title is-4">{{ listing.title }}</p>
                        <p class="subtitle is-6">{{ listing.listing_type.name }} yn {{ listing.location }}</p>
                    </div>
                </div>

                <div class="field is-grouped is-grouped-multiline">
                    <div class="control">
                        <div class="tags has-addons">
                            <span class="tag">Gwelyau</span>
                            <span class="tag is-info">{{ listing.beds }}</span>
                        </div>
                    </div>
                    <div class="control">
                        <div class="tags has-addons">
                            <span class="tag">Pris</span>
                            <span class="tag is-info">&pound;{{ listing.cost_per_night }}</span>
                        </div>
                    </div>
                </div>

                <div class="content">
                    {{ listing.short_description }}
                    <br>
                </div>
            </div>
        </inertia-link>
    </div>
</template>

<script>
export default {
    props: {
        listing: Object
    }
}
</script>
