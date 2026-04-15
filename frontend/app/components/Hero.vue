<template>
  <section class="w-full h-screen flex items-center justify-center overflow-hidden bg-white pt-20">
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 w-full">
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        
        <div class="flex flex-col space-y-6 text-center md:text-left">
          <div class="space-y-2">
            <h2 class="text-blue-600 font-semibold tracking-wide uppercase text-sm">
              Innovatív Megoldások
            </h2>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-tight">
              Digitális jövőt építünk a <span class="text-blue-600">NeoLogic</span>-kal
            </h1>
          </div>
          
          <p class="text-lg text-slate-600 max-w-[600px] mx-auto md:mx-0">
            Segítünk vállalkozásodnak a digitális átállásban. Modern webes alkalmazások, 
            automatizált folyamatok és skálázható megoldások – minden, ami a növekedéshez kell.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
            <AppButton text="Ingyenes konzultáció" class="px-8 py-4 text-lg" />
            
            <button class="px-8 py-4 text-lg font-medium text-slate-700 hover:text-blue-600 hover:border-blue-600 transition-colors duration-300 border border-slate-300 rounded-md">
              Írjon nekünk
            </button>
          </div>

          <!--
          <div class="pt-4 border-t border-slate-100 flex items-center justify-center md:justify-start gap-4 text-sm text-slate-500 font-medium">
            <div class="flex -space-x-2">
              <div class="w-8 h-8 rounded-full bg-slate-200 border-2 border-white"></div>
              <div class="w-8 h-8 rounded-full bg-slate-300 border-2 border-white"></div>
              <div class="w-8 h-8 rounded-full bg-slate-400 border-2 border-white"></div>
            </div>
            <span>+50 elégedett ügyfél</span>
          </div>
          -->
        </div>

        <div class="relative flex justify-center items-center">
          <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-blue-100 rounded-full blur-3xl -z-10 opacity-60"></div>
          
          <div class="relative group">
            <div class="overflow-hidden rounded-2xl shadow-2xl transition-all duration-500">
              <img 
                src="/landing_image.jpg" 
                alt="NeoLogic Landing Image"
                class="w-full h-auto object-cover max-w-[400px] lg:max-w-[500px]"
              />
            </div>
            </div>
        </div>

      </div>
    </div>
  </section>
</template>