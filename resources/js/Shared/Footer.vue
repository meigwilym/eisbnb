<template>
    <footer class="footer">
        <div class="container">
            <div class="columns">
                <div class="column">
                    EisBnB
                </div>
                <div class="column">

                    <div class="columns is-desktop">
                        <div class="column">
                            <div class="menu">
                                <p class="menu-label">Y Gwasanaeth</p>
                                <ul class="menu-list">
                                    <li><inertia-link :href="route('page.show', 'amdan')">Amdan</inertia-link></li>
                                    <li><inertia-link :href="route('page.show', 'prisiau')">Prisiau</inertia-link></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <div class="menu">
                                <p class="menu-label">Gwybodaeth</p>
                                <ul class="menu-list">
                                    <li><inertia-link :href="route('page.show', 'termau-gwasanaeth')">Termau</inertia-link></li>
                                    <li><inertia-link :href="route('page.show', 'polisi-preifatrwydd')">Polisi Preifatrwydd</inertia-link></li>
                                    <li><inertia-link :href="route('page.show', 'polisi-cwcis')">Polisi Cwcis</inertia-link></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</template>
