<?php
$work = [
    [
        "type" => "Dev",
        "link" => "https://www.youtube.com/watch?v=Yf6VAZQNc80",
        "description" => "Quick TailwindCSS tutorial"
    ],
    [
        "type" => "Design",
        "link" => "https://www.youtube.com/watch?v=kDhkXhVbjIM",
        "description" => "Walkthrough of a Vision board add-on I created for Adobe Express"
    ],
    [
        "type" => "Dev",
        "link" => "https://www.youtube.com/watch?v=ZHO5LkB3R4o",
        "description" => "Tutorial of Articulate, an open-source content authoring library I created"
    ],
    [
        "type" => "Design",
        "link" => "https://www.youtube.com/watch?v=4WCLGVsac8E",
        "description" => "Walkthrough of a UI generation plugin I created for Adobe XD"
    ],
    [
        "type" => "Dev",
        "link" => "https://vimeo.com/manage/videos/737768985",
        "description" => "Walkthrough of an open-source headless CMS library I created for Laravel"
    ],
    [
        "type" => "Dev",
        "link" => "https://www.youtube.com/watch?v=Fq0oNUWPfNI",
        "description" => "Video of me building a Chrome extension live"
    ],
]
?>
<section class="mt-10">
    <h3 class="text-3xl font-bold text-yellow-900">Tutorials</h3>

    <div class="mt-4 text-lg/loose">

        <p class="">
            When not writing code, I also enjoy making tutorials both for libraries I’ve created as well as general development and design tutorials.
        </p>

        <ul class="mt-6 flex flex-col md:grid grid-cols-2 gap-6">
            <?php
            foreach ($work as $entry) {
                echo <<<HTML
                    <li class="space-y-1 pt-4 border-t border-black/25">
                        <span class="h-6 pt-px inline-flex items-center px-2.5 text-xs font-bold uppercase tracking-widest rounded-full border border-black/30">
                            {$entry['type']}
                        </span>
                        <p>
                        {$entry['description']}
                        </p>
                        <a class="leading-none h-8 inline-flex items-center rounded text-base font-bold underline" href="{$entry['link']}" target="_blank">Watch video</a>
                    </li>
                    HTML;
            }
            ?>
        </ul>
    </div>
</section>