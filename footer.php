<footer>
    <p>Project and Content Experts</p>
</footer>
<?php wp_footer()?>
<script>
    const services_link = document.getElementById('menu-item-20')
    const services = document.getElementById('services')
    const closeServices = document.getElementById('closeBtn')

    services_link.addEventListener('mouseover',()=>{
        services.style.opacity = "1"
    })

    closeServices.addEventListener('click',()=>{
        services.style.opacity = "0"
    })
</script>
</body>
</html>