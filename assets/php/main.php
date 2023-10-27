<?php if ($userInSession) : ?>
    <script type="text/javascript">
        $(() => {
            $('#navbar-brand').addClass('mt-4')
        })
    </script>
<?php else : ?>
    <script type="text/javascript">
        $(() => {
            $('#navbar-brand').removeClass('mt-4')
        })
    </script>
<?php endif; ?>