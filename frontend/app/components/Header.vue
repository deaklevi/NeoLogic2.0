<script setup>
import { ref, watch } from 'vue'

const isOpen = ref(false)

// Menü nyitása/zárása
const toggleMenu = () => {
  isOpen.value = !isOpen.value
  
  // Megakadályozzuk a háttér görgetését, amikor nyitva van a menü
  if (isOpen.value) {
    document.body.classList.add('overflow-hidden')
  } else {
    document.body.classList.remove('overflow-hidden')
  }
}
</script>

<template>
    <header class="fixed top-0 left-0 w-full z-[100] bg-white/80 backdrop-blur-md shadow-sm">
        <nav class="max-w-7xl flex mx-auto items-center justify-between p-4">
            
            <h1 class="text-xl font-bold relative z-50">
                <span class="text-blue-600">Neo</span>Logic
            </h1>

            <ul class="hidden md:flex justify-between gap-4 font-medium text-slate-500">
                <li><a href="/" class="hover:text-blue-600 transition-colors">Szolgáltatások</a></li>
                <li><a href="/" class="hover:text-blue-600 transition-colors">Referenciák</a></li>
                <li><a href="/" class="hover:text-blue-600 transition-colors">Folyamat</a></li>
                <li><a href="/" class="hover:text-blue-600 transition-colors">Rólunk</a></li>
                <li><a href="/" class="hover:text-blue-600 transition-colors">Kapcsolat</a></li>
            </ul>
            <AppButton class="md:block hidden" text="Árajánlatkérés" />

            <button 
                @click="toggleMenu" 
                class="md:hidden relative z-50 flex flex-col justify-center items-center w-8 h-8 gap-1.5 focus:outline-none group"
            >
                <span 
                    class="block w-6 h-0.5 bg-slate-800 rounded-full transition-all duration-300 ease-in-out"
                    :class="isOpen ? 'translate-y-2 rotate-45' : ''"
                ></span>
                <span 
                    class="block w-6 h-0.5 bg-slate-800 rounded-full transition-all duration-300 ease-in-out"
                    :class="isOpen ? 'opacity-0' : ''"
                ></span>
                <span 
                    class="block w-6 h-0.5 bg-slate-800 rounded-full transition-all duration-300 ease-in-out"
                    :class="isOpen ? '-translate-y-2 -rotate-45' : ''"
                ></span>
            </button>
        </nav>

        <div 
            class="md:hidden fixed inset-0 w-full h-screen bg-slate-50 z-40 flex flex-col items-center justify-center transition-transform duration-500 ease-in-out"
            :class="isOpen ? 'translate-y-0' : '-translate-y-full'"
        >
            <ul class="flex flex-col items-center gap-8 text-2xl font-medium text-slate-800">
                <li><a href="/" @click="toggleMenu" class="hover:text-blue-600 transition-colors">Szolgáltatások</a></li>
                <li><a href="/" @click="toggleMenu" class="hover:text-blue-600 transition-colors">Referenciák</a></li>
                <li><a href="/" @click="toggleMenu" class="hover:text-blue-600 transition-colors">Folyamat</a></li>
                <li><a href="/" @click="toggleMenu" class="hover:text-blue-600 transition-colors">Rólunk</a></li>
                <li><a href="/" @click="toggleMenu" class="hover:text-blue-600 transition-colors">Kapcsolat</a></li>
            </ul>
            
            <div class="mt-12">
                <AppButton text="Árajánlatkérés" @click="toggleMenu" />
            </div>
        </div>
    </header>
</template>