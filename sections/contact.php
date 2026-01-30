<section id="contact" class="relative py-24 sm:py-32 border-t border-gray-200 bg-gray-50 overflow-hidden">

  <!-- Formes décoratives -->
  <div class="absolute top-10 left-6 sm:left-10 w-28 sm:w-36 h-28 sm:h-36 bg-violet-200/25 rounded-lg rotate-12"></div>
  <div class="absolute top-1/4 right-6 sm:right-10 w-20 sm:w-24 h-20 sm:h-24 bg-violet-300/20 rounded-full rotate-45"></div>
  <div class="absolute bottom-20 right-6 sm:right-10 w-36 sm:w-48 h-36 sm:h-48 bg-violet-300/20 rounded-full rotate-45"></div>
  <div class="absolute bottom-6 left-10 sm:left-20 w-24 sm:w-32 h-24 sm:h-32 bg-violet-200/20 rounded-lg rotate-30"></div>

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
  <div class="max-w-4xl mx-auto px-4 sm:px-8 lg:px-24 text-center relative z-10">

    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold font-titles mb-5 sm:mb-6 text-gray-900 uppercase">
      Me <span class="text-violet-500">contacter</span>
    </h2>

    <p class="font-text text-gray-700 mb-8 sm:mb-12 max-w-2xl mx-auto leading-relaxed text-sm sm:text-base">
      Une question ou une opportunité ?<br>
      N’hésitez pas à me laisser un message, je répondrai dès que possible.
    </p>

    <div class="bg-white shadow-lg rounded-2xl p-6 sm:p-8 md:p-12">

      <!-- Formulaire -->
      <form id="contactForm" class="space-y-5 sm:space-y-6 text-left">

        <div>
          <label class="block mb-1 text-xs sm:text-sm font-special text-gray-600 uppercase">
            Nom
          </label>

          <input type="text" name="name" required placeholder="Nom complet"
            class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg font-text text-sm sm:text-base
                   focus:outline-none focus:ring-2 focus:ring-violet-400">
        </div>

        <div>
          <label class="block mb-1 text-xs sm:text-sm font-special text-gray-600 uppercase">
            Email
          </label>

          <input type="email" name="email" required placeholder="Email"
            class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg font-text text-sm sm:text-base
                   focus:outline-none focus:ring-2 focus:ring-violet-400">
        </div>

        <div>
          <label class="block mb-1 text-xs sm:text-sm font-special text-gray-600 uppercase">
            Message
          </label>

          <textarea name="message" rows="5" required placeholder="Message..."
            class="w-full px-4 py-2 sm:py-3 border border-gray-300 rounded-lg font-text text-sm sm:text-base
                   focus:outline-none focus:ring-2 focus:ring-violet-400 resize-none"></textarea>
        </div>

        <button type="submit"
          class="w-full bg-violet-500 text-white py-2 sm:py-3 rounded-lg font-special uppercase tracking-wide text-sm sm:text-base
                 hover:bg-violet-600 transition">
          Envoyer le message
        </button>

      </form>

      <!-- Message retour -->
      <p id="formMessage"
        class="mt-5 sm:mt-8 text-sm font-text opacity-0 transform translate-y-4 transition-all duration-500 text-center"></p>

      <!-- Mail direct -->
      <p class="mt-5 sm:mt-6 text-gray-600 font-text text-xs sm:text-sm">
        Ou directement par mail :
        <a href="mailto:theo.laroche42300@gmail.com"
          class="text-violet-500 hover:underline font-special">
          theo.laroche42300@gmail.com
        </a>
      </p>

    </div>
  </div>

  <!-- JS -->
  <script>
    const form = document.getElementById('contactForm');
    const msg = document.getElementById('formMessage');

    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      const formData = new FormData(form);

      const response = await fetch('includes/sendmail.php', {
        method: 'POST',
        body: formData
      });

      const result = await response.text();

      msg.className =
        'mt-5 sm:mt-8 text-sm font-text opacity-0 transform translate-y-4 transition-all duration-500 text-center';

      let text, color;

      if (result === 'success') {
        text = 'Votre message a bien été envoyé !';
        color = 'text-green-500';
        form.reset();
      } else {
        text = 'Une erreur est survenue, veuillez réessayer.';
        color = 'text-red-500';
      }

      msg.textContent = text;
      msg.classList.add(color);

      setTimeout(() => {
        msg.style.opacity = 1;
        msg.style.transform = 'translateY(0)';
      }, 50);

      setTimeout(() => {
        msg.style.opacity = 0;
        msg.style.transform = 'translateY(4px)';
      }, 5000);
    });
  </script>
</section>