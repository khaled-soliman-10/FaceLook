let eyes = document.querySelectorAll(".input i");
let inputs = document.querySelectorAll(".input input[type='password']");

eyes.forEach(eye =>{
    eye.addEventListener("click",()=>{
        inputs.forEach(input => {
            if (input.type == 'password') {
                input.type = 'text';
                eye.classList.replace("fa-eye","fa-eye-slash")
            }else {
                input.type = 'password';
                eye.classList.replace("fa-eye-slash","fa-eye")
            }
        });
    })
});
