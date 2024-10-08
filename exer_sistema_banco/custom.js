const cadForm = document.getElementById('cadClienteForm');

cadForm.addEventListener("submit", async (e) =>{
    e.preventDefault();

    const dadosForm = new FormData(cadForm);
    dadosForm.append("add", 1);

    const dados= await fetch('cadCliente.php',{
        method:"POST",
        body: dadosForm,
    });

    const cadReturn = await dados.json();
    console.log(cadReturn);    
});


