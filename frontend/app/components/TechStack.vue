<template>
  <section class="py-16 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 md:px-6 mb-10 text-center">
      <h2 class="text-blue-600 font-semibold uppercase tracking-wide text-sm">Technológiák</h2>
      <p class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-2">Ezekkel a technológiákkal dolgozunk</p>
    </div>

    <div class="max-w-7xl mx-auto px-4 md:px-6">
      <div class="relative flex items-center overflow-hidden py-12">
        
        <div class="flex space-x-16 animate-marquee whitespace-nowrap items-center shrink-0">
          <div v-for="(tech, index) in techStack" :key="`orig-${index}`" 
               class="flex items-center gap-3 group">
            <img 
              v-if="tech.logo"
              :src="tech.logo" 
              :alt="tech.name" 
              class="h-10 md:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-110" 
              @error="tech.logo = null" 
            />
            <span class="text-lg font-bold text-slate-700">{{ tech.name }}</span>
          </div>
        </div>

        <div class="flex space-x-16 animate-marquee whitespace-nowrap items-center shrink-0 ml-16" aria-hidden="true">
          <div v-for="(tech, index) in techStack" :key="`dup-${index}`" 
               class="flex items-center gap-3 group">
            <img 
              v-if="tech.logo"
              :src="tech.logo" 
              :alt="tech.name" 
              class="h-10 md:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-110"
              @error="tech.logo = null"
            />
            <span class="text-lg font-bold text-slate-700">{{ tech.name }}</span>
          </div>
        </div>
        
        <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-white to-transparent z-10"></div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const techStack = ref([
  { name: 'Laravel', logo: 'https://cdn.worldvectorlogo.com/logos/laravel-2.svg' },
  { name: 'Vue.js', logo: '/vue-logo.png' },
  { name: 'Tailwind', logo: 'https://cdn.worldvectorlogo.com/logos/tailwindcss.svg' },
  { name: 'Next.js', logo: 'https://cdn.worldvectorlogo.com/logos/next-js.svg' },
  { name: 'Nuxt.js', logo: 'https://cdn.worldvectorlogo.com/logos/nuxt-2.svg' },
  { name: 'React', logo: '/react-logo.png' },
  { name: 'React Native', logo: 'https://cdn.worldvectorlogo.com/logos/react-native-1.svg' },
  { name: 'Pinia', logo: 'https://pinia.vuejs.org/logo.svg' },
  { name: 'Node.js', logo: 'https://cdn.worldvectorlogo.com/logos/nodejs-icon.svg' },
  { name: 'TypeScript', logo: 'https://cdn.worldvectorlogo.com/logos/typescript.svg' },
  { name: 'PostgreSQL', logo: '/postgresql-logo.png' },
  { name: 'Docker', logo: 'https://cdn.worldvectorlogo.com/logos/docker-4.svg' },
])
</script>

<style scoped>
@keyframes marquee {
  from { transform: translateX(0); }
  to { transform: translateX(-100%); }
}

.animate-marquee {
  display: flex;
  animation: marquee 40s linear infinite;
}

.shrink-0 {
  flex-shrink: 0;
}
</style>