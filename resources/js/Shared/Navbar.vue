<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    EisBnB
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="main-menu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="main-menu" class="navbar-menu">
                <div class="navbar-start">
                    <inertia-link class="navbar-item" :href="route('listings')">Llety</inertia-link>
                    <inertia-link class="navbar-item" :href="route('listings.create')">Gosod Hysbyseb</inertia-link>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {

};
</script>
