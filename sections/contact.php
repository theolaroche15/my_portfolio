<section id="contact" class="relative py-32 border-t border-gray-200 bg-gray-50 overflow-hidden">

  <!-- Formes décoratives simples -->
  <div class="absolute top-10 left-10 w-36 h-36 bg-violet-200/25 rounded-lg rotate-12 hidden sm:block"></div>
  <div class="absolute top-1/4 right-10 w-24 h-24 bg-violet-300/20 rounded-full rotate-45 hidden md:block"></div>
  <div class="absolute bottom-16 right-10 w-48 h-48 bg-violet-300/20 rounded-full rotate-45 hidden lg:block"></div>
  <div class="absolute bottom-5 left-20 w-32 h-32 bg-violet-200/20 rounded-lg rotate-30 hidden sm:block"></div>

  <!-- Social bar gauche -->
  <div class="hidden md:flex flex-col gap-4 absolute left-6 top-1/2 -translate-y-1/2 z-20">
    <a href="https://github.com/TON_GITHUB" target="_blank"
      class="w-11 h-11 flex items-center justify-center bg-white border border-gray-300 rounded-lg
              text-gray-600 hover:text-violet-600 hover:border-violet-500 transition">
      <i data-feather="github"></i>
    </a>
    <a href="https://linkedin.com/in/TON_LINKEDIN" target="_blank"
      class="w-11 h-11 flex items-center justify-center bg-white border border-gray-300 rounded-lg
              text-gray-600 hover:text-violet-600 hover:border-violet-500 transition">
      <i data-feather="linkedin"></i>
    </a>
  </div>

  <!-- Contenu principal -->
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-24 text-center relative z-10">

    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold font-titles mb-6 text-gray-900 uppercase">
      Me <span class="text-violet-500">contacter</span>
    </h2>

    <p class="font-text text-gray-700 mb-8 sm:mb-12 max-w-xl mx-auto leading-relaxed">
      Une question ou une opportunité ?<br>
      N’hésitez pas à me laisser un message, je répondrai dès que possible.
    </p>

    <div class="bg-white shadow-lg rounded-2xl p-6 sm:p-8 md:p-12">

      <!-- Formulaire -->
      <form class="space-y-4 sm:space-y-6 text-left">

        <div>
          <label class="block mb-1 text-sm font-special text-gray-600 uppercase">
            Nom
          </label>
          <input type="text" placeholder="Nom complet"
            class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg font-text
                   focus:outline-none focus:ring-2 focus:ring-violet-400">
        </div>

        <div>
          <label class="block mb-1 text-sm font-special text-gray-600 uppercase">
            Email
          </label>
          <input type="email" placeholder="Email"
            class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg font-text
                   focus:outline-none focus:ring-2 focus:ring-violet-400">
        </div>

        <div>
          <label class="block mb-1 text-sm font-special text-gray-600 uppercase">
            Message
          </label>
          <textarea rows="5" placeholder="Message..."
            class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg font-text
                   focus:outline-none focus:ring-2 focus:ring-violet-400 resize-none"></textarea>
        </div>

        <button type="submit"
          class="w-full bg-violet-500 text-white py-2 sm:py-3 rounded-lg font-special uppercase tracking-wide
                 hover:bg-violet-600 transition">
          Envoyer le message
        </button>

      </form>

      <!-- Email direct -->
      <p class="mt-6 sm:mt-8 text-gray-600 font-text text-sm">
        Ou directement par mail :
        <a href="mailto:theo.laroche42300@gmail.com"
          class="text-violet-500 hover:underline font-special">
          theo.laroche42300@gmail.com
        </a>
      </p>

    </div>
  </div>
</section>