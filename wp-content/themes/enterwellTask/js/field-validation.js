document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById('form');
    console.log(form);
    form.addEventListener('submit', test);
    function test(e){
        console.log(form);
        var error = false;
        var inputs =  document.getElementById("form").querySelectorAll(".validator");

        inputs.forEach((element)=> {
            if(!element.value){
                error = true;
                if(element.parentElement.classList.contains('regular-inputs')) {
                    let small = document.getElementById('small-' + element.name);
                    small.hidden = false;
                    element.parentElement.classList.add('regular-inputs-invalid')
                    element.parentElement.classList.remove('regular-inputs')
                } else {
                    let legend = document.getElementsByClassName('placeholder-' + element.name)[0];
                    let small = document.getElementById('small-' + element.name);
                    small.hidden = false;
                    if(legend)
                    {
                        legend.classList.add('placeholder-invalid')
                        element.parentElement.classList.add('legend-inputs-invalid')
                        element.parentElement.classList.remove('legend-inputs')
                    }
                }
            }else{
                if(element.parentElement.classList.contains('regular-inputs-invalid')) {
                    let small = document.getElementById('small-' + element.name);
                    small.hidden = true;
                    element.parentElement.classList.remove('regular-inputs-invalid')
                    element.parentElement.classList.add('regular-inputs')
                } else {
                    let small = document.getElementById('small-' + element.name);
                    small.hidden = true;
                    let legend = document.getElementsByClassName('placeholder-' + element.name)[0];
                    if(legend)
                    {
                        legend.classList.remove('placeholder-invalid')
                        element.parentElement.classList.add('legend-inputs')
                        element.parentElement.classList.remove('legend-inputs-invalid')
                    }
                }
            }
        });
        if(error){
            e.preventDefault();
        }
    }
});