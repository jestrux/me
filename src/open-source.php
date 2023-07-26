<?php
$work = [
    [
        "title" => "Articulate(Content generation library)",
        "info" => [
            "tech" => "Tech: Preact, Rollup",
            "demo" => "https://www.youtube.com/watch?v=ZHO5LkB3R4o",
            "code" => "https://github.com/jestrux/articulate",
        ]
    ],
    [
        "title" => "Tailwind Purger(Tool for library authors to generate styles from HTML code with Tailwind classes)",
        "info" => [
            "tech" => "Electron, Vanilla Javascript",
            "preview" => "https://user-images.githubusercontent.com/8426172/140608280-3c1aa272-d4f1-4cf8-8c94-a4f0f646b675.mp4",
            "code" => "https://github.com/jestrux/tailwind-purger",
        ]
    ],
    [
        "title" => "JQuery Mini Event Calendar( jQuery plugin)",
        "info" => [
            "tech" => "JQuery",
            "code" => "https://github.com/jestrux/jquery-mini-event-calendar",
        ]
    ],
    [
        "title" => "Ladha(Music player app)",
        "info" => [
            "tech" => "Angular, Electron",
            "demo" => "https://github.com/jestrux/ladha/blob/master/screenshots/albums-screen.png?raw=true",
            "code" => "https://github.com/jestrux/ladha",
        ]
    ],
    [
        "title" => "Pisatch(Menubar app for Mac for quickly selecting images)",
        "info" => [
            "tech" => "Electron, Unsplash, Vanilla JS",
            "demo" => "https://github.com/jestrux/pisatch/blob/master/preview.gif?raw=true",
            "code" => "https://github.com/jestrux/pisatch",
        ]
    ],
]
?>
<section class="mt-10">
    <h3 class="text-3xl font-bold text-yellow-900">Open source work</h3>

    <div class="mt-4 text-lg/loose">

        <p class="">
            Here are some open-source projects I've worked on
        </p>

        <ul class="mt-6 flex flex-col md:grid grid-cols-2 gap-6">
            <?php
            foreach ($work as $entry) {
                $info = "";

                foreach ($entry['info'] as $key => $value) {
                    if ($key == "demo" || $key == "code" || $key == "preview") {
                        $content = <<<HTML
                            <a class="leading-none h-8 inline-flex items-center rounded text-base font-bold underline capitalize" href="{$value}" target="_blank">{$key}</a>
                        HTML;
                    } else {
                        $content = <<<HTML
                        <div class="w-full mb-2">
                            <span class="capitalize font-semibold">{$key}</span>: {$value}
                        </div>
                    HTML;
                    }

                    $info .= $content;
                }

                echo <<<HTML
                    <li class="space-y-1 pt-4 border-t border-black/25">
                        <p>
                        {$entry['title']}
                        </p>
                        <ul class="flex flex-wrap items-center gap-x-3">
                            {$info}
                        </ul>
                    </li>
                    HTML;
            }
            ?>
        </ul>
    </div>
</section>