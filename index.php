<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <title>Portfolio Dev</title>
</head>

<body class="bg-[#16181D] text-white w-full ">
    <div class="mx-auto w-full bg-[url('/img/background_header.png')] bg-center bg-cover">
        <?php include('./components/header.php'); ?>
    </div>

    <main class="mx-auto max-w-screen-lg">
        <p class="font-Inconsolata text-sm text-[#E3646E] text-center">Meu Trabalho</p>
        <h3 class="font-Asap text-2xl font-bold mb-14 text-center">Veja os projetos em destaque</h3>
        <div class="flex flex-wrap mx-auto max-w-screen-lg items-center justify-center ">
            <?php include('./components/main.php'); ?>
        </div>
    </main>

    <div class="mx-auto w-full bg-[url('/img/background_footer.png')] bg-center bg-cover">
        <footer class="px-32 py-40 flex items-center justify-center flex-col">
        <?php include('./components/footer.php'); ?>
        </footer>
    </div>
</body>

</html>