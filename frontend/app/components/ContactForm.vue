<template>
  <section id="contact" class="py-24 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
      
      <div class="text-center mb-12">
        <h2 class="text-blue-600 font-semibold uppercase tracking-wide text-sm">Kapcsolat</h2>
        <h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-2">Indítsa el a projektjét</h3>
        <p class="text-slate-600 mt-4">Készen áll vállalkozása átalakítására? Kérjen ingyenes konzultációt!</p>
      </div>

      <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl shadow-slate-200/60 border border-slate-100 min-h-[400px] flex flex-col justify-center">
        
        <div v-if="sent" class="text-center space-y-6 animate-in fade-in zoom-in duration-500">
          <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <h4 class="text-2xl font-bold text-slate-900">Üzenet sikeresen elküldve!</h4>
          <p class="text-slate-600 max-w-sm mx-auto">
            Köszönjük megkeresését, <span class="font-semibold text-slate-900">{{ form.firstName }}</span>! 
            Szakértőink már kaptak az értesítést, és 24 órán belül felvesszük Önnel a kapcsolatot.
          </p>
          <button @click="sent = false" class="text-blue-600 font-semibold hover:underline pt-4">
            Új üzenet küldése
          </button>
        </div>

        <form v-else @submit.prevent="handleSubmit" class="space-y-8">
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label for="lastName" class="text-sm font-semibold text-slate-700 ml-1">Vezetéknév</label>
              <input 
                type="text" id="lastName" v-model="form.lastName" placeholder="Kovács"
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                required :disabled="loading"
              />
            </div>
            <div class="space-y-2">
              <label for="firstName" class="text-sm font-semibold text-slate-700 ml-1">Keresztnév</label>
              <input 
                type="text" id="firstName" v-model="form.firstName" placeholder="István"
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                required :disabled="loading"
              />
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label for="email" class="text-sm font-semibold text-slate-700 ml-1">E-mail cím</label>
              <input 
                type="email" id="email" v-model="form.email" placeholder="pelda@ceg.hu"
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                required :disabled="loading"
              />
            </div>
            <div class="space-y-2">
              <label for="company" class="text-sm font-semibold text-slate-700 ml-1">Cégnév (opcionális)</label>
              <input 
                type="text" id="company" v-model="form.company" placeholder="Pelda Kft."
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                :disabled="loading"
              />
            </div>
          </div>

          <div class="space-y-2">
            <label for="message" class="text-sm font-semibold text-slate-700 ml-1">Projekt leírása</label>
            <textarea 
              id="message" v-model="form.message" rows="5"
              placeholder="Miben segíthetünk? Kérjük, írja le röviden a projekt célját és elvárásait..."
              class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all resize-none"
              required :disabled="loading"
            ></textarea>
          </div>

          <div class="flex flex-col items-center gap-4 pt-4">
            <AppButton 
              type="submit"
              :text="loading ? 'Küldés folyamatban...' : 'Projekt kérelem küldése'"
              :disabled="loading"
              class="w-full md:w-auto"
            />
            <p v-if="error" class="text-red-500 text-sm font-medium animate-bounce">
              {{ error }}
            </p>
          </div>

        </form>
      </div>
      
    </div>
  </section>
</template>

<script setup>
import { reactive, ref } from 'vue'

const loading = ref(false)
const sent = ref(false)
const error = ref(null)

const form = reactive({
  firstName: '',
  lastName: '',
  email: '',
  company: '',
  message: ''
})

const handleSubmit = async () => {
  loading.value = true
  error.value = null

  try {
    const response = await $fetch('https://neologic.saavatar.xyz/api/contact-send', {
      method: 'POST',
      body: form
    })
    
    // Siker állapotba váltunk
    sent.value = true
    
    // Opcionális: 5 másodperc után ürítjük csak a formot, 
    // hogy a "Köszönjük [Név]" üzenet ki tudja olvasni a firstName-t
    setTimeout(() => {
        Object.assign(form, { firstName: '', lastName: '', email: '', company: '', message: '' })
    }, 500)

  } catch (err) {
    console.error('Küldési hiba:', err)
    error.value = 'Hiba történt a küldés során. Kérjük, próbálja újra!'
  } finally {
    loading.value = false
  }
}
</script>