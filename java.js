window.addEventListener("load", () => {




const button = document.getElementById("button");
    
    const parent = document.getElementById("parent");
    
     const input = document.getElementById("input");
    
    
    
    
     button.addEventListener("click", () => {
    
     parent.classList.toggle("active");
    
     input.focus();
    
 })
    
    });