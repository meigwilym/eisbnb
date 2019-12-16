<template>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">{{ title }}</h1>
                <h2 class="subtitle">{{ subtitle }}</h2>
                <slot />
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: {
        title: String,
        subtitle: String
    }
}
</script>
