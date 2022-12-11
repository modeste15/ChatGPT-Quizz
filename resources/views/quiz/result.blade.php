{{-- app/resources/views/quiz/result.blade.php --}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Résultats du questionnaire</title>

    <!-- Inclure les CDN de Font Awesome et de Tailwind dans la page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-8 bg-blue-200 border-8 border-blue-500">
    <h1 class="text-3xl font-bold mb-8">Résultats du questionnaire</h1>

    <div class="flex items-center justify-center mb-8">
        @if ($correct)
            <i class="fas fa-check-circle text-green-500 mr-4"></i>
        @else
            <i class="fas fa-times-circle text-red-500 mr-4"></i>
        @endif

        <p>Votre réponse était {{ $correct ? 'correcte' : 'incorrecte' }}. La bonne réponse était : {{ $question->correct_answer }}.<p>
    </div>

    <a href="{{ route('quiz.index') }}" class="bg-black hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        Rejouer
    </a>
</body>
</html>
