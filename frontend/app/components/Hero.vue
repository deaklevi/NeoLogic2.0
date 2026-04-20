<script setup>
import { onMounted } from 'vue';

onMounted(() => {
  const observerOptions = {
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('reveal-visible');
      }
    });
  }, observerOptions);

  document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
});
</script>

<template>
  <section class="w-full h-screen flex items-center justify-center overflow-hidden bg-white pt-20">
    <div class="max-w-7xl mx-auto px-4 md:px-6 w-full">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        
        <div class="flex flex-col space-y-6 text-center md:text-left">
          <div class="space-y-2">
            <h2 class="reveal reveal-down text-blue-600 font-semibold tracking-wide uppercase text-sm">
              Innovatív Megoldások
            </h2>
            <h1 class="reveal reveal-left delay-200 text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-tight">
              Digitális jövőt építünk a <span class="text-blue-600">NeoLogic</span>-kal
            </h1>
          </div>
          
          <p class="reveal reveal-left delay-400 text-lg text-slate-600 max-w-[600px] mx-auto md:mx-0">
            Segítünk vállalkozásodnak a digitális átállásban. Modern webes alkalmazások, 
            automatizált folyamatok és skálázható megoldások – minden, ami a növekedéshez kell.
          </p>

          <div class="reveal reveal-up delay-600 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
            <AppButton text="Ingyenes konzultáció" class="px-8 py-4 text-lg shadow-lg hover:scale-105 transition-transform" />
            
            <a href="#contact">
              <button class="w-full sm:w-auto px-8 py-4 text-lg font-medium text-slate-700 hover:text-blue-600 hover:border-blue-600 transition-all duration-300 border border-slate-300 rounded-md hover:bg-blue-50">
                Írjon nekünk
              </button>
            </a>
          </div>
        </div>

        <div class="relative flex justify-center items-center">
          <div class="reveal reveal-zoom delay-700 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-blue-100 rounded-full blur-3xl -z-10 opacity-60"></div>
          
          <div class="relative group reveal reveal-right delay-500">
            <div class="overflow-hidden rounded-2xl shadow-2xl transition-all duration-500 group-hover:rotate-1 group-hover:scale-[1.02]">
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

<style scoped>
/* Alapállapot: rejtett és eltolt */
.reveal {
  opacity: 0;
  transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
  filter: blur(5px);
}

.reveal-left { transform: translateX(-30px); }
.reveal-right { transform: translateX(30px); }
.reveal-up { transform: translateY(30px); }
.reveal-down { transform: translateY(-30px); }
.reveal-zoom { transform: scale(0.8); }

/* Aktív állapot: látható és a helyén van */
.reveal-visible {
  opacity: 1;
  transform: translate(0) scale(1);
  filter: blur(0);
}

/* Késleltetések (Delays) */
.delay-200 { transition-delay: 200ms; }
.delay-400 { transition-delay: 400ms; }
.delay-500 { transition-delay: 500ms; }
.delay-600 { transition-delay: 600ms; }
.delay-700 { transition-delay: 700ms; }
</style>