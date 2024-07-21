<main class="text-blue-900 flex flex-row h-full w-screen">
    <?php include 'components/page/sidebar.php'; ?>
    <?php include 'components/page/content.php'; ?>
</main>

<script>
    $(document).ready(function() {
        $('.moduleLink').click(function() {
            let group = $(this).data('group');
            $('#content').load(`/views/${group}.php`);
            if ($(window).width() <= 768) {
                $('sidebar').animate({
                    width: 'hide' // Hiding the sidebar
                }, 500);
            }
        });
    });
</script>