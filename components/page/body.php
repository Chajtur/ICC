<main class="text-blue-900 flex flex-row w-screen">
    <?php include 'components/page/sidebar.php'; ?>
    <?php include 'components/page/content.php'; ?>
</main>

<script>
    $(document).ready(function() {
        $('#content').load(`/views/hr.php`);
        if ($(window).width() <= 768) {
            $('sidebar').animate({
                width: 'hide' // Hiding the sidebar
            }, 500);
        }
        $('.moduleLink').click(function() {
            let group = $(this).data('group');
            $.ajax({
                url: `/views/${group}.php`,
                success: function(data) {
                    $('#content').html(data);
                },
                error: function() {
                    $('#content').load(`/oops.php`);
                }
            });
            if ($(window).width() <= 768) {
                $('sidebar').animate({
                    width: 'hide' // Hiding the sidebar
                }, 500);
            }
        });
    });
</script>