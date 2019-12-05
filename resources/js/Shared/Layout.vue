<template lang="pug">
    <div class="">
        <Navbar />
        <slot />
        <Footer />
    </div>
</template>

<script>
import Navbar from '@/Shared/Navbar';
import Footer from '@/Shared/Footer';
export default {
    components: {
        Navbar,
        Footer
    }
};
</script>
