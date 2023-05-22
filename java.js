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
          x.style.display = "flex";
        } else {
          x.style.display = "none";
        }
      }
      //section-title
      ScrollReveal().reveal('.section-title', {
        reset: true,
        duration: 1500,
        delay: 500,
        origin: 'left',
        distance: '50px',
      });
      //passagier keizen
      const minusButton = document.getElementById('minus2');
      const plusButton = document.getElementById('plus2');
      const inputField = document.getElementById('input2');
      
      minusButton.addEventListener('click', event => {
        const currentValue = Number(inputField.value) || 0;
        inputField.value = currentValue - 1;
        event.preventDefault();
        
      });
      
      plusButton.addEventListener('click', event => {
        const currentValue = Number(inputField.value) || 0;
        inputField.value = currentValue + 1;
        event.preventDefault();
      });
      const minusButton1 = document.getElementById('minus3');
      const plusButton1 = document.getElementById('plus3');
      const inputField1 = document.getElementById('input3');

      minusButton1.addEventListener('click', event => {
        const currentValue = Number(inputField1.value) || 0;
        inputField1.value = currentValue - 1;
        event.preventDefault();
        
      }
      );
      
      
  