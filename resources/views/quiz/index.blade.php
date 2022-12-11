{{-- app/resources/views/quiz/index.blade.php --}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Questionnaire</title>

    <!-- Inclure les CDN de Font Awesome et de Tailwind dans la page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-8 bg-blue-200 border-8 border-blue-500">
    <h1 class="text-3xl font-bold mb-8">Questionnaire</h1>

    <form method="POST" action="{{ route('quiz.checkAnswer') }}">
        @csrf

        <input type="hidden" name="question_id" value="{{ $question->id }}">

        <p>{{ $question->text }}</p>

        <label class="block mb-2">
            <input type="radio" name="answer" value="{{ $question->answer_1 }}" required>
            {{ $question->answer_1 }}
        </label>

        <label class="block mb-2">
            <input type="radio" name="answer" value="{{ $question->answer_2 }}" required>
            {{ $question->answer_2 }}
        </label>

        <label class="block mb-2">
            <input type="radio" name="answer" value="{{ $question->answer_3 }}" required>
            {{ $question->answer_3 }}
        </label>
<label class="block mb-2">
            <input type="radio" name="answer" value="{{ $question->answer_4 }}" required>
            {{ $question->answer_4 }}
        </label>

        <input type="time" id="timer" name="timer" value="00:30" min="00:00" max="00:30" readonly>

        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
            Vérifier
        </button>
    </form>

    <script>
        // Récupérer l'élément du timer
        const timerEl = document.getElementById('timer');

        // Initialiser le timer à 30 secondes
        let time = 30;

        // Mettre à jour le timer toutes les secondes
        const interval = setInterval(() => {
            // Réduire la durée du timer d'une seconde
            time -= 1;

            // Mettre à jour l'élément du timer avec la durée restante
            timerEl.value = `00:${time < 10 ? '0' : ''}${time}`;

            // Si le temps est écoulé, arrêter le timer et rediriger l'utilisateur vers la vue de résultats
            if (time <= 0) {
                clearInterval(interval);
                window.location.href = '{{ route('quiz.index') }}';
            }
        }, 1000);
    </script>
</body>
</html>