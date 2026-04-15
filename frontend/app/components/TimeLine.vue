<template>
  <section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
      
      <div class="text-center mb-16">
        <h2 class="text-blue-600 font-semibold uppercase tracking-wide text-sm">Folyamat</h2>
        <p class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-2">Hogyan dolgozunk?</p>
      </div>

      <div class="max-w-5xl mx-auto relative">
        <div class="absolute inset-0 ml-5 md:ml-0 md:left-1/2 md:-translate-x-px h-full w-0.5 bg-gradient-to-b from-transparent via-blue-200 to-transparent"></div>
        
        <div class="space-y-12">
          <div v-for="(step, index) in steps" :key="index" 
               class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
            
            <div class="flex items-center justify-center w-12 h-12 rounded-full border-2 border-blue-100 bg-white text-blue-600 font-black z-10 shrink-0 
                        md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 
                        transition-all duration-500 shadow-sm
                        group-hover:border-blue-600 group-hover:bg-blue-600 group-hover:text-white group-hover:shadow-[0_0_15px_rgba(37,99,235,0.4)]">
                {{ step.id }}
            </div>

            <div class="w-[calc(100%-4rem)] md:w-[42%] p-8 rounded-2xl border border-slate-200 bg-white 
                        transition-all duration-300 ease-out cursor-default
                        hover:border-blue-300 hover:shadow-xl hover:-translate-y-1">
              
              <div class="flex items-center justify-between mb-3">
                <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors duration-300">
                    {{ step.title }}
                </h3>
              </div>
              
              <p class="text-slate-600 leading-relaxed text-sm md:text-base group-hover:text-slate-700 transition-colors">
                {{ step.description }}
              </p>
              
              <div class="mt-4 flex justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
const steps = [
  { id: '01', title: 'Konzultáció & Tervezés', description: 'Minden sikeres projekt egy mély merüléssel kezdődik. Nem csak funkciókat listázunk, hanem megértjük az üzleti céljaidat.' },
  { id: '02', title: 'UI/UX Design', description: 'Az esztétika nálunk nem öncélú: a felhasználói élményt (UX) és a modern arculatot (UI) ötvözzük.' },
  { id: '03', title: 'Agilis Fejlesztés', description: 'A legmodernebb stack-et használjuk, hogy a rendszer gyors, biztonságos és skálázható legyen.' },
  { id: '04', title: 'QA & Tesztelés', description: 'Az elegancia számunkra a hibátlan működést is jelenti. Automatizált tesztekkel garantáljuk a minőséget.' },
  { id: '05', title: 'Átadás & Támogatás', description: 'Gondoskodunk róla, hogy az indulás zökkenőmentes legyen, és hosszú távon is számíthasson ránk.' }
]
</script>