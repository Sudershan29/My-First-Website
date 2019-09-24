const navSlide = () => {
  const line = document.querySelector('.nav-lines');
  const nav = document.querySelector('.nav-links_sudu');
  const navLinks = document.querySelectorAll('.nav-links_sudu li');

  line.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        line.classList.toggle('toggle');
        navLinks.forEach((link,index) => {
            console.log(index);
          if(link.style.animation)
          {
            link.style.animation= ``;
          }
          else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${ index/7 + 0.5}s`;
          }
      });

      });

}

navSlide();
