<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <style type="text/css">body { padding-top: 40px }</style>
    <title>Vue</title>
</head>
<body>
    <script src="/assets/js/vue.js"></script>

    <div id="root" class="container">

        <modal v-if="showModal" @close="showModal = false">
            <p>Hello Vue</p>
        </modal>

        <button @click="showModal=true">Show Modal</button>

    </div>

    <script src="/assets/js/main.js"></script>
    
</body>
</html>