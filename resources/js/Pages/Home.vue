<script setup>
import 'aos/dist/aos.css';
import AOS from 'aos'

import { Head } from '@inertiajs/vue3';
import Header from './../Partials/Header.vue'
import PageIllustration from './../Partials/PageIllustration.vue'
import HeroHome from './../Partials/HeroHome.vue'
import Stats from './../Partials/Stats.vue'
import Carousel from './../Partials/Carousel.vue'
import Tabs from './../Partials/Tabs.vue'
import Process from './../Partials/Process.vue'
import PricingTables from './../Partials/PricingTables.vue'
import TestimonialsBlocks from './../Partials/TestimonialsBlocks.vue'
import FeaturesBlocks from './../Partials/FeaturesBlocks.vue'
import Cta from './../Partials/Cta.vue'
import Footer from './../Partials/Footer.vue'
import {onMounted} from "vue";

onMounted(()=> {
    AOS.init({
        once: true,
        disable: 'phone',
        duration: 600,
        easing: 'ease-out-sine',
    })
})
</script>

<template>
    <Head title="Home" />

    <!-- Site header -->
    <Header can-login="{{canLogin}}" can-register="{{canRegister}}"/>

    <!-- Page content -->
    <main class="grow">

        <!-- Page illustration -->
        <div class="relative max-w-6xl mx-auto h-0 pointer-events-none -z-1" aria-hidden="true">
            <PageIllustration />
        </div>

        <!-- Page sections -->
        <HeroHome />
        <Stats />
        <Carousel />
        <Tabs />
        <Process />
        <PricingTables />
        <TestimonialsBlocks />
        <FeaturesBlocks />
        <Cta />

    </main>

    <!-- Site footer -->
    <Footer />

</template>

