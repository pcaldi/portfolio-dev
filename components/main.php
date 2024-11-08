<?php
$projetos = [
    [
        "title" => "Travelgram",
        "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo.",
        "stack" => ["PHP", "HTML", "JavaScript", "CSS"],
        "img" => "./img/image.png",
        "href" => "https://github.com/pcaldi"
    ],
    [
        "title" => "Tech News",
        "description" => "Homepage de um portal de notícias sobre a área de tecnologia.",
        "stack" => ["PHP", "HTML", "JavaScript", "CSS"],
        "img" => "./img/image_3.png",
        "href" => "https://github.com/pcaldi"
    ],
    [
        "title" => "Página de Turismo",
        "description" => "Página com as principais informações para quem quer viajar para Busan.",
        "stack" => ["PHP", "HTML", "JavaScript", "CSS"],
        "img" => "./img/image_6.png",
        "href" => "https://github.com/pcaldi"
    ],
    [
        "title" => "Página de receita",
        "description" => "Página com o passo a passo de uma receita para cupcakes.",
        "stack" => ["PHP", "HTML", "JavaScript", "CSS"],
        "img" => "./img/image_2.png",
        "href" => "https://github.com/pcaldi"
    ],
    [
        "title" => "Refund",
        "description" => "Um sistema para pedido e acompanhamento de reembolso.",
        "stack" => ["PHP", "HTML", "JavaScript", "CSS"],
        "img" => "./img/image_4.png",
        "href" => "https://github.com/pcaldi"
    ],
    [
        "title" => "Zingen",
        "description" => "Landing Page completa e responsiva de um aplicativo de Karaokê.",
        "stack" => ["PHP", "HTML", "JavaScript", "CSS"],
        "img" => "./img/image_5.png",
        "href" => "https://github.com/pcaldi"
    ]
]

?>
<?php foreach ($projetos as $projeto): ?>
    <div class="flex flex-wrap w-2/5 p-4 ">
        <div class="flex p-2 rounded-md gap-2 bg-[#292C34]  ">

            <div class="">
                <a href="<?= $projeto['href'] ?>" target="_blank">
                    <img class=" h-36 w-56 hover:animate-pulse rounded-md" src="<?= $projeto['img'] ?>">
                </a>
            </div>
            <div class="flex flex-col items-start justify-center gap-2">
                <h3 class="font-Asap text-md font-bold"><?= $projeto['title'] ?></h3>
                <span class="font-Maven-pro text-sm text-[#878EA1]"><?= $projeto['description'] ?></span>


                <div class="space-x-1 mt-4 ">
                    <?php
                    $colors = ['fuchsia', 'sky', 'rose', 'amber'];

                    foreach ($projeto['stack'] as $keys => $techs): ?>
                        <span class="bg-<?= $colors[$keys] ?>-400 text-<?= $colors[$keys] ?>-900 rounded-md px-1 py-1 font-semibold text-xs">
                            <?= $techs ?>
                        </span>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>

<?php endforeach; ?>