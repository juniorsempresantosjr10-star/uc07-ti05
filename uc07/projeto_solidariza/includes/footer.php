<footer class="rodape-principal">
    <div class="rodape-conteudo">
        <p>&copy; <?php echo date("Y"); ?> Projeto Solidariza. Todos os direitos reservados.</p>
        <p><small>Desenvolvido para fins educacionais- Turma TII05</small></p>
    </div>

</footer>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/validacao.js"></script>
    <script>
       const menutoggle = document.querySelector('.menu-toggle');
       const menuLinks = document.querySelector('.menu-links');

       menutoggle.addEventListener('click', () => {
            menuLinks.classList.toggle('activo');
            menutoggle.classList.toggle('activo');
        });
    </script>

