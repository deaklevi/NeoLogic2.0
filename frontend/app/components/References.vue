<template>
  <section id="references" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
      
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
        <div>
          <h2 class="text-blue-600 font-semibold uppercase tracking-wide text-sm">Referenciák</h2>
          <p class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-2">Legutóbbi projektek</p>
        </div>
        <button class="text-blue-600 font-medium hover:underline flex items-center gap-1">
          Összes projekt megtekintése 
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <div class="group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500">
          <div class="relative overflow-hidden h-52">
            <img 
              src="/MolnArt.jpg" 
              alt="E-commerce projekt" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-white text-sm font-medium">Időpont foglalás</span>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">MolnArt</h3>
            <p class="text-slate-600 text-sm mb-6 line-clamp-2">
              Egyedi fodrász szalon weboldala komplex szűrőrendszerrel és integrált fizetési megoldásokkal, időpontfoglalással.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="px-3 py-1 bg-green-100 text-slate-600 text-xs font-semibold rounded-full">Nuxt 3</span>
              <span class="px-3 py-1 bg-blue-100 text-slate-600 text-xs font-semibold rounded-full">Tailwind</span>
            </div>
          </div>
        </div>

        <div class="group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500">
          <div class="relative overflow-hidden h-52">
            <img 
              src="/PalastiEsTarsaKft.jpg" 
              alt="Dashboard projekt" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-white text-sm font-medium">Dashboard</span>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">Palásti és Társa kft.</h3>
            <p class="text-slate-600 text-sm mb-6 line-clamp-2">
              Az oldalon található elemek szerkesztése és valós idejű frissítése dashboardal.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="px-3 py-1 bg-green-100 text-slate-600 text-xs font-semibold rounded-full">Vue.js</span>
              <span class="px-3 py-1 bg-red-100 text-slate-600 text-xs font-semibold rounded-full">Laravel</span>
            </div>
          </div>
        </div>

        <div class="group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500">
          <div class="relative overflow-hidden h-52">
            <img 
              src="/Gardener.jpg" 
              alt="SaaS landing" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-white text-sm font-medium">Portfolio</span>
            </div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">BotanicBrothers</h3>
            <p class="text-slate-600 text-sm mb-6 line-clamp-2">
              Egy klasszikus portfolio modern és elegáns felülettel, amely tökéletesen bemutatja a szolgáltatásokat és referenciákat, valamint integrált blog szekcióval.
            </p>
            <div class="flex flex-wrap gap-2">
              <span class="px-3 py-1 bg-green-100 text-slate-600 text-xs font-semibold rounded-full">Nuxt</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>