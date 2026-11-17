<footer class="rodape-principal">
    <div class="rodape-conteudo">
        <p>&copy; <?php echo date("Y"); ?> Projeto Solidariza. Todos os direitos reservados.</p>
        <p><small>Desenvolvido para fins educacionais- Turma TII05</small></p>
    </div>

</footer>

    <script src="assets/js/main.js"></script>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menuLinks = document.querySelector('.menu-links');

        menuToggle.addEventListener('click', () => {
            menuLinks.classList.toggle('active');
        });
    </script>

</body>
</html>