document.addEventListener("DOMContentLoaded", function() {
    console.log( "ready!" );

    let searchParams = new URLSearchParams(window.location.search)

    if(searchParams.has('msg')) {
        let msg = searchParams.get('msg');
        let errorAlert = document.getElementById('error-alert')
        let sucessAlert = document.getElementById('success-alert')

        if(msg !== 'success') {
            let errorMsg = document.getElementById('error-msg');
            errorMsg.innerHTML = msg
            errorAlert.style.zIndex = "999";
            sucessAlert.style.zIndex = "-1";
            let errorBtn = document.getElementById('error-img');
            errorBtn.onclick = function(){
                errorAlert.style.zIndex = "-1";
            }
        } else {
            sucessAlert.style.zIndex = "999";
            errorAlert.style.zIndex = "-1";
            let successBtn = document.getElementById('success-img');
            successBtn.onclick = function(){
                sucessAlert.style.zIndex = "-1";
            }
        }
    }
});