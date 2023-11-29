const modifierInput = document.querySelectorAll('#modifierInput');

modifierInput.forEach((element) => {
    element.addEventListener('click', (event) => {
        event.preventDefault();
        const formulaireModifie = document.querySelectorAll('.formulaireModifie')
        formulaireModifie.forEach((element) => {
            
            element.style.display = "block";
        })
    
        const formulaire = document.querySelectorAll('.formulaire')
        formulaire.forEach((element) => {
    
            element.style.display = "none"
        })
        
    })
})

