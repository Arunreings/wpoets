   const designSlider = new Swiper(".designSlider", {
       loop: true,
       autoplay: {
           delay: 1000,
           disableOnInteraction: false
       }
   });
   const devSlider = new Swiper(".devSlider", {
       loop: true,
       autoplay: {
           delay: 1000,
           disableOnInteraction: false
       },
   });
   const marketSlider = new Swiper(".marketSlider", {
       loop: true,
       autoplay: {
           delay: 1000,
           disableOnInteraction: false
       },
   });
   const tabs = document.querySelectorAll('.tab-btn');
   const element = document.getElementById("res");
   tabs.forEach(tab => {
       tab.addEventListener('click', function() {
           if (window.matchMedia("(max-width: 991px)").matches) {
               tab.parentNode.insertBefore(element, tab.nextSibling);
               element.classList.add('d-block');
           }
           let target = this.getAttribute('data-tab');
           tabs.forEach(btn => {
               btn.classList.remove('active');
               btn.querySelector('.icon-plus').classList.remove('d-none');
               btn.querySelector('.icon-minus').classList.add('d-none');
           });
           this.classList.add('active');
           this.querySelector('.icon-plus').classList.add('d-none');
           this.querySelector('.icon-minus').classList.remove('d-none');
           document.querySelectorAll('.tab-pane-custom').forEach(content => {
               content.classList.remove('active');
           });
           document.getElementById(target).classList.add('active');
           document.querySelectorAll('.img-box').forEach(img => {
               img.classList.remove('active');
           });
           document.getElementById('img-' + target).classList.add('active');
       });
   });
   window.addEventListener("resize", function() {
       location.reload();
   });