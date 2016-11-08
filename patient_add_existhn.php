
<script>
    if (confirm("HN นี้มีอยู่แล้วในฐานข้อมูล ต้องการจะแก้ไขหรือไม่ ") == true) {
        var x = <?php echo(json_encode($hn)); ?>;
        window.location = '../patient_edit.php?hn='+x;
    } else {
        window.location = '../patient_add.php';
    }
</script>
