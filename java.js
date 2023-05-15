window.addEventListener("load", () => {




const button = document.getElementById("button");
    
    const parent = document.getElementById("parent");
    
     const input = document.getElementById("input");
    
    
    
    
     button.addEventListener("click", () => {
    
     parent.classList.toggle("active");
    
     input.focus();
    
 })
    
    });
    ScrollReveal().reveal('.top-text1', {
        scale: 2,
        duration: 3000,
        mobile: false,
      });
      
      ScrollReveal().reveal('.top-text-bg', {
      
        scale: 2,
        duration: 3000,
        delay: 500,
        mobile: false,
      });


      //passagier
      function myFunction() {
        var x = document.getElementById("passagier-keizen");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }