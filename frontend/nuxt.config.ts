// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: false },
  modules: ['@nuxtjs/tailwindcss'],
  app: {
    head: {
      title: 'NeoLogic | Webfejlesztés',
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/NeoLogic logo.ico' }
      ],
      meta: [
        { name: 'description', content: 'A NeoLogic valóra váltja céged digitális transzformációját. Kifinomult web fejlesztés, logikusan felépített design.' },
        { name: 'keywords', content: 'weboldal, NeoLogic, weboldal fejlesztés, weboldal készítés' },
        { name: 'author', content: 'NeoLogic Team' },
        // Open Graph
        { property: 'og:type', content: 'website' },
        { property: 'og:title', content: 'NeoLogic | Modern Szoftvermegoldások' },
        { property: 'og:description', content: 'Egyedi szoftverfejlesztés és modern webes megoldások. Nézd meg, miben segíthetünk!' },
        { property: 'og:image', content: 'https://neologic.hu/NeoLogic%20logo.ico' },
      ],
    }
  }
})