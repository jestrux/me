<?php
$work = [
    [
        "tech" => "Tech: Laravel(Backend), VueJS(Frontend)",
        "info" => [
            "demo" => "https://vimeo.com/manage/videos/737768985",
            "code" => "https://github.com/jestrux/pier-package",
        ]
    ],
]
?>
<section class="mt-10">
    <h3 class="text-2xl font-bold">Backend development</h3>

    <div class="mt-4 text-lg/loose">

        <p class="">
            While I'm mostly a front-end person, I do my fair share of back-end development work(mostly building CMSes) with Laravel and occasionally NodeJS. This also means that I work really well with backend developers because I’m familiar with how they work.
        </p>

        <p class="mt-4">
            Here's a headless CMS / API generation library I made for Laravel to streamline repetitive parts of creating CMS.
        </p>

        <ul class="mt-6 flex flex-col md:grid grid-cols-2 gap-6">
            <?php
            foreach ($work as $entry) {
                echo <<<HTML
                    <li class="space-y-1">
                        <p class="">
                            <a class="font-bold underline block truncate" href="{$entry['link']}" target="_blank">{$entry['link']}</a>
                        </p>
                        <p>
                        {$entry['description']}
                        </p>
                    </li>
                    HTML;
            }
            ?>
        </ul>
    </div>
</section>