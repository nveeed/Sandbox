<script type="text/javascript" src='../assets/jquery.js'></script>
<script>
    console.log("working!");
    $.post("send-mail.php",[], function (res) {
        console.log(res);
    } );
</script>