<?php
$projetos = [
    [
        "stack" => ["PHP", "HTML", "JavaScript", "CSS", "ReactJS", "React-Native", "NodeJS", "Github"],
    ]
]

?>
<?php foreach($projetos as $projeto): ?>
<header class="px-32 py-40 flex items-center justify-center flex-col">
    <div class="flex ">
        <img src="https://github.com/pcaldi.png" class="h-24 border-2 border-red-400 rounded-full hover:animate-pulse" alt="Foto do usuário">
    </div>
    <div class="flex w-full items-center justify-center flex-col mt-16">
        <p class="w-full font-Inconsolata text-xl flex items-center justify-center">
            Hello World! meu nome é <span class="font-Inconsolata text-xl text-[#E3646E] px-1"> Paulo Ricardo Caldi</span> e sou
        </p>
        <p class="font-Asap text-5xl font-bold">
            Desenvolvedor PHP
        </p>
        <span class="font-Maven-pro text-sm text-[#878EA1] text-center mt-4">
            Transformo necessidades em aplicações reais, evolventes e funcionais.
            Desenvolvo sistemas através da <br> minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
        </span>


        <div class="space-x-2 mt-24">
            <?php
            $colors = ['fuchsia', 'lime', 'sky', 'rose', 'purple', 'teal', 'amber', 'indigo'];

            foreach ($projeto['stack'] as $keys => $techs): ?>
                <span class="bg-<?= $colors[$keys] ?>-400 text-<?= $colors[$keys] ?>-900 rounded-md px-2 py-1 font-semibold text-sm hover:animate-pulse">
                    <?= $techs ?>
                </span>
            <?php endforeach; ?>
        </div>

    </div>
</header>

<?php endforeach; ?>