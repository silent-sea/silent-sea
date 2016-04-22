<div class="container">
    <div class="row footer">
        <div class="left">Copyright &copy; Frog and Veil {{ $year }}</div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#owl").owlCarousel({
            navigation : false,
            slideSpeed : 200,
            paginationSpeed : 400,
            singleItem:true,
            autoPlay: true,
            pagination: false
        });
    });
</script>