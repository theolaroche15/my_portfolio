// Particules animées en arrière-plan #HOME

const canvas = document.getElementById('particles');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particlesArray = [];

class Particle {
  constructor() {
    this.x = Math.random() * canvas.width;
    this.y = Math.random() * canvas.height;
    this.size = Math.random() * 3 + 1;
    this.speedX = (Math.random() - 0.5) * 0.5;
    this.speedY = (Math.random() - 0.5) * 0.5;
  }
  update() {
    this.x += this.speedX;
    this.y += this.speedY;

    if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
    if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
  }
  draw() {
    ctx.fillStyle = 'rgba(155, 92, 229, 0.3)'; // violet léger
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    ctx.fill();
  }
}

function init() {
  particlesArray = [];
  for (let i = 0; i < 80; i++) {
    particlesArray.push(new Particle());
  }
}

function animate() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  particlesArray.forEach(p => {
    p.update();
    p.draw();
  });
  requestAnimationFrame(animate);
}

window.addEventListener('resize', () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  init();
});

init();
animate();

// Menu burger mobile #NAV

const burger = document.getElementById('burger');
const mobileMenu = document.getElementById('mobile-menu');

burger.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

// Envoi mail #CONTACT

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