<script type="text/javascript">
    $(document).ready(function() {
        $('#add-qualification').click(function(){
            var html = $("#qualification-copy").html();
            $('#qualifications').append(html);
        });

        $('#add-experience').click(function(){
            var html = $("#experience-copy").html();
            $('#experiences').append(html);
        });

        $('#add-skill').click(function(){
            var html = $("#skills-copy").html();
            $('#skills').append(html);
        });

        $('#add-l').click(function(){
            var html = $("#l-copy").html();
            $('#l').append(html);
        });

        $('#add-hobby').click(function(){
            var html = $("#hobby-copy").html();
            $('#hobbies').append(html);
        });


        $('#add-reference').click(function(){
            var html = $("#ref-copy").html();
            $('#references').append(html);
        });

        $("body").on("click",".remove-row",function(){
            $(this).parent().parent().remove();
        });
    });
</script>
