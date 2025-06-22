
const testimonials = [
  '"The custom dress I ordered was absolutely perfect! Thank you, Khuti!" – Simi',
  '"I love how personalized the clothing is. Khuti’s work is truly one of a kind!" – Fatima',
  '"The saree I bought is beautiful and comfortable. Eagerly waiting for more!" – Ahsan',
  '"Khuti made my wedding dress, and I couldn’t be happier with how it turned out!" – Rupa'
];

let current = 0;
const box = document.getElementById('testimonialBox');

function showTestimonial() {
  if (box) {
    box.textContent = testimonials[current];
    current = (current + 1) % testimonials.length;
  }
}

showTestimonial();
setInterval(showTestimonial, 4000);
