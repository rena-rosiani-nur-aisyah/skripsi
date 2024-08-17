<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forward Chaining Berbasis Pertanyaan</title>
</head>
<body>
    <h1>Sistem Pakar Sederhana</h1>

    @if($finalResult)
        <p>{{ $finalResult }}</p>
    @else
        <p>{{ $nextQuestion }}</p>

        <form action="{{ url('/forwardchain') }}" method="GET">
            <input type="hidden" name="step" value="{{ $step}}">
            <input type="hidden" name="dataq" value="{{ json_encode($dataq)}}">
            <label>
                <input type="radio" name="answer" value="yes" required> Ya
            </label>
            <label>
                <input type="radio" name="answer" value="no" required> Tidak
            </label>
            <br><br>
            <button type="submit">Jawab</button>
        </form>
    @endif

    <script>
        let dataq = <?php echo json_encode($dataq);?>;
        let data = <?php echo json_encode($data);?>;
        console.log(data);
        console.log(dataq);
    </script>
</body>
</html>
