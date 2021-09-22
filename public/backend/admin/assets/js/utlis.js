const toast = (id, message, msgtype = 'success', options = {}) => {
    const toastEl = document.querySelector(id)
    const body = document.querySelector('.toast-body')
    const type = document.querySelector('#type')
    const status = document.querySelector('.status')
    const toast = new bootstrap.Toast(toastEl, options)
    body.innerHTML = message;
    type.innerHTML = msgtype[0].toUpperCase() + msgtype.slice(1)
    
    status.classList.contains('text-primary') && status.classList.remove('text-primary');
    status.classList.contains('text-danger') && status.classList.remove('text-danger');
    status.classList.contains('text-warning') && status.classList.remove('text-warning');
    
    if(msgtype == 'success'){
        status.classList.add('text-primary')
    }else if(msgtype == 'danger'){
        status.classList.add('text-danger')
    }else{
        status.classList.add('text-warning')
    }
    toast.show()
}


const copyToClipboard = (button, copyfrom, fn) => {
    console.log({button, copyfrom});
    document.getElementById(button).addEventListener('click', function(e) {
        e.preventDefault()
        var range = document.createRange();
        range.selectNode(document.getElementById(copyfrom));
        window.getSelection().removeAllRanges(); // clear current selection
        window.getSelection().addRange(range); // to select text
        document.execCommand("copy");
        fn()
    })
}