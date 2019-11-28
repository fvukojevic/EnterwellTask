document.addEventListener("DOMContentLoaded", function() {
    console.log( "ready!" );

    let searchParams = new URLSearchParams(window.location.search)

    if(searchParams.has('msg')) {
        let msg = searchParams.get('msg');
        if(msg !== 'success') {
            let errorMsg = document.getElementById('error-msg');
            errorMsg.innerHTML = msg
        }
    }
});