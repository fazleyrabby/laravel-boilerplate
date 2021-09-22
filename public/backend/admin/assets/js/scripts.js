(function(){
    // document.getElementById('sidebar').innerHTML = nav;
    const navbtn = document.getElementById('navbar-toggler');
    const sidebar = document.getElementById('sidebar');
    const mainwrapper = document.getElementById('main-wrapper');
    const footer = document.querySelector('footer');
    
    navbtn.addEventListener('click', () => {
        trigger()
    })
    
    window.onload = () => {
        if(screen.width < 800 || window.innerWidth < 800){
            trigger()
        }
    }
    
    
    function trigger() {
        sidebar.classList.toggle('active');
        mainwrapper.classList.toggle('active');
        footer.classList.toggle('active');
    }
    
})();
