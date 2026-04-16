<template>
  <section class="py-24 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
      
      <div class="text-center mb-12">
        <h2 class="text-blue-600 font-semibold uppercase tracking-wide text-sm">Kapcsolat</h2>
        <h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-2">Indítsa el a projektjét</h3>
        <p class="text-slate-600 mt-4">Készen áll vállalkozása átalakítására? Kérjen ingyenes konzultációt!</p>
      </div>

      <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl shadow-slate-200/60 border border-slate-100">
        <form @submit.prevent="handleSubmit" class="space-y-8">
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label for="lastName" class="text-sm font-semibold text-slate-700 ml-1">Vezetéknév</label>
              <input 
                type="text" 
                id="lastName" 
                v-model="form.lastName"
                placeholder="Kovács"
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                required
              />
            </div>
            <div class="space-y-2">
              <label for="firstName" class="text-sm font-semibold text-slate-700 ml-1">Keresztnév</label>
              <input 
                type="text" 
                id="firstName" 
                v-model="form.firstName"
                placeholder="István"
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                required
              />
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label for="email" class="text-sm font-semibold text-slate-700 ml-1">E-mail cím</label>
              <input 
                type="email" 
                id="email" 
                v-model="form.email"
                placeholder="pelda@ceg.hu"
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
                required
              />
            </div>
            <div class="space-y-2">
              <label for="company" class="text-sm font-semibold text-slate-700 ml-1">Cégnév (opcionális)</label>
              <input 
                type="text" 
                id="company" 
                v-model="form.company"
                placeholder="Pelda Kft."
                class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all"
              />
            </div>
          </div>

          <div class="space-y-2">
            <label for="message" class="text-sm font-semibold text-slate-700 ml-1">Projekt leírása</label>
            <textarea 
              id="message" 
              v-model="form.message"
              rows="5"
              placeholder="Miben segíthetünk? Kérjük, írja le röviden a projekt célját és elvárásait..."
              class="w-full px-5 py-4 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all resize-none"
              required
            ></textarea>
          </div>

          <div class="flex justify-center pt-4">
            <AppButton 
              type="submit"
              text="Projekt kérelem küldése"            
            >
            </AppButton>
          </div>

        </form>
      </div>
      
    </div>
  </section>
</template>

<script setup>
import { reactive } from 'vue'

const form = reactive({
  firstName: '',
  lastName: '',
  email: '',
  company: '',
  message: ''
})

const handleSubmit = () => {
  console.log('Küldendő adatok:', form)
  alert('Köszönjük! Az üzenetet megkaptuk, hamarosan jelentkezünk.')
  
  // Form ürítése küldés után
  form.firstName = ''
  form.lastName = ''
  form.email = ''
  form.company = ''
  form.message = ''
}
</script>