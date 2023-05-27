<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body style="display:flex; flex-direction: column; min-height: 100vh">
        <header>
            @include('components/navbar')
        </header>
        <main style="flex: 1" id="main-section">
            @yield('content')
        </main>
        <footer>
            @include('components/footer')
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
<script>
    const radioButtons = [
        document.getElementById('star_5'),
        document.getElementById('star_4'),
        document.getElementById('star_3'),
        document.getElementById('star_2'),
        document.getElementById('star_1')
    ];

    const hiddenInput = document.getElementById('score');

    radioButtons.forEach(radioButton => {
    radioButton.addEventListener('click', function() {
            if (this.checked) {
                hiddenInput.value = this.value;
            }
        });
    });
</script>
</html>
