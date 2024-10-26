
document.querySelector('.header').addEventListener('click', (event) => {
    const target = event.target;
    
    const searchForm = document.querySelector('.search-form'); // Adjust the selector
    
    if (target.id === 'user-btn') {
        myDIV.classList.toggle('active');
        searchForm.classList.remove('active');
    } else if (target.id === 'search-btn') {
        searchForm.classList.toggle('active');
        profile.classList.remove('active');
    } else if (target.id === 'menu-btn') {
        navbar.classList.toggle('active');
    }
    });
    
    
    
    function myFunction() {
    
    
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
          x.style.display = "inline-block";
        } else {
          x.style.display = "none";
        }
      }
    
    
      
    
    // Add this code after the event delegation
    let profile = document.querySelector('.header .flex .profile-detail');
    let searchForm = document.querySelector('.header .flex .search-form');
    let navbar = document.querySelector('.navbar');
    
    
    const imgBox = document.querySelector('slider-container');
    const slides = document.getElementsByClassName('slideBox');
    var i = 0;
    
    function nextSlide(){
    slides[i].classList.remove('active');
    i = (i + 1)% slides.length;
    slides[i].classList.add('active');
    }
    
    function prevSlide(){
    slides[i].classList.remove('active');
    i = (i - 1 + slides.length) % slides.length;
    slides[i].classList.add('active');
    }
    
    
    /* testimonial */
    
    const btn = document.getElementsByClassName('btn1');
    const slide = document.getElementById('slide');
    
    btn[0].onclick = function () {
        slide.style.transform = 'translateX(0px)';
        for (var i=0; i <4; i++) {
    
            btn[i].classList.remove('active');
        }
        this.classList.add('active');
    }
    
    btn[1].onclick = function () {
        slide.style.transform = 'translateX(-800px)';
        for (var i=0; i <4; i++) {
    
            btn[i].classList.remove('active');
        }
        this.classList.add('active');
    }
    
    
    btn[2].onclick = function () {
        slide.style.transform = 'translateX(-1600px)';
        for (var i=0; i <4; i++) {
    
            btn[i].classList.remove('active');
        }
        this.classList.add('active');
    }
    
    
    btn[3].onclick = function () {
        slide.style.transform = 'translateX(-2400px)';
        for (var i=0; i <4; i++) {
    
            btn[i].classList.remove('active');
        }
        this.classList.add('active');
    }
    /* 
    let profile = document.querySelector('.header .flex .profile');
    
    document.querySelector("#user-btn").onclick = () =>{
        profile.classList.toggle('active');
    } */
    
    
    