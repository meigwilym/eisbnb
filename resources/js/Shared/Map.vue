<template lang="pug">
    <div id="map">
    <l-map :zoom="13" :center="coords" style="height: 500px; width: 100%">
      <l-tile-layer
        url="https://{s}.basemaps.cartocdn.com/rastertiles/voyager_labels_under/{z}/{x}/{y}{r}.png"
        attribution="&copy; <a href='http://osm.org/copyrighte'>OpenStreetMap</a> contributors"
      />

        <l-marker :lat-lng="coords" />
        <!-- Maes, Maes B, Carafannau ayyb
        <l-marker :lat-lng="[52.29, -3.90]" />
        -->
    </l-map>
    </div>
</template>

<script>
import { LMap, LTileLayer, LMarker } from 'vue2-leaflet'

// https://codesandbox.io/s/w04nj9n34w?from-embed
export default {
    props: {
        lat: Number,
        lon: Number,
    },
    data() {
        return {
            coords: [this.lat, this.lon]
        }
    },
    components: {
        LMap,
        LTileLayer,
        LMarker,
    }
}
</script>
