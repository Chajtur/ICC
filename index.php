<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/55b2ee1815.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/tailwind.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<html lang="en" class="h-full">
<?php include 'views/index.php'; ?>

</html>
<script>
    let touchstartX = 0
    let touchendX = 0

    function checkDirection() {
        if (touchendX < touchstartX) { // Detecting a swipe left
            if ($(window).width() <= 768) {
                $('sidebar').animate({
                    width: 'hide' // Hiding the sidebar
                }, 500);
            }
        }
        if (touchendX > touchstartX) { // Detecting a swipe right
            $('sidebar').animate({
                width: 'show' // Showing the sidebar
            }, 500);
        }
    }

    document.addEventListener('touchstart', e => {
        touchstartX = e.changedTouches[0].screenX
    })

    document.addEventListener('touchend', e => {
        touchendX = e.changedTouches[0].screenX
        checkDirection()
    });
</script>