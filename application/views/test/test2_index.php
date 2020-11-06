<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
function fetchdata(){
    $.ajax({
            url: '<?= base_url("controller_test/post") ?>',
            type: 'post',
            dataType: "json",
            data: {counter : 3},
            headers: {"X-RANDOM": "igrijd9p"},
            success: function(response)
            {
                // Perform operation on the return value
                alert(response);
                console.log(response);
            }
            });
}
$(document).ready(function(){
 setInterval(fetchdata,5000);
});
</script>
</body>
</html>