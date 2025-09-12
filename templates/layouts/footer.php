
    </main>
    <footer>
        <p>&copy; 2025 QTTB</p>
    </footer>
    <script>
        const hamburger = document.getElementById('hamburger-menu');
        const mobileNav = document.getElementById('mobile-nav');
        const closeBtn = document.getElementById('close-btn');

        hamburger.addEventListener('click', () => {
            mobileNav.classList.toggle('open');
        });

        closeBtn.addEventListener('click', () => {
            mobileNav.classList.remove('open');
        });
    </script>
    <script>
        function toggleMobileDropdown() {
            var dropdown = document.querySelector('.mobile-dropdown');
            dropdown.classList.toggle('open');
        }
    </script>
</body>
</html>