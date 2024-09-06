<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spliting Numbers in 4</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="box">
        <form>
            <span class="text-center">Authentication</span>
            <div class="input-container">
                <input type="text" id="ActivationInput" maxlength="19" placeholder="XXXX-XXXX-XXXX-XXXX">
                <label>Licence Code</label>
            </div>
            <button type="button" class="btn">Activation</button>
        </form>
    </div>
</body>

<script>
    const input = document.getElementById('ActivationInput');
    input.addEventListener('input', function() {
        let value = this.value.replace(/-/g, '');
        value = value.match(/.{1,4}/g);
        if (value) {
            this.value = value.join('-');
        }
    })
</script>

</html>