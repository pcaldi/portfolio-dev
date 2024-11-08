<?php
$itens = [
    ['href' => 'https://linkedin.com/in/pcaldi', 'src' => './img/linkedin.svg', 'alt' => 'LinkedIn Logo', 'name' => 'LinkedIn'],
    ['href' => 'mailto:pcaldi@gmail.com', 'src' => './img/envelope.svg', 'alt' => 'GMail Logo', 'name' => 'E-mail'],
    ['href' => 'https://github.com/pcaldi', 'src' => './img/github.svg', 'alt' => 'Github Logo', 'name' => 'Github'],
    ['href' => 'https://instagram.com/', 'src' => './img/insta.svg', 'alt' => 'Instagram Logo', 'name' => 'Instagram'],
]
?>

<div class="flex flex-col w-2/5 p-4">

    <div>
        <span class="font-Inconsolata font-normal flex items-center  justify-center text-sm text-[#BB72E9]">Contato</span>
        <h2 class="font-bold font-Asap text-xl flex items-center  justify-center">Gostou do meu trabalho?</h2>
        <span class="font-Maven-pro text-sm text-[#878EA1] flex items-center justify-center">Entre em contato ou acompanhe minhas redes socias!</span>
    </div>

    <div class="flex flex-col mx-auto p-3 rounded-md  w-2/5 mt-12">
        <?php foreach ($itens as $item): ?>
            <ul class="p-2 gap-2">
                <li class="gap-2 bg-[#292C34] p-2 rounded-md">
                    <a href="<?= $item['href'] ?>" target="_blank">
                        <div class="flex items-center justify-between gap-20">
                            <div class="flex items-center gap-2">
                                <img src="<?= $item['src'] ?>" alt="Logo linkedin">
                                <span class="font-md font-MavenPro text-md text-[#C0C4CE]"><?= $item['name'] ?></span>
                            </div>
                            <div class="flex ">
                                <img src="./img/arrowUpRight.svg" class="w-6 h-6" alt="Flecha cima direita">
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        <?php endforeach; ?>
    </div>
</div>