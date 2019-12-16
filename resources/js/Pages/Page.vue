<template lang="pug">
    <div>
        <navbar />

        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title ">{{ page.title }}</h1>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="content" v-html="page.html" />
        </div>

        <footer />
    </div>
</template>

<script>
import Navbar from '@/Shared/Navbar';
import Footer from '@/Shared/Footer';
export default {
    components: {
        Navbar,
        Footer
    },
    props: {
        page: Object
    }
};
</script>
